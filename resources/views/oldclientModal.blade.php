@extends('admin_template')

  @section('content')

<!-- Modal -->
<div class="modal fade" id="clientModal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add a New Client</h4>
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


  @endsection