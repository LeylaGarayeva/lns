<?PHP

function return_all_cats($sub_id=0){
	global $connection;
	$options = "";
	$prefix = "";
	$slct = "";
	$cats = mysqli_query($connection,"select kat_id, name from olkeler where l_id='1' and sub_id='".$sub_id."' order by kat_id asc") or die('error1'.mysqli_error($connection));
	if(mysqli_num_rows($cats)>0){
		while(list($kat_id,$name) = mysqli_fetch_array($cats)){
			if($sub_id!=0){
				$prefix = ' &nbsp; - &nbsp;';
				$slct = "disabled";
			}else{
				$prefix = '';
				$slct = '';
			}
			$options .= '<option value="'.$kat_id.'" '.$slct.'>'.$prefix.' '.$name.'</option>'.return_all_cats($kat_id);
		
		}
		return $options;
	}else{
		return false;
	}
}
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

$tip=0;
if(!empty($avatar)){
$delphoto = MYSQLI_QUERY($connection,"SELECT image_url FROM olkeler WHERE u_id='".$u_id."'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../products/'.$delphoto22['image_url']);

}
else{}



			$name_az = $_POST['name1'];
			$name_ru = $_POST['name2'];
			$name_en = $_POST['name3'];
			/* $text1= $_POST['ordering'];
			$text2= $_POST['tip']; */
			$link= $_POST['link'];
			@$tip = strip_tags($_POST['tip']);
			if(empty($avatar)){
			$update1 = MYSQLI_QUERY($connection,"UPDATE olkeler SET  `name` = '$name_az', `link` = '$link',sub_id='$tip'  WHERE kat_id='".$kat_id."' and l_id=1");
			$update2 = MYSQLI_QUERY($connection,"UPDATE olkeler SET  `name` = '$name_ru', `link` = '$link'  WHERE kat_id='".$kat_id."' and l_id=2");
			$update3 = MYSQLI_QUERY($connection,"UPDATE olkeler SET  `name` = '$name_en',`link` = '$link'  WHERE kat_id='".$kat_id."' and l_id=3");
			}
			else{
			
			$update1 = MYSQLI_QUERY($connection,"UPDATE olkeler SET  `name` = '$name_az', `link` = '$link', `image_url` = '$avatar',sub_id='$tip' WHERE kat_id='".$kat_id."'  and l_id=1");
			$update2 = MYSQLI_QUERY($connection,"UPDATE olkeler SET  `name` = '$name_ru', `link` = '$link', `image_url` = '$avatar',sub_id='$tip' WHERE kat_id='".$kat_id."'  and l_id=2");
			$update3 = MYSQLI_QUERY($connection,"UPDATE olkeler SET  `name` = '$name_en', `link` = '$link', `image_url` = '$avatar',sub_id='$tip' WHERE kat_id='".$kat_id."'  and l_id=3");
			}
		
		
		if(isset($update1) && isset($update2) & isset($update3)){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=olkeler&tip=1&pos=1&p_id=1'
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
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM olkeler WHERE kat_id='.$kat_id.' ');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					?>
					
					
						
					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$b['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$b['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							
						</form>
					</div>
					</td>
				</tr>
				
				<!--<table cellpadding="0" cellspacing="0" border="0">\
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="dosya" /></td>
					</tr>
					

				</table>-->
				
				<tr>
					
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
						<td>
						<div id="tabs">
									
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
								
								<?PHP
									$diller = mysqli_query($connection,'select * from site_langs');
									while($nl= mysqli_fetch_array($diller)){
									
									
									
									
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM olkeler WHERE l_id='".$nl['id']."' and kat_id='".$kat_id."'  ");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>
									<tr>
										<td>Ad <?PHP echo $nl['lang']; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
										
									</tr>


									<?php 
									}
									?>
									<tr>
										<td>kategoriya Tipi</td>
										<td>
											<select name="tip">
												<option value="0" selected=""> Esas kategoriya </option>
													<?php 
												
													echo return_all_cats(0, $n_redakte1["kat_id"]); 
													?>
							
										   </select>
										</td>		
									</tr>
									<!--<tr>
										<td>link <?php /*echo $nl['lang']; */ ?>: </td>
										<td><input name="link<?php /* echo $nl['id']; */ ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $n_redakte1['link']; ?>"></td>
										
									</tr>-->
								</table>
								</div>
								<?PHP
									@$say+=1;
									
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
