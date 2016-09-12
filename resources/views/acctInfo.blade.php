@extends('admin_template')

  @section('content')

    <div class='row'>
     <div class='col-md-6'>



      <!-- general form elements disabled -->
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3 class="box-title">Update your profile	</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form role="form">
              <!-- text input -->
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
               <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter...">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label>Broker Name</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label>Broker Address</label>
                <input type="text" class="form-control" placeholder="Enter ...">
              </div>

            </form>
            <button type="button" class="btn bg-purple margin">Submit</button>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (right) -->

  </div><!-- /.content-wrapper -->

	</div><!-- /.col -->

	</div><!-- /.row -->

@endsection