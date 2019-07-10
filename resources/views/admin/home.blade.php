@extends('admin.index')
@section('content')

      <!-- Small boxes (Stat box) -->
      <div class="row">
        
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>5</h3>

              <p>Refugee Registrations</p>
            </div>
            <div class="icon">
              <i class="ion-person-add"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>2</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>3</h3>

              <p>Organizations</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        
        <section class="col-lg-7 connectedSortable">
          
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              
              <li class="pull-left header"><i class="fa fa-inbox"></i>News</li>
            </ul>
            <div class="tab-content no-padding">
              <img src="{{url('/design/adminlte')}}/dist/img/REFUGEES-1.jpg" style="width:100%;" alt="User Image">
              <p style="font-family: Aria; font-weight: bold;">
                In its latest report on Egypt, the United Nations High Commissioner for Refugees (UNHCR) revealed that there were <span style="color:#5995B8">221,675</span> registered refugees on its territory, including <span style="color:#5995B8">127,414</span> Syrians, accounting for 57% of the total refugee population on Egyptian territory, with 36,195 Sudanese refugees on land Egypt, <span style="color:#5995B8">14,564</span> Ethiopian refugees, 12,959 refugees from Eritrea, <span style="color:#5995B8">10,158</span> refugees from Southern Sudan, and <span style="color:#5995B8">20,25</span> refugees from 51 other countries at the end of January 2018.
              </p>
              
            </div>
          </div>

          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              
              <li class="pull-left header"><i class="fa fa-inbox"></i>
              Refugees working in Egypt</li>
            </ul>
            <div class="tab-content no-padding">
              <img src="{{url('/design/adminlte')}}/dist/img/E9C8WB.jpg" style="width:100%;" alt="User Image">
              <p style="font-family: Aria; font-weight: bold;">
                We are working to provide jobs for refugees in Egypt
              </p>
              
            </div>
          </div>
          

          
          <!-- /.nav-tabs-custom -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Refugees In World
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
@endsection