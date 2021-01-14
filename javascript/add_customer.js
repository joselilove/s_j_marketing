function add_customer(){
    destination = "db/add_customer_to_db.php?customer_name="+getCustomerName()+
                                            "&contact_no="+getCustomerContactNo()+
                                            "&si_no="+getSIno()+
                                            "&dr_no="+getDRno()+
                                            "&term="+getCustomerTerm()+
                                            "&address="+getCustomerAddress()+
                                            "&date="+getDate()+
                                            "&serial_number="+getSerialNumber()+
                                            "&product_name="+getProductName()+
                                            "&quantity="+getQuantity()+
                                            "&unit="+getUnit()+
                                            "&amount_paid="+getAmount();
	var xhr = new XMLHttpRequest();
	xhr.open("GET", destination, true);
	xhr.send();
	xhr.onreadystatechange=function(){
		if (xhr.readyState ==4 && xhr.status == 200) {
            alert(xhr.responseText);
                    if (xhr.responseText == 'Customer Added!') {
                        clear_textfield_customer_add();
                        
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
     