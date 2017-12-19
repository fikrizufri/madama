@extends('layouts.admin')

@section('content')


<div class="row">
<div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap number-rotate">
            <span class="stat-w-title">Kendaraan</span>
            <a href="{{ url('meja') }}" class="ico-cirlce-widget w_bg_cyan">
                <span><i class="ico-truck"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="{{$meja}}" data-animation-duration="1500">{{$meja}}</span>
                <span class="w-meta-title">Unit</span>

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap number-rotate">
            <span class="stat-w-title">Menu</span>
            <a href="{{ url('taman') }}" class="ico-cirlce-widget w_bg_cyan">
                <span><i class="fa fa-asterisk"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="{{$menu}}" data-animation-duration="1500">{{$menu}}</span>
                <span class="w-meta-title">Unit</span>

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap number-rotate">
            <span class="stat-w-title">Pelanggan</span>
            <a href="{{ url('pemakaman') }}" class="ico-cirlce-widget w_bg_cyan">
                <span><i class="fa fa-hotel"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="{{$pelanggan}}" data-animation-duration="1500">{{$pelanggan}}</span>
                <span class="w-meta-title">Unit</span>

            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="iconic-w-wrap number-rotate">
            <span class="stat-w-title">Meja</span>
            <a href="{{ url('barang') }}" class="ico-cirlce-widget w_bg_cyan">
                <span><i class="fa fa-cubes"></i></span>
            </a>
            <div class="w-meta-info">
                <span class="w-meta-value number-animate" data-value="{{$meja}}" data-animation-duration="1500">{{$meja}}</span>
                <span class="w-meta-title">Unit</span>
            </div>
        </div>
    </div>

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
                                Selamat datang di {{ $title }} Manager.<br><br><br>
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
