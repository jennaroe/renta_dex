@extends('admin_template')

  @section('content')
  	
<html>
	<head>
		<title>Signed Leases and Move-ins</title>
		
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script type="text/javascript" language="javascript" class="init"></script>

	</head>
	<body>
		<h1>
			Signed Leases and Move-ins			
		</h1>
		<br>

		<div class="container-fluid">
		<button type="button" style="padding:10px; margin:0 50px 15px 0;" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#add-modal"><b>Add More Rows</b></button>
		<div class="row">
<div class="col-md-12 marginT20">

		<div class="table-responsive demo-x content">
		<table id="moveIns" class="display" cellspacing="0" width="100%">
			<thead>
					<tr>
					  <th>#</th>					
					  <th>Name</th>
	                  <th>Building</th>
	                  <th>Unit #</th>
	                  <th>Rental Rate</th>
	                  <th>Commission Rate</th>
	                  <th>Move In Date</th>
	                  <th>Status</th>
	                  <th>Leasing/Listing Agent</th>
	                  <th>Notes</th>
					  <th style="background-image: none">Edit</th>
					</tr>
				</thead>
			</table>
		</div>

		</div>
		</div>
		</div>


		<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		    	<form class="form-horizontal" id="edit-form">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="edit-modal-label">Edit selected row</h4>
			      </div>
			      <div class="modal-body">
		      		<input type="hidden" id="edit-id" value="" class="hidden">
					<div class="form-group">
						<label for="clientName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="clientName" name="clientName" placeholder="Name" required>
							</div>
					</div>
				  	<div class="form-group">
				    	<label for="building" class="col-sm-2 control-label">Building</label>
					    	<div class="col-sm-10">
					      		<input type="email" class="form-control" id="building" name="building" placeholder="Building" required>
					    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="unitNum" class="col-sm-2 control-label">Unit #</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="unitNum" name="unitNum" placeholder="Unit #" required>
					    	</div>
				  	</div>
  					<div class="form-group">
				    	<label for="moveInDate" class="col-sm-2 control-label">Move in Date</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="moveInDate" name="moveInDate" placeholder="Move in Date" required>
					    	</div>
				  	</div>
					<div class="form-group">
				    	<label for="rentalRate" class="col-sm-2 control-label">Rental Rate</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="rentalRate" name="rentalRate" placeholder="Rental Rate" required>
					    	</div>
				  	</div>
					<div class="form-group">
                      <label for= "Status" class="col-sm-2 control-label">
                         Status</label> 
                     	<div class="col-sm-10">
                          <select name="numRooms" value="" class="form-control" id="Status" placeholder="Select">
                          	<option>Application Approved</option>
                            <option>Signed Lease</option>
                            <option>Moved In</option>
                            <option>Invoice Sent</option>
                            <option>Invoice Paid</option>
                          </select>
                        </div>
                    </div> 
					<div class="form-group">
			    		<label for="listingAgent" class="col-sm-2 control-label">Listing/Leasing Agent</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="listingAgent" name="listingAgent" placeholder="Listing/Leasing Agent" required>
				      		</div>
			      	</div>
		      	    <div class="form-group">
					    	<label for="notes" class="col-sm-2 control-label">Notes</label>
					    	<div class="col-sm-10">
					      		<input type="text" class="form-control" rows="5" id="notes" name="notes" placeholder="Notes" required>
					    	</div>
			      		</div>
					</div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>

		      	</form>
		    </div>
		  </div>
		</div>


		<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal-label">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		    	<form class="form-horizontal" id="add-form">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="add-modal-label">Add new row</h4>
			      </div>
			      <div class="modal-body">
			        	<div class="form-group">
						<label for="clientName" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="clientName" name="clientName" placeholder="Name" required>
							</div>
					</div>
				  	<div class="form-group">
				    	<label for="building" class="col-sm-2 control-label">Building</label>
					    	<div class="col-sm-10">
					      		<input type="text" class="form-control" id="building" name="building" placeholder="Building" required>
					    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="unitNum" class="col-sm-2 control-label">Unit #</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="unitNum" name="unitNum" placeholder="Unit #" required>
					    	</div>
				  	</div>
  					<div class="form-group">
				    	<label for="moveInDate" class="col-sm-2 control-label">Move in Date</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="moveInDate" name="moveInDate" placeholder="Move in Date" required>
					    	</div>
				  	</div>
					<div class="form-group">
				    	<label for="rentalRate" class="col-sm-2 control-label">Rental Rate</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="rentalRate" name="rentalRate" placeholder="Rental Rate" required>
					    	</div>
				  	</div>
					<div class="form-group">
                      <label for= "Status" class="col-sm-2 control-label">
                         Status</label> 
                     	<div class="col-sm-10">
                          <select name="numRooms" value="" class="form-control" id="Status" placeholder="Select">
                          	<option>Application Approved</option>
                            <option>Signed Lease</option>
                            <option>Moved In</option>
                            <option>Invoice Sent</option>
                            <option>Invoice Paid</option>
                          </select>
                        </div>
                    </div> 
					<div class="form-group">
			    		<label for="listingAgent" class="col-sm-2 control-label">Listing/Leasing Agent</label>
				    		<div class="col-sm-10">
				      			<input type="text" class="form-control" id="listingAgent" name="listingAgent" placeholder="Listing/Leasing Agent" required>
				      		</div>
			      	</div>
		      	    <div class="form-group">
					    	<label for="notes" class="col-sm-2 control-label">Notes</label>
					    	<div class="col-sm-10">
					      		<input type="text" class="form-control" rows="5" id="notes" name="notes" placeholder="Notes" required>
					    	</div>
			      		</div>
					</div>

			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>

		      	</form>
		    </div>
		  </div>
		</div>
		
		<script type="text/javascript" language="javascript" class="init">

			$(document).ready(function() {

				// ATW
				if ( top.location.href != location.href ) top.location.href = location.href;

				// Initialize datatable
				$('#moveIns').dataTables({
					"aProcessing": true,
					"aServerSide": true,
					"ajax": "datatable.php?ajax"
				});

				// Save edited row
				$("#edit-form").on("submit", function(event) {
					event.preventDefault();
					$.post("datatable.php?edit=" + $('#edit-id').val(), $(this).serialize(), function(data) {
						var obj = $.parseJSON(data);
						var tr = $('a[data-id="row-' + $('#edit-id').val() + '"]').parent().parent();
						$('td:eq(1)', tr).html(obj.clientName);
						$('td:eq(2)', tr).html(obj.building);
						$('td:eq(3)', tr).html(obj.unitNum);
						$('td:eq(4)', tr).html(obj.moveInDate);
						$('td:eq(5)', tr).html(obj.rentalRate);
						$('td:eq(6)', tr).html(obj.Commission);
						$('td:eq(7)', tr).html(obj.Status);
						$('td:eq(8)', tr).html(obj.listingAgent);
						$('td:eq(9)', tr).html(obj.notes);
						$('#edit-modal').modal('hide');
					}).fail(function() { alert('Unable to save data, please try again later.'); });
				});

				// Add new row
				$("#add-form").on("submit", function(event) {
					event.preventDefault();
					$.post("datatable.php?add", $(this).serialize(), function(data) {
						var obj = $.parseJSON(data);
						$('#moveIns tbody tr:last').after('<tr role="row"><td class="sorting_1">' + obj.id + '</td><td>' + obj.clientName + '</td><td>' + obj.building + '</td><td>' + obj.unitNum + '</td><td>' + obj.moveInDate + '</td><td>' + obj.rentalRate + '</td><td>' + obj.Commission + '</td><td>' + obj.Status + '</td><td>' + obj.listingAgent + '</td><td>' + obj.notes + '</td><td>' + obj.start_date + '</td><td><a data-id="row-' + obj.id + '" href="javascript:editRow(' + obj.id + ');" class="btn btn-default btn-sm">edit</a>&nbsp;<a href="javascript:removeRow(' + obj.id + ');" class="btn btn-default btn-sm">remove</a></td></tr>');
						$('#add-modal').modal('hide');
					}).fail(function() { alert('Unable to save data, please try again later.'); });
				});

			});

			// Edit row
			function editRow(id) {
				if ( 'undefined' != typeof id ) {
					$.getJSON('datatable.php?edit=' + id, function(obj) {
						$('#edit-id').val(obj.id);
						$('#clientName').val(obj.clientName);
						$('#building').val(obj.building);
						$('#unitNum').val(obj.unitNum);
						$('#moveInDate').val(obj.moveInDate);
						$('#rentalRate').val(obj.rentalRate);
						$('#Commission').val(obj.Commission);
						$('#Status').val(obj.Status);
						$('#listingAgent').val(obj.listingAgent);
						$('#notes').val(obj.notes);
						$('#edit-modal').modal('show')
					}).fail(function() { alert('Unable to fetch data, please try again later.') });
				} else alert('Unknown row id.');
			}

			// Remove row
			function removeRow(id) {
				if ( 'undefined' != typeof id ) {
					$.get('datatable.php?remove=' + id, function() {
						$('a[data-id="row-' + id + '"]').parent().parent().remove();
					}).fail(function() { alert('Unable to fetch data, please try again later.') });
				} else alert('Unknown row id.');
			}
		</script>
	</body>
</html>

<?php

	// VARIABLES
	$aColumns = array('moveinId','clientName', 'building', 'unitNum', 'rentalRate', 'Commission','moveInDate','Status','listingAgent','mlsNum','notes');
	$sIndexColumn = "moveinId";
	$sTable = "moveIns";
	$gaSql['user'] = "root";
	$gaSql['password'] = "Testword123";
	$gaSql['db'] = "renta_dex";
	$gaSql['server'] = "127.0.0.1";


	// DATABASE CONNECTION
	function dbinit(&$gaSql) {
		// ERROR HANDLING
		function fatal_error($sErrorMessage = '') {
			header($_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error');
			die($sErrorMessage);
		}

		// MYSQL CONNECT
		if ( !$gaSql['link'] = @mysql_connect($gaSql['server'], $gaSql['user'], $gaSql['password']) ) {
			fatal_error('Could not open connection to server');
		}

		// MYSQL DATABASE SELECT
		if ( !mysql_select_db($gaSql['db'], $gaSql['link']) ) {
			fatal_error('Could not select database');
		}
	}

	// AJAX EDIT FROM JQUERY
	if ( isset($_GET['edit']) && 0 < intval($_GET['edit']) ) {
		dbinit($gaSql);

		// SAVE DATA
		if ( isset($_POST) ) {
			$p = $_POST;
			foreach ( $p as &$val ) $val = mysql_real_escape_string($val);
			if ( !empty($p['clientName']) && !empty($p['building']) && !empty($p['unitName']) && !empty($p['moveInDate'])&& !empty($p['rentalRate'])&& !empty($p['Commission'])&& !empty($p['Status'])&& !empty($p['listingAgent'])&& !empty($p['notes']) )
				@mysql_query(" UPDATE $sTable SET clientName = '" . $p['clientName'] . "', building = '" . $p['building'] . "', moveInDate = '" . $p['moveInDate'] . "', rentalRate = '" . $p['rentalRate'] . "', Commission = '" . $p['Commission'] . "', Status = '" . $p['Status'] . "', listingAgent = '" . $p['listingAgent'] . "', notes = '" . $p['notes'] . "', WHERE id = " . intval($_GET['edit']));
		}

		// GET DATA
		$query = mysql_query(" SELECT * FROM $sTable WHERE $sIndexColumn = " . intval($_GET['edit']), $gaSql['link']);
		die(json_encode(mysql_fetch_assoc($query)));
	}

	// AJAX ADD FROM JQUERY
	if ( isset($_GET['add']) && isset($_POST) ) {
		dbinit($gaSql);

		$p = $_POST;
		foreach ( $p as &$val ) $val = mysql_real_escape_string($val);
		if ( !empty($p['clientName']) && !empty($p['building']) && !empty($p['unitName']) && !empty($p['moveInDate'])&& !empty($p['rentalRate'])&& !empty($p['Commission'])&& !empty($p['Status'])&& !empty($p['listingAgent'])&& !empty($p['notes']) ) {
			@mysql_query(" INSERT INTO $sTable (moveinId,clientName, building, unitNum, rentalRate, Commission, moveInDate, Status, listingAgent, mlsNum, notes) VALUES ('" . $p['clientName'] . "', '" . $p['building'] . "', '" . $p['unitNum'] . "'," . $p['moveInDate'] . "', '" . $p['rentalRate'] . "', '" . $p['Commission'] . "'," . $p['Status'] . "', '" . $p['listingAgent'] . "', '" . $p['notes'] . "')");
			$id = mysql_insert_id();
			$query = mysql_query(" SELECT * FROM $sTable WHERE $sIndexColumn = " . $id, $gaSql['link']);
			die(json_encode(mysql_fetch_assoc($query)));
		}
	}

	// AJAX REMOVE FROM JQUERY
	if ( isset($_GET['remove']) && 0 < intval($_GET['remove']) ) {
		dbinit($gaSql);

		// REMOVE DATA
		@mysql_query(" DELETE FROM $sTable WHERE id = " . intval($_GET['remove']));
	}


	// AJAX FROM JQUERY
	if ( isset($_GET['ajax']) ) {
		dbinit($gaSql);

		// QUERY LIMIT
		$sLimit = "";
		if ( isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1' ) {
			$sLimit = "LIMIT " . intval($_GET['iDisplayStart']) . ", " . intval($_GET['iDisplayLength']);
		}

		// QUERY ORDER
		$sOrder = "";
		if ( isset($_GET['iSortCol_0']) ) {
			$sOrder = "ORDER BY ";
			for ( $i = 0; $i < intval($_GET['iSortingCols']); $i++ ) {
				if ( $_GET['bSortable_' . intval($_GET['iSortCol_' . $i])] == "true" ) {
					$sOrder .= $aColumns[intval($_GET['iSortCol_' . $i])] . " " . ( $_GET['sSortDir_' . $i] === 'asc' ? 'asc' : 'desc' ) . ", ";
				}
			}
			$sOrder = substr_replace($sOrder, "", -2);
			if ( $sOrder == "ORDER BY" ) $sOrder = "";
		}

		// QUERY SEARCH
		$sWhere = "";
		if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
			$sWhere = "WHERE (";
			for ( $i = 0; $i < count($aColumns); $i++ ) {
				if ( isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true" ) {
					$sWhere .= $aColumns[$i] . " LIKE '%" . mysql_real_escape_string($_GET['sSearch']) . "%' OR ";
				}
			}
			$sWhere = substr_replace($sWhere, "", -3);
			$sWhere .= ')';
		}

		// BUILD QUERY
		for ( $i = 0; $i < count($aColumns); $i++ ) {
			if ( isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true" && $_GET['sSearch_' . $i] != '' ) {
				if ( $sWhere == "" ) $sWhere = "WHERE ";
				else $sWhere .= " AND ";
				$sWhere .= $aColumns[$i] . " LIKE '%" . mysql_real_escape_string($_GET['sSearch_' . $i]) . "%' ";
			}
		}

		// FETCH
		$sQuery = " SELECT SQL_CALC_FOUND_ROWS " . str_replace(" , ", " ", implode(", ", $aColumns)) . " FROM $sTable $sWhere $sOrder $sLimit ";
		$rResult = mysql_query($sQuery, $gaSql['link']) or fatal_error('MySQL Error: ' . mysql_errno());
		$sQuery = " SELECT FOUND_ROWS() ";
		$rResultFilterTotal = mysql_query($sQuery, $gaSql['link']) or fatal_error('MySQL Error: ' . mysql_errno());
		$aResultFilterTotal = mysql_fetch_array($rResultFilterTotal);
		$iFilteredTotal = $aResultFilterTotal[0];
		$sQuery = " SELECT COUNT(" . $sIndexColumn . ") FROM $sTable ";
		$rResultTotal = mysql_query($sQuery, $gaSql['link']) or fatal_error('MySQL Error: ' . mysql_errno());
		$aResultTotal = mysql_fetch_array($rResultTotal);
		$iTotal = $aResultTotal[0];
		while ( $aRow = mysql_fetch_array($rResult) ) {
			$row = array();
			for ( $i = 0 ; $i < count($aColumns); $i++ ) {
				if ( $aColumns[$i] == "version" ) $row[] = ( $aRow[$aColumns[$i]] == "0" ) ? '-' : $aRow[$aColumns[$i]];
				else if ( $aColumns[$i] != ' ' ) $row[] = $aRow[$aColumns[$i]];
			}
			$output['aaData'][] = array_merge($row, array('<a data-id="row-' . $row[0] . '" href="javascript:editRow(' . $row[0] . ');" class="btn btn-md btn-success">edit</a>&nbsp;<a href="javascript:removeRow(' . $row[0] . ');" class="btn btn-default btn-md" style="background-color: #c83a2a;border-color: #b33426; color: #ffffff;">remove</a>'));
		}

		// RETURN IN JSON
		die(json_encode($output));
	}

?>

@endsection