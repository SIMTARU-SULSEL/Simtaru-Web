@extends('Main.Layout.MainWebLayout')

@section('Main')
  <nav>
    <div class="col-md-9 nav-child-wrapper">
      <ul class="nav-menu ">
        <li class="links"><a href="#">Home</a></li>
        <li class="links"><a class="active" href="#">Tata Ruang</a></li>
        <li class="links"><a href="{{url('/regulasi')}}">Regulasi</a></li>
        <li class="links"><a href="#">Publikasi</a></li>
        <li class="links"><a href="{{url('/tanggapan')}}">Tanggapan</a></li>
      </ul>
    </div>
    <div class="col-md-3 button">
      <form action="/pendaftaran" method="GET">
        @csrf
        <button>Pendaftaran</button>
      </form>
    </div>
  </nav>
  <div class="main">
    @if ($datas != null)
      <iframe src="{{$datas->data()['mapUrl']}}" frameborder="0" id="iframe"></iframe>
    @else
      <H1>Not Found</H1>
    @endif
    <div id="filter">
      <form class="row" action="/tata-ruang/detail" method="get">
        @method('get')
        @csrf
          <div class="dropdown">
            <select class="btn btn-secondary" required name="Kota" id="Kota">
              <option disabled selected value="">Pilih Kota</option>
              <option value="Makassar">Makassar</option>
              <option value="Gowa">Gowa</option>
              <option value="Maros">Maros</option>
            </select>
          </div>
          <div class="dropdown">
            <select class="btn btn-secondary" required name="RTR" id="RTR">
              <option disabled selected value="">Pilih RTR</option>
              <option value="RTR Maminasata">RTR Maminasata</option>
              <option value="RTRW Kab/Kota">RTRW Kab/Kota</option>
              <option value="RTDTR Kab/Kota">RTDTR Kab/Kota</option>
            </select>
          </div>
          <button type="submit" class="button">Lihat</button>
        </form>
    </div>

  </div>
@endsection
