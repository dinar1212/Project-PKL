@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header  bg-primary">
                        Data Absensi
                    </div>
                    <div class="card-body bg-dark">
                        <form action="{{ route('absensi.update', $absensi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Pegawai</label>
                                <select name="id_pegawai" id=""
                                    class="form-control @error('nama_pegawai') is-invalid @enderror">
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
                                <label class="form-label">Nama Jabatan</label>
                                <select name="id_jabatan" id=""
                                    class="form-control @error('id_jabatan') is-invalid @enderror">
                                    @foreach ($jabatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->jabatan }}</option>
                                    @endforeach
                                </select>
                                @error('id_pegawai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                  <div class="mb-3">
                                <label class="form-label">Tanggal </label>
                                <input type="date" class="form-control  @error('tanggal') is-invalid @enderror"
                                    name="tanggal" value="{{ $absensi->tanggal }}">
                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jam Masuk</label>
                                <input type="datetime" class="form-control  @error('jam_masuk') is-invalid @enderror"
                                    name="jam_masuk" value="{{ $absensi->jam_masuk }}">
                                @error('jam_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control  @error('status') is-invalid @enderror"
                                    name="status" value="{{ $absensi->status }}">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control  @error('keterangan') is-invalid @enderror"
                                    name="keterangan" value="{{ $absensi->keterangan }}">
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
