@extends('admin_template')

  @section('content')

    <div class='row'>
     <div class='col-md-11'>

    <section class="content-header">
      <h1>
        Create an Invoice
      </h1>
      <br>
        <button type="button" class="btn btn-primary btn-warning" data-toggle="modal" data-target="#clientModal">Create New Invoice</button>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Urbanista Brokers, Inc.
            <small class="pull-right">Date: 8/31/2016</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>Urbanista Brokers</strong><br>
            420 E Church St, #115<br>
            Orlando, Fl 32801<br>
          
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>55 West</strong><br>
            55 West Church St<br>
            Orlando, FL 32801<br>
            
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #007612</b><br>
          <br>
      
          <b>Date:</b> 2/22/2014<br>
          <b>Rep:</b> Hernandez
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Tenant Name</th>
              <th>Unit #</th>
              <th>Move in Date</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Nicole Baker</td>
              <td>456</td>
              <td>6.25.2016</td>
              <td>$1,650</td>
            </tr>
        
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/credit/visa.png") }}" alt="Visa"/>
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/credit/mastercard.png") }}" alt="Mastercard"/>
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/credit/american-express.png") }}" alt="American Express"/>
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/credit/paypal2.png") }}" alt="Paypal"/>

          <!-- <img src="{{ asset("/bower_components/AdminLTE/dist/img/credit/paypal2.png") }}" alt="Paypal"/> -->


          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
            dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>Tax (9.3%)</th>
                <td>$10.34</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>$5.80</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$265.24</td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button>
          <button type="button" class="btn bg-purple margin" data-dismiss="modal">Edit</button>
  
        </div>
      </div>
    </section>
    <!-- /.content -->





  <div class="modal fade" id="clientModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create New Invoice</h4>
      </div>
      <div class="modal-body">
          <!-- /.box-header -->
          <div class="box-body">
            <form method = "post" action = "/client" role="form">
              <!-- text input -->
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="clientName" value="" class="form-control" placeholder="Enter ...">
              </div>
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="clientNum" value="" class="form-control" placeholder="Enter ...">
              </div>
               <div class="form-group">
                <label>Move in Date</label>
                <input type="text" name="moveInDate" value="" class="form-control" placeholder="Enter mm/dd/yy">
              </div>

                <!-- select num rooms -->
              <div class="form-group">
                <label># of Bedrooms</label>
                <select name="numRooms" value="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

                   <!-- select num rooms -->
              <div class="form-group">
                <label># of Bathrooms</label>
                <select name="numBaths" value="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

                   <!-- have pets? -->
              <div class="form-group">
                <label>Pets?</label>
                <select name="Pets" value="" class="form-control">
                  <option>Yes</option>
                  <option>No</option>
                </select>
              </div>

                   <!-- select num pets -->
              <div class="form-group">
                <label># of Pets</label>
                <select name="numPets" value="" class="form-control">
                  <option>0</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4 (Not suggested)</option>
                </select>
              </div>

              <div class="form-group">
                <label>Pet Type</label>
                <input type="text" name="petType" value="" class="form-control" placeholder="Enter ...">
              </div>

              <div class="form-group">
                <label>Client Status</label>
                <select name="activeClient" value="" class="form-control">
                  <option>Tours Scheduled</option>
                  <option>Lease Signed</option>
                  <option>Emails Exchanged</option>
                  <option>Phone Calls Exchanged</option>
                  <option>No More Responses</option>
                </select>
              </div>

               <!-- Notes -->
              <div class="form-group">
                <label>Notes</label>
                <textarea name="Notes" value="" class="form-control" rows="5" placeholder="Enter ..."></textarea>
              </div>
              <input type="submit" class="btn bg-purple margin">

            </form>      
         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn bg-purple margin">
        <!-- <button type="button" class="btn btn-primary">Save Client</button> -->
      </div>
    </div>
  </div>
</div>
     

	</div><!-- /.col -->

	</div><!-- /.row -->

@endsection