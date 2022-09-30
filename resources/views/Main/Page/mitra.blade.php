@extends('Main.Layout.MainWebLayout')

@section('Main')
<!-- <noscript>
      <strong>We're sorry but <%= htmlWebpackPlugin.options.title %> doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div> -->

    <nav>
      <div class="active-page">
        <a class="active"href="#">Mitra</a>
      </div>
      <div class="nav-wrapper">

        <ul class="nav-menu ">
          <li class="links"><a href="{{url('/')}}">Home</a></li>
          <li class="links"><a href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
          <li class="links"><a href="{{url('/regulasi')}}">Regulasi</a></li>
          <li class="links"><a href="{{url('/publikasi')}}">Publikasi</a></li>
          <li class="links"><a href="{{url('/tanggapan')}}">Tanggapan</a></li>
          <li class="links"><a class="active" href="{{url('/mitra')}}">Mitra</a></li>
          <li class="links"><a href="{{url('/berita')}}">Berita</a></li>
          <li class="button-pendaftaran">
            <form action="/pendaftaran" method="GET">
              @csrf
              <button class="button">Pendaftaran</button>
            </form>
          </li>
        </ul>

        <div class="menu-toggle">
          <input type="checkbox">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>


    <section id="hero">
      <div class="text-center">
        <div class="hero-logo">
          <img src="{{URL::asset('/assets/Main/images/logo-pupr.png')}}" alt="">
        </div>
        <div class="hero-content">
          <h1>Kenali kami lebih dalam </h1>
          <div class="hero-map">
            <img src="{{URL::asset('/assets/Main/images/artikel-4.png')}}" alt="">
          </div>
          <p>
            Semuanya lebih mudah dengan adanya aplikasi SIMTARU oleh Bidang Tata Ruang Dinas Pekerjaan Umum dan Tata Ruang Sulawesi Selatan.
          </p>
        </div>
        <div class="hero-content-new">
          <h1>Bersama</h1>
          <div class="intro-wrapper">
            <ul>
              <li>
                <img src="{{$kadis_datas->data()['imageUrl']}}" alt="">
                <div class="text text-center">
                  <h5>{{$kadis_datas->data()['nama']}}</h5>
                  <p>{{$kadis_datas->data()['jabatan']}}</p>
                </div>
              </li>
              <li>
                <img src="{{$khabid_datas->data()['imageUrl']}}" alt="">
                <div class="text">
                  <h5>{{$khabid_datas->data()['nama']}}</h5>
                  <p>{{$khabid_datas->data()['jabatan']}}</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="mitra">
      <div class="mitra-wrapper">
            <!-- card -->
    <div id="card">
      <div class="container-card" >
        <h1 class="text-center">Mitra Kami</h1>
        <div class="row row-cols-2 row-cols-md-3 row-cols-1 g-4" id="scroll-wrapper">
          @forelse ($datas as $item)
            <div class="col d-flex justify-content-center" id="horizontal">
              <div class="card">
                <a href="{{$item->data()['linkMitra']}}" style="text-decoration: none" class="card-text">
                  <img src="{{$item->data()['imageUrl']}}" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">{{$item->data()['namaMitra']}}</h5>
                    
                  </div>
                </a>
              </div>
            </div>
          @empty
              Maaf, data yang anda cari tidak dapat kami temukan
          @endforelse
        </div>
        {{-- <div class="row row-cols-2 row-cols-md-3 row-cols-1 g-4" id="scroll-wrapper">
          <div class="col d-flex justify-content-center" id="horizontal">
            <div class="card">
              <img src="{{URL::asset('/assets/Main/images/artikel-1.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ir. Hj. Astina Abbas, MT.</h5>
                <p class="card-text">Kepala Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selatan</p>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center" id="horizontal">
            <div class="card">
              <img src="{{URL::asset('/assets/Main/images/artikel-2.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ir. Hj. Astina Abbas, MT.</h5>
                <p class="card-text">Kepala Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selatan</p>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center" id="horizontal">
            <div class="card">
              <img src="{{URL::asset('/assets/Main/images/artikel-3.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ir. Hj. Astina Abbas, MT.</h5>
                <p class="card-text">Kepala Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selatan</p>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center" id="horizontal">
            <div class="card">
              <img src="{{URL::asset('/assets/Main/images/artikel-4.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ir. Hj. Astina Abbas, MT.</h5>
                <p class="card-text">Kepala Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selata</p>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center" id="horizontal">
            <div class="card">
              <img src="{{URL::asset('/assets/Main/images/artikel-3.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ir. Hj. Astina Abbas, MT.</h5>
                <p class="card-text">Kepala Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selatan</p>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center" id="horizontal">
            <div class="card">
              <img src="{{URL::asset('/assets/Main/images/artikel-4.png')}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Ir. Hj. Astina Abbas, MT.</h5>
                <p class="card-text">Kepala Dinas Pekerjaan Umum dan Tata Ruang Provinsi Sulawesi Selatan This content is..</p>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
      </div>
    </section>
@endsection

@push('addonStyle')
<link rel="stylesheet" href="{{URL::asset('assets/Main/style/mitra.css')}}">

<!-- font awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
@endpush
