@extends('Main.Layout.MainWebLayout')

@section('Main')
<div class="wrapper-regulasi">
  <nav>
    <div class="active-page">
      <a class="active"href="index.html">Home</a>
    </div>
    <div class="nav-wrapper">

    <div class="nav-wrapper">
      <ul class="nav-menu ">
        <li class="links"><a href="{{url('/')}}">Home</a></li>
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
  </nav>

  <section id="hero">
    <div class="text-center hero-content">
      <h1>Berita Terkini</h1>
    </div>
  </section>

  <div id="collapse-parent">
    @foreach ($datas as $item)
    <section id="pagination">
      <div class="judul">
        <h1>{{$item->data()['judul'] }}</h1>
      </div>
      
      <div class="wrapper-pagination mt-5">
        <ul>
          <p>
            <li>
              <span><b>Penulis: </b></span>{{$item->data()['penulis'] }}
            <li>
              <span><b>Tanggal: </b></span>{{date('j F Y', strtotime($item->data()['tanggal']))}}
            </li>
          </p>
        </ul>
      </div>

      <div class="mt-3 mb-5" id="image">
        <img src="{{$item->data()['urlGambar']}}" alt="">
      </div>
    </section>

    <section id="content">
        <div class="wrapper-content">
          {!!$item->data()['isi']!!}
      </div>
    </section>
    @endforeach
  </div>

  <section id="berita_lainnya">
    <div class="container pt-5 text-center">
      <h1>Baca Juga</h1>
      <h1>Berita Lainnya</h1>
    </div>

   <!-- Berita Terkini -->
      <div class="mt-5 mb-5" id="card">
        <div class="container-card" >
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row row-cols-1 row-cols-md-3 g-4" id="scroll-wrapper">
                  @foreach ($news_datas as $item)
                    <div class="col d-flex justify-content-center" id="horizontal">
                      <div class="card">
                        <img src="{{$item->data()['urlGambar']}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->data()['judul']}}</h5>
                          <p class="card-text">{{date('j F Y', strtotime($item->data()['tanggal']))}}</p>
                          <h6 class="card-desc">{!! Str::limit($item->data()['isi'], 50, '...') !!}</h6>
                          {{-- <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a> --}}
                          <form class="btn btn-primary button" action="{{url("/detail/{$item->data()['judul']}")}}">
                            <input type="hidden" name="date" value="{{$item->data()['tanggal']}}">
                            <button class="btn btn-primary button">Baca Selengkapnya</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
{{--                 
              <div class="carousel-item">
                <div class="row row-cols-1 row-cols-md-3 g-4" id="scroll-wrapper">
                  <div class="col d-flex justify-content-center" id="horizontal">
                    <div class="card">
                      <img src="../images/artikel-1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pengembangan Jembatan Gowa-Malino</h5>
                        <p class="card-text">22 Agustus 2022</p>
                        <h6 class="card-desc">Dibawah koordinasi pihak PUPR dan pemerintah daerah gowa, jembatan legendaris gowa-mali..</h6>
                        <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col d-flex justify-content-center" id="horizontal">
                    <div class="card">
                      <img src="../images/artikel-1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pengembangan Jembatan Gowa-Malino</h5>
                        <p class="card-text">22 Agustus 2022</p>
                        <h6 class="card-desc">Dibawah koordinasi pihak PUPR dan pemerintah daerah gowa, jembatan legendaris gowa-mali..</h6>
                        <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col d-flex justify-content-center" id="horizontal">
                    <div class="card">
                      <img src="../images/artikel-1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pengembangan Jembatan Gowa-Malino</h5>
                        <p class="card-text">22 Agustus 2022</p>
                        <h6 class="card-desc">Dibawah koordinasi pihak PUPR dan pemerintah daerah gowa, jembatan legendaris gowa-mali..</h6>
                        <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row row-cols-1 row-cols-md-3 g-4" id="scroll-wrapper">
                  <div class="col d-flex justify-content-center" id="horizontal">
                    <div class="card">
                      <img src="../images/artikel-1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pengembangan Jembatan Gowa-Malino</h5>
                        <p class="card-text">22 Agustus 2022</p>
                        <h6 class="card-desc">Dibawah koordinasi pihak PUPR dan pemerintah daerah gowa, jembatan legendaris gowa-mali..</h6>
                        <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col d-flex justify-content-center" id="horizontal">
                    <div class="card">
                      <img src="../images/artikel-1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pengembangan Jembatan Gowa-Malino</h5>
                        <p class="card-text">22 Agustus 2022</p>
                        <h6 class="card-desc">Dibawah koordinasi pihak PUPR dan pemerintah daerah gowa, jembatan legendaris gowa-mali..</h6>
                        <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
        
                  <div class="col d-flex justify-content-center" id="horizontal">
                    <div class="card">
                      <img src="../images/artikel-1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pengembangan Jembatan Gowa-Malino</h5>
                        <p class="card-text">22 Agustus 2022</p>
                        <h6 class="card-desc">Dibawah koordinasi pihak PUPR dan pemerintah daerah gowa, jembatan legendaris gowa-mali..</h6>
                        <a class="btn btn-primary button" href="src\page\berita.html" role="button">Baca Selengkapnya</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
          </div>
        </div>
      </div>
  </section>
</div>
@endsection

@push('addonStyle')
  <link rel="stylesheet" href="{{URL::asset('assets/Main/style/berita-detail.css')}}">
@endpush






