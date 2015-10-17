function nAme(){
	var a=document.forms["signup"]["tx1"].value;
	var letter=/[a-zA-Z]/;
	var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //var allLetter = /^[a-zA-Z]+$/;
   var number=/[0-9]/;
   
	if(a.length < 6 || !letter.test(a) || !number.test(a) || a==null ){
		document.getElementById('tx1').style.borderColor="#F03";
		//alert('Username should contain atleast 1 character and 1 digit . Length( minimum 6 to 12 )');
		document.getElementById('nam').innerHTML="*name should contain at least 6 letters and should be alphanumeric";
		return false;
		}
		else
		{
			document.getElementById('tx1').style.borderColor="#6F3";
			document.getElementById('nam').innerHTML=" ";
			return true;
			}
	}


function eMail(){
	var b=document.forms["signup"]["tx2"].value;
	var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	if( !filter.test(b) ){
			document.getElementById('tx2').style.borderColor="#F03";
	        //alert('Email should not be blank and should be in form of abc@xyz.ab');
	        document.getElementById('mail').innerHTML="*Email should be in form of abc@xyz.ab";
			return false;
	}
	else{
		document.getElementById('tx2').style.borderColor="#6F3";
			document.getElementById('mail').innerHTML=" ";
			return true;
		}
	}

function nUm(){
	var c=document.forms["signup"]["tx3"].value;
    if( c.length < 10 || c.length >10 ){
		document.getElementById('tx3').style.borderColor="#F03";
		//alert('Mobile number should should have 10 digits');
		document.getElementById('num').innerHTML="*Mobile number should should have 10 digits";
		return false;
		}
	else
	{
		document.getElementById('tx3').style.borderColor="#6F3";
			document.getElementById('num').innerHTML=" ";
			return true;
		}	

	}


function pAss(){
	var d=document.forms["signup"]["tx4"].value;
	var letter=/[a-zA-Z]/;
	 var number=/[0-9]/;
	 
	if(d.length < 6 || !letter.test(d) || !number.test(d) ){
		document.getElementById('tx4').style.borderColor="#F03";
		//alert(' Password should not be blank and should contain at least one character and one digit . Length (6-12).');
		document.getElementById('pass').innerHTML="*password should contain at least one character and one digit . Length (6-12)";
		return false;
		}
		else{
			document.getElementById('tx4').style.borderColor="#6F3";
			document.getElementById('pass').innerHTML=" ";
			return true;

			}
	}


function rePass(){
	var d=document.forms["signup"]["tx4"].value;
	var e=document.forms["signup"]["tx5"].value;
	
    if(d!=e){
			document.getElementById('tx5').style.borderColor="#F03";
			//alert('Password dosent match');
			document.getElementById('repass').innerHTML="*Password dosent match";
			return false;
			}
	else{
		document.getElementById('tx5').style.borderColor="#6F3";
		document.getElementById('repass').innerHTML=" ";
		return true;
		}		
			
	}

function Submit(){
	var a=document.forms["signup"]["tx1"].value;
	var b=document.forms["signup"]["tx2"].value;
	var c=document.forms["signup"]["tx3"].value;
	var d=document.forms["signup"]["tx4"].value;
	var e=document.forms["signup"]["tx5"].value;
	var letter=/[a-zA-Z]/;
	var filter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    //var allLetter = /^[a-zA-Z]+$/;
   var number=/[0-9]/;
	
	if(a.length < 6 || !letter.test(a) || !number.test(a) || a==null ){
		document.getElementById('tx1').style.borderColor="#F03";
		//alert('Username should contain atleast 1 character and 1 digit . Length( minimum 6 to 12 )');
		//document.getElementById('nam').onfocus.innerHTML="*name should contain at least 6 letters and should be alphanumeric";
		return false;
		}
		
		
		if( !filter.test(b) ){
			document.getElementById('tx2').style.borderColor="#F03";
	//alert('Email should not be blank and should be in form of abc@xyz.ab');
	return false;
	}
	
	if( c.length < 10 || c.length >10 ){
		document.getElementById('tx3').style.borderColor="#F03";
		//alert('Mobile number should should have 10 digits');
		return false;
		}
		
		if(d.length < 6 || !letter.test(d) || !number.test(d) ){
			document.getElementById('tx4').style.borderColor="#F03";
		//alert(' Password should not be blank and should contain at least one character and one digit . Length (6-12).');
		return false;
		}
		
		if(d!=e){
			document.getElementById('tx5').style.borderColor="#F03";
			//alert('Password dosent match');
			return false;
			}
			
	else{
		document.getElementById('tx1').style.borderColor="#6F3";
		document.getElementById('tx2').style.borderColor="#6F3";
		document.getElementById('tx3').style.borderColor="#6F3";
		document.getElementById('tx4').style.borderColor="#6F3";
		document.getElementById('tx5').style.borderColor="#6F3";
		
		alert('Successful');
		}	
	}