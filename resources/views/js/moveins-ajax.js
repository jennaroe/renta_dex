var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){

    	total_page = data.last_page;
    	current_page = data.current_page;

    	$('#pagination').twbsPagination({
	        totalPages: total_page,
	        visiblePages: current_page,
	        onPageClick: function (event, pageL) {
	        	page = pageL;
                if(is_ajax_fire != 0){
	        	  getPageData();
                }
	        }
	    });

    	manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

/* Get Page Data*/
function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url,
    	data: {page:page}
	}).done(function(data){
		manageRow(data.data);
	});
}

/* Add new moveIn table row */
function manageRow(data) {
	var	rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>'+value.title+'</td>';
	  	rows = rows + '<td>'+value.description+'</td>';
	  	rows = rows + '<td data-id="'+value.id+'">';
                rows = rows + '<button data-toggle="modal" data-target="#edit-moveIns" class="btn btn-primary edit-moveIns">Edit</button> ';
                rows = rows + '<button class="btn btn-danger remove-moveIns">Delete</button>';
                rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});

	$("tbody").html(rows);
}

/* Create new moveIn */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-moveIns").find("form").attr("action");
    var title = $("#create-moveIns").find("input[name='title']").val();
    var description = $("#create-moveIns").find("textarea[name='description']").val();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{title:title, description:description}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Move In Created Successfully.', 'Success Alert', {timeOut: 5000});
    });

});

/* Remove Move Ins */
$("body").on("click",".remove-moveIns",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id,
    }).done(function(data){
        c_obj.remove();
        toastr.success('Move In Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
});

/* Edit Move In */
$("body").on("click",".edit-moveIns",function(){
    var id = $(this).parent("td").data('id');
    var title = $(this).parent("td").prev("td").prev("td").text();
    var description = $(this).parent("td").prev("td").text();
    $("#edit-moveIns").find("input[name='clientName']").val(clientName);
    $("#edit-moveIns").find("input[name='building']").val(building);
    $("#edit-moveIns").find("input[name='unitNum']").val(unitNum);
    $("#edit-moveIns").find("input[name='moveInDate']").val(moveInDate);
    $("#edit-moveIns").find("input[name='rentalRate']").val(rentalRate);
    $("#edit-moveIns").find("input[name='Commission']").val(Commission);
    $("#edit-moveIns").find("input[name='Status']").val(Status);
    $("#edit-moveIns").find("input[name='listingAgent']").val(listingAgent);
    $("#edit-moveIns").find("textarea[name='notes']").val(notes);
    $("#edit-moveIns").find("form").attr("action",url + '/' + id);
});

/* Updated new Move In */
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-moveIns").find("form").attr("action");
    var clientName = $("#edit-moveIns").find("input[name='clientName']").val();
    var building = $("#edit-moveIns").find("input[name='building']").val();
    var unitNum = $("#edit-moveIns").find("input[name='unitNum']").val();
    var moveInDate = $("#edit-moveIns").find("input[name='moveInDate']").val();
    var rentalRate = $("#edit-moveIns").find("input[name='rentalRate']").val();
    var Commission = $("#edit-moveIns").find("input[name='Commission']").val();
    var Status = $("#edit-moveIns").find("input[name='Status']").val();
    var listingAgent = $("#edit-moveIns").find("input[name='listingAgent']").val();
    var notes = $("#edit-moveIns").find("textarea[name='notes']").val();

    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{clientName:clientName, building:building, unitNum:unitNum, moveInDate:moveInDate, rentalRate:rentalRate, Commission:Commission, Status:Status, listingAgent:listingAgent, notes:notes}
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Move In Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});