@extends('layouts.app')

@section('content')
 

<div class="container">
	<div class="table-responsive" style="width:100%;">
		<table id="example" class="display">
			<thead>
				<tr>
					<th>Sr.No.</th>
				</tr>
			</thead>
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
                
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>

            </div>
        </form>
      </div>
    </div>
<!-- End Modal Form --> 
@endsection