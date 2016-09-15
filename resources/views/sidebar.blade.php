<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
           

            <div class="pull-left image">
                <img src="{{ asset("/bower_components/AdminLTE/dist/img/Logomakr_7uOirD.png") }}" class="img-circle" alt="User Image" />
            </div>

            @if (Auth::guest())
            
                <p> Log in or Register</p>
            @else
            <div class="pull-left info">

                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>

            @endif
        </div>

        <!-- search form (Optional) -->
<!--         <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
            </div>
        </form> -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Select</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/home"><span>Home</span></a></li>
            <li><a href="/clients"><span>Clients</span></a></li>
            <li><a href="/commissions"><span>Commission Tracker</span></a></li>
            <li><a href="/tours"><span>Tours</span></a></li>
            <li><a href="/invoices"><span>Invoices</span></a></li>
            <li><a href="/buildings"><span>Buildings</span></a></li>
            <li><a href="/acctInfo"><span>Profile</span></a></li>

            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>