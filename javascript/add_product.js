function add_product(){
    destination = "db/add_product_to_db.php?product_name="+getProductName()+
                                            "&unit="+getUnit()+
                                            "&serial_number="+getSerialNumber()+
                                            "&quantity="+getQuantity()+
                                            "&date_received="+getDateReceived()+
                                            "&brand_name="+getBrandName()+
                                            "&price="+getProductPrice()+
                                            "&stm_no="+getStmNo()+
                                            "&stm_date="+getStm_date()+
                                            "&dr_si_no="+getdr_si_no()+
                                            "&dr_si_date="+getdr_si_date();
	var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState ==4 && xhr.status == 200) {
                    if (xhr.responseText == 'Product Added!') {
                        clear_textfield_product();
                        
                                $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                                $("#success-alert").slideUp(500);
                                });   
                    
                
                    }
                    else{
                        alert(xhr.responseText);
                                $("#danger-alert").fadeTo(2000, 500).slideUp(500, function(){
                                $("#danger-alert").slideUp(500);
                                });
                    }
		}
	}
    
}

    window.addEventListener('load', function(event){
        element = document.getElementById("inventory");
        element.classList.add("active");
        $("#danger-alert").hide();
        $("#success-alert").hide();
    });
     