@extends('admin.layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap number-rotate">
            <span class="stat-w-title">Kontak</span>
            <a href="{{ url('kontak') }}" class="ico-cirlce-widget w_bg_cyan">
                <span><i class="ico-users"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="100" data-animation-duration="1500">100</span>
                <span class="w-meta-title">Orang</span>

            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap iconic-w-wrap">
            <span class="stat-w-title">Kotak Masuk</span>
            <a href="{{ url('/') }}" class="ico-cirlce-widget w_bg_green">
                <span><i class="fa fa-inbox"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="200" data-animation-duration="1500">200</span>
                <span class="w-meta-title">Pesan</span>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap iconic-w-wrap">
            <span class="stat-w-title">Kotak Keluar</span>
            <a href="#" class="ico-cirlce-widget w_bg_blue_grey">
                <span><i class="fa fa-send"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="400" data-animation-duration="1500">400</span>
                <span class="w-meta-title">Pesan</span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap iconic-w-wrap">
            <span class="stat-w-title">Saldo & Masa Aktif SMS</span>
            <a href="#" class="ico-cirlce-widget w_bg_red">
                <span><i class="fa fa-envelope"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="1000" data-animation-duration="1500">100 SMS</span>
                <span class="w-meta-title">100</span>
            </div>
        </div>
    </div>
</div>

<div class="row">
<div class="col-md-12">
        <div class="box-widget widget-module">
            <div class="widget-head clearfix">
                <span class="h-icon"><i class="fa fa-dashboard"></i></span>
                <h4>Selamat Datang</h4>
                <ul class="widget-action-bar pull-right">
                    <li><span class="waves-effect w-reload"><i class="fa fa-spinner"></i></span>
                    </li>
                </ul>
            </div>
            <div class="widget-container">
                <div class="table-responsive">
                    <table class="table w-order-list table-striped">
                        <thead>
                        <tr>
                            <th>
                                Selamat datang di Admin Manager.<br><br><br>
                            </th>
                            

                        </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
