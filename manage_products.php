<!DOCTYPE html>
<head>
<title>S & J Marketing</title>
    <?php
        include 'template\plugins.php';
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
      <?php
          include 'update_product.php';
      ?>  
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #f0bcb4 ! important;">

<input type="hidden" name="user_type" value="<?php echo $_SESSION['user_type'] ?>">

<ul class="nav pull-right top-menu" style="margin-top: 10px;">
        <li>
          <select class="form-control" id="sorting">
              <option value="date_received">Date</option>
              <option value="brand_name">Brand</option>
              <option value="product_name">Product Name</option>
              <option value="serial_number">Serial Number</option>
              <option value="unit">Unit</option>
              <option value="quantity">Quantity</option>
          </select>
        </li>
        <li>
            <input type="text" class="form-control search" name="inventory_search" placeholder="Enter.." onkeyup="find_product()">
        </li>
</ul>

     Inventory
    </div>
    <div class="table-responsive">
      <table id="inventory_table" class="table table-striped b-t b-light"></table>
    </div>
    <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-7 text-right text-center-xs" style="padding-right: 4.2em;">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            
            <li><a href="#" onclick="setPage_prev()"><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="#" onclick="setPage_next()"><i class="fa fa-chevron-right"></i></a></li> 

          </ul>
        </div>
      </div>
    </footer>
  </div>
  <input type="button" value="Print" class="btn btn-success" onclick="pirint()">
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
</body>
<script src = "javascript/action.js?v=9"></script>
</html>

<script src="./javascript/product_value.js?v=24"></script>
<script type="text/javascript" src="javascript/clear_textfield_product.js?v=32"></script>
<script>
            var current_page = 0;
            var end_page = 5;
//pagination
            function setPage_next(){
                current_page = current_page + 6;
                end_page = end_page + 6;
                view_inventory();
            }
            function setPage_prev(){
                if(current_page <= 0){
                    current_page = current_page - 0;
                }
                else{
                    current_page = current_page - 6;
                    if(current_page < 0){
                        current_page = 0;
                    }
                }

                if(end_page == 5){
                    end_page = end_page - 0;
                }
                else{
                    end_page = end_page - 6;
                    if(end_page < 5){
                        end_page = 5;
                    }
                }
                view_inventory();
            }
function view_inventory(){
  destination = "db/show_inventory.php";
	var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState ==4 && xhr.status == 200) {
      Obj = JSON.parse(xhr.responseText);
      display_inventory(Obj);
		}
	}   
}

function find_product(){
  var serial_number = document.getElementsByName('inventory_search')[0].value;
    var sort = document.getElementById("sorting").value;
  destination = "db/find_products_report.php?serial_number="+serial_number+"&sort="+sort;
	var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState ==4 && xhr.status == 200) {
      Obj = JSON.parse(xhr.responseText);
            current_page = 0;
            end_page = 5;
      display_inventory(Obj);
		}
	}
}

function display_inventory(prodData){
  var inventory_info ="<thead>"
                    +"<tr>"
                    +"<th>Product Name</th>"
                    +"<th>Unit/Model</th>"
                    +"<th>Serial No</th>"
                    +"<th>Quantity</th>"
                    +"<th>Date Receive</th>"
                    +"<th>Brand Name</th>"
                    +"<th>Price</th>"
                    +"<th style='width:30px;'></th>"
                    +"</tr>"
                    +"</thead>";
                   
	// for (var i = 0; i < prodData.product_name.length; i++) {
    for (var i = current_page ; i <= end_page; i++) {
          if(i >= prodData.product_name.length){
            end_page = end_page - 6;
            current_page = current_page -6;
              break;
          }
    inventory_info  +="<tbody>"
                    +"<tr>"
                    +"<td>"+prodData.product_name[i]+"</td>"
                    +"<td>"+prodData.unit[i]+"</td>"
                    +"<td>"+prodData.serial_number[i]+"</td>"
                    +"<td>"+prodData.quantity[i]+"</td>"
                    +"<td>"+prodData.date_received[i]+"</td>"
                    +"<td>"+prodData.brand_name[i]+"</td>"
                    +"<td>"+prodData.price[i]+"</td>"
                    +"<td>";
     if(getUserType() == 'admin'){               
    inventory_info  +="<a href='#' onclick='find_product_to_update("+prodData.ID[i]+")' class='active' ui-toggle-class=''><i class='glyphicon glyphicon-pencil' data-toggle='modal' data-target='#update_product'></i></a>"
                    +"</td>"
                    +"</tr>"
                    +"</tbody>";
       }
	}
	document.getElementById("inventory_table").innerHTML = inventory_info;
}

function find_product_to_update(data){
  destination = "db/find_product_to_update.php?product_id="+data;
  var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState == 4 && xhr.status == 200) {
			Obj = JSON.parse(xhr.responseText);
      getElementProductID()[0].value = Obj.ID[0];
      getElementProductName()[0].value = Obj.product_name[0];
      getElementUnit()[0].value = Obj.unit[0];
      getElementSerialNumber()[0].value = Obj.serial_number[0];
      getElementQuantity()[0].value = Obj.quantity[0];
      getElementDateReceived()[0].value = Obj.date_received[0];
      getElementBrandName()[0].value = Obj.brand_name[0];
		}
	}
}

function update_product(){
  // alert(getAddQuantity());
  destination = "db/update_inventory.php?product_name="+getProductName()+
                                            "&unit="+getUnit()+
                                            "&serial_number="+getSerialNumber()+
                                            "&quantity="+getQuantity()+
                                            "&date_received="+getDateReceived()+
                                            "&brand_name="+getBrandName()+
                                            "&product_id="+getProductID()+
                                            "&add="+getAddQuantity();
	var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState ==4 && xhr.status == 200) {
                    if (xhr.responseText == 'Product Updated!') {
                      clear_textfield_product_update();
                        view_inventory();
                                $("#success-alert_p").fadeTo(2000, 500).slideUp(500, function(){
                                $("#success-alert_p").slideUp(500);
                                });   
                    }
                    else{
                      // alert(xhr.responseText);
                                $("#danger-alert_p").fadeTo(2000, 500).slideUp(500, function(){
                                $("#danger-alert_p").slideUp(500);
                                });
                    }
		}
	}
    
}

function delete_product(data){
  var deleting = confirm('Delete this item?');
  if(deleting){
            destination = "db/delete_product.php?product_id="+data;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", destination, true);
            xhr.send();
            xhr.onreadystatechange=function(){
              if (xhr.readyState ==4 && xhr.status == 200) {
                        if (xhr.responseText == 'Product Deleted!') {
                              view_inventory();
                                      $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                                      $("#success-alert").slideUp(500);
                                      });   
                          }
                          else{
                                      $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
                                      $("#danger-alert").slideUp(500);
                                      });
                          }
              }
            }
  }
}

function search_serial_product(){
  
}

    window.addEventListener('load', function(event){
        view_inventory();
        element = document.getElementById("inventory");
        element.classList.add("active");
        $("#danger-alert").hide();
        $("#success-alert").hide();
	});
</script>