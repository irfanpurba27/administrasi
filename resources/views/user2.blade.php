<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="creativestudio, We design People Inspired Experiences that create positive change in people&amp;apos;s lives.">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Laravel</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
	<link href="css/templatemo-style.css" rel="stylesheet" />
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images3/Untitled-2.png"
}</script>
    <meta name="theme-color" content="#1f203a">
    <meta property="og:title" content="Page 2">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="https://website1849949.nicepage.io/Page-2.html?version=f4ac44b9-bd37-488f-9b37-7e0074be3d25" data-home-page-title="Page 2" class="u-body u-xl-mode">
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav me-auto">

                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>

     
  </div>
    <section class=" u-clearfix u-section-1" id="carousel_a717">
      
      <div class="u-expanded-width u-grey-5 u-shape u-shape-rectangle u-shape-1" style="background-image: url('{{ asset('images/2.jpg') }}');"></div>
      
      @forelse ($foto as $f)
      <div alt="" class="u-border-15 u-border-white u-image u-image-circle u-image-1" style="background-image: url('{{ $f->id_user }}/{{ $f->file }}')"></div>
      @empty
      <div alt="" class="u-border-15 u-border-white u-image u-image-circle u-image-1" style="background-image: url('images/download.png')"></div>
      @endforelse
        
      <h2 class="u-text u-text-1"><b>@foreach( $siswa as $s ) {{ $s->nama }} {{ $s->kompetensi }} @endforeach</b>
      </h2>
     <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="input-group">
          <div class="accordion accordion-flush form-control" id="accordionFlushExample" >
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed form-control" type="button" data-bs-toggle="collapse" data-bs-target="#datasiswa" aria-expanded="false" aria-controls="flush-collapseOne">
                    Data diri
                  </button>
                </h2>
              </div>
          </div>                    
          <div class="accordion accordion-flush form-control"   id="accordionFlushExample" >
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed form-control" type="button" data-bs-toggle="collapse" data-bs-target="#file" aria-expanded="false" aria-controls="flush-collapseOne">
                    File
                  </button>
                </h2>
              </div>
          </div>                    
       </div>
        <div  class="collapse" id="datasiswa"> 
          <div class="card" style="border:none">
              <div class="card-body" >

              {{-- Data siswa --}}
              <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="flush-collapseOne">
                        Data saya
                      </button>
                    </h2>
                  </div>
              </div>
                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">    

                        <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">     Nama Saya </p>
                                      <p class="form-control" style="border:none;">   :  @foreach($user as $u) {{ $u->name }} @endforeach </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">     Email</p>
                                      <p class="form-control" style="border:none;">   :   @foreach($user as $u) {{ $u->email }} @endforeach </p>
                                 </div>
                                 <hr>
                                 @forelse ($siswa as $s)       
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    NIK</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->nik }} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Kelas</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->kompetensi }} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Tempat/tanggal lahir</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->tempat_lahir }},  {{ $s->tgl_lahir }}</p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Jenis Kelamin</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->jenis_kelamin }} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Tinggi Badan</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->tinggi_badan}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Berat Badan</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->berat_badan}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Alamat</p>
                                      <p class="form-control" style="border:none;">   : kel:{{ $s->kelurahan}}, kec:{{ $s->kecamatan }}, kota/kab:{{ $s->kota }}, prov{{ $s->provinsi }} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Kode Pos</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->kode_pos}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    No Telepon</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->no_telepon}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Agama</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->agama}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Suku</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->suku}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Anak Ke</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->anak_ke}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Jumlah saudara</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->jumlah_saudara}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    No KPS</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->no_kps}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Asal Sekolah</p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Sekolah Asal</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->asal_sekolah}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    No Telepon sekolah</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->no_telepon_sekolah}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Kota asal sekolah</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->kota_sekolah}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    Tahun Lulus</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->tahun_lulus}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    No Ijazah</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->no_ijazah}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    No SKHUN</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->no_skhun}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    NISN</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->nisn}} </p>
                                 </div>
                                 <hr>
                                  <div class="input-group">
                                      <p class="form-control" style="border:none;">    No KIS non mandiri</p>
                                      <p class="form-control" style="border:none;">   : {{ $s->nisn}} </p>
                                 </div>
                                 <hr>
                                 <div class="card-body">
                                  <button style="float:right; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="@foreach($siswa as $s)#{{ 'modal'.$s->id_user }}@endforeach">edit data</button>
                                 </div>
                                 @empty
                                  
                                 <div class="card-body">
                                      <button style="float:right;margin-right:5px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#datasaya">Tambah Data</button>
                                 </div>
                                 @endforelse
                                
                          {{-- modal tambah data saya --}}
                          <div class="modal fade" id="datasaya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Data Saya</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    
                                      <form action="{{ url('home/create') }}" method="post">
                                          {{ csrf_field() }}
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="nama" value="@foreach($user as $u){{ $u->name }} @endforeach" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                  <label for="floatingselect">Nama anda</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="email" value="@foreach($user as $u){{ $u->email }} @endforeach" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                  <label for="floatingselect">email</label>
                                              </div>                                           
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                  <label for="floatingselect">NIK</label>
                                              </div>
                                          </div>
                                          <div class="form-floating">
                                          <select class="form-select" name="kompetensi" aria-label="Default select example">
                                              <option disabled>Kelas</option>
                                              <option>X-RPL</option>
                                              <option>X-MM</option>
                                              <option>X-BKP</option>
                                              <option>X-TKRO</option>
                                              <option>X-TB</option>
                                              <option>XI-RPL</option>
                                              <option>XI-MM</option>
                                              <option>XI-BKP</option>
                                              <option>XI-TKRO</option>
                                              <option>XI-TB</option>
                                              <option>XII-RPL</option>
                                              <option>XII-MM</option>
                                              <option>XII-BKP</option>
                                              <option>XII-TKRO</option>
                                              <option>XII-TB</option>
                                          </select>
                                          <label for="floatingselect">Kelas</label>
                                      </div><br>
                                          <div class="input-group ">
                                              <div class="form-floating">
                                                  <input type="text" style="width: 200px" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                  <label for="floatingselect">Tempat lahir</label>
                                              </div>
                                              <div class="form-floating">
                                                  <input type="date" name="tgl_lahir"  class="form-control">
                                                  <label for="floatingselect"> tanggal lahir</label>
                                              </div>
                                          </div><br>
                                          <div class="form-floating">
                                          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                              <option>Laki-laki</option>
                                              <option>Perempuan</option>
                                          </select>
                                          <label for="floatingselect">Jenis kelamin</label>
                                           </div><br>
                                          
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="number" name="tinggi_badan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                  <label for="floatingselect">Tinggi badan</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="number" name="berat_badan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                  <label for="floatingselect">Berat badan</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="kelurahan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                  <label for="floatingselect">Kelurahan</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="kecamatan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                  <label for="floatingselect">kecamatan</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="kota" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                  <label for="floatingselect">Kota/kab</label>
                                              </div>
                                          </div>
                                          <div class="form-floating">
                                          <select class="form-select" name="provinsi" aria-label="Default select example">
                                              <option disabled>Provinsi</option>
                                              <option>Nanggroe Aceh Darussalam</option>
                                              <option>Sumatera Barat</option>
                                              <option>Sumatera Utara</option>
                                              <option>Sumatera Selatan</option>
                                              <option>Lampung</option>
                                              <option>Riau</option>
                                              <option>Kepulauan Riau</option>
                                              <option>Jambi</option>
                                              <option>Kepulauan Bangka Belitung</option>
                                              <option>Bengkulu</option>
                                              <option>DKI Jakarta</option>
                                              <option>Banten</option>
                                              <option>Jawa Barat</option>
                                              <option>Jawa Tengah</option>
                                              <option>Jawa Timur</option>
                                              <option>Daerah Istimewa Yogyakarta</option>
                                              <option>Bali</option>
                                              <option>Nusa Tenggara Barat</option>
                                              <option>Nusa Tenggara Timur</option>
                                              <option>Kalimantan Barat</option>
                                              <option>Kalimantan Selatan</option>
                                              <option>Kalimantan Tengah</option>
                                              <option>Kalimantan Timur</option>
                                              <option>Kalimantan Utara</option>
                                              <option>Sulawesi Barat</option>
                                              <option>Sulawesi Tenggara</option>
                                              <option>Sulawesi Selatan</option>
                                              <option>Sulawesi Tengah</option>
                                              <option>Sulawesi Utara</option>
                                              <option>Gorontalo</option>
                                              <option>Maluku</option>
                                              <option>Maluku Utara</option>
                                              <option>Papua</option>
                                              <option>Papua Barat</option>
                                          </select><label for="floatingselect">Provinsi</label>
                                       </div><br>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="number" name="kode_pos" class="form-control" id="exampleFormControlInput1" placeholder="kode pos">
                                                  <label for="floatingselect">Kode Pos</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">    
                                                  <input type="text" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                  <label for="floatingselect">No Telepon</label>
                                              </div>
                                          </div>
                                          <div  class="form-floating">
                                          <select class="form-select" name="agama" aria-label="Default select example">
                                              <option>Islam</option>
                                              <option>Kristen</option>
                                              <option>Katholik</option>
                                              <option>Budha</option>
                                              <option>Konghucu</option>
                                            </select>
                                            <label for="floatingselect">Agama</label>
                                          </div><br>
                                          <div class="mb-3">
                                              <div  class="form-floating">
                                                  <input type="text" name="suku" class="form-control" id="exampleFormControlInput1" placeholder="suku">
                                                  <label for="floatingselect">Suku</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="anak_ke" class="form-control" id="exampleFormControlInput1" placeholder="anak ke">
                                                  <label for="floatingselect">Anak ke</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="jumlah_saudara" class="form-control" id="exampleFormControlInput1" placeholder="jumlah saudara">
                                                  <label for="floatingselect">Jumlah saudara</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="no_kps" class="form-control" id="exampleFormControlInput1" placeholder="no kps">
                                                  <label for="floatingselect">No KPS</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="asal_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="sekolah asal">
                                                  <label for="floatingselect">Sekolah asal</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="no_telepon_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="no telepon sekolah">
                                                  <label for="foatingselect">No telepon sekolah asal</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="kota_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="kota asal sekolah">
                                                  <label for="floatingselect">Kota sekolah asal</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                  <label for="floatingselect">Tahun lulus</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="no_ijazah" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                  <label for="floatingselect">No ijazah</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="no_skhun" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                  <label for="floatingselect">No SKHUN</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="nisn" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                  <label for="floatingselect">NISN</label>
                                              </div>
                                          </div>
                                          <div class="mb-3">
                                              <div class="form-floating">
                                                  <input type="text" name="no_kis" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                  <label for="floatingselect">No KIS</label>
                                              </div>
                                          </div>
                                              
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                                  </div>
                                </div>
                              </div>
                          </div> 


                            {{-- edit data saya --}}
                            @foreach($siswa as $s)
                            <div class="modal fade" id="{{ 'modal'.$s->id_user }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Edit data saya</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body"> 
                                          <form action="{{ route('siswa.update') }}" method="post">
                                              {{ csrf_field() }}
                                              <div class="mb-3">
                                                  Nama : 
                                                  <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                              </div>
                                              <div class="mb-3">
                                                  Email : 
                                                  <input type="email" name="email"  value="{{ $s->email }}"class="form-control" id="exampleFormControlInput1" placeholder="email">
                                              </div>
                                              
                                              <div class="mb-3">
                                                  Nik :
                                                  <input type="number" value="{{ $s->nik }}" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                              </div>
                                              Kelas : 
                                              <select class="form-select" name="kompetensi" aria-label="Default select example">
                                                  <option>{{ $s->kompetensi }}</option>
                                                  <option>X-RPL</option>
                                                  <option>X-MM</option>
                                                  <option>X-BKP</option>
                                                  <option>X-TKRO</option>
                                                  <option>X-TB</option>
                                                  <option>XI-RPL</option>
                                                  <option>XI-MM</option>
                                                  <option>XI-BKP</option>
                                                  <option>XI-TKRO</option>
                                                  <option>XI-TB</option>
                                                  <option>XII-RPL</option>
                                                  <option>XII-MM</option>
                                                  <option>XII-BKP</option>
                                                  <option>XII-TKRO</option>
                                                  <option>XII-TB</option>
                                              </select><br>
                                              Tempat/tanggal lahir :
                                              <div class="input-group">
                                                  <input type="text" value="{{ $s->tempat_lahir }}" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                  <input type="date" value="{{ $s->tgl_lahir }}" name="tgl_lahir"  class="form-control">
                                              </div><br>
                                              Jenis Kelamin : 
                                              <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                                  <option>{{ $s->jenis_kelamin }}</option>
                                                  <option>Laki-laki</option>
                                                  <option>Perempuan</option>
                                              </select><br>
                                              Tinggi dan berat badan
                                              <div class="input-group">
                                                  <input type="number" value="{{ $s->tinggi_badan }}" name="tinggi_badan" class="form-control" placeholder="Tinggi badan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                  <span class="input-group-text" id="basic-addon2">CM</span>
                                                  <input type="number" value="{{ $s->berat_badan }}" name="berat_badan" class="form-control" placeholder="Berat badan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                  <span class="input-group-text" id="basic-addon2">KG</span>
                                              </div><br>
                          
                                              <div class="mb-3">
                                                  <p class="form-control">Alamat Asal</p>
                                              </div>
                                              kelurahan dan kecamatan
                                              <div class="input-group">
                                                  <input type="text" value="{{ $s->kelurahan }}" name="kelurahan" placeholder="kelurahan" aria-label="First name" class="form-control">
                                                  <input type="text" value="{{ $s->kecamatan }}" name="kecamatan"  placeholder="kecamatan" class="form-control">
                                              </div><br>
                                              Kota Asal : 
                                              <div class="mb-3">
                                                  <input type="text" value="{{ $s->kota }}" name="kota" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                              </div>
                                              Provinsi Asal : 
                                              <select class="form-select" name="provinsi" aria-label="Default select example">
                                                  <option>{{ $s->provinsi }}</option>
                                                  <option>Nanggroe Aceh Darussalam</option>
                                                  <option>Sumatera Barat</option>
                                                  <option>Sumatera Utara</option>
                                                  <option>Sumatera Selatan</option>
                                                  <option>Lampung</option>
                                                  <option>Riau</option>
                                                  <option>Kepulauan Riau</option>
                                                  <option>Jambi</option>
                                                  <option>Kepulauan Bangka Belitung</option>
                                                  <option>Bengkulu</option>
                                                  <option>DKI Jakarta</option>
                                                  <option>Banten</option>
                                                  <option>Jawa Barat</option>
                                                  <option>Jawa Tengah</option>
                                                  <option>Jawa Timur</option>
                                                  <option>Daerah Istimewa Yogyakarta</option>
                                                  <option>Bali</option>
                                                  <option>Nusa Tenggara Barat</option>
                                                  <option>Nusa Tenggara Timur</option>
                                                  <option>Kalimantan Barat</option>
                                                  <option>Kalimantan Selatan</option>
                                                  <option>Kalimantan Tengah</option>
                                                  <option>Kalimantan Timur</option>
                                                  <option>Kalimantan Utara</option>
                                                  <option>Sulawesi Barat</option>
                                                  <option>Sulawesi Tenggara</option>
                                                  <option>Sulawesi Selatan</option>
                                                  <option>Sulawesi Tengah</option>
                                                  <option>Sulawesi Utara</option>
                                                  <option>Gorontalo</option>
                                                  <option>Maluku</option>
                                                  <option>Maluku Utara</option>
                                                  <option>Papua</option>
                                                  <option>Papua Bara</option>
                                              </select><br>
                                              <div class="mb-3">
                                                  Kode Pos : 
                                                  <input type="text" value="{{ $s->kode_pos }}" name="kode_pos" class="form-control" id="exampleFormControlInput1" placeholder="kode pos">
                                              </div>
                                              <div class="mb-3">
                                                  No Telepon : 
                                                  <input type="text" value="{{ $s->no_telepon }}" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                              </div>
                                              <select class="form-select" name="agama" aria-label="Default select example">
                                                  <option>{{ $s->agama }}</option>
                                                  <option>Islam</option>
                                                  <option>Kristen</option>
                                                  <option>Katholik</option>
                                                  <option>Budha</option>
                                                  <option>Konghucu</option>
                                                </select><br>
                                              <div class="mb-3">
                                                  Suku :
                                                  <input type="text" value="{{ $s->suku }}" name="suku" class="form-control" id="exampleFormControlInput1" placeholder="suku">
                                              </div>
                                              <div class="mb-3">
                                                  Anak Ke :
                                                  <input type="text" value="{{ $s->anak_ke }}" name="anak_ke" class="form-control" id="exampleFormControlInput1" placeholder="anak ke">
                                              </div>
                                              <div class="mb-3">
                                                  Jumlah Saudara
                                                  <input type="text" value="{{ $s->jumlah_saudara }}" name="jumlah_saudara" class="form-control" id="exampleFormControlInput1" placeholder="jumlah saudara">
                                              </div>
                                              <div class="mb-3">
                                                  No KPS
                                                  <input type="text" value="{{ $s->no_kps }}" name="no_kps" class="form-control" id="exampleFormControlInput1" placeholder="no kps">
                                              </div>
                                              <div class="mb-3">
                                                  Sekolah Asal
                                                  <input type="text" value="{{ $s->asal_sekolah }}" name="asal_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="sekolah asal">
                                              </div>
                                              <div class="mb-3">
                                                  No Telepon Sekolah :
                                                  <input type="text" value="{{ $s->no_telepon_sekolah }}" name="no_telepon_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="no telepon sekolah">
                                              </div>
                                              <div class="mb-3">
                                                  Kota Asal Sekolah
                                                  <input type="text" value="{{ $s->kota_sekolah }}" name="kota_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="kota asal sekolah">
                                              </div>
                                              <div class="mb-3">
                                                  Tahun Lulus : 
                                                  <input type="text" value="{{ $s->tahun_lulus }}" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                              </div>
                                              <div class="mb-3">
                                                  No Ijazah :
                                                  <input type="text"  value="{{ $s->no_ijazah }}" name="no_ijazah" class="form-control" id="exampleFormControlInput1" placeholder="no ijazah">
                                              </div>
                                              <div class="mb-3">
                                                  No SKHUN :
                                                  <input type="text" value="{{ $s->no_skhun }}" name="no_skhun" class="form-control" id="exampleFormControlInput1" placeholder="no SKHUN">
                                              </div>
                                              <div class="mb-3">
                                                  NISN : 
                                                  <input type="text" value="{{ $s->no_skhun }}" name="nisn" class="form-control" id="exampleFormControlInput1" placeholder="NISN">
                                              </div>
                                              <div class="mb-3">
                                                  No KIS :
                                                  <input type="text" value="{{ $s->no_kis }}" name="no_kis" class="form-control" id="exampleFormControlInput1" placeholder="KIS Non Mandiri">
                                              </div>     
                                               
                                          </div>
                                      <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                                  </div>
                                  </div>
                                </div>
                              </div>@endforeach
                            </div>
                           </div><br>
  
                           
                           {{-- Data ayah --}}
                           <div class="accordion accordion-flush" id="accordionFlushExample">
                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayah" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Data ayah
                                  </button>
                                </h2>
                              </div>
                          </div>                             <div class="collapse" id="ayah">
                              <div class="card card-body">    
                                @forelse ($ayah as $s)
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Nama Ayah</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->nama }} </p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    NIK</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->nik }} </p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    No Telepon</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->no_telepon }} </p>
                                         </div>
                                         <div class="input-group">
                                          <p class="form-control" style="border:none;">    Agama</p>
                                          <p class="form-control" style="border:none;">   : {{ $s->agama }} </p>
                                     </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Tempat/tanggal lahir</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->tempat_lahir }},  {{ $s->tgl_lahir }}</p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Pendidikan</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->pendidikan }}</p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Pekerjaan</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->pekerjaan }}</p>
                                         </div>
                                         <div class="input-group">
                                          <p class="form-control" style="border:none;">    Penghasilan</p>
                                          <p class="form-control" style="border:none;">   : {{ $s->penghasilan}}</p>
                                     </div>
                                     <div class="card-body">
                                      <button style="float:right; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#@foreach($ayah as $s){{ 'modal'.$s->id_user }}_ayah @endforeach">edit data</button>
                                     </div>
                                     @empty
                                     <div class="card-header"style="border:none">Belum ada data</div>
                                         <div class="card-body">
                                              <button style="float:right;margin-right:5px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dataayah">Tambah Data</button>
                                         </div>
                                      @endforelse

      
                                  {{-- modal tambah data ayah --}}
                                  <div class="modal fade" id="dataayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Data Ayah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            
                                              <form action="{{ url('ayah/create') }}" method="post">
                                                  {{ csrf_field() }}
                                                  <div class="mb-3">
                                                      <div class="form-floating">
                                                          <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                          <label for="form-floating">Nama ayah</label>
                                                      </div>
                                                  </div>
                                                  <div class="mb-3">
                                                      <div class="form-floating">
                                                          <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                          <label for="floatingselect">NIK</label>
                                                      </div>
                                                  </div>
                                                  <div class="input-group">
                                                      <div class="form-floating">
                                                          <input type="text" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                          <label for="floatingselect">Tempat lahir</label>
                                                      </div>
                                                      <div class="form-floating">
                                                          <input type="date" name="tgl_lahir"  class="form-control">
                                                          <label for="floatingselect">Tanggal lahir</label>
                                                      </div>
                                                  </div><br>
                                                  <div class="imb-3">
                                                      <div class="form-floating">
                                                          <input type="number" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                          <label for="floatingselect">No telepon</label>
                                                      </div>
                                                  </div><br>
                                                  <div class="form-floating">
                                                  <select class="form-select" name="agama" aria-label="Default select example">
                                                      <option>Islam</option>
                                                      <option>Kristen</option>
                                                      <option>Katholik</option>
                                                      <option>Budha</option>
                                                      <option>Konghucu</option>
                                                    </select>
                                                    <label for="floatingselect">Agama</label>
                                                  </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                      <option>SD</option>
                                                      <option>SMP</option>
                                                      <option>SMA</option>
                                                      <option>S1</option>
                                                      <option>S2</option>
                                                      <option>Tidak bersekolah</option>
                                                    </select>
                                                    <label for="floatingselect">Pendidikan</label>
                                                  </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                      <option>PNS</option>                                                
                                                      <option>Petani</option>                                                
                                                      <option>Pedagang</option>                                                
                                                      <option>Nelayan</option>                                                
                                                      <option>Buruh</option>                                                
                                                      <option>Pegawai Swasta</option>                                                
                                                      <option>Rohaniawan</option>                                                
                                                      <option>Polisi/tentara</option>                                                
                                                      <option>Guru/Pendidikan</option>                                                
                                                      <option>Serabutan</option>                                                
                                                      <option>Supir</option>                                                
                                                      <option>Tenaga kesehatan</option>                                                
                                                      <option>Tidak bekerja</option>                                                
                                                    </select>
                                                    <label for="floatingselect">Pekerjaan</label>
                                                  </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                      <option>Tidak berpenghasilan</option>
                                                      <option>kurang dari Rp1.000.000,00</option>
                                                      <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                      <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                      <option>Lebih dari Rp3.000.000,00</option>                                                
                                                    </select>
                                                    <label for="floatingselect">Penghasilan</label>
                                                  </div><br>
          
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                          </form>
                                          </div>
                                        </div>
                                      </div>
                                  </div> 
      
      
                                    {{-- edit data ayah --}}
                                    @foreach($ayah as $s)
                                    <div class="modal fade" id="{{ 'modal'.$s->id_user }}_ayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Edit data ayah</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body"> 
                                                  <form action="{{ route('ayah.update') }}" method="post">
                                                      {{ csrf_field() }}
                                                      <div class="mb-3"> 
                                                          <div class="form-floating">
                                                              <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                              <label for="floatingselect">Nama ayah</label>
                                                          </div>
                                                      </div>
                                                      <div class="mb-3">
                                                          <div class="form-floating">
                                                              <input type="number" value="{{ $s->nik }}" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                              <label for="floatingselect">NIK</label>
                                                          </div>      
                                                      </div>
                                                      
                                                      <div class="input-group">
                                                          <div class="form-floating">
                                                              <input type="text" value="{{ $s->tempat_lahir }}" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                              <label for="floatingselect">Tempat lahir</label>
                                                          </div>
                                                          <div class="form-floating">
                                                              <input type="date" value="{{ $s->tgl_lahir }}" name="tgl_lahir"  class="form-control">
                                                              <label for="floatingselect">Tanggal lahir</label>
                                                          </div>        
                                                      </div><br>                                
                                                      <div class="mb-3">
                                                          <div class="form-floating">
                                                              <input type="text" value="{{ $s->no_telepon }}" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                              <label for="floatingselct">No telepon</label>
                                                          </div>
                                                          </div>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="agama" aria-label="Default select example">
                                                          <option>{{ $s->agama }}</option>
                                                          <option>Islam</option>
                                                          <option>Kristen</option>
                                                          <option>Katholik</option>
                                                          <option>Budha</option>
                                                          <option>Hindu</option>
                                                          <option>Konghucu</option>
                                                        </select>
                                                        <label for="floatingselect">Agama</label>
                                                      </div><br>
                                                        <div class="form-floating">
                                                      <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                          <option>{{ $s->pendidikan }}</option>
                                                          <option>SD</option>
                                                          <option>SMP</option>
                                                          <option>SMA/SMK</option>
                                                          <option>S1</option>
                                                          <option>S2</option>
                                                          <option>Tidak bersekolah</option>
                                                        </select>
                                                        <label for="floatingselect">Pendidikan</label>
                                                      </div><br>
                                                        <div class="form-floating"> 
                                                      <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                          <option>{{ $s->penghasilan }}</option>
                                                          <option>Tidak berpenghasilan</option>
                                                          <option>kurang dari Rp1.000.000,00</option>
                                                          <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                          <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                          <option>Lebih dari Rp3.000.000,00</option> 
                                                        </select>
                                                        <label for="floatinfselect">Penghasilan</label>
                                                      </div><br>
                                                        <div class="form-floating">
                                                        <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                          <option>{{ $s->pekerjaan }}</option>
                                                          <option>PNS</option>                                                
                                                          <option>Petani</option>                                                
                                                          <option>Pedagang</option>                                                
                                                          <option>Nelayan</option>                                                
                                                          <option>Buruh</option>                                                
                                                          <option>Pegawai Swasta</option>                                                
                                                          <option>Rohaniawan</option>                                                
                                                          <option>Polisi/tentara</option>                                                
                                                          <option>Guru/Pendidikan</option>                                                
                                                          <option>Serabutan</option>                                                
                                                          <option>Supir</option>                                                
                                                          <option>Tenaga kesehatan</option>                                                
                                                          <option>Tidak bekerja</option>                                                
                                                        </select>
                                                        <label for="floatinfselect">Pekerjaan</label>
                                                      </div><br>
                                                  </div>
                                              <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                                          </div>
                                          </div>
                                        </div>
                                      </div>@endforeach
                                    </div>
                                   </div><br>




                                   {{-- Data ibu --}}
                                   <div class="accordion accordion-flush" id="accordionFlushExample">
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ibu" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Data ibu
                                          </button>
                                        </h2>
                                      </div>
                                  </div>                             
                          <div class="collapse" id="ibu">
                              <div class="card card-body">    
                              
                                         @forelse($ibu as $s)
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Nama Ibu</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->nama }} </p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    NIK</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->nik }} </p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    No Telepon</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->no_telepon }} </p>
                                         </div>
                                         <div class="input-group">
                                          <p class="form-control" style="border:none;">    Agama</p>
                                          <p class="form-control" style="border:none;">   : {{ $s->agama }} </p>
                                     </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Tempat/tanggal lahir</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->tempat_lahir }},  {{ $s->tgl_lahir }}</p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Pendidikan</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->pendidikan }}</p>
                                         </div>
                                          <div class="input-group">
                                              <p class="form-control" style="border:none;">    Pekerjaan</p>
                                              <p class="form-control" style="border:none;">   : {{ $s->pekerjaan }}</p>
                                         </div>
                                         <div class="input-group">
                                          <p class="form-control" style="border:none;">    Penghasilan</p>
                                          <p class="form-control" style="border:none;">   : {{ $s->penghasilan}}</p>
                                     </div>
                                     <div class="card-body">
                                      <button style="float:right; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#@foreach($ibu as $s){{ 'modal'.$s->id_user }}_ibu @endforeach">edit data</button>
                                     </div>
                                     @empty
                                     <div class="card-header"style="border:none">Belum ada data</div>
                                         <div class="card-body">
                                              <button style="float:right;margin-right:5px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dataayah">Tambah Data</button>
                                         </div>
                                      @endforelse
                                  {{-- modal tambah data ibu --}}
                                  <div class="modal fade" id="dataibu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Data Ibu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            
                                              <form action="{{ url('ibu/create') }}" method="post">
                                                  {{ csrf_field() }}
                                                  <div class="mb-3">
                                                      <div class="form-floating">
                                                          <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                          <label for="floatingselect">Nama</label>
                                                      </div>
                                                  </div>
                                                  <div class="mb-3">
                                                      <div class="form-floating">
                                                          <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                          <label for="floatingselect">NIK</label>
                                                      </div>
                                                  </div>
                                                  <div class="input-group">
                                                      <div class="form-floating">
                                                          <input type="text" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                          <label for="floatingselect">Tempat lahir</label>
                                                      </div> 
                                                      <div class="form-floating">
                                                          <input type="date" name="tgl_lahir"  class="form-control">
                                                          <label for="floatinfselect">Tanggal lahir</label>
                                                      </div>
                                                  </div><br>
                                                  <div class="mb-3">
                                                      <div class="form-floating">
                                                          <input type="number" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                          <label for="floatinfselect">No telepon</label>
                                                      </div>
                                                  </div>
                                                  <div class="form-floating">
                                                  <select class="form-select" name="agama" aria-label="Default select example">
                                                      <option>Islam</option>
                                                      <option>Kristen</option>
                                                      <option>Katholik</option>
                                                      <option>Budha</option>
                                                      <option>Konghucu</option>
                                                    </select>
                                                    <label for="floatingselect">Agama</label>
                                                  </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                      <option>SD</option>
                                                      <option>SMP</option>
                                                      <option>SMA</option>
                                                      <option>S1</option>
                                                      <option>S2</option>
                                                      <option>Tidak bersekolah</option>
                                                    </select>
                                                    <label for="floatingselect">Pendidikan</label>
                                                  </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                      <option>PNS</option>                                                
                                                      <option>Petani</option>                                                
                                                      <option>Pedagang</option>                                                
                                                      <option>Nelayan</option>                                                
                                                      <option>Buruh</option>                                                
                                                      <option>Pegawai Swasta</option>                                                
                                                      <option>Rohaniawan</option>                                                
                                                      <option>Polisi/tentara</option>                                                
                                                      <option>Guru/Pendidikan</option>                                                
                                                      <option>Serabutan</option>                                                
                                                      <option>Supir</option>                                                
                                                      <option>Tenaga kesehatan</option>                                                
                                                      <option>Tidak bekerja</option>                                                
                                                    </select>
                                                    <label for="floatingselect">Pekerjaan</label>
                                                  </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                      <option>Tidak berpenghasilan</option>
                                                      <option>kurang dari Rp1.000.000,00</option>
                                                      <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                      <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                      <option>Lebih dari Rp3.000.000,00</option>                                                
                                                    </select>
                                                    <label for="floatingselect">Penghasilan</label>
                                                  </div><br>
          
                                          </div>
                                          <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                          </form>
                                          </div>
                                        </div>
                                      </div>
                                   </div>
      
      
                                    {{-- edit data ibu --}}
                                    @foreach($siswa as $s)
                                    <div class="modal fade" id="{{ 'modal'.$s->id_user }}_ibu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      @endforeach
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> Edit data ibu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body"> 
                                                  <form action="{{ route('ibu.update') }}" method="post">
                                                      {{ csrf_field() }}
                                                      <div class="mb-3"> @foreach($ibu as $s)
                                                          <div class="form-floating">
                                                              <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                              <label for="floatingselect">Nama Ibu</label>
                                                          </div>
                                                      </div>                                                        <div class="mb-3">
                                                          <div class="form-floating">
                                                              <input type="number" value="{{ $s->nik }}" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                              <label for="floatingselect">NIK</label>
                                                          </div>
                                                      </div>
                                                      <div class="input-group">
                                                          <div class="form-floating">
                                                              <input type="text" value="{{ $s->tempat_lahir }}" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                              <label for="floatingselect">Tempat lahir</label>
                                                          </div>
                                                          <div class="form-floating">
                                                              <input type="date" value="{{ $s->tgl_lahir }}" name="tgl_lahir"  class="form-control">
                                                              <label for="floatingselect">Tanggal lahir</label>
                                                          </div> 
                                                      </div><br>                                
                                                      <div class="mb-3">
                                                          <div class="form-floating"> 
                                                              <input type="text" value="{{ $s->no_telepon }}" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                              <label for="floatingselect">No Telepon</label>
                                                          </div>
                                                      </div>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="agama" aria-label="Default select example">
                                                          <option>{{ $s->agama }}</option>
                                                          <option>Islam</option>
                                                          <option>Kristen</option>
                                                          <option>Katholik</option>
                                                          <option>Budha</option>
                                                          <option>Konghucu</option>
                                                        </select>
                                                        <label for="floatingSelect">Agama</label>
                                                      </div><br>
                                                        <div class="form-floating">
                                                          <select class="form-select" name="pendidikan"id="floatingSelect" aria-label="Floating label select example">
                                                            <option>{{ $s->pendidikan }}</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA/k</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
                                                            <option>Tidak bersekolah</option>
                                                          </select>
                                                          <label for="floatingSelect">Pendidikan</label>
                                                        </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                          <option>{{ $s->penghasilan }}</option>
                                                          <option>Tidak berpenghasilan</option>
                                                          <option>kurang dari Rp1.000.000,00</option>
                                                          <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                          <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                          <option>Lebih dari Rp3.000.000,00</option> 
                                                        </select>
                                                        <label for="floatingSelect">Penghasilan</label>
                                                      </div><br>
                                                        <div class="form-floating">
                                                        <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                          <option>{{ $s->pekerjaan }}</option>
                                                          <option>PNS</option>                                                
                                                          <option>Petani</option>                                                
                                                          <option>Pedagang</option>                                                
                                                          <option>Nelayan</option>                                                
                                                          <option>Buruh</option>                                                
                                                          <option>Pegawai Swasta</option>                                                
                                                          <option>Rohaniawan</option>                                                
                                                          <option>Polisi/tentara</option>                                                
                                                          <option>Guru/Pendidikan</option>                                                
                                                          <option>Serabutan</option>                                                
                                                          <option>Supir</option>                                                
                                                          <option>Tenaga kesehatan</option>                                                
                                                          <option>Tidak bekerja</option>                                                
                                                        </select><br>
                                                        <label for="floatingSelect">Pekerjaan</label>
                                                      </div>
                                                      @endforeach 
                                                  </div>
                                              <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                                          </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>    
                              </div> 
                              </div> 
                      <div class="collapse" id="file">
                        <div class="card" style="border:none">
                          <div class="accordion" id="accordionExample">
                              <div class="accordion-item" style="border:none">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Foto saya
                                  </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card" style="border:none">
                                  <div class="accordion-body">
                                      <div class="accordion-body">
                                          <div class="row g-0">
                                              <div class="col-md-4">
                                                @forelse($foto as $f)
                                                <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                        <h5 class="card-title">Foto saya</h5>
                                                        <p class="card-text"></p>
                                                        <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">ganti foto</a></p>

                                                </div>
                                              </div>
                                              @empty
                                              <img src="{{ asset('images/download.png') }}" class="img-fluid" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                              <div class="card-body">
                                                      <h5 class="card-title">Foto saya</h5>
                                                      <p class="card-text"></p>
                                                      <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">upload</a></p>
                                              </div>
                                            </div>
                                              @endforelse
                                          </div>
                                      </div> 
                                  </div>                                   
                              </div>
                                </div>
                              </div>
                              <div class="accordion-item" style="border:none">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Akta kelahiran saya
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  
                                  <div class="card" style="border:none">
                                      <div class="accordion-body">
                                          <div class="row g-0">
                                              <div class="col-md-4">
                                                  @foreach($akta as $f)
                                                <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">@endforeach
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                        <h5 class="card-title">Foto saya</h5>
                                                        <p class="card-text"></p>
                                                        <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">upload</a></p>
                                                </div>
                                              </div>
                                          </div>
                                      </div>                                    
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item" style="border:none">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Kartu keluarga saya
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="card" style="border:none">
                                      <div class="accordion-body">
                                          <div class="row g-0">
                                              <div class="col-md-4">
                                                  @foreach($kk as $f)
                                                <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">@endforeach
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                        <h5 class="card-title">Foto saya</h5>
                                                        <p class="card-text"></p>
                                                        <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">upload</a></p>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div></div>
                          </div>
               </div>
          </div>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload foto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('foto/create') }}"  method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="file" class="form-control" name="file" id="">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button></form>
              </div>
            </div>
          </div>
      </div>
      <div class="modal fade" id="akta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload akta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('akta/create') }}"  method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="file" class="form-control" name="file" id="">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button></form>
              </div>
            </div>
          </div>
      </div>
      <div class="modal fade" id="kk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload akta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('kk/create') }}"  method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <input type="file" class="form-control" name="file" id="">
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button></form>
              </div>
            </div>
          </div>
      </div>

      

  </div>
</div>
    </section>

    
    
    
    <section class="u-clearfix u-grey-10 u-valign-top-lg u-valign-top-xl u-section-2" id="sec-7c5b">
      <div class="u-expanded-width u-shape u-shape-rectangle u-white u-shape-1"></div>
      <div class="u-clearfix u-gutter-50 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h2 class="u-align-left u-text u-text-1">i am <span style="font-weight: 700;">designer</span>
                </h2>
                <img src="images3/a9dcc2d3-077b-4cbf-35f1-05a7ca2b6438.jpg" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1000" data-image-height="919">
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <img class="u-expanded-width u-image u-image-2" src="images3/ret-min.jpg">
                <p class="u-align-left u-text u-text-2">Images from <a href="https://www.freepik.com/psd/logo" class="u-border-1 u-border-black u-btn u-button-link u-button-style u-none u-text-body-color u-btn-1" target="_blank">Freepik</a>
                </p>
                <a href="https://nicepage.com/website-builder" class="u-border-2 u-border-grey-dark-1 u-btn u-button-style u-none u-btn-2">read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-white u-section-3" id="carousel_96a0">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-right u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h1 class="u-text u-text-1">we<br>build<br>
                    <span style="font-weight: 700;">digital</span>
                  </h1>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <p class="u-text u-text-2">Article evident arrived express highest men did boy. Mistress sensible entirely am so. Quick can manor smart money hopes worth too. Comfort produce husband boy her had hearing. Law others theirs passed but wishes. You day real less till dear read. Considered use dispatched melancholy sympathize discretion led.</p>
                  <a href="#" class="u-btn u-button-style u-palette-2-base u-btn-1">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="carousel_9d5a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-border-6 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
        <h2 class="u-align-center u-custom-font u-font-pt-sans u-text u-text-1">We design People Inspired Experiences that create positive change in people's lives.</h2><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-193a"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-193a" style="enable-background:new 0 0 512 512;"><g><g><path d="M374.108,373.328c-7.829-7.792-20.492-7.762-28.284,0.067L276,443.557V20c0-11.046-8.954-20-20-20    c-11.046,0-20,8.954-20,20v423.558l-69.824-70.164c-7.792-7.829-20.455-7.859-28.284-0.067c-7.83,7.793-7.859,20.456-0.068,28.285    l104,104.504c0.006,0.007,0.013,0.012,0.019,0.018c7.792,7.809,20.496,7.834,28.314,0.001c0.006-0.007,0.013-0.012,0.019-0.018    l104-104.504C381.966,393.785,381.939,381.121,374.108,373.328z"></path>
</g>
</g></svg></span>
        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">view portfolio</h5>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-valign-middle u-white u-section-5" id="sec-4a05">
      <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/mockup-with-gold-logo_136295-386.jpg" alt="3d logo mockup">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-1">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">3d logo mockup</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/logo-mockup-black-facade-sign_145275-281.jpg" alt="modern facade">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-2">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">modern facade</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/abstract-mock-up-logo-shopping-bag_23-2148834294.jpg" alt="shopping bag">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-3">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">shopping bag</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/rr.jpg" alt="minimalistic design">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-4">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">minimalistic design</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/logo-mockup-luxury-black-facade-sign_145275-288.jpg" alt="luxury black facade">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-5">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">luxury black facade</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/3d-lion-logo-mockup_145275-144.jpg" alt="mockup with logo">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-6">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">mockup with logo</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/rounded-corner-business-cards-mockup_358694-108.jpg" alt="business card">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-7">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">business card</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/mock-up-logo-design-business-white-paper_23-2148834253.jpg" alt="identity design">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-8">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">identity design</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide">
              <img class="u-back-image u-expanded" src="images3/black-white-business-card-mockup-design_47987-2181.jpg" alt="modern design">
            </div>
            <div class="u-over-slide u-shading u-valign-middle u-over-slide-9">
              <h3 class="u-gallery-heading" style="text-transform: uppercase;">modern design</h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
        </div>
      </div>
      <p class="u-text u-text-1">Images from <a href="https://www.freepik.com/psd/logo" class="u-border-1 u-border-black u-btn u-button-link u-button-style u-none u-text-body-color u-btn-1" target="_blank">Freepik</a>
      </p>
      <a href="#" class="u-align-center u-btn u-button-style u-palette-2-base u-btn-2">view more</a>
    </section>
    <section class="u-clearfix u-section-6" id="carousel_4f5f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-1">
                    <span style="font-weight: 700;">Visual communication</span> for brands and people
                  </h2>
                  <p class="u-text u-text-2">Pellentesque elit eget gravida cum sociis natoque penatibus et magnis. Magna fringilla urna porttitor rhoncus dolor purus non enim praesent. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Tellus cras adipiscing enim eu turpis egestas pretium aenean.</p>
                  <a href="#" class="u-align-center u-btn u-button-style u-palette-2-base u-btn-1">view more</a>
                </div>
              </div>
              <div class="u-align-right u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-xl u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <p class="u-text u-text-3">Viverra nibh cras pulvinar mattis nunc sed. Pulvinar mattis nunc sed blandit libero. Rhoncus aenean vel elit scelerisque. Diam donec adipiscing tristique risus nec feugiat. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi. Quis eleifend quam adipiscing vitae proin sagittis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-7" data-image-width="1980" data-image-height="806" id="sec-77fd">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-large-text u-text u-text-variant u-text-1">We want to stay in touch with&nbsp;you!&nbsp;Please follow us&nbsp;on&nbsp;social media&nbsp;so we can keep in touch.</p>
        <div class="u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-2cb5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-2cb5"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg>
          
          
        </span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-6bbf"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-6bbf"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg>
          
          
        </span>
          </a>
          <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-a970"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-a970"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg>
          
          
        </span>
          </a>
          <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-f2b5"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-f2b5"><path d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"></path></svg>
          
          
        </span>
          </a>
          <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-0427"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-0427"><path d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z"></path></svg>
          
          
        </span>
          </a>
        </div>
        <p class="u-text u-text-2">Images from <a href="https://www.freepik.comhttps://www.freepik.com/photos/background" class="u-border-1 u-border-white u-btn u-button-link u-button-style u-none u-text-body-alt-color u-btn-1" target="_blank">Freepik</a>
        </p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-image u-shading u-section-8" src="" data-image-width="256" data-image-height="256" id="sec-e03a">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">INTUITIVE</h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
        <a href="#" class="u-btn u-button-style u-palette-2-base u-btn-1">Read More</a>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-palette-1-base u-footer" id="sec-0f65"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="landing-page" target="_blank">
        <span>Landing Page</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Offline Website Builder</span>
      </a>. 
    </section>
  </body>
</html>