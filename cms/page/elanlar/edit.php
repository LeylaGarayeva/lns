 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?PHP

function return_all_cats($sub_id=0, $elan_kats_id){
	global $connection;
	$options = "";
	$prefix = "";
	$selected = "";
	$cats = mysqli_query($connection,"select kat_id, name from kateqoriyalar where l_id='1' and sub_id='".$sub_id."' order by kat_id asc") or die('error1'.mysqli_error($connection));
	if(mysqli_num_rows($cats)>0){
		while(list($kat_id,$name) = mysqli_fetch_array($cats)){

			if($sub_id!=0){
				$prefix = ' &nbsp; - &nbsp;';
			}else{
				$prefix = '';
			}
			if($kat_id == $elan_kats_id){
				$selected = ' selected';
			}else{
				$selected = '';
			}
			$options .= '<option value="'.$kat_id.'" '.$selected.'>'.$prefix.' '.$name.'</option>'.return_all_cats($kat_id,$elan_kats_id);
		
		}
		/*return $options.'<option>elan kat = '.$elan_kats_id.'</option>';*/
		return $options;
	}else{
		return false;
	}
}
	$elan_id = intval($_GET['elan_id']);
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
$delphoto = MYSQLI_QUERY($connection,"SELECT image_url FROM elanlar WHERE elan_id='".$elan_id."'");
$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
unlink('../products/'.$delphoto22['image_url']);

}
else{}




			$name_az = strip_tags($_POST['name1']);
			$name_ru = strip_tags($_POST['name2']);
			$name_en = strip_tags($_POST['name3']);
			$tip = strip_tags($_POST['tip']);
			/* 	$text1= $_POST['ordering'];
				$text2= $_POST['tip'];
				
			 */

			
			$home = $_POST['home'];
			$description_az= $_POST['description1'];
			$description_ru= $_POST['description2'];
			$description_en= $_POST['description3'];
			/*echo "<pre>";
			var_dump($home);
			echo "</pre>";
			die();*/
			if(empty($avatar)){
			$update1 = MYSQLI_QUERY($connection,"UPDATE elanlar SET  `name` = '$name_az', `home` = '".$home."',  `description`='$description_az', kat_id='$tip'  WHERE elan_id='".$elan_id."' and l_id=1") or die('alinmadi 1');
			$update2 = MYSQLI_QUERY($connection,"UPDATE elanlar SET  `name` = '".$name_ru."', `home` = '".$home."',  `description`='$description_ru',kat_id='$tip'  WHERE elan_id='".$elan_id."' and l_id=2");
			$update3 = MYSQLI_QUERY($connection,"UPDATE elanlar SET  `name` = '".$name_en."', `home` = '".$home."',  `description`='$description_en', kat_id='$tip'  WHERE elan_id='".$elan_id."' and l_id=3");
			}
			else{
			
			$update1 = MYSQLI_QUERY($connection,"UPDATE elanlar SET  `name` = '$name_az', `home` = '".$home."',  `image_url` = '$avatar', `description`='$description_az',kat_id='$tip' WHERE elan_id='".$elan_id."'  and l_id=1") or die('alinmadi 2');
			$update2 = MYSQLI_QUERY($connection,"UPDATE elanlar SET  `name` = '$name_ru', `home` = '".$home."',  `image_url` = '$avatar', `description`='$description_ru',kat_id='$tip' WHERE elan_id='".$elan_id."'  and l_id=2");
			$update3 = MYSQLI_QUERY($connection,"UPDATE elanlar SET  `name` = '$name_en', `home` = '".$home."', `image_url` = '$avatar', `description`='$description_en',kat_id='$tip' WHERE elan_id='".$elan_id."'  and l_id=3");
			}
		
		
		if(isset($update1) && isset($update2) && isset($update3)){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=elanlar&tip=1&pos=1&p_id=1'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
		}
		
	}
	else {
		$sql_j = "select m.elan_id,m.olke_id,m.price1,m.price2,m.price3,m.valyuta_id, o.name, v.name as valyuta from mehsul_olke as m left join olkeler as o on m.olke_id=o.kat_id left join valyuta as v on  m.valyuta_id=v.kat_id where m.elan_id=2;";
		$mehsul_olkeler = @mysqli_query($connection,$sql_j);
		$elan_data = @mysqli_fetch_array($mehsul_olkeler);
		echo "<pre>";
		var_dump($elan_data);
		echo "<pre>";
		die();
		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Məhsulu redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM elanlar WHERE elan_id='.$elan_id.' ');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['kat_id'];
					?>
					
					
						
					<div>
						<form action="" method="post">
							<ul style="float:right;position:relative;top:-37px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active" <?PHP if (@$b['status']==0) {	echo 'checked'; } ?>><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive" <?PHP if (@$b['status']==1) { echo 'checked'; } ?>><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
							
						</form>
					</div>
					</td>
				</tr>
				
				<table cellpadding="0" cellspacing="0" border="0">\
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="dosya" /></td>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="dosya" /></td>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="dosya" /></td>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (1000 X 380):</b><br><input type="file" name="dosya" /></td>
					</tr>
					

				</table>
				
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
								 <tr>
								 	<td>Main page</td>
								 	<td>
								 		<!--<select name="home">
								 			<option value="0" <?PHP if ($home==0) {	echo 'selected'; } ?>>Ana səhifədə görünməsin</option>
								 			<option value="1" <?PHP if ($home==1) {	echo 'selected'; } ?>>Ana səhifədə görünsün</option>
								 		</select>-->
								 		<select name="home">
								 			<option value="0" >Ana səhifədə görünməsin</option>
								 			<option value="1">Ana səhifədə görünsün</option>
								 		</select>
								 	</td>
								 </tr>
									<tr>
										<td>Kateqoriya</td>
										<td>
											<select name="tip">
													<?php 

													// var_dump($n_redakte1);
													// die();
													echo return_all_cats(0, $n_redakte1["kat_id"]); 
													?>
							
										   </select>
										</td>		
									</tr>
								<?PHP
									$diller = mysqli_query($connection,'select * from site_langs');
									while($nl= mysqli_fetch_array($diller)){
									
									
									
									
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM elanlar WHERE l_id='".$nl['id']."' and elan_id='".$elan_id."'  ");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>

									<tr>
										<td>Ad <?PHP echo $nl['lang']; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $dmm['name']; ?>"></td>
										
									</tr>
									<?php 
									}
									?>
								
								<!-- 	<tr>
										<td>Description <?php /*echo $nl['lang']; */ ?>: </td>
										<td><input name="description<?php /* echo $nl['id']; */ ?>" style="width:500px;border-radius:5px;" value="<?PHP echo $n_redakte1['description']; ?>"></td>
										
									</tr> -->

									<?PHP
											$diller = mysqli_query($connection,'select * from site_langs');
											while($nl= mysqli_fetch_array($diller)){
											
											
											
											
											$dm=MYSQLI_QUERY($connection,"SELECT * FROM elanlar WHERE l_id='".$nl['id']."' and elan_id='".$elan_id."'  ");
											$dmm=MYSQLI_FETCH_ASSOC($dm);
									
									?>
									<tr>
										<!-- <td><?php echo $dil['link'][$lng]; ?>: </td> -->
										<td>Description : <?PHP echo $nl['lang']; ?></td>
										<td><textarea name="description<?PHP echo $nl['id']; ?>" style="width:300px;border-radius:5px; margin:10px 0;" ><?PHP echo $dmm['description']; ?></textarea></td>
										
									</tr>

									<?php 
									}
									?>
								</table>
								</div>
								<?PHP
									@$say+=1;
									
								?>	
						<form action="" method="post">
								Bütün ölkələr<input type="checkbox" name="all_olkeler" value="1">
								<input type="text" name="all_price1"  placeholder="price1">
								<input type="text" name="all_price2" placeholder="price2">
								<input type="text" name="all_price3" placeholder="price3">
								<select name="all_val">
									<option disabled selected>Valyutanı seçin</option>
				         	<?PHP 
		                            $valyuta1 = mysqli_query($connection,'SELECT * FROM valyuta WHERE l_id=1 and sub_id=0 ');
									while ($valyuta2 = mysqli_fetch_assoc($valyuta1)) {
		                                echo '<option value="'.$valyuta2['kat_id'].'">'.$valyuta2['name'].'</option>';
		                            }	
			                 ?>
									</select>
									<p>	<a href="#" onclick="addRow()" style='border:2px solid silver;padding: 4px 7px;color:green;margin-left: 200px' name="insertCell"><i class="fa fa-plus" aria-hidden="true"></i></a></p>
									 <div class="table" >
						                            <table id="myTableData" >

																	
						                            </table>
						             </div></br>
						         

		         </form>
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
<script type="text/javascript">
        
			        var ii=2;
			        function addRow() {
		          
		            var table = document.getElementById("myTableData");
		         
		            var rowCount = table.rows.length;
		            var row = table.insertRow(rowCount);
		         
		            
		            row.insertCell(0).innerHTML= '<select name="olke[]"><option name="olkeler['+(this.ii-1)+']" disabled selected>Ölkəni seçin</option><?PHP 
                            $olkeler1 = mysqli_query($connection,'SELECT * FROM olkeler WHERE l_id=1 and sub_id=0 ');
							while ($olkeler2 = mysqli_fetch_assoc($olkeler1)) {
                                echo '<option value="'.$olkeler2['kat_id'].'">'.$olkeler2['name'].'</option>';
                            }	
	                 ?></select>';
		            row.insertCell(1).innerHTML= '<input  type="text" placeholder="Price1"  name="price1['+(this.ii-1)+']" value="">';
		            row.insertCell(2).innerHTML= '<input  type="text" placeholder="Price2"  name="price2['+(this.ii-1)+']" value="">';
		            row.insertCell(3).innerHTML= '<input  type="text" placeholder="Price3"  name="price3['+(this.ii-1)+']" value="">';
		            row.insertCell(4).innerHTML= '<select name="val[]"><option name="valyuta['+(this.ii-1)+']" disabled selected>Valyutanı seçin</option><?PHP 
                            $valyuta1 = mysqli_query($connection,'SELECT * FROM valyuta WHERE l_id=1 and sub_id=0 ');
							while ($valyuta2 = mysqli_fetch_assoc($valyuta1)) {
                                echo '<option value="'.$valyuta2['kat_id'].'">'.$valyuta2['name'].'</option>';
                            }	
	                 ?></select>';
		            this.ii++;
		        }

    </script>