<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AlgField">
    <meta name="author" content="Ediyono">
    <title>{{ $title }} | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/waves.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/layout.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/components.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/plugins.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/common-styles.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/pages.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin/css/matmix-iconfont.css')}}" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,500italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="page-container list-menu-view">
<!--Leftbar Start Here -->
<div class="left-aside desktop-view">
    <div class="aside-branding">
        <a href="{{ url('/') }}" class="iconic-logo"><img src="{{ asset('admin/images/logo-iconic.png') }}" alt="iEmployee">
        </a>
        <a href="{{ url('/') }}" class="large-logo"><img src="{{ asset('admin/images/logo-large.png') }}" alt="iEmployee">
        </a><span class="aside-pin waves-effect"><i class="fa fa-thumb-tack"></i></span>
        <span class="aside-close waves-effect"><i class="fa fa-times"></i></span>
    </div>
    @include('layouts.menuadmin')
</div>
<div class="page-content">
<!--Topbar Start Here -->
<header class="top-bar">
    <div class="container-fluid top-nav">
        <div class="search-form search-bar">
            <form>
                <input name="searchbox" value="" placeholder="Search Topic..." class="search-input">
            </form>
            <span class="search-close waves-effect"><i class="ico-cross"></i></span>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="clearfix top-bar-action">
                    <span class="leftbar-action-mobile waves-effect"><i class="fa fa-bars "></i></span>
                    <span class="leftbar-action desktop waves-effect"><i class="fa fa-bars "></i></span>
                        <span class="waves-effect search-btn mobile-search-btn">
                        <i class="fa fa-search"></i>
                        </span>
                    <span class="rightbar-action waves-effect"><i class="fa fa-bars"></i></span>
                </div>
            </div>
            <div class="col-md-4 responsive-fix top-mid">

                <div class="pull-left mobile-search">
                        <span class=" waves-effect search-btn">
                        <i class="fa fa-search"></i>
                        </span>
                </div>
            </div>
            <div class="col-md-6 responsive-fix">
                <div class="top-aside-right">
                  <div class="user-nav">
                                      <ul>
                                          <li class="dropdown">
                                              <a data-toggle="dropdown" href="#" class="clearfix dropdown-toggle waves-effect waves-block waves-classic">
                                                  <span class="user-info">{{ Auth::user()->name }} <cite>{{ Auth::user()->email }}</cite></span>
                                                  <span class="user-thumb">{{ Html::image('foto/' .Auth::user()->foto) }}</span>
                                              </a>
                                              <ul role="menu" class="dropdown-menu fadeInUp">

                                                  <li><a href="{{url('setting')}}/{{ Auth::user()->id }}"><span class="user-nav-icon"><i class="fa fa-cogs"></i></span><span class="user-nav-label">Settings</span></a>
                                                  </li>

                                                   <li>
                                                      <a href="{{ route('logout') }}"
                                                          onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                                          Logout
                                                      </a>

                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                          {{ csrf_field() }}
                                                      </form>
                                                  </li>
                                              </ul>
                                          </li>
                                      </ul>
                                  </div>

                </div>
            </div>
        </div>
    </div>
</header>
<div class="main-container">
<div class="container-fluid">
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-md-7">
            <div class="page-breadcrumb-wrap">

                <div class="page-breadcrumb-info">
                    <ul class="list-page-breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5">
        </div>
    </div>
</div>

@yield('content')


</div>
</div>
<!--Footer Start Here -->
<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <span>&copy; 2017 &brvbar;&nbsp;<a href="#">Dinas Perumahan dan Pemukiman Kota Samarinda</a></span>
                </div>
            </div>            
        </div>
    </div>
</footer>
</div>
</div>
<!--Rightbar Start Here -->
<script type="text/javascript">
                function goBack() {
                window.history.back();
                }
                function ConfirmDelete() {
                        return confirm("Are you sure you want to delete?");
                }
        </script>
<script src="{{ asset('admin/js/jquery-1.11.2.min.js')}}"></script>
<script src="{{ asset('admin/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{ asset('admin/js/jRespond.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('admin/js/nav-accordion.js')}}"></script>
<script src="{{ asset('admin/js/hoverintent.js')}}"></script>
<script src="{{ asset('admin/js/waves.js')}}"></script>
<script src="{{ asset('admin/js/switchery.js')}}"></script>
<script src="{{ asset('admin/js/jquery.loadmask.js')}}"></script>
<script src="{{ asset('admin/js/icheck.js')}}"></script>
<script src="{{ asset('admin/js/select2.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-filestyle.js')}}"></script>
<script src="{{ asset('admin/js/bootbox.js')}}"></script>
<script src="{{ asset('admin/js/animation.js')}}"></script>
<script src="{{ asset('admin/js/colorpicker.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('admin/js/sweetalert.js')}}"></script>
<script src="{{ asset('admin/js/moment.js')}}"></script>
<script src="{{ asset('admin/js/calendar/fullcalendar.js')}}"></script>
<script src="{{ asset('admin/js/summernote.min.js')}}"></script>
<!--Data Tables-->
<script src="{{ asset('admin/js/jquery.dataTables.js')}}"></script>
<script src="{{ asset('admin/js/dataTables.responsive.js')}}"></script>
<script src="{{ asset('admin/js/dataTables.tableTools.js')}}"></script>
<script src="{{ asset('admin/js/dataTables.bootstrap.js')}}"></script>
<script src="{{ asset('admin/js/stacktable.js')}}"></script>

<!--Forms Plugins-->
<script src="{{ asset('admin/js/selectize.js')}}"></script>

<script src="{{ asset('admin/js/chart.init.js')}}"></script>
<script src="{{ asset('admin/js/smart-resize.js')}}"></script>
<script src="{{ asset('admin/js/layout.init.js')}}"></script>
<script src="{{ asset('admin/js/matmix.init.js')}}"></script>
<script src="{{ asset('admin/js/retina.min.js')}}"></script>
<script>
function confirmation(){
    if(confirm('Apakah Anda yakin akan Mengapus Data ?')){
        document.getElementById('delete-form').submit();
    }else{
        return false;
    }
}

</script>

</body>
</html>
