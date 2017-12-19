<div class="left-navigation">
    <ul class="list-accordion">
        <li><a href="{{ url('/') }}" class="waves-effect"><span class="nav-icon"><i class="fa fa-home"></i></span><span class="nav-label">Dashboard</span></a>

        </li>
        <li><a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-gear"></i></span><span class="nav-label">Master Data</span></a>

        </span></a>

            <ul>

                {{-- <li><a href="{{ url('units') }}">Jenis Kendaraan</a></li> --}}



            </ul>

        </li>
        
        <li><a href="{{ url('orders') }}" class="waves-effect"><span class="nav-icon"><i class="fa fa-send"></i></span>Orders</span></a>
    
        </li>
        <li><a href="{{ url('taman') }}"><span class="nav-icon"><i class="fa fa-asterisk"></i></span>Data Taman</a></li>
        <li><a href="{{ url('pemakaman') }}"><span class="nav-icon"><i class="fa fa-hotel"></i></span>Data Pemakaman</a></li>
        <li><a href="{{ url('barang') }}"><span class="nav-icon"><i class="fa fa-cubes"></i></span>Data Barang</a></li>
        @if (Auth::user()->role == 'Admin')
          <li><a href="#" class="waves-effect"><span class="nav-icon"><i class="fa fa-user"></i></span><span class="nav-label">Management User</span></a>
          </span></a>
              <ul>
                  <li><a href="{{ url('user') }}">User</a></li>
              </ul>
          </li>
        @endif
        
    </ul>
</div>
