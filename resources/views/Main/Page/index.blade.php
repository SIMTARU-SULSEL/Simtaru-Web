@extends('Main.Layout.MainWebLayout')

@section('Main')

<nav>
  <div class="active-page">
    <a class="active"href="#">Home</a>
  </div>
  <div class="nav-wrapper">

    <ul class="nav-menu ">
      <li class="links"><a class="active" href="{{url('/')}}">Home</a></li>
      <li class="links"><a href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
      <li class="links"><a href="{{url('/regulasi')}}">Regulasi</a></li>
      <li class="links"><a href="{{url('/publikasi')}}">Publikasi</a></li>
      <li class="links"><a href="{{url('/tanggapan')}}">Tanggapan</a></li>
      <li class="links"><a href="{{url('/mitra')}}">Mitra</a></li>
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

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL::asset('/assets/Main/images/unsplash_KmRfFNUio5w.png')}}" class="d-block w-100" alt="...">
      <div class="logo-sulsel">
        <img src="{{URL::asset('/assets/Main/images/Logo-simtaru.svg')}}" alt="">
      </div>
    </div>
    @foreach ($news_datas as $news)
    <div class="carousel-item">
      <img src="{{$news->data()['urlGambar'] }}" class="d-block w-100" alt="...">
    </div>
    @endforeach
    
    {{-- <div class="carousel-item">
      <img src="/src/images/slider-1.png" class="d-block w-100" alt="...">
    </div> --}}
  </div>
  <div class="carousel-control">
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span aria-hidden="true"><i class="fa-solid fa-circle-arrow-left"></i></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span aria-hidden="true"><i class="fa-solid fa-circle-arrow-right"></i></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<section id="hero">
  <div class="text-center">
    {{-- <div class="hero-logo">
      <img src="{{URL::asset('/assets/Main/images/logo-simtaru.svg')}}" alt="">
    </div> --}}
    <div class="hero-content">
      <h1>Jelajahi Tata Ruang Sulawesi Selatan</h1>
      <p>
        Semuanya lebih mudah dengan adanya aplikasi SIMTARU oleh Bidang Tata Ruang Dinas Pekerjaan Umum dan Tata Ruang Sulawesi Selatan.
      </p>
      <a href="https://play.google.com/store/apps/details?id=com.app.simtaru_android"><button>Download</button></a>
    </div>
    <div class="hero-map">
      <img src="{{URL::asset('/assets/Main/images/hero-map.png')}}" alt="">
    </div>
    <div class="hero-content-map">
      <h1>Penasaran? Silahkan coba di web kami!</h1>
      <button>Penelusuran Tata Ruang</button>
    </div>
  </div>
</section>


<section id="overview">
  <div class="text-center">
    <h1>Overview</h1>
    <div class="statistics-wrapper">
      <span>{{$incviews->count()}}</span>
      Total<br>Kunjungan
    </div>
  </div>
</section>

<section id="about-homepage">
  <div class="about-content">
    <h1>Mengenai <span>SIMTARU</span></h1>
    <div class="row">
      <div class="col-7">
        
        {!!$datas->data()['deskripsiWeb']!!}
      </div>
      <div class="col-5">
        <div class="profile">
          <div class="image-card text-center">
            <img src="{{$datas->data()['imageUrl'] }}" alt="">
          </div>
          <div class="text-card">
            <h5>{{$datas->data()['nama'] }}</h5>
            <p>{{$datas->data()['jabatan'] }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-7">
        {{-- <h1>Mengenai SIMTARU</h1> --}}
        {!!$datas2->data()['deskripsiWeb']!!}
      </div>
      <div class="col-5">
        <div class="profile">
          <div class="image-card text-center">
            <img src="{{$datas2->data()['imageUrl'] }}" alt="">
          </div>
          <div class="text-card">
            <h5>{{$datas2->data()['nama'] }}</h5>
            <p>{{$datas2->data()['jabatan'] }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-about">
      <a  href="{{url('/mitra')}}"">Ketahui lebih lanjut</a>
    </div>
  </div>
</section>

<section id="about-homepage-mobile">
  <div class="about-content">
    <h1>Mengenai <span>SIMTARU</span></h1>
    <div class="profile">
      <div class="image-card text-center">
        <img src="{{$datas->data()['imageUrl'] }}" alt="">
      </div>
      <div class="text-card">
        <h5>{{$datas->data()['nama'] }}</h5>
        <p>{{$datas->data()['jabatan'] }}</p>
      </div>
    </div>
    <div class="wrapper-content">
      {!!$datas->data()['deskripsiWeb']!!}

    </div>
    <div class="profile">
      <div class="image-card text-center">
        <img src="{{$datas2->data()['imageUrl'] }}" alt="">
      </div>
      <div class="text-card">
        <h5>{{$datas2->data()['nama'] }}</h5>
        <p>{{$datas2->data()['jabatan'] }}</p>
      </div>
    </div>
    <div class="wrapper-content">
      {!!$datas2->data()['deskripsiWeb']!!}
    </div>
    <div class="btn-about">
      <a  href="{{url('/mitra')}}"">Ketahui lebih lanjut</a>
    </div>
  </div>
</section>

    <!-- Berita Terkini -->
    <div id="berita">
      <div class="container-card">
        <div class="title">
          <ul>
            <li>
              <h1>Berita Terkini</h1>
            </li>
            <li>
              <a href="{{url('/berita')}}">Lihat Berita</a>
            </li>
          </ul>
        </div>
        <div class="title-mobile">
          <ul>
            <li>
              <h1>Berita <span>Terkini</span></h1>
            </li>
            <li class="lihat">
              <a href="{{url('/berita')}}">Lihat Berita</a> <i class="fa-solid fa-angle-right"></i>
          </ul>
        </div>
        <div class="card-wrapper snaps-inline">
          @forelse ($news_datas as $news)
          <div class="card">
            <img src="{{$news->data()['urlGambar'] }}" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="min-content">
                <h5 class="card-title">{{$news->data()['judul'] }}</h5>
              </div>
              <p class="card-text"><span>{{date('j F Y', strtotime($news->data()['tanggal']))}}</span></p>
              <form class="btn btn-primary button" action="{{url("/detail/{$news->data()['judul']}")}}">
                <input type="hidden" name="date" value="{{$news->data()['tanggal']}}">
                <button class="btn btn-primary button">Baca</button>
              </form>
            </div>
          </div>
          @empty
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Maaf,data yang anda cari tidak dapat kami temukan</h5>
            </div>
          </div>
          @endforelse
        </div>
      </div>
    </div>

<!-- card -->
<div class="container-card" id="card">
  <h1 class="text-center">Kebijakan <span>Tata Ruang</span></h1>
  <div class="container" >
    <div class="row row-cols-1 row-cols-md-2 g-4" id="scroll-wrapper">
    <div class="col d-flex justify-content-center" >
        <div class="col" id="horizontal">
          <div class="card">
            <img src="{{URL::asset('/assets/Main/images/artikel-6.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pengendalian Tata Ruang</h5>
              <p class="card-text" >Pengendalian pemanfaatan ruang adalah upaya untuk mewujudkan tertib tata ruang. Pengendalian bisa dilakukan dengan cara menerapkan zonasi, perizinan, pemberian insentif dan disinsentif serta sanksi.</p>
              <!-- {{-- <a class="btn btn-primary button" href="#" role="button">Baca</a> --}} -->
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div class="col" id="horizontal">
          <div class="card">
            <img src="{{URL::asset('/assets/Main/images/artikel-1.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Penataan tata ruang</h5>
              <p class="card-text" >Berdasarkan pada UU No. 26 Tahun 2007, Penataan ruang adalah suatu sistem proses perencanaan tata ruang, pemanfaatan ruang, dan pengendalian pemanfaatan ruang.</p>
              <p class="card-text" >Pelaksanaan penataan ruang meliputi perencanaan tata ruang, pemanfaatan ruang serta pengendalian pemanfaatan ruang.</p>
              <!-- {{-- <a class="btn btn-primary button" href="#" role="button">Baca</a> --}} -->
            </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center">
        <div class="col" id="horizontal">
        <div class="card">
          <img src="{{URL::asset('/assets/Main/images/artikel-5.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Perencanaan Tata Ruang</h5>
            <p class="card-text">Perencanaan tata ruang adalah suatu proses untuk menentukan struktur dan pola ruang yang meliputi penyusunan dan penetapan rencana tata ruang.</p>
            <p class="card-text" >Rencana umum tata ruang dibedakan berdasarkan wilayah administrasi pemerintah, sebab kewenangan dalam mengatur pemanfaatan ruang dibagi menjadi:</p>
            <ol>
              <li>Rencana Tata Ruang Wilayah Nasional</li>
              <li>Rencana Tata Ruang Provinsi</li>
              <li>Rencana Tata Ruang Wilayah Kabupaten/Kota</li>
            </ol>
            <!-- {{-- <a class="btn btn-primary button" href="#" role="button">Baca</a> --}} -->
          </div>
          </div>
        </div>
      </div>
      <div class="col d-flex justify-content-center" >
        <div class="col" id="horizontal">
        <div class="card">
          <img src="{{URL::asset('/assets/Main/images/artikel-7.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pemanfaatan Tata Ruang</h5>
            <p class="card-text">Pemanfaatan ruang adalah upaya untuk mewujudkan struktur ruang dan pola ruang sesuai dengan rencana tata ruang melalui penyusunan dan pelaksanaan program beserta pembiayaannya.</p>
            <p class="card-text" >Pemanfaatan ini dilakukan dengan cara melaksanakan program pemanfaatan ruang serta pembiayaannya.</p>
            <p class="card-text" >Melaksanakan program yaitu segala aktivitas pembangunan baik yang dilaksanakan oleh pemerintah maupun masyarakat - masyarakat agar dapat terwujud rencana tata ruang.</p>
            <!-- {{-- <a class="btn btn-primary button" href="#" role="button">Baca</a> --}} -->
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Mobile Apps Ads -->
<div class="mobile-apps" id="mobile-apps">
  <div class="mobile-apps-bg">
    <div class="container">
      <div class="card" >
        <div class="card-information">
          
          <div class="card-body">
            <h1 class="">Ayo <i>download</i> aplikasinya!</h1>
            <p class="">Sistem Informasi Perencanaan, Pemanfaatan, dan Pengendalian Tata Ruang Sulawesi Selatan</p>
          </div>
          
          <div class="card-image text-center" >
            <div class="card-phone">
              
          <img src="{{URL::asset('/assets/Main/images/Front 1.png')}}" alt="">
            </div>
            <div class="card-badge">
              <a href="" target="_blank">
                <button class="btn-download google-play"></button>
              </a>
              <!-- <img src="src/images/google-play-badge 1.svg" alt=""> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addonStyle')
  <link rel="stylesheet" href="{{URL::asset('assets/Main/style/index.css')}}">

  <!-- SCRIPT -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush