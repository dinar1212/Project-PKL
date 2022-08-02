@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header bg-primary">
                        Data Absensi
                        <a href="{{ route('absensi.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body bg-dark">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable" border="1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($absensi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->pegawai->nama_pegawai }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tanggal)) }}</td>
                                            <td>{{ $data->jam_masuk }}</td>
                                            <td>{{ $data->jabatan->jabatan }}</td>
                                            <td>{{ $data->status }}</td>
                                            <td>{{ $data->keterangan }}</td>

                                            {{-- <td>{{ $data->agama }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                                            <td>{{ $data->alamat }}</td> --}}
                                            {{-- <fieldset> --}}
                                                
                                                   
                                                    {{-- @php $keterangan = $total / count($isi['mata']) @endphp --}}


                                                    {{-- @php
                                                        $grade;
                                                        if ($keterangan <= 08) {
                                                            $grade = 'A';
                                                        } elseif ($keterangan >= 08)) {
                                                            $grade = 'B';
                                                        } else {
                                                            $grade = 0;
                                                        }
                                                    @endphp
                                                    <br>
                                                    Grade : {{ $grade }} <br>
                                                    <hr>
                                                @endforeach

                                            </fieldset> --}}


                                            <td>
                                                <form action="{{ route('absensi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('absensi.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('absensi.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Show
                                                    </a> |

                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
