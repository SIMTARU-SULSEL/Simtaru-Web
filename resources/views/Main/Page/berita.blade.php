@extends('Main.Layout.MainWebLayout')

@section('Main')
<nav>
  <div class="active-page">
    <a class="active"href="#">Berita</a>
  </div>
  <div class="nav-wrapper">

    <ul class="nav-menu ">
      <li class="links"><a  href="{{url('/')}}">Home</a></li>
      <li class="links"><a href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
      <li class="links"><a href="{{url('/regulasi')}}">Regulasi</a></li>
      <li class="links"><a href="{{url('/publikasi')}}">Publikasi</a></li>
      <li class="links"><a href="{{url('/tanggapan')}}">Tanggapan</a></li>
      <li class="links"><a href="{{url('/mitra')}}">Mitra</a></li>
      <li class="links"><a class="active" href="{{url('/berita')}}">Berita</a></li>
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

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button> --}}
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active "style="height: 100vh;">
      @foreach ($datas as $item)
        @if ($loop->first)
          {{-- <div class="carousel-item"> --}}
            <a href="{{url("/detail/{$item->data()['judul']}")}}">
              <img src="{{$item->data()['urlGambar']}}" class="d-block w-100" alt="...">
            </a>
            <a href="{{url("/detail/{$item->data()['judul']}")}}">
              <div class="carousel-caption title-berita">
                <h1>{{$item->data()['judul']}}</h1>
              </div>
            </a>
          {{-- </div> --}}
        @else
          @break
        @endif
      @endforeach
    </div> 
    @foreach ($datas as $item)
      @if ($loop->first)
          @continue
      @endif
      <div class="carousel-item">
        <a href="{{url("/detail/{$item->data()['judul']}")}}">
          <img src="{{$item->data()['urlGambar']}}" class="d-block w-100" alt="...">
        </a>
        <a href="{{url("/detail/{$item->data()['judul']}")}}">
          <div class="carousel-caption title-berita">
            <h1>{{$item->data()['judul']}}</h1>
          </div>
        </a>
      </div>
    @endforeach
    
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

<section id="berita">
  <div class="container-berita">
    <h1>Berita Terkini</h1>
    <div class="berita-wrapper-card">
      <div id="card">
        <div class="container-card" >
          <div class="row row-cols-2 row-cols-md-3 row-cols-1 g-4" id="scroll-wrapper">

            @forelse ($datas as $item)
            <div class="col justify-content-center" id="horizontal">
              <div class="card">
                <img src="{{$item->data()['urlGambar'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <div class="min-content">
                    <h5 class="card-title">{{$item->data()['judul'] }}</h5>
                  </div>
                  <p class="card-text"><span>{{date('j F Y', strtotime($item->data()['tanggal']))}}</span></p>
                  {{-- <div class="min-content">
                    <p class="card-text">{!! Str::limit($item->data()['isi'], 50, '...') !!}</p>
                  </div> --}}
                  <form  action="{{url("/detail/{$item->data()['tanggal']}")}}">
                    <input type="hidden" name="date" value="{{$item->data()['tanggal']}}">
                    <button class="button">Baca</button>
                  </form>
                </div>
              </div>
            </div>
            @empty
            <div class="col justify-content-center" id="horizontal">
              <h4>Maaf data yang anda cari tidak dapat kami temukan</h4>
            </div>
            @endforelse


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="end-of-berita">
  <p>Akhir Laman</p>
</div>
@endsection

  @push('addonStyle')
  <link rel="stylesheet" href="{{URL::asset('assets/Main/style/berita.css')}}"><!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- SCRIPT -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

  
@endpush

