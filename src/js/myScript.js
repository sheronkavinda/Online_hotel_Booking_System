function loadData(data){

    if(data == "btn1"){
        document.getElementById("phoneImg").src = "images/iphone.jpg";
        document.getElementById("para").innerHTML = "iPhone 15 Pro Max is as durable as it is beautiful, and features an aerospace-grade aluminum and glass design.";
    }

    else if (data == "btn2") {
        document.getElementById("phoneImg").src = "images/nokia.png";   
        document.getElementById("para").innerHTML = "Connecting people !!!";
    }

    else if (data == "btn3") {
        document.getElementById("phoneImg").src = "images/samsung.jpg";  
        document.getElementById("para").innerHTML = "Do What you cant, S24 Ultra 256GB";
    }

    else{
        alert("Invalid! ");
    }
}

function productForInLoop() {

    var phone = ["iphone = Rs.388000", "Nokia = Rs.7000" , "samusng = Rs.300000"];

    document.getElementById("phoneImg").src = "images/phone1.jpg";

    var message ="list of prices (using for loop)<br><br>"; 
    
    var len = phone.length;

    for (var i=0; i<len; i++){
        message += phone[i] + "<br>";
    }

    document.getElementById("para").innerHTML = message;
}

function priceHigher(){
    var phone = {iphone :388000, Nokia : 7000 , samusng : 300000};
    
    let text = "";

    for (let x in phone) {
        if(phone[x] >80000)
        
             text += x + " : " + phone[x]  + "<br/>" ;
    }

    document.getElementById("para").innerHTML = text;
    
}

function priceLower(){
    var phone = {iphone :388000, Nokia : 7000 , samusng : 300000};
    
    let text = "";

    for (let x in phone) {
        if(phone[x] < 40000)
        
             text += x + " : " + phone[x]  + "<br/>" ;
    }

    document.getElementById("para").innerHTML = text;
}



  function checkPassword() {
	    if(document.getElementById("psw").value != document.getElementById("repsw").value )
			 {
				 alert("Mismatch password !!");
				 return false;
				 
			 }
			 else{
				 alert("Success");
				 return true;
			 }
    
  }
  