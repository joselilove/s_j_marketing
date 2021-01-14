<!DOCTYPE html>

<head>
    <title>S & J Sales</title>
    <?php
    include 'template/plugins.php';
    ?>
</head>

<body>


    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <?php
            include 'template/logo.php';
            include 'template/user_brief_info.php';
            ?>
        </header>
        <!--header end-->
        <?php
        include 'template/sidebar.php';
        ?>

        <!--main content start-->

        <section id="main-content">
            <section class="wrapper">
                <div class="form-w3layouts">
                    <section class="panel">

                        <header class="panel-heading" style="background-color: #f0bcb4 ! important;">
                            Add Products
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal bucket-form" method="get">

                                <div class="form-group">
                                    <label class="col-sm-3 control-label col-lg-3"></label>
                                    <div class="col-lg-6">

                                        <!-- <div class="input-group w3_w3layouts">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 3em;">Product ID</span>
                                <input type="text" class="form-control" name="product_id" aria-describedby="basic-addon1">
                            </div> -->

                                        <div class="input-group w3_w3layouts">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.3em;">Product Name</span>
                                            <input type="text" class="form-control" name="product_name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.0em;">STM NO</span>
                                            <input type="text" class="form-control" name="stm_no" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.1em;">STM DATE</span>
                                            <input type="date" class="form-control" name="stm_date" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.8em;">DR/SI No</span>
                                            <input type="number" class="form-control" name="dr_si_no" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.1em;">DR/SI Date</span>
                                            <input type="date" class="form-control" name="dr_si_date" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.7em;">Unit/Model</span>
                                            <input type="text" class="form-control" name="unit" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.7em;">Serial No</span>
                                            <input type="text" class="form-control" name="serial_number" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.1em;">Quantity</span>
                                            <input type="number" class="form-control" name="quantity" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.5em;">Date Received</span>
                                            <input type="date" class="form-control" name="date_received" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.3em;">Brand Name</span>
                                            <input type="text" class="form-control" name="brand_name" aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group w3_w3layouts ">
                                            <span class="input-group-addon" id="basic-addon1" style="padding-right: 5.7em;">Price</span>
                                            <input type="text" class="form-control" name="price" aria-describedby="basic-addon1">
                                        </div>

                                    </div>
                                </div>
                                <center><input type="button" onclick="add_product()" value="submit" class="btn btn-success" id="submit_data" href="javascript:;"></center>
                            </form>
                        </div>
                    </section>


                </div>
            </section>
            <!-- footer -->
            <div class="footer">
                <div class="wthree-copyright">
                </div>
            </div>
            <!-- / footer -->
        </section>

        <!--main content end-->
    </section>
</body>

</html>
<script type="text/javascript" src="javascript/product_value.js?v=16"></script>
<script type="text/javascript" src="javascript/clear_textfield_product.js?v=19"></script>

<script type="text/javascript" src="javascript/add_product.js?v=11"></script>