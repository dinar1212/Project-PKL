@extends('layouts.admin')

@section('content')
    @include('layouts/flash')


    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3></h3>

                    <p>Selamat Datang Admin</p>
                </div>
                <div class="icon">
                    {{-- <i class="ion ion-person-add"></i> --}}
                </div>
              
            </div>
        </div>
      
        <!-- ./col -->
    </div>
@endsection
