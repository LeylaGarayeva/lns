<?PHP
	include('conf.php');
	if(isset($_POST['lng']) && in_array($_POST['lng'],['az','en','ru'])){
		$_GET['lng'] = $_POST['lng'];
		// die($_GET['lng']);
	}

	if(@$_GET['lng'])
	{
		if(in_array($_GET['lng'],ARRAY('az','ru','en')))	{$lng2=strip_tags($_GET['lng']);}
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
			case 'pages': 
				$page='pages'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'xeber': 
				$page='xeber'; 		
				$ll='u_id'; 	
				$tbn='site_xeberler';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'support_email': 
				$page='support_email'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'shop': 
				$page='shop'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'order': 
				$page='order'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'basket': 
				$page='basket'; 		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'shop_category': 
				$page='shop_category'; 		
				$ll='kat_id'; 	
				$tbn='kateqoriyalar';		
				$def=1; $www='kat_id';	
				$qqq='url_tag';	
				break;
			case 'single': 
				/*birde sbu hisse esas bashliqdaki dinamik menyulari getrmek ucundur*/
				$page='single';		
				$ll='u_id'; 	
				$tbn='site_menu';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			case 'xeber': 
				$page='xeber'; 		
				$ll='u_id'; 	
				$tbn='site_xeberler';		
				$def=1; $www='u_id';	
				$qqq='url_tag';	
				break;
			default:
				$page='home'; 		
				$ll='u_id';		
				$tbn='site_menu';		
				$def=1;	$www='u_id';	
				$qqq='url_tag'; 
				break;
		}
	}
	else{
		$page='home'; 
		$ll='u_id'; 	
		$tbn='site_menu'; 
		$def=1; $www='u_id'; 
		$qqq='url_tag';	
	}
	if($page!='search'){
		$$ll=@addslashes(strip_tags($_GET['val']));
		$sorgu = "select * from `".$tbn."` where l_id='".$lng."' and status=0";
		// die($sorgu);
		$sql=MYSQLI_QUERY($connection,$sorgu) or die('xeta url ');
		$d_massiv=array();
		while($b=MYSQLI_FETCH_ASSOC($sql))
		{	
			if($page=='shop_category'){
				$tt=$b['kat_id'];
				$d_massiv[$tt]=$b;
				if($b['url_tag']==$$ll and $b['url_tag']!=''){	$$ll=$b['kat_id']; $t1=2;}
			}
			// 
			else{
				$tt=$b['u_id'];
				$d_massiv[$tt]=$b;
				if($b['url_tag']==$$ll and $b['url_tag']!=''){	$$ll=$b['u_id']; $t1=2;}
			}
		}
		if(@$t1!=2){
			$$ll=$def;	
		}
		if(!empty($_GET['page']) && isset($_POST['lng']) && in_array($_POST['lng'],['az','en','ru'])){
			if(!empty($_GET['val'])){
				header('Location: '.$site_url.$lng2.'/'.$_GET['page'].'/'.$_GET['val'].'/');
			}else{
				header('Location: '.$site_url.$lng2.'/'.$_GET['page'].'/');
			}
		}
	}

	/*****************************************************************************************/
	
	if(empty ($_GET['page'])){
		$_GET['page']='pages'; $def_m_a=0;
	}else{
		$def_m_a=1;
	}
	//dil linklerini duzeltmek ucun funksiya
	$str='';
	$str.='/'.$_GET['page'].'/';

// die($_GET['page']
// };	
?>



<!DOCTYPE html>
<html lang="az">
<head>
	<!-- start head -->
		<meta charset="UTF-8">
		<title>LNS | Вместе для лучшей жизни</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="glyanec:code" content="86a6af4634386e61a512c165e94c1dd9">
		<link rel="shortcut icon" href="<?php echo $site_url;?>images/favicon.png" type="image/png">
		<link rel="stylesheet" href="<?php echo $site_url;?>css/normalize.css">
		<link rel="stylesheet" href="<?php echo $site_url;?>css/social-likes_birman.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
		<link rel="stylesheet" href="<?php echo $site_url;?>css/jquery.mmenu.all.css">
		<link rel="stylesheet" href="<?php echo $site_url;?>style.css">
		<base href="<?php echo $site_url?>">
	<!-- end head -->
</head>
<body>
	<!-- start content -->
		<div id="page">

			<div class="wrapper front">
				
				<!-- start header -->
				<?php include('./include/header.php');?>
				<!-- end header -->

				<!-- start middle -->

				<?php 

				// if($page=='support_email'){
				// 	include('./include/support_email.php');
				// }
				// else{
					include("./include/$page.php");
				// }
				?>
				<!-- end middle -->

			</div>

			<!-- start footer -->
			<?php include('./include/footer.php');?>
			<!-- end footer -->

		</div>
	<!-- end content -->

	<!-- start foot -->
		<div class="popup_fon"></div>
		<div class="popup_fon2"></div>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="<?php echo $site_url;?>js/social-likes.min.js"></script>
		<script src="<?php echo $site_url;?>js/jquery.countdown.min.js"></script>
		<script src="<?php echo $site_url;?>js/jquery.countdown-ru.js"></script>
		<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="<?php echo $site_url;?>js/jquery.mmenu.all.js"></script>
		<script src="<?php echo $site_url;?>js/main.js"></script>
	<!-- end foot -->
</body>
</html>