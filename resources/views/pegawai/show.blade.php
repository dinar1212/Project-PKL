@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Pegawai
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" readonly>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Nama Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}" readonly>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $pegawai->jenis_kelamin }}" readonly>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ $pegawai->alamat }}" readonly>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="id_jabatan" value="{{ $pegawai->id_jabatan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('pegawai.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
