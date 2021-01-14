<!DOCTYPE html>
<html>
<head>
</head>
<body>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <!-- Carting start -->
<div class="alert alert-success" id="success-alert_c" style=" position: fixed; left:46%;">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Successfully!</strong>
</div>

<div class="alert alert-danger" id="danger-alert_c" style=" position: fixed; left:32%;">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Complete the form below!</strong>
</div>

<br>
<br>
<br>
<div>
<form class="form-horizontal bucket-form" method="get">
                    <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3"></label>
                        <div class="col-lg-6">
                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.3em;">Customer Name</span>
                                <input type="text" class="form-control" name="customer_name" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.6em;">Contact No</span>
                                <input type="number" class="form-control" name="contact_no" aria-describedby="basic-addon1" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 6.6em;">S.I. No</span>
                                <input type="number" class="form-control" name="si_no" aria-describedby="basic-addon1" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 6.6em;">D.R. No</span>
                                <input type="number" class="form-control" name="dr_no" aria-describedby="basic-addon1" onkeypress="return isNumberKey(event)">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.7em;">Customer Term</span>
                                <input type="text" class="form-control" name="customer_term" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.3em;">Customer Address</span>
                                <input type="text" class="form-control" name="customer_address" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 7.5em;">Date</span>
                                <input type="date" class="form-control" name="date" aria-describedby="basic-addon1">
                            </div>
  <center><h1>Shopping Cart</h1></center>
     <table class="table" id="cart"style="margin-left:-20%;"></table>
 <center><h3>Grand Total:<label id="grand_total">0</label>.00</h3></center>
                        </div>
                    </div>
                    <center><input type="button" value="submit" class="btn btn-success" onclick="add_customer()"></center>              
                </form>
</div>
<br>
<br>
<br>
<!-- Carting end -->
    </div>
  </div>
</div>

</body>
</html>