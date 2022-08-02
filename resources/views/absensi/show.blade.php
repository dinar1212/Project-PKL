@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        Data Pegawai
                    </div>
                    <div class="card-body bg-dark">
                        <div class="mb-3">
                            <label class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" name="id_pegawai" value="{{ $absensi->id_pegawai }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="text" class="form-control" name="tanggal" value="{{ $absensi->tanggal }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jam Masuk</label>
                            <input type="text" class="form-control" name="jam_masuk"
                                value="{{ $absensi->jam_masuk }}" readonly>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="id_jabatan" value="{{ $absensi->jabatan->jabatan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <input type="text" class="form-control" name="status" value="{{ $absensi->status }}"
                                readonly>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $absensi->keterangan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('absensi.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
