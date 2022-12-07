@extends('layouts.user')


@section('content')
    <section id="hero" class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Data Laporan Absensi</h1>
                    <h1>Masuk - Pulang</h1>
                    <h2>PT.Albaqqi</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('asset/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')



                <div class="card-body ">
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
