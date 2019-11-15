@extends('templates/default')

@section('content')

<!-- page content -->
<div class="center_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Data Pasien Medhealth Hospital</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>


<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pasien</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="pull-right">
                    <a href="" class="btn btn-dark btn-xs" ><i class="glyphicon glyphicon-refresh"></i></a>
                    <a href="add.php" class="btn btn-success btn-xs" ><i class="glyphicon glyphicon-plus"> Tambah Obat</i></a>
                  </div>
                  <div class="x_content">
                    
                    <div class="table-responsive">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>ID</th>
                          <th>Nama Obat</th>
                          <th>Keterangan</th>
                          <th>Stok Obat</th>
                          <th>Exp. Date</th>
                          <th>Id Vendor</th>
                          <th>Stok Obat</th>
                          <th>Created Date</th>
                          <th>Update Date</th>
                          <th><i class="glyphicon glyphicon-cog"></i></th>
                        </tr>
                      </thead>
                      
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>

@endsection