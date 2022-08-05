@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header bg-primary" >Data Absensi </div>
                        <div class="card-body bg-dark">
                            <form action="{{ route('absen.store') }}" method="post">
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
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
