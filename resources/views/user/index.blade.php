@extends('layouts.user')

@section('content')
   
 <section id="hero" class="">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Selamat Datang di Website</h1>
                    <h1>Sistem Absensi Pegawai</h1>
                    <h2>PT.Albaqqi</h2>
                    {{-- <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto"></a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div> --}}
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('asset/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section>


                       <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">
                

                <div class="section-title">
                    <h2>Team</h2>
                    <p>PT.Albaqqi adalah perusahaan yang bergerak dibidang IT, nama perusahaan ini </p>
                        <p> diambil dari nama pemilik perusahaan yaitu Dinar (Albaqqi) tidak haynya itu perusahaan ini</p> 
                        <p>juga didirikan oleh pihak lainya, inilah profil petinggi perusahaan.   </p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('asset/img/team/tim 1.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Dinar Albaqqi</h4>
                                <span>Direktur</span>
                                <p>Kerja keras Nyaman Aman </p>
                                <div class="social">
                                     <a href="https://twitter.com/login?lang=id"><i class="ri-twitter-fill"></i></a>
                                    <a href="https://id-id.facebook.com/"><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/?hl=id"><i class="ri-instagram-fill"></i></a>
            
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('asset/img/team/tim 2.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                               <h4>Dimas Ramdani</h4>
                                <span>Manager</span>
                                <p>Kerja keras Nyaman Aman </p>
                                <div class="social">
                                     <a href="https://twitter.com/login?lang=id"><i class="ri-twitter-fill"></i></a>
                                    <a href="https://id-id.facebook.com/"><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/?hl=id"><i class="ri-instagram-fill"></i></a>
            
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('asset/img/team/tim 3.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                               <h4>Surya Dwinata</h4>
                                <span>HRD</span>
                                <p>Kerja keras Nyaman Aman </p>
                                <div class="social">
                                     <a href="https://twitter.com/login?lang=id"><i class="ri-twitter-fill"></i></a>
                                    <a href="https://id-id.facebook.com/"><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/?hl=id"><i class="ri-instagram-fill"></i></a>
            
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('asset/img/team/tim 4.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                              <h4>Wildan M</h4>
                                <span>Marketing</span>
                                <p>Kerja keras Nyaman Aman </p>
                                <div class="social">
                                     <a href="https://twitter.com/login?lang=id"><i class="ri-twitter-fill"></i></a>
                                    <a href="https://id-id.facebook.com/"><i class="ri-facebook-fill"></i></a>
                                    <a href="https://www.instagram.com/?hl=id"><i class="ri-instagram-fill"></i></a>
            
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
      

               

                           

    </main><!-- End #main -->

   

                
                </div>
            </div>
        </div>
    </div>
@endsection
