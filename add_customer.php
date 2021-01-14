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
               Sales
            </header>
            <div class="panel-body">
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
                                <input type="text" class="form-control" name="contact_no" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.6em;">S.I. No</span>
                                <input type="number" class="form-control" name="si_no" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.6em;">D.R. No</span>
                                <input type="number" class="form-control" name="dr_no" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.7em;">Customer Term</span>
                                <input type="text" class="form-control" name="customer_term" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts">
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 1.3em;">Customer Address</span>
                                <input type="text" class="form-control" name="customer_address" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 7.5em;">Date</span>
                                <input type="date" class="form-control" name="date" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.4em;">Product Serial</span>
                                <input type="text" class="form-control" name="serial_number" aria-describedby="basic-addon1" onkeyup="find_product(this.value);">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.1em;">Product Name</span>
                                <input type="text" class="form-control" name="product_name" aria-describedby="basic-addon1" readonly>
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 2.1em;">Product Quantity</span>
                                <input type="number" class="form-control" name="quantity" aria-describedby="basic-addon1" onkeyup="showAmount(this.value)">
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 4.1em;">Product Unit</span>
                                <input type="text" class="form-control" name="unit" aria-describedby="basic-addon1" readonly>
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 3.7em;">Product Price</span>
                                <input type="text" class="form-control" name="price" aria-describedby="basic-addon1" readonly>
                            </div>

                            <div class="input-group w3_w3layouts "  >
                                <span class="input-group-addon" id="basic-addon1" style="padding-right: 6.1em;">Amount</span>
                                <input type="number" class="form-control" name="amount" aria-describedby="basic-addon1" readonly>
                            </div>

                        </div>
                    </div>
                    <center><input type="button" value="submit" class="btn btn-success" onclick="add_customer()"></center>              
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
<script type="text/javascript" src="javascript/product_value.js?v=14"></script>
<script type="text/javascript" src="javascript/customer_value.js?v=14"></script>
<script type="text/javascript" src="javascript/clear_textfield_customer.js?v=19"></script>
<script type="text/javascript" src="javascript/add_customer.js?v=11"></script>
<script>

function find_product(data){
    destination = "db/find_product_serial_number.php?serial_number="+getSerialNumber();
	var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState ==4 && xhr.status == 200) {
            Obj = JSON.parse(xhr.responseText);
            
            if(xhr.responseText == '{}'){
            getElementProductName()[0].value = '';
            getElementUnit()[0].value = '';
            getElementProductPrice()[0].value = '';   
            }
            else{
            getElementProductName()[0].value = Obj.product_name[0];
            getElementUnit()[0].value = Obj.unit[0];
            getElementProductPrice()[0].value = Obj.price[0];
            }
            
		}
	}
}

function showAmount(data){
    var total = data * getProductPrice();
    getElementAmount()[0].value = total;
}

    window.addEventListener('load', function(event){
        element = document.getElementById("customer");
        element.classList.add("active");
        $("#danger-alert").hide();
        $("#success-alert").hide();
    });

</script>