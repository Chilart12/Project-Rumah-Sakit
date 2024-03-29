@extends('templates/default')

@section('content')

<a href="{{ route('pages.patients.index') }}" class="glyphicon glyphicon-chevron-left" ></a>
    <div class="center_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
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
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
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
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                      {{ method_field('PATCH') }}
                      {{ csrf_field() }}

                      <div class="form-group has-feedback{{ $errors->has('id') ? ' has-errors' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="id" name="id" required="required" value="{{ $patient->id }}" disabled="disabled" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group has-feedback{{ $errors->has('name') ? ' has-errors' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="name" name="name" required="required" value="{{ $patient->name }}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group has-feedback{{ $errors->has('age') ? ' has-errors' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">Age<span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input type="text" id="age" name="age" required="required" value="{{ $patient->age }}" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group has-feedback{{ $errors->has('gender') ? ' has-errors' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group has-feedback{{ $errors->has('content') ? ' has-errors' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="address" rows="5" class="form-control col-md-7 col-xs-12" placeholder="Post address">{{ $patient->address }}</textarea>
                        </div>
                      </div>
                     
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button" href="{{ route('pages.patients.index') }}">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" value="save">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection