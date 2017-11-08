<?PHP
	include('conf.php');
	if(@$_GET['lng'])
	{
		if(in_array($_GET['lng'],ARRAY('az','ru','en')))	{$lng2=$_GET['lng'];}
		else{$lng2='az';}
		switch ($lng2)
		{
			case 'az': $lng=1; break;
			case 'ru': $lng=2; break;
			case 'en': $lng=3; break;
		}
	}
	else{$lng=1;$lng2='az';}
	if(@$_POST['search']){
	@$input_text = trim($_POST['search']);
	@$input_text = strip_tags($input_text);
	@$input_text = htmlspecialchars($input_text);
	@$search = mysql_escape_string($input_text);
	}
	
	if(empty($_GET['page']))
	{ 
		$axtaris='';


	}
	else
	{
		$axtaris=''.$site_url.$lng2.'/pages/home/';
	}
	
	
	if(@$_GET['page'])
	{ 
		switch($_GET['page'])
		{
case 'pages'	: $page='home'; 		$ll='u_id'; 	$tbn='menu';		$def=1; $www='u_id';	$qqq='url_tag';	break;
case 'elaqe'	: $page='elaqe'; 		$ll='u_id';		$tbn='menu';		$def=30;$www='u_id';	$qqq='url_tag'; break;
case 'qeydiyyat': $page='qeydiyyat'; 	$ll='u_id';		$tbn='menu';		$def=33;$www='u_id';	$qqq='url_tag'; break;
case 'xeberler'	: $page='xeberler'; 	$ll='cat_id';	$tbn='menu';		$def=29;$www='u_id';	$qqq='url_tag';	break;
case 'xeber'	: $page='xeber'; 		$ll='url_tag';	$tbn='xeberler';	$def=29;$www='u_id';	$qqq='url_tag';	break;
default			: $page='home'; 		$ll='u_id';		$tbn='menu';		$def=1;	$www='u_id';	$qqq='url_tag'; break;
		}
	}
	else{$page='home'; $ll='u_id'; 	$tbn='menu'; $def=1; $www='u_id'; $qqq='url_tag';	}
	if($page!='search'){
	//if($page=='home'){$$ll="home";}else{$$ll=@$_GET['val'];}
	$$ll=@$_GET['val'];
	$sql=MYSQLI_QUERY($connection,'select * from '.$tbn.' where l_id="'.$lng.'" and status=0');
	$d_massiv=array();
	while($b=MYSQLI_FETCH_ASSOC($sql))
	{
		$tt=$b['u_id'];
		$d_massiv[$tt]=$b;
		if($b['url_tag']==$$ll and $b['url_tag']!='')	{	$$ll=$b['u_id']; $t1=2;}
	}
	if(@$t1==2)	{			}
	else		{$$ll=$def;	}	
	}
	
	else{}

	/*****************************************************************************************/
	if(empty ($_GET['page'])){$_GET['page']='pages'; $def_m_a=0;} else{$def_m_a=1;}
	//dil linklerini duzeltmek ucun funksiya
	$str='';
	$str.='/'.$_GET['page'].'/';
	
?>




<!DOCTYPE html>
<html lang="en" class="wide wow-animation smoothscroll scrollTo">
  <head>
    <!-- Site Title-->
    <title><?PHP echo $sitename.' - '.$d_massiv[$$ll]['title'];?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<base href="<?php echo $site_url; ?>" />
    <meta name="keyword" content="<?PHP echo $d_massiv[$$ll]['keyword'];?>">
    <meta name="description" content="<?PHP echo $d_massiv[$$ll]['description'];?>">
	
	
	
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,700%7CMerriweather:400,300,300italic,400italic,700,700italic">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
		
		
<!---------------------------------------------------------------------------------------------->
	
	<link rel="stylesheet" href="css/style_slider.css">
	<link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='css/slick.min.css'>
	<link rel="stylesheet" href="css/jBox.css" />
	
<!---------------------------------------------------------------------------------------------->
		
		
		
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      
	  
	  <?PHP include ("include/menu.php");  ?>
	  
	  
      <!-- Page Content-->
      
        
        <!-- A Few Words About the University-->
		
		
        <?php include("include/$page.php")?>
		
		
		
      
		<?PHP include ("include/footer.php");  ?>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
	
	
	
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- begin olark code-->

<!--------------------------------------------------------------------->	
<script src='js/slick.min.js'></script>
<script src="js/slider.js"></script>	
<script src="js/jBox.js"></script>

    <script>
        var gallery = new jBox();
    </script>
<!--------------------------------------------------------------------->

    <script>
	
$( document ).ready(function() {
$("body").delegate("#kursun_adi","change", function(){
var kurs_id = $(this).val();
	
$.ajax({
type: "POST",
url: "kurs_tarix.php",
data: {"kurs_id": kurs_id},
dataType: "html",
success: function(response){
	$("#kurs_tarix").html(response);
	$("#select2-kurs_tarix-container").html("Kursun tarixi");

}
});
		
	});
	
	
	
$(".send_ob").on("click",function () {
        if($("#kursun_adi").val()==""){return false;}
        if($("#name").val()==""){return false;}
        if($("#il").val()==""){return false;}
        if($("#gun").val()==""){return false;}
        if($("#ay").val()==""){return false;}
        if($("#cins").val()==""){return false;}
        if($("#aile").val()==""){return false;}
        if($("#email").val()==""){return false;}
        if($("#tel2").val()==""){return false;}
        if($("#mobil2").val()==""){return false;}
        if($("#kurs_tarix").val()==""){return false;}
		
    })

$(".send_ob2").on("click",function () {
        if($("#contact-me-name").val()==""){return false;}
        if($("#contact-me-last-name").val()==""){return false;}
        if($("#contact-me-email").val()==""){return false;}
        if($("#contact-me-phone").val()==""){return false;}
		
    })	
	
	
	
	
	
	
	
	});
</script> 
  </body>

</html>