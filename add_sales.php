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
                include 'template\sidebar.php';
            ?>

    <!--main content start-->
<section id="main-content">
	<section class="wrapper">
        <div class="form-w3layouts">




<section class="panel">
            <header class="panel-heading">
               Add Sales
            </header>
            <div class="panel-body">
                <form class="form-horizontal bucket-form" method="get">

                    <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3"></label>
                        <div class="col-lg-6">

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 4em;">Product Name</span>
                    <input type="text" class="form-control" name="product_name" aria-describedby="basic-addon1">
                </div>
                
                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 6.7em;">Quantity</span>
                    <input type="number" class="form-control" name="quantity" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 8.7em;">Unit</span>
                    <input type="text" class="form-control" name="unit" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 6.4em;">Serial No</span>
                    <input type="text" class="form-control" name="serial_no" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.7em;">Amount Paid</span>
                    <input type="number" class="form-control" name="product_name" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 8.5em;">Date</span>
                    <input type="date" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 5em;">Customer ID</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.2em;">Customer Name</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.1em;">Customer Address</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1">Customer Contact No</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 5.4em;">D.R./S.I. No</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group w3_w3layouts">
                    <span class="input-group-addon" id="basic-addon1" style="padding-right: 8.2em;">Term</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                </div>

                        </div>
                    </div>
                    <center><input type="button" value="submit" class="btn btn-success"></center>        
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

<script>
    window.addEventListener('load', function(event){
        element = document.getElementById("sale");
        element.classList.add("active");
        $("#danger-alert").hide();
        $("#success-alert").hide();
	});
</script>
