<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="update_product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="alert alert-success" id="success-alert_p" style=" position: fixed; left:40%;">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>Successfully! </strong>
                </div>
                <div class="alert alert-danger" id="danger-alert_p" style=" position: fixed; left:44%;">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>Failed!</strong>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title">Update Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- update start -->
                    <div class="typo-agile">
                        <div class="panel-heading" style="background-color: #f0bcb4 ! important;">
                            Update Product
                        </div>
                        <form class="panel">
                            <br>
                            <center>
                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 3em;">Product ID</span>
                                    <input type="text" class="form-control" name="product_id" aria-describedby="basic-addon1" readonly>
                                </div>

                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.3em;">Product Name</span>
                                    <input type="text" class="form-control" name="product_name" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.7em;">Unit/Model</span>
                                    <input type="text" class="form-control" name="unit" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.7em;">Serial No</span>
                                    <input type="text" class="form-control" name="serial_number" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.1em;">Quantity</span>
                                    <input type="number" class="form-control" name="quantity" aria-describedby="basic-addon1">
                                </div>
                                <!-- Add Stocks -->
                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.7em;">Add Stocks</span>
                                    <input type="number" class="form-control" name="add_quantity" aria-describedby="basic-addon1">
                                </div>
                                <!-- -->
                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.5em;">Date Received</span>
                                    <input type="date" class="form-control" name="date_received" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group w3_w3layouts" id="ex3">
                                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.3em;">Brand Name</span>
                                    <input type="text" class="form-control" name="brand_name" aria-describedby="basic-addon1">
                                </div>
                            </center>
                        </form>
                    </div>
                    <!-- update end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="update_product()">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<script>
    window.addEventListener('load', function(event) {
        $("#danger-alert_p").hide();
        $("#success-alert_p").hide();
    });
</script>