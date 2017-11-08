<?PHP 

$xeber22=mysqli_QUERY($connection,'SELECT * from `xeberler` where l_id="'.$lng.'" and  u_id="'.$$ll.'" and status=0 ORDER BY ordering desc');
$xeber=MYSQLI_FETCH_ARRAY($xeber22);
?>
<?PHP 
$xebername22=MYSQLI_QUERY($connection,"SELECT * from `menu` where u_id=29 and l_id=$lng ");
$xebername=MYSQLI_FETCH_ARRAY($xebername22);

$home22=MYSQLI_QUERY($connection,"SELECT * from `menu` where u_id=1 and l_id=$lng limit 1");
$home=MYSQLI_FETCH_ARRAY($home22);
 ?>


<section class="breadcrumb-classic context-dark">
	<div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
		<h1 class="veil reveal-sm-block"><?php echo $xebername['name'];?></h1>
		<div class="offset-sm-top-35">
			<ul class="list-inline list-inline-lg list-inline-dashed p">
			  <li><a href="<?PHP echo $lng2; ?>/pages/<?PHP echo $home['url_tag'];?>/"><?PHP echo$home['name'];?></a></li>
			  <li><a href="<?PHP echo $lng2; ?>/xeberler/top/"><?php echo $xebername['name'];?></a></li>
			  <li><?PHP echo $xeber['name']; ?>
			  </li>
			</ul>
		</div>
	</div>
</section>


<main class="page-content">
<section class="section-70 section-md-114">
	  <div class="shell">
		<div class="range range-xs-center">
		  <div class="cell-sm-12 cell-md-12 text-md-left">
			<h2 class="text-bold">
				<?PHP echo $xeber['name']; ?>
			</h2>
			<hr class="divider bg-madison hr-md-left-0" style="width:100%;">
			<div class="offset-md-top-47 offset-top-20">
			  <ul class="post-news-meta list list-inline list-inline-xl">
				
				
			  </ul>
			</div>
			<div class="offset-top-30"><img src="<?PHP echo 'products/'.$xeber['photo']; ?>" style="margin: 0px auto;" alt="" class="img-responsive">
			  <div class="offset-top-30">
				<?PHP echo $xeber['text']; ?>
			  </div>
			  
			</div>
			
		  </div>
		  
		</div>
	  </div>
</section>
</main>