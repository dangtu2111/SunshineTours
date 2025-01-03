<link href="{{asset('backend/css/plugins/footable/footable.core.css')}}" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Pay Management</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Pay</a>
      </li>
      
    </ol>
  </div>
  <div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">


  <div class="ibox-content m-b-sm border-bottom">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="order_id">Order ID</label>
          <input type="text" id="order_id" name="order_id" value="" placeholder="Order ID" class="form-control">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="status">Order status</label>
          <input type="text" id="status" name="status" value="" placeholder="Status" class="form-control">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="customer">Customer</label>
          <input type="text" id="customer" name="customer" value="" placeholder="Customer" class="form-control">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="date_added">Date added</label>
          <div class="input-group date">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_added" type="text" class="form-control" value="03/04/2014">
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="date_modified">Date modified</label>
          <div class="input-group date">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="date_modified" type="text" class="form-control" value="03/06/2014">
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="amount">Amount</label>
          <input type="text" id="amount" name="amount" value="" placeholder="Amount" class="form-control">
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox">
        <div class="ibox-content">
@include('backend/payment/component/table')
        

        </div>
      </div>
    </div>
  </div>


</div>
<script src="{{asset('backend/js/plugins/footable/footable.all.min.js')}}"></script>
<script>
  $(document).ready(function() {

    $('.footable').footable();

  });
</script>
