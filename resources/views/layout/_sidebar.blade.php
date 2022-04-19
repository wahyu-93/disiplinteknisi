    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">TA KALTARA</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">TA</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown active">
            <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Starter</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Master</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="{{ route('pendidikan.index') }}">Pendidikan</a></li>
              <li><a class="nav-link" href="{{ route('direktorat.index') }}">Direktorat</a></li>
              <li><a class="nav-link" href="{{ route('mitra.index') }}">Mitra</a></li>
              <li><a class="nav-link" href="{{ route('posisi.index') }}">Posisi Mitra</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Naker</span></a></li>
      </ul>  
    </aside>