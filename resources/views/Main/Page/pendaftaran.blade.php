@extends('Main.Layout.MainWebLayout')

@section('Main')
  <nav>
    <div class="col-md-9 nav-child-wrapper">
      <ul class="nav-menu">
        <li class="links"><a href="{{url('/')}}">Home</a></li>
        <li class="links"><a href="{{url('/tata-ruang')}}">Tata Ruang</a></li>
        <li class="links"><a href="{{url('/regulasi')}}">Regulasi</a></li>
        <li class="links"><a href="#">Publikasi</a></li>
        <li class="links"><a href="{{url('/tanggapan')}}">Tanggapan</a></li>
      </ul>
    </div>
    <div class="col-md-3 button">
      <form action="/pendaftaran" method="GET" >
        @csrf
        <button>Pendaftaran</button>
      </form>
    </div>
  </nav>
  <main>
    <div id="header">
      <h1>Pendaftaran</h1>
    </div>

    <div class="container">
      <form action="/pendaftaran" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="pendaftaran-box">
          <div class="row justify-content-evenly">
            <!--Column 1-->
            <div class="col-6 pt-3">
              <div class="col pb-3">
                @error('KTP')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
                <label for="KTP" class="form-label">Nomor KTP</label>
                <input type="text" class="form-control" name="KTP" id="input-pendaftaran" placeholder="Masukkan nomor KTP anda"/>
              </div>
              
              

              <div class="col pb-3">
                <label for="Nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="Nama" id="input-pendaftaran" required placeholder="Masukkan nama lengkap anda"/>
                @error('Nama')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

              <label for="inputAddress" class="form-label">Jenis Kelamin</label>
              <div class="col pb-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Laki-laki"/>
                  <label class="form-check-label" for="inlineRadio1">Laki-laki</label>          
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Perempuan"/>
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
                @error('Gender')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror

                <div class="col pt-3">
                  <label for="Alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control" name="Alamat" id="input-pendaftaran-alamat" required placeholder="Masukkan alamat anda"/>
                  @error('Alamat')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <label for="inputEmail4" class="form-label pt-3">Asal Provinsi</label>
                <div class="input-group">
                  <select class="form-select" name="Provinsi" id="input-pendaftaran" aria-label="Example select with button addon" required >
                    <option disabled selected value="">Pilih Provinsi</option>
                    <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                  </select>
                  @error('Provinsi')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <label for="inputEmail4" class="form-label pt-3">Asal Kota/Kabupaten</label>
                <div class="input-group">
                  <select class="form-select" name="KotaKabupaten" id="input-pendaftaran" aria-label="Example select with button addon" required >
                    <option disabled selected value="">Pilih Kota/Kabupaten</option>
                    <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                  </select>
                  @error('KotaKabupaten')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <label for="inputEmail4" class="form-label pt-3">Asal Kecamatan</label>
                <div class="input-group">
                  <select class="form-select" name="Kecamatan" id="input-pendaftaran" aria-label="Example select with button addon" required >
                    <option disabled selected value="">Pilih Kecamatan</option>
                    <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                    <option value="Sumatera Utara">Sumatera Utara</option>
                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                  </select>
                  @error('Kecamatan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <div class="col pt-3">
                  <label for="inputAddress" class="form-label">Kode Pos</label>
                  <input type="text" class="form-control" name="KodePos" id="input-pendaftaran" required placeholder="Masukkan kode pos anda"/>
                  @error('KodePos')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <div class="col pt-3">
                  <label for="inputAddress" class="form-label">Pekerjaan</label>
                  <input type="text" class="form-control" name="Pekerjaan" id="input-pendaftaran" required placeholder="Masukkan pekerjaan anda"/>
                  @error('Pekerjaan')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                  @enderror
                </div>

                <label for="inputAddress" class="form-label pt-3">Status</label>
                <div class="col">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="StatusKewarganegaraan" id="inlineRadio1" value="WNI"/>
                    <label class="form-check-label" for="inlineRadio1">WNI</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="StatusKewarganegaraan" id="inlineRadio2" value="WNA"/>
                    <label class="form-check-label" for="inlineRadio2">WNA</label>
                  </div>
                  @error('StatusKewarganegaraan')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
                </div>
                </br>
              </div>
            </div>

            <!--Column 2-->
            <div class="col-6 pt-3">
              <div class="col pb-3">
                <label for="inputAddress" class="form-label">Email</label>
                <input type="Email" class="form-control" name="Email" id="input-pendaftaran" required placeholder="Masukkan alamat email anda"/>
                @error('Email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

              <div class="col pb-3">
                <label for="inputAddress" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" name="NomorHandphone" id="input-pendaftaran" required placeholder="Masukkan nomor telepon anda"/>
                @error('NomorHandphone')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

              <div class="col pb-3">
                <label for="formFile" class="form-label">Upload SHP (rar)</label>
                <input class="form-control" name="SHP" type="file" id="formFile">
                @error('SHP')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
              </div>

              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" id="tomboldaftar">
                  Daftar
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>


  </main>
@endsection
