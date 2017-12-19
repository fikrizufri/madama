@extends('layouts.admin')

@section('content')
 
     <div class="row">
        <div class="col-md-12">
            <div class="box-widget widget-module">
            <div class="widget-head clearfix">
                                <span class="h-icon"><i class="fa fa-bars"></i></span>
                                <h4>Detail Data</h4>

                            </div>
                <div class="widget-container">
                    <div class=" widget-block">

                  <label class="col-md-3 control-label">No Barang</label>

                      <dl>

                          <dt>{{$data->no}}</dt>

                      </dl>
    
                  <label class="col-md-3 control-label">Foto</label>
                <dl>
                    <dt>  {{ Html::image('foto/' . $data->foto, 'alt', ['width' => '30%']) }}</dt>
                </dl>

                <label class="col-md-3 control-label">Nama Barang</label>
                <dl>
                    <dt>{{$data->nama_barang}}</dt>
                </dl>

                <label class="col-md-3 control-label">Jenis Barang</label>
                <dl>
                    <dt>{{$data->JenisBarang_->jenis_barang}} </dt>
                </dl>

                <label class="col-md-3 control-label">Harga</label>
                <dl>
                    <dt>Rp. {{formatNumber($data->harga, 'IDR')}} ,-</dt>
                </dl>

                <label class="col-md-3 control-label">Tahun Pengadaan</label>
                <dl>
                    <dt>{{$data->tahun}}</dt>
                </dl>

               <a class="btn btn-primary" href="{{route('barang.index')}}">Kembali</a>


                    </div>
                    </div>
                    </div>
                    </div>
                    </div>

@endsection
