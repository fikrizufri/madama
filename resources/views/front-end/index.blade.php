@include('front-end.layouts.header')
@include('front-end.layouts.menu')


    <section class="cd-hero">
        <ul class="cd-hero-slider autoplay">
        <!--
            <ul class="cd-hero-slider autoplay"> for slider auto play
            <ul class="cd-hero-slider"> for disabled auto play
        -->
            <li class="selected first-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Introduction to</span>
                        <h2>E-Data</h2>
                        <p>Phasellus interdum tortor sem. Quisque sit amet condimentum sem. Phasellus luctus, felis sit amet pulvinar luctus.</p>
                        <div class="primary-button">
                          <a href="#" class="scroll-link" data-id="about">Lihat Selengkapnya</a>
                        </div>

                    </div>
                </div> <!-- .cd-full-width -->
            </li>

            <li class="second-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>E-Asset</span>
                        <h2>E-Asset</h2>
                        <p>Donec dolor ipsum, laoreet nec metus non, tempus elementum massa. Donec non elit rhoncus, vestibulum enim sed, rutrum arcu.</p>
                        <div class="primary-button">
                            <a href="#" class="scroll-link" data-id="about">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div> <!-- .cd-full-width -->
            </li>

            <li class="third-slide">
                <div class="cd-full-width">
                    <div class="tm-slide-content-div slide-caption">
                        <span>Daftar Pegawai</span>
                        <h2>E-Pegawai</h2>
                        <p>Integer ut dolor eget magna congue gravida ut at arcu. Vivamus maximus neque quis luctus tempus. Vestibulum consequat.</p>
                        <div class="primary-button">
                          <a href="#" class="scroll-link" data-id="about">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div> <!-- .cd-full-width -->
            </li>
        </ul> <!-- .cd-hero-slider -->

        <div class="cd-slider-nav">
            <nav>
                <span class="cd-marker item-1"></span>

                <ul>
                    <li class="selected"><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                    <li><a href="#0"></a></li>
                </ul>
            </nav>
        </div> <!-- .cd-slider-nav -->
    </section> <!-- .cd-hero -->

    <div id="about" class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h4>E Portal Disperkim Kota Samarinda</h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="icon"><img src="{{asset('front-end/img/E-Perumahan.png')}}" width="30%" alt=""></div>
                        <a href="#">
                        <h4>E-Perumahan</h4>

                        </a>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                      <a href="#">
                        <div class="icon"><img src="{{asset('front-end/img/E-Data Portal.png')}}" width="30%" alt=""></div>
                        <h4>E-Data</h4>
                      </a>

                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                      <a href="#">
                        <div class="icon"><img src="{{asset('front-end/img/E-Asset.png')}}" width="30%" alt=""></div>
                        <div class="icon"></div>
                        <h4>E-Asset</h4>

                      </a>
                    </div>
                </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                      <a href="#">
                        <div class="icon"><img src="{{asset('front-end/img/E-Pekerja.png')}}" width="30%" alt=""></div>
                        <div class="icon"></div>
                        <h4>E-Pegawai</h4>

                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@include('front-end.layouts.footer')
