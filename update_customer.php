<!DOCTYPE html>
<html>

<head>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="update_product" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- update start -->
                    <div class="typo-agile">
                        <div class="panel-heading">
                            Update Customer Info
                        </div>

                        <form class="panel">
                            <br>
                            <input type="hidden" class="form-control" name="customer_id" aria-describedby="basic-addon1">
                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.3em;">Customer Name</span>
                                <input type="text" class="form-control" name="customer_name" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.6em;">Contact No</span>
                                <input type="text" class="form-control" name="contact_no" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.6em;">S.I. No</span>
                                <input type="text" class="form-control" name="si_no" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.6em;">D.R. No</span>
                                <input type="text" class="form-control" name="dr_no" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.7em;">Customer Term</span>
                                <input type="number" class="form-control" name="customer_term" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.3em;">Customer Address</span>
                                <input type="text" class="form-control" name="customer_address" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 7.5em;">Date</span>
                                <input type="date" class="form-control" name="date" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.4em;">Product Serial</span>
                                <input type="text" class="form-control" name="serial_number" aria-describedby="basic-addon1" onkeyup="find_product(this.value);">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.1em;">Product Quantity</span>
                                <input type="number" class="form-control" name="quantity" aria-describedby="basic-addon1" onkeyup="showAmount(this.value)">
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.1em;">Product Unit</span>
                                <input type="text" class="form-control" name="unit" aria-describedby="basic-addon1" readonly>
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.7em;">Product Price</span>
                                <input type="text" class="form-control" name="price" aria-describedby="basic-addon1" readonly>
                            </div>

                            <div class="input-group w3_w3layouts ">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 6.1em;">Amount</span>
                                <input type="number" class="form-control" name="amount" aria-describedby="basic-addon1" readonly>
                            </div>

                        </form>
                    </div>
                    <!-- update end -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="update_customer();">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>