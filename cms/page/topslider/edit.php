<?PHP
	$idx = $_GET['id'];
	if(@$send){
	 include 'upload_photos.php';
	 
		$hidsay = $_POST['hidsaysay'];
		
		$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		

$tip=0;
if(!empty($avatar)){
$delphoto = MYSQLI_QUERY($connection,"SELECT photo FROM site_topslider WHERE u_id='".$idx."' AND l_id='1'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../products/'.$delphoto22['photo']);

}
else{}
		
		for($i=1; $i<= $hidsay; $i++ ){
		
			
			$name= $_POST['name'.$i];
			$text= $_POST['text'.$i];
			$new_price= $_POST['new_price'.$i];
			$old_price= $_POST['old_price'.$i];
			
			if(empty($avatar)){ 
			$update = MYSQLI_QUERY($connection,"UPDATE site_topslider SET  `name` = '$name',`text` = '$text',`new_price` = '$new_price',`old_price` = '$old_price', `s_id` = '$active'  WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
			else{
			
			$update = MYSQLI_QUERY($connection,"UPDATE site_topslider SET  `name` = '$name',`text` = '$text',`new_price` = '$new_price',`old_price` = '$old_price',`s_id` = '$active', `photo` = '$avatar'  WHERE u_id='".$idx."' AND l_id='".$i."'");
			}
		
		}
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=topslider'
			}
			setTimeout(\"redi()\", 3000);
			</script>"; 
		}
		
	}
	else {
		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Məhsulu redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM site_topslider WHERE u_id='".$idx."'");
							$dmm=MYSQLI_FETCH_ASSOC($dm);
					?>
					
					<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
					
						<style type="text/css">
							#tab_li{
								float:left;
								margin: 5px;
								border:1px solid #ccc;
								border-radius: 23px;
							}
						</style>
					 
						<?PHP include 'tiny_mce.php'; ?>
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$dmm['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$dmm['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							
						</form>
					</div>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td style="display:inline-block;"><b><?php echo $dil['Fayli seç'][$lng]; ?></b><br><input type="file" name="dosya" /></td>
						
					</tr>
					

				</table>
				
				<tr>
					
					 
						
						
						<td>
						<div id="tabs">
								<ul id="tabs_ul">
								<?PHP
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM site_langs WHERE status='0' ORDER BY id ASC");
									
									$hidsaysay=mysqli_num_rows($sl);
									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									
								?>
									<li id="tab_li"><a href="#tabs-<?PHP echo $say; ?>"><b><?PHP echo $nl['lang']; ?></b></a></li>
								<?PHP
									$say+=1;
									}
									
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM site_langs WHERE status='0'");

									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM site_topslider WHERE u_id='".$idx."' AND l_id='".$nl['id']."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								
								</ul>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
									</tr>
									<tr>
										<td>Yeni qiymət: </td>
										<td><input name="new_price<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['new_price']; ?>"></td>
									</tr>
									<tr>
										<td>Köhnə qiymət: </td>
										<td><input name="old_price<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['old_price']; ?>"></td>
									</tr>
									
									<tr>
										<td><?php echo $dil['Text'][$lng]; ?>: </td>
										<td><textarea name="text<?PHP echo $nl['id']; ?>" style="width:500px;height:200px;border-radius:5px;"><?PHP echo $dmm['text']; ?></textarea></td>
									</tr>
								</table>
								</div>
								<?PHP
									$say+=1;
									}
								?>	
						</div>
						<input type="hidden" name="hidsaysay" value="<?PHP echo $hidsaysay; ?>" />
					</td>
				</tr>
				
				<tr>
					<td height="20" style="background-color: #FFFFFF;"></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="send" value="<?php echo $dil['Dəyişdir'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	
<?PHP 
}
?>
				 <script>
				  $(function() {
				    $( "#tabs" ).tabs();
				  });
				 </script>