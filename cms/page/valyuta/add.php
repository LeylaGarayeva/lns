<?PHP

function return_all_cats($sub_id=0){
	global $connection;
	$options = "";
	$prefix = "";
	$slct = "";
	$cats = mysqli_query($connection,"select kat_id, name from valyuta where l_id='1' and sub_id='".$sub_id."' order by kat_id asc") or die('error1'.mysqli_error($connection));
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
			/*
			Bu funksiya rekursive funksiyadir yeni funksiya daxilinde ozunu chagrir 
			yoxlayiriq 1ci bazadan 1 tableni goturur sora onu yazir optiona ve dalinca onun idsi uzre sublari yazir  
			yoxsa kecir 2ciye eger 2ci de de eyni qaydadasa onlari yazir bu ele bil 20dene sub kat var alt alta 20sin de sira ile vermek olar  1->2->23 ve s 
            
			*/
		}
		return $options;
	}else{
		return false;
	}
}

	if(@$_POST['send']){

		@$name_az = strip_tags($_POST['name_az']);
		@$name_en = strip_tags($_POST['name_en']);
		@$name_ru = strip_tags($_POST['name_ru']);
		@$tip = strip_tags($_POST['tip']);

		function getMax($connection) {
			
			$q="select kat_id from valyuta order by kat_id desc limit 1";
			$res = mysqli_query($connection,$q);
			$b = mysqli_fetch_array($res);
			/*echo '<pre>';
			var_dump($b);
			echo '</pre>';
			die();
			*/
			return $b[0];
		}

		function getMax_Order($connection) {
			$q="select max(ordering) from valyuta";
			$res = mysqli_query($connection,$q);
			$b=mysqli_fetch_array($res);
			return $b[0];
		}

			$getmax = getMax($connection)+1;

			$getmax_order = getMax_Order($connection)+1;
				
				$insert_az = MYSQLI_QUERY($connection,"INSERT INTO valyuta (kat_id, name, ordering, sub_id, l_id) values('".$getmax."', '".$name_az."', '".$getmax_order."', '".$tip."', '1')") or die('error1 '.mysqli_error($connection));
				
				$insert_az = MYSQLI_QUERY($connection,"INSERT INTO valyuta(kat_id, name, ordering, sub_id, l_id) values('".$getmax."', '".$name_az."', '".$getmax_order."', '".$tip."', '2')") or die('error1 '.mysqli_error($connection));
				
				$insert_az = MYSQLI_QUERY($connection,"INSERT INTO valyuta (kat_id, name, ordering, sub_id, l_id) values('".$getmax."', '".$name_az."', '".$getmax_order."', '".$tip."', '3')") or die('error1 '.mysqli_error($connection));
			
			if($insert_az){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=olkeler'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
			
		
	}
	else {
		?>
		
		
		<form name="form1" method="post" action="" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo 'Yeni kateqoriya'; ?></b></center></td>
				</tr>
				
				<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
						
				
					<!-- 
					<div id="tabs-1"><b><?php echo $dil['Şəkli seç'][$lng]; ?> :</b><br><input type="file" name="img" style="width:400px;"/></div> -->
				<!-- 
					<div id="tabs-2"><?php echo $dil['Video'][$lng]; ?>: http://www.youtube.com/watch?v=<input name="video_code" style="width:300px;border-radius:5px; margin:10px 0;"></div> -->
				
				<?PHP
	
					@$catid = $_GET['catid'];
	?>
	

				
				<tr>
					
					 
						
						
		
				    <td>
				    <div id="tabs-<?PHP echo $say; ?>">
								<table>
									
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: Az</td>
										<td><input name="name_az" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: En</td>
										<td><input name="name_en" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: Ru</td>
										<td><input name="name_ru" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
									<!-- <tr>
										<td>kategoriya Tipi</td>
										<td>
											<select name="tip">
												<option value="0" selected=""> Ölkə </option>
													<?php 
												
													//echo return_all_cats();
													?>
							
										   </select>
										</td>		
									</tr> -->
								

								

								</table>
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
					<td><input type="submit" name="send" value="<?php echo $dil['Əlavə et'][$lng]; ?>"></td>
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