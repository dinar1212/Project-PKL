@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header bg-primary">
                        Data Pegawai
                        <a href="{{ route('pegawai.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body btn btn-dark">
                        <div class="table">
                            <table class="table align-middle" id="dataTable" border="1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pegawai</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($pegawai as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_pegawai }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                                            <td>{{ $data->jenis_kelamin }}</td>
                                            <td>{{ $data->alamat }}</td>
                                            <td>{{ $data->jabatan->jabatan }}</td>

                                            {{-- <td>{{ $data->agama }}</td>
                                            <td>{{ date('d M Y', strtotime($data->tgl_lahir)) }}</td>
                                            <td>{{ $data->alamat }}</td> --}}
                                            <td>
                                                <form action="{{ route('pegawai.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('pegawai.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Edit
                                                    </a> |
                                                    <a href="{{ route('pegawai.show', $data->id) }}"
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
