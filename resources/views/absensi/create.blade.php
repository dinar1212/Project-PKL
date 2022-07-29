@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header">
                        Data Pegaawai
                    </div>
                    <div class="card-body">
                        <form action="{{ route('absensi.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Pegawai</label>
                                <input type="text" class="form-control  @error('nama_pegawai') is-invalid @enderror"
                                    name="nama_pegawai">
                                @error('nama_pegawai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal </label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam Masuk</label>
                                <input type="datetime" class="form-control  @error('jam_masuk') is-invalid @enderror"
                                    name="jam_masuk">
                                @error('jam_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <select class="form-select @error('jabatan') is-invalid @enderror" name="jabatan">
                                    <option selected>Pilih Jabatan</option>
                                    <option value="Direktur">Direktur</option>
                                    <option value="Manager">Manager</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Karywan">Karywan</option>
                                    <option value="OB">OB</option>

                                </select>
                                @error('agama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control  @error('jabatan') is-invalid @enderror"
                                    name="jabatan">
                                @error('jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control  @error('status') is-invalid @enderror"
                                    name="status">
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
