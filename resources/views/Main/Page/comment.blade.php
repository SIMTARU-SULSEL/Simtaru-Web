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
  <div id="header">
      <h1>Tanggapan</h1>
  </div>

  <div class="container">
      <div id="tanggapan-box">
          <form action="/tanggapan" method="POST">
            @csrf
              <div id="tanggapan-bio" class="tanggapan-block">
                  <div class="input-group mb-3" id="input-field">
                      <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                      <input type="text" class="form-control" placeholder="Nama" name="nama" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3" id="input-field">
                      <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                      <input type="text" class="form-control" placeholder="Email" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
                  <div class="input-group mb-3" id="input-field">
                      <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                      <input type="text" class="form-control" placeholder="Judul tanggapan kamu" name="judul" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
              </div>
              <div id="tanggapan-field" class="tanggapan-block">
                  <div class="input-group mb-3" id="input-field">
                      <input type="text" class="form-control" placeholder="Tanggapan" name="pesan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
              </div>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Submit</button>
              </div><br>
          </form>
      </div>
  </div>
</main>

@endsection

