@extends('Main.Layout.MainWebLayout')

@section('Main')
<nav>
  <div class="col-md-9 nav-child-wrapper">
    <ul class="nav-menu ">
      <li class="links"><a href="{{url('/')}}">Home</a></li>
      <li class="links"><a href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
      <li class="links"><a href="{{url('/regulasi')}}">Regulasi</a></li>
      <li class="links"><a href="#">Publikasi</a></li>
      <li class="links"><a class="active" href="{{url('/tanggapan')}}">Tanggapan</a></li>
    </ul>
  </div>
  <div class="col-md-3 button">
    <form action="/pendaftaran" method="GET">
      @csrf
      <button>Pendaftaran</button>
    </form>
  </div>
</nav>
<main>
  <section id="hero2">
    <div class="text-center hero-content2">
      <h1>TANGGAPAN</h1>
    </div>
  </section>

  <div class="container">
      <div id="tanggapan-box">
          <form action="/tanggapan" method="POST">
            @csrf
              <div id="tanggapan-bio" class="tanggapan-block">
                  <div class="input-group mb-3" id="input-field">
                      <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                      <input type="text" class="form-control" placeholder="Nama" required name="nama" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3" id="input-field">
                      <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                      <input type="email" class="form-control" placeholder="Email" required name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3" id="input-field">
                      <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                      <input type="text" class="form-control" placeholder="Judul tanggapan kamu" required name="judul" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
              </div>
              <div id="tanggapan-field" class="tanggapan-block">
                  <div class="input-group mb-3" id="input-field">
                      <input type="text" class="form-control" placeholder="Tanggapan" required name="pesan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
              </div>
              <div class="d-grid gap-2" id="tombolsubmit">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div><br>
          </form>
      </div>
  </div>
</main>

@endsection

@push('addonStyle')
<link rel="stylesheet" href="{{URL::asset('assets/Main/style/index.css')}}">
@endpush