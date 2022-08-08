@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/flash')
                <div class="card">
                    

                    <div class="card-body bg-dark">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable" border="1">
                                <form action="{{ route('absenmasuk') }}" method="post">
                                    @csrf
                                    <tr>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Absen Masuk</button>
                                        </td>
                                    </tr>
                                </form>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
