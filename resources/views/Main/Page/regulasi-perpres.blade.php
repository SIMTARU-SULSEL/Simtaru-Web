@extends('Main.Layout.MainWebLayout')

@section('Main')
<div class="wrapper-regulasi">
  <nav>
    <div class="col-md-9 nav-child-wrapper">
      <ul class="nav-menu ">
        <li class="links"><a  href="{{url('/')}}">Home</a></li>
        <li class="links"><a  href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
        <li class="links"><a class="active" href="{{url('/regulasi')}}">Regulasi</a></li>
        <li class="links"><a href="{{url('/publikasi')}}">Publikasi</a></li>
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


  <section id="hero">
    <div class="text-center hero-content">
      <h1>REGULASI</h1>
    </div>
  </section>

  <section id="pagination">
    <div class="wrapper-pagination">
      <ul>
        <li><a href="{{url('regulasi-uu')}}">UU</a></li>
        <li><a href="{{url('regulasi-perpes')}}" class="active">PERPRES</a></li>
        <li><a href="{{url('regulasi-kepres')}}" >KEPRES</a></li>
        <li><a href="{{url('regulasi-pp')}}">PP</a></li>
        <li><a href="{{url('regulasi-permen')}}">PERMEN</a></li>
        <li><a href="{{url('regulasi-perda')}}">PERDA</a></li>
        <li><a href="{{url('regulasi-pergub')}}">PERGUB</a></li>
      </ul>
    </div>
  </section>

  <section id="content">
    <div class="wrapper-content">
      <div class="cards">
        
        <div class="wrapper-undang2 row">
          <div class="col-lg-2 file-logo">
            <img src="{{URL::asset('assets/Main/images/pdf.png')}}" alt="">
            
          </div>
          <div class="col-lg-10 file-element">
            <h5>UU Nomor 45 Tahun 2009</h5>
            <p>TENTANG PERUBAHAN ATAS UNDANG-UNDANG NOMOR 31 TAHUN 2004 TENTANG PERIKANAN</p>
            <div class="button">
              <button type="button">Download</button>
            </div>
          </div>
        </div>

        <!-- divider between two cards-->
        <br>

        <div class="wrapper-undang2 row">
          <div class="col-lg-2 file-logo">
            <img src="{{URL::asset('assets/Main/images/pdf.png')}}" alt="">
            
          </div>
          <div class="col-lg-10 file-element">
            <h5>UU Nomor 45 Tahun 2009</h5>
            <p>TENTANG PERUBAHAN ATAS UNDANG-UNDANG NOMOR 31 TAHUN 2004 TENTANG PERIKANAN</p>
            <div class="button">
              <button type="button">Download</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>
@endsection


@push('addonStyle')
<link rel="stylesheet" href="{{URL::asset('assets/Main/style/index.css')}}">
@endpush

