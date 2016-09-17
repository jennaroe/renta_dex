@extends('admin_template')

  @section('content')

    <div class='row'>
     <div class='col-md-11'>

    <section class="content-header">
      <h1>
        Create an Invoice
      </h1>

      <br>
    @foreach($invoices as $invoice)
       {!! Form::open(array('route'=>['invoices.destroy', $invoice->id], 'method'=> 'DELETE')) !!}
        {{ link_to_route('invoices.create','Add New',null,['class'=>'btn bg-purple']) }}
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> {{ Auth::user()->brokerName }}
            <small class="pull-right">{{ $invoice->date }}</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong>{{ Auth::user()->brokerName }}</strong><br>
            {{ Auth::user()->brokerAddress }}<br>
            
          
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong>{{ $invoice->buildingName }}</strong><br>
            {{ $invoices->buildingAddress }}<br>
            
            
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice{{ $invoice->invoiceNum }}</b><br>
          <br>
      
          <b>Date:</b>{{ $invoice->date }}<br>
          <b>Rep:</b> {{ $invoice->repName }}
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

              <th>Tenant Name</th>
              <th>Unit #</th>
              <th>Move in Date</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              
              <td>{{ $invoice->tenantName }}</td>
              <td>{{ $invoice->unitNum }}</td>
              <td>{{ $invoice->moveInDate }}</td>
              <td>{{ $invoice->totalDue }}</td>
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
            All payments are to be submitted to the Broker. Please see broker name and address above. Please make sure the include rep name when submitting payment. 

          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due: {{ $invoice->date }}</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>{{ $invoice->totalDue }}</td>
              </tr>
           
              <tr>
                <th>Total:</th>
                <td>{{ $invoice->totalDue }}</td>
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
          {{ link_to_route('invoices.edit','Edit',[$invoice->id],['class'=>'btn bg-purple']) }}
  
        </div>
      </div>
         @endforeach
    </section>
    <!-- /.content -->

  </div><!-- /.col -->

  </div><!-- /.row -->

@endsection

