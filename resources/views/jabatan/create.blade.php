@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    <div class="card-header bg-primary">
                        Data Jabatan
                    </div>
                    <div class="card-body bg-dark">
                        <form action="{{ route('jabatan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Jabatan</label>
                                <input type="text" class="form-control  @error('jabatan') is-invalid @enderror"
                                    name="jabatan">
                                @error('jabatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

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
