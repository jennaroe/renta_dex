@extends('admin_template')

@section('content')
<div class="container">
    <div class="row">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">

        <div class="container">
  <h1 class="page-header">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="https://scontent-iad3-1.xx.fbcdn.net/v/t1.0-9/13612160_1163812440344398_7433150807896174092_n.jpg?oh=221bfe68bc481a49e1535b2903757b5e&oe=5874D5AE" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{ Auth::user()->name }}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{ Auth::user()->email }}" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Broker:</label>
          <div class="col-lg-8">
            <input class="form-control" value="{{ Auth::user()->brokerName }}" type="text">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-3 control-label">Broker Address:</label>
          <div class="col-md-8">
            <input class="form-control" value="{{ Auth::user()->brokerAddress }}" type="text">
          </div>
        </div>        
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="{{ Auth::user()->password }}" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="{{ Auth::user()->password }}" type="password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-warning" value="Save Changes" type="button">
            <span></span>
            <input class="btn bg-purple" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
                        </div><!--/col-->
                    </div><!--/row-->
              </div><!--/panel-body-->
          </div><!--/panel-->
        </div>
      </div>
    </div>
  </div>        
</div>
</div>
@endsection
