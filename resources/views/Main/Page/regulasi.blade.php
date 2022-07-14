@extends('Main.Layout.MainWebLayout')

@section('Main')
<div class="wrapper-regulasi">
  <nav>
    <div class="col-md-9 nav-child-wrapper">
      <ul class="nav-menu ">
        <li class="links"><a  href="{{url('/')}}">Home</a></li>
        <li class="links"><a href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
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
  
  <div id="collapse-parent">
    <section id="pagination">
      <div class="wrapper-pagination">
        <ul>
          <p>
            <li>
              <a data-bs-toggle="collapse" href="#uu-collapse" role="button" aria-expanded="true" aria-controls="uu-collapse" >UU</a></li>
            <li>
              <a data-bs-toggle="collapse" href="#perpres-collapse" role="button" aria-expanded="false" aria-controls="perpres-collapse">PERPRES</a>
            </li>
            <li>
              <a data-bs-toggle="collapse" href="#kepres-collapse" role="button" aria-expanded="true" aria-controls="kepres-collapse" >KEPRES</a>
            </li>
            <li>
              <a data-bs-toggle="collapse" href="#pp-collapse" role="button" aria-expanded="true" aria-controls="pp-collapse" >PP</a>
            </li>
            <li>
              <a data-bs-toggle="collapse" href="#permen-collapse" role="button" aria-expanded="true" aria-controls="permen-collapse">PERMEN</a>
            </li>
            <li>
              <a data-bs-toggle="collapse" href="#perda-collapse" role="button" aria-expanded="true" aria-controls="perda-collapse">PERDA</a>
            </li>
            <li>
              <a data-bs-toggle="collapse" href="#pergub-collapse" role="button" aria-expanded="true" aria-controls="pergub-collapse">PERGUB</a>
            </li>
          </p>
        </ul>
      </div>
    </section>

    <section id="content">
      <div id="uu-collapse" class="collapse show" data-bs-parent="#collapse-parent">
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
      </div>

      <!-- PERPRES -->
      <div id="perpres-collapse" class="collapse" data-bs-parent="#collapse-parent">
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
      </div>

      <!-- KEPRES -->
      <div id="kepres-collapse" class="collapse" data-bs-parent="#collapse-parent">
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
      </div>

      <!-- PP -->
      <div id="pp-collapse" class="collapse" data-bs-parent="#collapse-parent">
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
      </div>

      <!-- PERMEN -->
      <div id="permen-collapse" class="collapse" data-bs-parent="#collapse-parent">
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
      </div>

      <!-- PERDA -->
      <div id="perda-collapse" class="collapse" data-bs-parent="#collapse-parent">
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
      </div>

      <!-- PERGUB -->
      <div id="pergub-collapse" class="collapse" data-bs-parent="#collapse-parent">
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
      </div>

    </section>

  </div>

</div>
@endsection

@push('addonStyle')
<link rel="stylesheet" href="{{URL::asset('assets/Main/style/regulasi.css')}}">
@endpush