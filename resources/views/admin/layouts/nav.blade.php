<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin Panel</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      @include('admin.layouts.menu')
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('/design/adminlte')}}/dist/img/girl.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{adguard()->user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"></li>
        <li class=" treeview">
          <li class=""><a href="{{URL('admin')}}"><i class="fa fa-dashboard"></i>{{trans('admin.dashboard')}}</a></li>
        </li>
        <!--Settings-->
        <li class="">
          <a href="{{URL('admin/settings/setting')}}">
            <i class="fa fa-cog"></i> <span>{{trans('admin.setting')}}</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
      
        <!--Admins Accounts-->
        <li class="treeview {{active_menu('admin')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i><span>{{trans('admin.admin')}}</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu" style="{{active_menu('admin')[1]}}">
            <li class="active"><a href="{{URL('admin/ad/index')}}"><i class="fa fa-users"></i>{{trans('admin.admin')}}</a></li>

          </ul>
        </li>

        <!--users Accounts-->
        <li class="treeview {{active_menu('users')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i><span>{{trans('admin.users')}}</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu" style="{{active_menu('users')[1]}}">
            <li class="active"><a href="{{URL('admin/user/index')}}"><i class="fa fa-user"></i>All Members</a></li>
            <li class="active"><a href="{{URL('admin/user/index')}}?level=user"><i class="fa fa-user"></i>{{trans('admin.user')}}</a></li>
            <li class="active"><a href="{{URL('admin/user/index')}}?level=Refugee"><i class="fa fa-user"></i>{{trans('admin.refugee')}}</a></li>
            
          </ul>
        </li>

        

        <!--Jobs-->
        <li class="treeview {{active_menu('job')[0]}}">
          <a href="#">
            <i class="fa fa-building"></i><span>{{trans('admin.job')}}</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu" style="{{active_menu('job')[1]}}">
            <li class="active"><a href="{{URL('admin/job/index')}}"><i class="fa fa-building"></i>{{trans('admin.job')}}</a></li>
            <li class="active"><a href="{{URL('admin/job/add')}}"><i class="fa fa-plus"></i>Add job</a></li>
            

          </ul>
        </li>


        <!--Apartment-->
        <li class="treeview {{active_menu('Apartment')[0]}}">
          <a href="#">
            <i class="fa fa-building"></i><span>{{trans('admin.Apartment')}}</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu" style="{{active_menu('Apartment')[1]}}">
            <li class="active"><a href="{{URL('admin/apart/index')}}"><i class="fa fa-building"></i>{{trans('admin.Apartment')}}</a></li>
            <li class="active"><a href="{{URL('admin/apart/add')}}"><i class="fa fa-plus"></i>Add Apartment</a></li>
            

          </ul>
        </li>

        <!--Donors-->
        <li class="treeview {{active_menu('donors')[0]}}">
          <a href="#">
            <i class="fa fa-users"></i><span>{{trans('admin.donors')}}</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu" style="{{active_menu('donors')[1]}}">
            <li class="active"><a href="{{URL('admin/donors/index')}}"><i class="fa fa-users"></i>{{trans('admin.donors')}}</a></li>
            

          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside> 