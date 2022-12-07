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
                                        <th>NIP</th>
                                        <th>Nama Pegawai</th>
                                        <th>Tanggal</th>
                                        <th>Jabatan</th>
                                        <th>Jam Masuk</th>
                                         <th>Status</th>
                                        <th>Jam Keluar</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($absensi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->user->pegawai->nip }}</td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>{{ date($data->date) }}</td>
                                            <td>{{ $data->user->pegawai->jabatan->jabatan }}</td>
                                            <td>{{ $data->time_in }}</td>
                                            <td>{{ $data->time_out }}</td>
                                              <?php
                                        if ($data->time_in > 07.0) {
                                            $keterangan = 'Terlambat';
                                        } else {
                                            $keterangan = 'Tepat Waktu';
                                        }
                                        ?>
                                        <td>{{ $keterangan }}</td>
                                        <td>{{ $data->time_out }}</td>
                                         <?php
                                        if ($data->time_out > 12.0) {
                                            $keterangan = 'Terlambat';
                                        } else {
                                            $keterangan = 'Tepat Waktu';
                                        }
                                        ?>
                                         <td>{{ $keterangan }}</td>

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
