@extends('layouts.master')
@section('navbar')
<nav class="navbar navbar-expand-lg bg-info text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/index') }}">BTKLPP - Medan</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Struktur
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ url('/tatausaha') }}">Tata Usaha</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('/surveilans') }}">SE (SURVEILANS EPIDOMOLOGI)</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('/adkl') }}">ADKL</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ url('/ptl') }}">PTL</a>
                    </div>
                  </li>

                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Agenda</a></li>
                  <li class="nav-item dropdown mx-0 mx-lg-1">
                        <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a  href="{{ url('/visimisi') }}" class="dropdown-item ">
                                    Visi & Misi
                                </a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ url('/wilayahkerja') }}">Wilayah Kerja</a>
                        </div>
                  </li>

                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Buletin</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/berita') }}">Berita</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/pengumuman') }}">Pengumuman</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3" href="{{ url('/download') }}">Download</a></li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('content')
       <!-- Masthead-->
       <header class="bg-primary text-black text-center" style="padding-top: 80px">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">SELAMAT DATANG</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <h1 class="masthead-subheading font-weight-light mb-0">Balai Teknik Kesehatan Lingkungan dan Pengendalian Penyakit (BTKLPP) 
                Medan</h1>
        

        </div>
    </header>
    <!-- Agenda Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="row">
            <div class="col-sm-4">
                <div>
                    <h4 class="text-center text-uppercase text-secondary mb-0">Link Terkait</h4>
                    
                    <section id="contact"> 
                        <br>             
                       <div class="row justify-content-center">
                        <div class="card" style="width: 5rem;">
                            <a href="http://monev.anggaran.kemenkeu.go.id/smart/">
                                <img class="card-img-top" src="{{ asset('tes/img/logolink/smart.png') }}" alt="">
                            </a>
                           
                        </div>
                        <div class="card" style="width: 5rem;">
                            <a href="https://spanint.kemenkeu.go.id/spanint/latest/app/">
                                <img class="card-img-top" src="{{ asset('tes/img/logolink/span.png') }}" alt="">
                            </a>
                            
                     </div>
                     <div class="card" style="width: 5rem;">
                        <a href="https://www.bappenas.go.id/id/">
                            <img class="card-img-top" src="{{ asset('tes/img/logolink/ppn.png') }}" alt="">
                        </a>
                 </div>
                     <div class="card" style="width: 5rem;">
                    <a href="https://lpse.lkpp.go.id/eproc4">
                        <img class="card-img-top" src="{{ asset('tes/img/logolink/lpse.png') }}" alt="">
                    </a>
                </div>
                   <div class="card" style="width: 5rem ;">
                    <a href="https://e-rekon-lk.kemenkeu.go.id/login">
                        <img class="card-img-top" src="{{ asset('tes/img/logolink/erekon.jpg') }}" alt="">
                   </a>
                </div>
                   <div class="card" style="width: 5rem height: 5rem;">
                    <a href="https://ropeg.kemkes.go.id/">
                        <img class="card-img-top" src="{{ asset('tes/img/logolink/biro.png') }}" alt="">
                    </a>
                </div>
                 </section>


               </div>
            </div>

            <div class="col-sm-6">
                <div>
                    <h4 class="text-center text-uppercase text-secondary mb-0">Agenda</h4>
                    <br>
                   
                    <div class="row justify-content-center">
                        <!-- Portfolio Item 1-->
                        <div class="row justify-content-center">
                            <!-- Portfolio Item 1-->
                            <div class="col-md-6 col-lg-5 mb-5">
                                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset('tes/img/portfolio/satu.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!-- Portfolio Item 2-->
                            <div class="col-md-6 col-lg-5 mb-5">
                                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{asset('tes/img/portfolio/dua.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!-- Portfolio Item 3-->
                            <div class="col-md-6 col-lg-5 mb-5">
                                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{asset('tes/img/portfolio/tiga.jpg')}}" alt="" />
                                </div>
                            </div>
                            <!-- Portfolio Item 4-->
                            <div class="col-md-6 col-lg-5 mb-5">
                                <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{asset('tes/img/portfolio/lima.jpg')}}" alt="" />
                                </div>
                       </div>  
               </div>
            </div>           
        </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section portfolio" id="contact" style="padding-top: 10px">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Buletin</h2>
        <br>
       <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-4 mb-5" style="width: 15rem;">
            <div>
                 <img src="{{ asset('tes/img/portfolio/buletin_dbd.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Demam Berdarah</h5>
                      <p class="card-text">Demam Berdarah Dengue banyak ditemukan di daerah tropis dan sub-tropis. Data dari...
                        </span></p>
                        <a href="#" class="btn btn-primary">Baca selengkapnya</a>                      
                  </div>
            </div>
        </div>
        <div class="card col-md-6 col-lg-4 mb-5" style="width: 15rem;">
            <div>
                <img src="{{ asset('tes/img/portfolio/buletin_pnu.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Pneumonia</h5>
                      <p class="card-text">Pneumonia adalah penyakit infeksi menular yang merupakan penyebab utama kematian pada balita di dunia...</p>
                      <a href="#" class="btn btn-primary">Baca selengkapnya</a>
                    </div>
             </div>
        </div>
     </div>
       
    </section>

    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Whistleblowing system</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <a href="{{ url('/wbs') }}">
                <img style="width:100px;height:100px;" src="{{ asset('tes/img/portfolio/wb.png') }}" alt="gambar logo" />
            </a>

        </div>
        <!-- Contact Section Form-->

        {{-- link terkait --}}
      

     <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-sm-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Agenda</h2>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="tes/img/portfolio/satu.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Kegiatan yang sedang berlangsung.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Kegiatan</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset('tes/img/portfolio/dua.jpg')}}" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Kegiatan yang sedang berlangsung</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Kegiatan</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="tes/img/portfolio/tiga.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Telah terlaksana kegiatan harian.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">Controller</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="tes/img/portfolio/gambar.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Telah terlaksana kegiatan harian.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Agenda Kegiatan</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="tes/img/portfolio/empat.jpg" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Telah berlangsung kegiatan .</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Kegiatan</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="{{asset('tes/img/portfolio/lima.jpg')}}" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Kegiatan pelaksanaan keseharian.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection