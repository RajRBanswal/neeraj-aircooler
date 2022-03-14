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
      <h3>All Suppliers</h3>
    </div>
    <div class="form-group col-lg-2 col-4" ><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Taxes">Add Suppliers</button></div>
  </div>
    <div class="table-responsive" style="width:100%;">
      <table id="example" class="display table">
        <thead>
          <tr>
            <th>Sr.No.</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile No.</th>
            <th>GSTIN No.</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
     
        </tbody>
      </table>
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
</div>
@endsection