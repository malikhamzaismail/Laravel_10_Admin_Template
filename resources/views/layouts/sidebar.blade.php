<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project Name</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.dashboard') }}" class="d-block">{{ Str::ucfirst(Auth::user()->name) }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


               @if(Auth::user()->user_type == 1)
               {
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link @if(Request::segment(2) == 'dashboard') active : '' @endif">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.admin') }}" class="nav-link  @if(Request::segment(2) == 'admin') active : '' @endif">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Admin
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.teacher') }}" class="nav-link @if(Request::segment(2) == 'teacher') active : '' @endif">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Teacher
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.student') }}" class="nav-link @if(Request::segment(2) == 'student') active : '' @endif">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Student
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.parent') }}" class="nav-link @if(Request::segment(2) == 'parent') active : '' @endif">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                        Parent
                      </p>
                    </a>
                  </li>
               }
               @elseif(Auth::user()->user_type == 2)
               {
                <li class="nav-item">
                    <a href="{{ route('teacher.dashboard') }}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
               }
               @elseif(Auth::user()->user_type == 3)
               {
                <li class="nav-item">
                    <a href="{{ route('student.dashboard') }}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
               }
               @elseif(Auth::user()->user_type == 4)
               {
                <li class="nav-item">
                    <a href="{{ route('parent.dashboard') }}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
               }
               @else
               {
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                      <i class="nav-icon fa fa-sign-out-alt"></i>
                      <p>
                        Logout
                      </p>
                    </a>
                  </li>
               }
               @endif






          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
