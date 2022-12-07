    <nav id="navbar" class="navbar">

        <ul>
            <li><a class="nav-link " href="/home">Home</a></li>
            {{-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
            <li><a class="nav-link" href="{{ url('/member/absenpegawai') }}">Absen Masuk</a></li>
            <li><a class="nav-link" href="{{ url('/member/absen-pegawai') }}">Absen Keluar</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/member/data_laporan') }}">Data laporan</a></li>



            <li><a class="" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
    </header><!-- End Header -->
