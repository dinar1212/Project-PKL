@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header bg-primary">
                        Data Absensi
                        <a href="{{ route('absen.create') }}" class="btn btn-sm btn-primary" style="float: right">
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
                                    @foreach ($absen as $bebas)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $bebas->pegawai->nama_pegawai }}</td>
                                            <td>{{ date('d M Y', strtotime($bebas->tanggal)) }}</td>
                                            <td>{{ $bebas->jam_masuk }}</td>
                                            <td>{{ $bebas->jabatan->jabatan }}</td>
                                            <td>{{ $bebas->status }}</td>
                                            <td>{{ $bebas->keterangan }}</td>

                                            {{-- <td>{{ $bebas->agama }}</td>
                                            <td>{{ date('d M Y', strtotime($bebas->tgl_lahir)) }}</td>
                                            <td>{{ $bebas->alamat }}</td> --}}
                                            {{-- <fieldset> --}}


                                            {{-- @php $keterangan = $total / count($isi['mata']) @endphp --}}

                                            {{-- @php
                                                        $keterangan;
                                                        if ($jam_masuk <= 0800) {
                                                            $keterangan = 'A';
                                                        } elseif ($jam_masuk >= 0800)) {
                                                            $keterangan = 'B';
                                                        } else {
                                                            $keterangan = 0;
                                                        }
                                                    @endphp
                                                    <br>
                                                    Keterangan : {{ $keterangan }} <br>
                                                    <hr>
                                                @endforeach --}}



                                            <td>
                                                <form action="{{ route('absen.destroy', $bebas->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('absen.edit', $bebas->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('absen.show', $bebas->id) }}"
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
