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
                    <div class="card-header" style="background-color: rgb(53, 88, 121)" >Data Absensi </div>
                        <div class="card-body ">
                            <form action="{{ route('absensi.index') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Pegawai</label>
                                    <select name="id_pegawai" class="form-control @error('id_pegawai') is-invalid @enderror"
                                        id="">
                                        @foreach ($pegawai as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_pegawai }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_pegawai')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                               

                                <div class="mb-3">
                                    <label class="form-label">Jabatan</label>
                                    <select name="id_jabatan" class="form-control @error('id_jabatan') is-invalid @enderror"
                                        id="">
                                        @foreach ($jabatan as $data)
                                            <option value="{{ $data->id }}">{{ $data->jabatan }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status</label>
                                    <br>
                                    <select class="form-control @error('status') is-invalid @enderror" name="status">
                                        <option selected>Pilih Salah Satu</option>
                                        <option value="Hadir">Hadir</option>
                                        <option value="Alfa">Alfa</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Ijin">Ijin</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Keterangan</label>
                                    <input type="text" class="form-control  @error('keterangan') is-invalid @enderror"
                                        name="keterangan">
                                    @error('keterangan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                {{-- <div class="mb-3">
                                <label class="form-label">Jam</label>
                                <textarea class="form-control  @error('alamat') is-invalid @enderror" name="alamat"></textarea>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                                <div class="mb-3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-info" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    