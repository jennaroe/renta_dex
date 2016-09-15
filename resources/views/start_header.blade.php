  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/start') }}" class="logo">
      <span class="logo-mini"><b>RD</b></span>

      <span class="logo-lg">
      <img src="{{ asset("/bower_components/AdminLTE/dist/img/Logomakr_84wPjb_resize.png") }}" alt="Logo Image"/></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown user user-menu">
                          <!-- Menu Toggle Button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs"> {{ Auth::user()->name }} </span>
                            </a>

                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="{{ asset("/bower_components/AdminLTE/dist/img/Logomakr_7uOirD.png") }}" class="img-circle" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->name }}</br>
                                        {{ Auth::user()->brokerName }} 
                                        

                                    </p>
                                </li>
                              <!-- Menu Footer-->
                                <li class="user-footer">
                                  <div class="pull-left">
                                    <a href="{{ url('/acctInfo') }}" class="btn btn-default btn-flat">Profile</a>
                                  </div>
                                  <div class="pull-right">
                                    <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                  </div>
                                </li>
                            
                        </li>
                    @endif
      
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  