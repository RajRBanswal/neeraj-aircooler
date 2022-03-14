@extends('layouts.app')

@section('content')
 <!-- The Modal -->
    <div class="modal" id="myModal">
      <div class="modal-dialog">
        <form method="POST" action="{{url('store_logo')}}" class="basicform" enctype="multipart/form-data">
            @CSRF
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add Logo</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="kv-avatar center-block">                            
                    <input type="file" class="form-control" id="logo" placeholder="Product Name" name="logo" class="file-loading" style="width:auto;"/>
                </div>
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
    
     

            
    

</body>

@endsection
