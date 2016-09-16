@extends('start_template')

@section('content')
<style type="text/css">
	.jumbotron {
	background-image: url("../bower_components/AdminLTE/dist/img/featured.jpg");
	background-size: cover;

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
		height:80%;
		margin-left: 15%;
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
	<div>
		



</div><!-- /.col -->

</div><!-- /.row -->

@endsection
