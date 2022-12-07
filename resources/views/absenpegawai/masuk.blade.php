@extends('layouts.user')

@section('content')
    <section id="hero" class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1><span id="jam" style="font-size:24" class="text-white"></span></h2>
                        <h1>Silahkan Absen Masuk</h1>
                        @include('layouts/flash')

                        <div class="table-responsive">

                            <form action="{{ route('absenmasuk') }}" method="post">
                                @csrf
                                <tr>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Absen Masuk</button>
                                    </td>
                                </tr>
                            </form>


                        </div>

                        <?php
                        date_default_timezone_set('Asia/jakarta');
                        ?>


                        <script type="text/javascript">
                            window.onload = function() {
                                jam();
                            }

                            function jam() {
                                var e = document.getElementById('jam'),
                                    d = new Date(),
                                    h, m, s;
                                h = d.getHours();
                                m = set(d.getMinutes());
                                s = set(d.getSeconds());

                                e.innerHTML = h + ':' + m + ':' + s;

                                setTimeout('jam()', 1000);
                            }

                            function set(e) {
                                e = e < 10 ? '0' + e : e;
                                return e;
                            }
                        </script>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('asset/img/why-us.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">




                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
