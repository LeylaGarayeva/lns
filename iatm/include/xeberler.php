<?php
$product22=mysqli_QUERY($connection,'SELECT * from `menu` where l_id="'.$lng.'" and  u_id="'.$$ll.'" and status=0');
$product=MYSQLI_FETCH_ARRAY($product22);
	
$home22=MYSQLI_QUERY($connection,"SELECT * from `menu` where u_id=1 and l_id=$lng limit 1");
$home=MYSQLI_FETCH_ARRAY($home22);
	
?>

<section class="breadcrumb-classic context-dark">
	<div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
	  <h1 class="veil reveal-sm-block"><?php echo $product['name'];?></h1>
	  <div class="offset-sm-top-35">
		<ul class="list-inline list-inline-lg list-inline-dashed p">
		  <li><a href="<?PHP echo $lng2; ?>/pages/<?PHP echo$home['url_tag'];?>/"><?PHP echo$home['name'];?></a></li>
		  <li><?php echo $product['name'];?></li>
		  
		</ul>
	  </div>
	</div>
</section>



<!---------------------------------------------------------------------------------------------------->





<main class="page-content">
        <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f11dd047338702c&amp;origin=http%3A%2F%2Flivedemo00.template-help.com" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f11dd047338702c&amp;origin=http%3A%2F%2Flivedemo00.template-help.com" style="border: none;"></iframe></div></div></div>
        <!-- Latest news-->
        <section class="section-70 section-md-114 bg-catskill">
          <div class="shell">
            <div class="range text-sm-left range-xs-center">
			
			
<?php

if(isset($_GET['sss'])){
      $pag_id=$_GET['sss'];
      if(!ctype_digit(strval($pag_id)) || $pag_id==0)
	  {
        $pag_id=1;
	  }

    }
    else {
      $pag_id=1;
	}

	$addim=9;
    $b=($pag_id-1)*$addim;


$xeberler22=mysqli_QUERY($connection,'SELECT * from `xeberler` where l_id="'.$lng.'" and status=0  ORDER BY ordering desc limit '.$b.','.$addim.'');
while($xeberler=MYSQLI_FETCH_ARRAY($xeberler22))
{	
 ?>
			
			
			 <div class="cell-sm-6 cell-md-4 offset-top-30 offset-sm-top-0">
                <article class="post-news post-news-wide"><a href="<?PHP echo $lng2; ?>/xeber/<?PHP echo $xeberler['url_tag'] ; ?>/"><img src="products/<?php echo $xeberler['photo'];?>" width="700" height="455" alt="" class="img-responsive"></a>
                  <div class="post-news-body">
                    <h6><a href="<?PHP echo $lng2; ?>/xeber/<?PHP echo $xeberler['url_tag'] ; ?>/"><?php echo $xeberler['name'];?></a></h6>
                    <div class="offset-top-20">
                      <p><?php echo $xeberler['text2'];?></p>
                    </div>
                    
                  </div>
                </article>
              </div>
<?PHP } ?>            
            
          


		  
			  
            </div>
            <div class="offset-top-60 text-md-left">
              <!-- Bootstrap Pagination-->
              <nav>
                <ul class="pagination">

<?PHP 
if(empty($_GET['sss'])){$seyfelenme=1;} else{$seyfelenme=$_GET['sss'];}

if($seyfelenme==1){
?>
<li class="disabled"><span class="fa-chevron-left"></span></li>
<?PHP	
}
else{
 ?>				
	
<li><a href='<?PHP echo $site_url.$lng2; ?>/xeberler/<?PHP echo $_GET['val']; ?>/<?PHP echo $seyfelenme-1; ?>/'><span class="fa-chevron-left"></span></a></li>
<?PHP } ?>				
<?php
$xeberler22=mysqli_QUERY($connection,'SELECT u_id from `xeberler` where l_id="'.$lng.'" and status=0  GROUP BY u_id');
$count=mysqli_num_rows($xeberler22);
  $count22=ceil($count/$addim);
  
  
  
  for($i=1;$i<=$count22;$i++){
?>
				  
<li <?PHP if($pag_id==$i){ ?> class="active"<?PHP } else{} ?>><a href='<?PHP echo $site_url.$lng2; ?>/xeberler/<?PHP echo $_GET['val']; ?>/<?PHP echo $i;?>/'><?PHP echo $i;?></a></li>
<?PHP
  }
 ?>
 <?PHP 
if($seyfelenme==$count22){
?>
<li class="disabled"><span class="fa-chevron-right"></span></li>
<?PHP	
}
else{
 ?>	
<li><a href=<?PHP echo $site_url.$lng2; ?>/xeberler/<?PHP echo $_GET['val']; ?>/<?PHP echo $seyfelenme+1; ?>/><span class="fa-chevron-right"></span></a></li>

<?PHP } ?>
			  
                </ul>
              </nav>
            </div>
          </div>
        </section>
      </main>



