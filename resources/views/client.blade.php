@extends('admin_template')
  @section('content')
  
    <div class='row'>
     <div class='col-md-12'>

       
       <div class='col-md-12'>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                  <button 
                   type="button" class="btn btn-primary btn-warning"  
                   data-toggle="modal" 
                   data-target="#clientModal">
                      Add New Client
                  </button>



            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped ui-sortable">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Move in Date</th>
                  <th># of Rooms</th>
                  <th># of Baths</th>
                  <th>Pets</th>
                  <th># of Pets</th>
                  <th>Pet Type</th>
                  <th>Client Status</th>
                  <th>Notes</th> 
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>John Poke</td>
                  <td>333-444-5555
                  </td>
                  <td>10/1/2016</td>
                  <td> 2</td>
                  <td>2</td>
                  <td>Yes</td>
                  <td>2</td>
                  <td>Dogs</td>
                  <td>Tours Scheduled</td>
                  <td>Yada yada </td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 2.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 3.0</td>
                  <td>Win 2k+ / OSX.3+</td>
                  <td>1.9</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Camino 1.0</td>
                  <td>OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.3</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.3</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.4</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>1.4</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Mozilla 1.8</td>
                  <td>Win 98+ / OSX.1+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Seamonkey 1.1</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Epiphany 2.20</td>
                  <td>Gnome</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>Safari 3.0</td>
                  <td>OSX.4+</td>
                  <td>522.1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>OmniWeb 5.5</td>
                  <td>OSX.4+</td>
                  <td>420</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>iPod Touch / iPhone</td>
                  <td>iPod</td>
                  <td>420.1</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Webkit</td>
                  <td>S60</td>
                  <td>S60</td>
                  <td>413</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 7.0</td>
                  <td>Win 95+ / OSX.1+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 9.0</td>
                  <td>Win 95+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 9.2</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera 9.5</td>
                  <td>Win 88+ / OSX.3+</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Opera for Wii</td>
                  <td>Wii</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Nokia N800</td>
                  <td>N800</td>
                  <td>-</td>
                  <td>A</td>
                </tr>
                <tr>
                  <td>Presto</td>
                  <td>Nintendo DS browser</td>
                  <td>Nintendo DS</td>
                  <td>8.5</td>
                  <td>C/A<sup>1</sup></td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.1</td>
                  <td>KDE 3.1</td>
                  <td>3.1</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>KHTML</td>
                  <td>Konqureror 3.3</td>
                  <td>KDE 3.3</td>
                  <td>3.3</td>
                  <td>A</td>
                </tr>
                         </tfoot>
              </table>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

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



        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

 </div><!-- /.col -->
</div><!-- /.row -->

@endsection