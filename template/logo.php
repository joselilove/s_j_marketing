<!DOCTYPE html>
<html>
<body>
    <!--logo start-->
<div class="brand">
<div class="alert alert-success" id="success-alert" style=" position: fixed; left:50%;">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Successfully! </strong>
</div>

<div class="alert alert-danger" id="danger-alert" style=" position: fixed; left:50%;">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>Error!</strong>
</div>
<div class="alert alert-danger" id="danger-alert1" style=" position: fixed; left:50%;">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>The Available Quantity is <span id="available_q">12</span></strong>
</div>

    <a href="home.php" class="logo">
        S & J
    </a>


    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
</body>
</html>

<script>
    window.addEventListener('load', function(event){
        $("#danger-alert1").hide();
	});
</script>