<!DOCTYPE html>
<head>
<title>S & J Marketing</title>
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
      <?php
          include 'carting.php';
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

     Sales
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Show Cart</button>

    </footer>
  </div>
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
<script type="text/javascript" src="javascript/product_value.js?v=15"></script>
<script type="text/javascript" src="javascript/customer_value.js?v=15"></script>
<script type="text/javascript" src="javascript/clear_textfield_customer.js?v=15"></script>
</html>

<script src="./javascript/product_value.js?v=21"></script>
<script type="text/javascript" src="javascript/clear_textfield_product.js?v=31"></script>
<script>

            var current_page = 0;
            var end_page = 5;
            var data;
            var product_cart_id = [];
            var product_cart_qt = [];
            var product_cart_sn = [];
            var product_cart_sub_amount = [];
            var product_cart_unit = [];
            var orig_qt = [];
            var t = -1;
function non_negative(index){
  var qt_order = document.getElementsByName('quantity_order')[index].value;
  if(parseInt(qt_order) < 0){
    qt_order = qt_order * -1;
    document.getElementsByName('quantity_order')[index].value = qt_order;
  }
}
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
function add_cart(id, index, sn, unit, o_qt){
  var qt_order = document.getElementsByName('quantity_order')[index].value;
        var value = true;
        var i = 0;
        for(i = 0; i < product_cart_id.length; i++){
            if(id == product_cart_id[i]){
              if(((parseInt(product_cart_qt[i]) + parseInt(qt_order)) <= o_qt)){                                  
                product_cart_qt[i] = parseInt(product_cart_qt[i]) + parseInt(qt_order);
                value = false;
                break;
              }else{
                // alert('Invalid Quantity Ordered');
                document.getElementById('available_q').innerHTML = parseInt(o_qt)- parseInt(product_cart_qt[i]);
                $("#danger-alert1").fadeTo(2000, 500).slideUp(500, function(){
                                      $("#danger-alert1").slideUp(500);
                                      });
                value = false;
                break;
              }
            }
        }
        if(value == true){
          if(parseInt(o_qt) < parseInt(qt_order)){
                  // alert('Invalid Quantity');
                  if(product_cart_qt[index] == undefined){
                    document.getElementById('available_q').innerHTML = o_qt;         
                  }
                  document.getElementsByName('quantity_order')[index].value = o_qt;
                  $("#danger-alert1").fadeTo(2000, 500).slideUp(500, function(){
                                  $("#danger-alert1").slideUp(500);
                                  });
          }
          if(parseInt(o_qt) >= parseInt(qt_order)){
            t++;
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                                      $("#success-alert").slideUp(500);
                                      });
                  orig_qt.push(o_qt);
                  product_cart_id.push(id);
                  product_cart_qt.push(qt_order);
                  product_cart_sn.push(sn);
                  product_cart_sub_amount.push(0);
                  product_cart_unit.push(unit);
                    }
           }
           show_cart();
           view_inventory();
}

      function checkQt(){
        
      }

function getTotal_price(){
  total_bill = 0;
        for(var b = 0 ; b < data.ID.length; b++){
          for(var c = 0 ; c < data.ID.length; c++){
            if(product_cart_id[b] == data.ID[c]){
              total_bill += product_cart_qt[b] * data.price[c];
            }
          }
        }
  return total_bill;
}

function getSubTotal(qt, price, index){
  sub_total = parseInt(qt) * parseInt(price);
  product_cart_sub_amount[index] = sub_total;
  return sub_total;
}

function change_qt(index){
  var new_qt = document.getElementsByName('qt_order')[index].value;
    if(parseInt(orig_qt[index]) < parseInt(new_qt)){
      new_qt = orig_qt[index];
      alert('Invalid Quantity');
    }
    if(parseInt(orig_qt[index]) >= parseInt(new_qt)){
      product_cart_qt[index] = new_qt;
    }
    show_cart();
    view_inventory();
  }

function remove_to_cart(index){
  product_cart_id.splice(index,1);
  product_cart_qt.splice(index,1);
  product_cart_sub_amount.splice(index,1);
  product_cart_unit.splice(index,1);
  orig_qt.splice(index,1);
  show_cart();
}

function show_cart(){
  var cart_info = '<thead>'
                    +'<tr>'
                    +'<th>Product Name</th>'
                    +'<th>Quantity</th>'
                    +'<th>Price</th>'
                    +'<th>Serial Number</th>'
                    +'<th>Unit</th>'
                    +'<th>Amount</th>'
                    +'<th>Action</th>'
                    +'</tr>'
                    +'</thead>';
    for(var b = 0 ; b < product_cart_id.length; b++){
          for(var c = 0 ; c < data.ID.length; c++){
            if(product_cart_id[b] == data.ID[c]){
                cart_info  +='<tbody>'
                  +'<tr>'
                  +'<td>'+data.product_name[c]+'</td>'
                  +'<td><input type="number" name="qt_order" value="'+product_cart_qt[b]+'" onkeyup="change_qt('+b+')" onclick="change_qt('+b+')"></td>'
                  +'<td>'+data.price[c]+'</td>'
                  +'<td>'+data.serial_number[c]+'</td>'
                  +'<td>'+data.unit[c]+'</td>'
                  +'<td>'+getSubTotal(product_cart_qt[b],data.price[c], b)+'</td>'
                  +'<td><button type="button" class="close" aria-label="Close" onclick="remove_to_cart('+b+')"><span aria-hidden="true">&times;</span></button></td>'
                  +'</tr>'
                  +'</tbody>';
            }
          }
      }
  document.getElementById('cart').innerHTML = cart_info;
  document.getElementById('grand_total').innerHTML = getTotal_price();
}

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
  destination = "db/view_inventory.php";
    var xhr = new XMLHttpRequest();
    xhr.open("GET", destination, true);
    xhr.send();
    xhr.onreadystatechange=function(){
        if (xhr.readyState ==4 && xhr.status == 200) {
      Obj = JSON.parse(xhr.responseText);
      data = Obj;
      display_inventory(Obj);
        }
    }   
}

function find_product(){
  var serial_number = document.getElementsByName('inventory_search')[0].value;
    var sort = document.getElementById("sorting").value;
  destination = "db/find_product.php?serial_number="+serial_number+"&sort="+sort;
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
var q_ca = false;
var len = 0;
function display_inventory(prodData){
  var inventory_info ="<thead>"
                    +"<tr>"
                    +"<th></th>"
                    +"<th>Order</th>"
                    +"<th>Quantity in Cart</th>"
                    +"<th>Product ID</th>"
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
                   var l = '"'; 
    // for (var i = 0; i < prodData.product_name.length; i++) {
    for (var i = current_page ; i <= end_page; i++) {
          if(i >= prodData.product_name.length){
            end_page = end_page - 6;
            current_page = current_page -6;
              break;
          }
    inventory_info  +="<tbody>"
                    +"<tr>"
                    +"<td><button class='btn btn-info' value='"+prodData.serial_number[i]+"' onclick='add_cart("+prodData.ID[i]+","+i+","+l+""+prodData.serial_number[i]+""+l+","+l+""+prodData.unit[i]+""+l+","+prodData.quantity[i]+")'>Add to Cart</button></td>"
                    +"<td><input type='number' name='quantity_order' value='1' min='0' onkeyup='non_negative("+i+")'></td>";
                  if(product_cart_id.length == 0){
                    len = 1;
                  }else{
                    len = product_cart_id.length;
                  }
      for(var r = 0;r<len; r++){
        if(product_cart_id[r] == prodData.ID[i]){
          inventory_info  +="<td>"+product_cart_qt[r]+"</td>";
          q_ca = false;
          break;
        }
        else{
          q_ca = true;
        }
      }
      if(q_ca == true){
        inventory_info  +="<td>0</td>";
      }
    inventory_info  +="<td>"+prodData.ID[i]+"</td>"
                    +"<td>"+prodData.product_name[i]+"</td>"
                    +"<td>"+prodData.unit[i]+"</td>"
                    +"<td>"+prodData.serial_number[i]+"</td>"
                    +"<td>"+prodData.quantity[i]+"</td>"
                    +"<td>"+prodData.date_received[i]+"</td>"
                    +"<td>"+prodData.brand_name[i]+"</td>"
                    +"<td>"+prodData.price[i]+"</td>"
                    +"<td>";
     if(getUserType() == 'admin'){               
    inventory_info  +="<a href='#' onclick='find_product_to_update("+prodData.ID[i]+")' class='active' ui-toggle-class=''><i class='glyphicon glyphicon-refresh' data-toggle='modal' data-target='#update_product'></i></a>"
                    +"</td>"
                    +"</tr>"
                    +"</tbody>";
       }
    }
    document.getElementById("inventory_table").innerHTML = inventory_info;
}

function add_customer(){
  if(product_cart_id[0] == null){
              $("#danger-alert_c").fadeTo(2000, 500).slideUp(500, function(){
                                                  $("#danger-alert_c").slideUp(500);
                                                  });
  }else{
              var product_id = JSON.stringify(product_cart_id);
              var product_qt = JSON.stringify(product_cart_qt);
              var product_sub_t = JSON.stringify(product_cart_sub_amount);
              var product_sn = JSON.stringify(product_cart_sn);
              var product_unit = JSON.stringify(product_cart_unit);
                destination = "db/add_customer_sales_db.php?customer_name="+getCustomerName()+
                                                            "&contact_no="+getCustomerContactNo()+
                                                            "&si_no="+getSIno()+
                                                            "&dr_no="+getDRno()+
                                                            "&term="+getCustomerTerm()+
                                                            "&address="+getCustomerAddress()+
                                                            "&date="+getDate()+
                                                            "&product_sn="+product_sn+
                                                            "&product_qt="+product_qt+
                                                            "&product_unit="+product_unit+
                                                            "&product_sub_t="+product_sub_t;
                          
              var xhr = new XMLHttpRequest();
              xhr.open("GET", destination, true);
              xhr.send();
              xhr.onreadystatechange=function(){
                if (xhr.readyState ==4 && xhr.status == 200) {
                  if(xhr.responseText == "Customer Added Successfully!"){
                    $("#success-alert_c").fadeTo(2000, 500).slideUp(500, function(){
                                                  $("#success-alert_c").slideUp(500);
                                                  });  
                                                  clear_cus_s();
                                                  show_cart();
                                                  view_inventory();
                    // window.location.href = "http://localhost/s&j_marketingV3/customer_w_carting.php";
                  }else{
                    // alert(xhr.responseText);
                    $("#danger-alert_c").fadeTo(2000, 500).slideUp(500, function(){
                                                  $("#danger-alert_c").slideUp(500);
                                                  });
                  }
                }
              }
  }
}

    window.addEventListener('load', function(event){
        view_inventory();
        element = document.getElementById("customer");
        element.classList.add("active");
        $("#danger-alert").hide();
        $("#danger-alert1").hide();
        $("#success-alert").hide();
        $("#danger-alert_c").hide();
        $("#success-alert_c").hide();
    });
</script>