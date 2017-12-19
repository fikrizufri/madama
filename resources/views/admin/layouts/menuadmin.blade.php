<div class="left-navigation">
    <ul class="list-accordion">
        <li><a href="{{ url('/') }}" class="waves-effect"><span class="nav-icon"><i class="fa fa-home"></i></span><span class="nav-label">Dashboard</span></a>

        </li>
        
        <li><a href="{{ url('kontak') }}" class="waves-effect"><span class="nav-icon"><i class="fa fa-send"></i>
        </span><span class="nav-label">Data Kendaraan</span></a>
            <ul>
                <li><a href="{{ url('smskontak') }}">Tambah Kendaraan</a></li>

                <li><a href="{{ url('smsgroup') }}">Import Data Kendaraan</a></li>

                
            </ul>
        </li>
        
        <li><a href="{{ url('user') }}"><span class="nav-icon"><i class="fa fa-gear"></i></span><span class="nav-label">Master Data</span></a></li>
    </ul>
</div>
