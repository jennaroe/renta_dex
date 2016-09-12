@extends('admin_template')

  @section('content')

<!DOCTYPE html>
<html>
<head>
  <title>Move-Ins</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">
</head>
<body>

  <div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">         
            <div class="pull-left">
                <h2>Move-Ins</h2>
            </div>
            <div class="pull-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-moveIns">
            Create Movein
        </button>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
      <thead>
          <tr>
          <th>Name</th>
          <th>Building</th>
          <th>Unit #</th>
          <th>Rental Rate</th>
          <th>Commission Rate</th>
          <th>Move In Date</th>
          <th>Status</th>
          <th>Leasing/Listing Agent</th>
          <th>Notes</th>
          <th width="215px">Action</th>
          </tr>
      </thead>
      <tbody>
      </tbody>
    </table>

    <ul id="pagination" class="pagination-sm"></ul>

      <!-- Create Movein Modal -->
    <div class="modal fade" id="create-moveIns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Create Move-Ins</h4>
          </div>
          <div class="modal-body">

<!--               <form data-toggle="validator" action="{{ route('moveIns.create') }}" method="POST">
               <div class="form-group">
              <label class="control-label" for="title">Name:</label>
              <input type="text" name="clientName" class="form-control" data-error="Please enter name." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Building:</label>
              <input type="building" name="title" class="form-control" data-error="Please enter building name." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Unit #:</label>
              <input type="text" name="unitNum" class="form-control" data-error="Please enter unit #." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Move In Date:</label>
              <input type="text" name="moveInDate" class="form-control" data-error="Please enter move in date." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Rental Rate:</label>
              <input type="text" name="rentalRate" class="form-control" data-error="Please enter rental rate." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Commission:</label>
              <input type="text" name="Commission" class="form-control" data-error="Please enter commission." required />
              <div class="help-block with-errors"></div>
            </div>
             <div class="form-group">
                <label>Status</label>
                <select name="numRooms" value="" class="form-control">
                  <option>Application Approved</option>
                  <option>Signed Lease</option>
                  <option>Moved In</option>
                  <option>Invoice Sent</option>
                  <option>Invoice Paid</option>
                </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Leasing/Listing Agent:</label>
              <input type="text" name="listingAgent" class="form-control" data-error="Please enter Agent Name ." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Notes:</label>
              <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn crud-submit btn-success">Submit</button>
            </div>
              </form>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Edit MoveIn Modal -->
   <!--  <div class="modal fade" id="edit-moveIns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Move-Ins</h4>
          </div>
          <div class="modal-body">

          <form data-toggle="validator" action="/moveins-ajax/14" method="put">
            <div class="form-group">
              <label class="control-label" for="title">Name:</label>
              <input type="text" name="clientName" class="form-control" data-error="Please enter name." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Building:</label>
              <input type="building" name="building" class="form-control" data-error="Please enter building name." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Unit #:</label>
              <input type="text" name="unitNum" class="form-control" data-error="Please enter unit #." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Move In Date:</label>
              <input type="text" name="moveInDate" class="form-control" data-error="Please enter move in date." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Rental Rate:</label>
              <input type="text" name="rentalRate" class="form-control" data-error="Please enter rental rate." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Commission:</label>
              <input type="text" name="Commission" class="form-control" data-error="Please enter commission." required />
              <div class="help-block with-errors"></div>
            </div>
             <div class="form-group">
                <label>Status</label>
                <select name="numRooms" value="" class="form-control">
                  <option>Application Approved</option>
                  <option>Signed Lease</option>
                  <option>Moved In</option>
                  <option>Invoice Sent</option>
                  <option>Invoice Paid</option>
                </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Leasing/Listing Agent:</label>
              <input type="text" name="listingAgent" class="form-control" data-error="Please enter Agent Name ." required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label class="control-label" for="title">Notes:</label>
              <textarea name="description" class="form-control" data-error="Please enter description." required></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
            </div>
              </form>

          </div>
        </div>
      </div>
    </div>

  </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  
  <script src="/js/movein-ajax.js"></script> 
 -->
</body>
</html>

@endsection