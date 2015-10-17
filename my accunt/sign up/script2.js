function nAme(){
	var a=document.forms["add"]["tx1"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	if(a.length < 2 || !letter.test(a) || number.test(a) ){
		document.getElementById('tx1').style.borderColor="red";
		//alert('First name should contain only alphabet');
		document.getElementById('name').innerHTML="First name should contain only alphabet";
		return false;
		}
		
		else{
		document.getElementById('tx1').style.borderColor="#6F3";
		document.getElementById('name').innerHTML=" ";	
		return true;
			}
	}

function lName(){
	var b=document.forms["add"]["tx2"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	
	if(b.length < 2 || !letter.test(b) || number.test(b)  ){
		document.getElementById('tx2').style.borderColor="red";
		//alert('Last name should contain only alphabets');
		document.getElementById('lname').innerHTML="*Last name should contain only alphabets";
		return false;
		}
		
		else{
			document.getElementById('tx2').style.borderColor="#6F3";
		document.getElementById('lname').innerHTML=" ";	
		return true;
			}
	}

function Coll(){
	var c=document.forms["add"]["tx3"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	
	if( !letter.test(c) || number.test(c)  ){
		document.getElementById('tx3').style.borderColor="#F03";
		//alert('College/Company/School should contain only alphabets ');
		document.getElementById('coll').innerHTML="*College/Company/School should contain only alphabets";
		return false;
		}
		else{
			document.getElementById('tx3').style.borderColor="#6F3";
		document.getElementById('coll').innerHTML=" ";	
		return true;
			}
		
	}

function Add1(){
	var d=document.forms["add"]["tx4"].value;
	
	if( d.length < 6 ){
		document.getElementById('tx4').style.borderColor="#F03";
		//alert('Address Field 1 should contain at least 6 characters ');
		document.getElementById('add1').innerHTML="* Address Field 1 should contain at least 6 characters ";
		return false;
		}
	else{
		document.getElementById('tx4').style.borderColor="#6F3";
		document.getElementById('add1').innerHTML=" ";	
		return true;
		}
	
	}

function Add2(){
	var e=document.forms["add"]["tx5"].value;
	
	if( e.length < 6 ){
		document.getElementById('tx5').style.borderColor="#F03";
		//alert('Address Field 1 should contain at least 6 characters ');
		document.getElementById('add2').innerHTML="* Address Field 2 should contain at least 6 characters ";
		return false;
		}
	else{
		document.getElementById('tx5').style.borderColor="#6F3";
		document.getElementById('add2').innerHTML=" ";	
		return true;
		}
	
	}

	

function City(){
	var f=document.forms["add"]["tx6"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	
	if( !letter.test(f) || number.test(f) ){
		document.getElementById('tx6').style.borderColor="#F03";
		//alert('Enter City Correctly , It should be alphabatic ');
		document.getElementById('city').innerHTML="*Enter City Correctly , It should be alphabatic ";
		return false;
		}
	else{
		document.getElementById('tx6').style.borderColor="#6F3";
		document.getElementById('city').innerHTML=" ";	
		return true;
		}	
	
	}

function Pin(){
	var g=document.forms["add"]["tx7"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	
	if( !number.test(g) || letter.test(g) ){
		document.getElementById('tx7').style.borderColor="#F03";
		//alert('Pincode should be numeric');
		document.getElementById('pin').innerHTML="*'Pincode should be numeric";
		return false;
		}
		
	else{
		document.getElementById('tx7').style.borderColor="#6F3";
		document.getElementById('pin').innerHTML=" ";	
		return true;
		}	
	
	}

function Reg(){
	var h=document.forms["add"]["tx8"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	if( !letter.test(h) || number.test(h) ){
		document.getElementById('tx8').style.borderColor="#F03";
		//alert('Enter Region/State Correctly , no numeric values allowed');
		document.getElementById('reg').innerHTML="*Enter Region/State Correctly , no numeric values allowed";
		return false;
		}
		
	else{
		document.getElementById('tx8').style.borderColor="#6F3";
		document.getElementById('reg').innerHTML=" ";	
		return true;
		
		}	
	
	}

function Country(){
	var i=document.forms["add"]["tx9"].value;
	var letter=/[a-zA-Z]/;
	var number=/[0-9]/;
	
	if( !letter.test(i) || number.test(i) ){
		document.getElementById('tx9').style.borderColor="#F03";
		//alert('Enter Country Correctly , no numeric values allowed');
		document.getElementById('country').innerHTML="*Enter Country Correctly , no numeric values allowed";
		return false;
		}
	else{
		
		document.getElementById('tx9').style.borderColor="#6F3";
		document.getElementById('country').innerHTML=" ";	
		return true;
		}	
		
	}





function Signup(){
	var a=document.forms["add"]["tx1"].value;
	var b=document.forms["add"]["tx2"].value;
	var c=document.forms["add"]["tx3"].value;
	var d=document.forms["add"]["tx4"].value;
	var e=document.forms["add"]["tx5"].value;
	var f=document.forms["add"]["tx6"].value;
	var g=document.forms["add"]["tx7"].value;
	var h=document.forms["add"]["tx8"].value;
	var i=document.forms["add"]["tx9"].value;
	var letter=/[a-zA-Z]/;
	//var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var allLetter = /^[a-zA-Z]+$/;
   var number=/[0-9]/;
    //var s=/\s/;   
   
	if(a.length < 2 || !letter.test(a) || number.test(a) ){
		document.getElementById('tx1').style.borderColor="red";
		//alert('First name should contain only alphabet');
		return false;
		}
	
	if(b.length < 2 || !letter.test(b) || number.test(b)  ){
		document.getElementById('tx2').style.borderColor="red";
		//alert('Last name should contain only alphabets');
		return false;
		}
	
	if( !letter.test(c) || number.test(c)  ){
		document.getElementById('tx3').style.borderColor="#F03";
		//alert('College/Company/School should contain only alphabets ');
		return false;
		}
	
	if( d.length < 6 ){
		document.getElementById('tx4').style.borderColor="#F03";
		//alert('Address Field 1 should contain at least 6 characters ');
		return false;
		}
	
	if( e.length < 6 ){
		document.getElementById('tx5').style.borderColor="#F03";
		//alert('Address Field 2 should contain at least 6 characters ');
		return false;
		}
	
	if( !letter.test(f) || number.test(f) ){
		document.getElementById('tx6').style.borderColor="#F03";
		//alert('Enter City Correctly , It should be alphabatic ');
		return false;
		}
	
	if( !number.test(g) || letter.test(g) ){
		document.getElementById('tx7').style.borderColor="#F03";
		//alert('Pincode should be numeric');
		return false;
		}
	
	if( !letter.test(h) || number.test(h) ){
		document.getElementById('tx8').style.borderColor="#F03";
		//alert('Enter Region/State Correctly , no numeric values allowed');
		return false;
		}
	
	if( !letter.test(i) || number.test(i) ){
		document.getElementById('tx9').style.borderColor="#F03";
		//alert('Enter Country Correctly , no numeric values allowed');
		return false;
		}
		

	    /* if( !this.add.g1.checked ){
			 alert('Can not create account please check from checkbox Default address');
			 return false;		
			}
	     */
	/*if( !j.checked ){
		//document.getElementById('tc').style.borderColor="red";
		alert('Please agree to terms and condition to continue ');
		return false;
		}*/
		
		if(!this.add.checkbox.checked)
{
    alert('You must agree to the terms first.');
    return false;
}
		
	
	else{
		document.getElementById('tx1').style.borderColor="#6F3";
		document.getElementById('tx2').style.borderColor="#6F3";
		document.getElementById('tx3').style.borderColor="#6F3";
		document.getElementById('tx4').style.borderColor="#6F3";
		document.getElementById('tx5').style.borderColor="#6F3";
		document.getElementById('tx6').style.borderColor="#6F3";
		document.getElementById('tx7').style.borderColor="#6F3";
		document.getElementById('tx8').style.borderColor="#6F3";
		document.getElementById('tx9').style.borderColor="#6F3";
	
		
		alert('successful');
		}
	}