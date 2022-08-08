@extends('layouts.user')

@section('content')
<section id="hero" class="">
        
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('asset/img/hero-img.png') }}" class="" alt="">

                    
                </div>
                
            </div>
        </div>

       
    </section>  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <br>
                <div class="card">
                    <div class="card-header bg-primary">
                        Data Absensi
                        <a href="{{ route('absen.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body ">
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
                                    @foreach ($absen as $data)
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


    