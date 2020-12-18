 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/astronaut.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">  {{ Auth::user()->name }}</a>
        </div>
      </div>

 
   

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a  href="{{route('admin')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
         
              
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('tournaments.index')}}"class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
          <p>Tournaments</p>
              
            </a>
          </li>
          <li class="nav-item">
            <a  href="{{route('divisions.index')}}"class="nav-link">
            <i class="nav-icon fas fa-motorcycle"></i>
            <p>Divison</p>
              
        
            </a>
          </li>
          <li class="nav-item">
            <a  href="{{route('admin.players')}}"class="nav-link">
            <i class="nav-icon fas fa-users-cog"></i>
          
            <p>Players</p>
              
        
            </a>
          </li>

          <li class="nav-item">
            <a  href="{{route('admin.players')}}"class="nav-link">
           <i class="nav-icon  fas fa-bullhorn"></i>
            <p>Add Manual</p>
              
        
            </a>
          </li>

          <li class="nav-item">
            <a  href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>
              
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>



          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>