@extends('start_template')

@section('content')
<style type="text/css">
	.jumbotron {
	background-image: url("../bower_components/AdminLTE/dist/img/featured.jpg");
	background-size: cover;
	margin-bottom: 1%;

	}	
	h1 {
		font-size: 100px !important;
	}

	.text {
		color: white;
    	text-shadow: 2px 2px black;
		opacity: 2;
	}

	.little_box{
		background-color: #8B7B8B;
		opacity: 0.5;
		width: 70%;
		height:85%;
		margin-left: 15%;
	}

	.big_box{
		background-color: #DED8DB;
		width: 80%;
		padding:3%;
		margin:2%;
		
	}

     </style>

<div class='row'>
     <div class='col-md-12 home-page-image'>
     
     <div class="jumbotron">
     	<div class="little_box">
		  
		 </div>
		 <div class="text">
		  <center><h1>RentaDEX</h1>
		  <h3> Now Serving Downtown Orlando</h3>
		  <h4>The new client tracker app that caters specifically to Rental Agents!!</h4></center>
		  <br>
		  </div>
	</div>
	<br>
	<br>
	<div><center>
		<div class='big_box'>
		<h2><u> Why RentaDEX?</u></h2>

		<h3>&#10037; Track your clients with categories that actually pertain to your work!</h3></br>

		<h3>&#10037;Track your commissions with apartments and condos!</h3></br>

		<h3>&#10037; Keep track of your approved applications, move ins and invoicing! </h3><br>

		<h3>&#10037; Create an Invoice on the go and send it right from your phone!</h3><br>

		<h3>&#10037; Manage your tours and calendars!</h3><br>

		<h3>&#10037; Everything you need as a rental agent right at your finger tips! </h3><br>

		</div>

	</center></div>
		



</div><!-- /.col -->

</div><!-- /.row -->

@endsection
