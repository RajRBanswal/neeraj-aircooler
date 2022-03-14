@extends('layouts.app')

@section('content')
 

<div class="container mt-3">
  <div id="hideDiv">
        @if(Session::has('success'))
            <div class="alert alert-info texts" id="success">
                {{ Session::get('success') }}
            </div>
        @endif
  </div>
  <div class="row">
    <div class="form-group col-lg-10 col-8">
      <h3>All Taxes</h3>
    </div>
    <div class="form-group col-lg-2 col-4" ><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Taxes">Add Tax</button></div>
  </div>
	<div class="table-responsive" style="width:100%;">
		<table id="example" class="display table">
			<thead>
				<tr>
					<th>Sr.No.</th>
          <th>Name</th>
          <th>CGST %</th>
          <th>SGST %</th>
          <th>IGST %</th>
          <th>GST %</th>
          <th>Incl Rate</th>
          <th>Action</th>
				</tr>
			</thead>
      <tbody>
        <?php $i = 1; ?>
        @foreach($tax as $t)
        <tr>
          <td><?php echo $i++; ?></td>
          <td>{{$t->name}}</td>
          <td>{{$t->CGST}}</td>
          <td>{{$t->SGST}}</td>
          <td>{{$t->IGST}}</td>
          <td>{{$t->GST}}</td>
          <td>{{$t->incl_rate}}</td>
          <td><a class="icons" onclick="editData({{$t->id}})" data-bs-toggle="modal" data-bs-target="#EditTaxes"><i class="fa fa-edit"></i></a></td>
        </tr>
        @endforeach
      </tbody>
		</table>
	</div>
</div>


<!-- The Modal -->
    <div class="modal" id="Taxes">
      <div class="modal-dialog">
        <form method="POST" action="{{url('store_taxes')}}" class="basicform" enctype="multipart/form-data">
            @CSRF
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Taxes</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="row">
                  <div class="form-group"><input type="text" name="name" class="form-control" placeholder="GST Name"  required></div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-6">
                    <input type="text" name="CGST" class="form-control" placeholder="CGST %" required>
                  </div>
                  <div class="form-group col-lg-6 col-6">
                    <input type="text" name="SGST" class="form-control" placeholder="SGST %" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-6">
                    <input type="number" name="IGST" class="form-control" placeholder="IGST %" required>
                  </div>
                  <div class="form-group col-lg-6 col-6">
                    <input type="number" name="GST" class="form-control" placeholder="GST %" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <input type="text" name="incl_rate" class="form-control" placeholder="Incl Rate" required>
                  </div>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="saveTax" value="saveTax">Save</button>
              </div>

            </div>
        </form>
      </div>
    </div>
<!-- End Modal Form --> 
<!-- The Modal -->
    <div class="modal" id="EditTaxes">
      <div class="modal-dialog">
        <form method="POST" action="{{url('store_taxes')}}" class="basicform" enctype="multipart/form-data">
            @CSRF
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Edit Taxes</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <input type="hidden" id="id" name="id" class="form-control">
              <!-- Modal body -->
              <div class="modal-body">
                <div class="row">
                  <div class="form-group"><input type="text" id="name" name="name" class="form-control" placeholder="GST Name"  required></div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-6">
                    <input type="text" name="CGST" id="CGST" class="form-control" placeholder="CGST %" required>
                  </div>
                  <div class="form-group col-lg-6 col-6">
                    <input type="text" name="SGST" id="SGST" class="form-control" placeholder="SGST %" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-lg-6 col-6">
                    <input type="number" name="IGST" id="IGST" class="form-control" placeholder="IGST %" required>
                  </div>
                  <div class="form-group col-lg-6 col-6">
                    <input type="number" name="GST" id="GST" class="form-control" placeholder="GST %" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <input type="text" name="incl_rate" id="incl_rate" class="form-control" placeholder="Incl Rate" required>
                  </div>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="update" value="updateTax">update</button>
              </div>

            </div>
        </form>
      </div>
    </div>
<!-- End Modal Form --> 
<style type="text/css">
  .icons i{
    font-size: 20px;
    background-color: green;
    color: #fff;
    padding: 5px;
    border-radius: 5px;
  }
</style>

<script type="text/javascript">
  setTimeout(function() { 
    $("#hideDiv").fadeOut('fast'); 
}, 5000);
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip'
        buttons: [
            'print'
        ]
    } );
    });
</script>
<script type="text/javascript">
  function editData(id) {
    alert(id);
    $.ajax({
      method:"get",
      url:'editData/'+id,
      dataType:"json",
      success:function(data)
      {
        console.log(data);
        $('#name').empty();$('#CGST').empty();$('#SGST').empty();
        $('#IGST').empty();$('#GST').empty();$('#incl_rate').empty();
         $('#id').empty();
        $.each(data, function(key,value){
          $('#id').val(value.id);
          $('#name').val(value.name);
          $('#CGST').val(value.CGST);
          $('#SGST').val(value.SGST);
          $('#IGST').val(value.IGST);
          $('#GST').val(value.GST);
          $('#incl_rate').val(value.incl_rate);
        });
      }
    });
  }
</script>
@endsection