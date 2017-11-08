<?PHP
	if(@$send){

		include 'upload_photos.php';
		$hidsay = $_POST['hidsaysay'];

		function getMax($connection) {
			$q="select max(u_id) from site_menu";
			$res = mysqli_query($connection,$q);
			$b=mysqli_fetch_array($res);
			return $b[0];
		}
		$getmax = getMax($connection)+1;

		function getMax_Order($connection) {
			$q="select max(ordering) from site_menu";
			$res = mysqli_query($connection,$q);
			$b=mysqli_fetch_array($res);
			return $b[0];
		}
		$getmax_order = getMax_Order($connection)+1;
		
			
		for($i=1; $i<= $hidsay; $i++ ){

			@$active=$_POST['situation'];
			if ($active=='active') {
				$active=0;
			}
			elseif ($active=='passive') {
				$active=1;
			}

			$name= $_POST['name'.$i];
			$photo= $_POST['photo'.$i];
			$url_tag= $_POST['url_tag'.$i];
			$title= $_POST['title'.$i];
			$keyword= $_POST['keyword'.$i];
			$description= $_POST['description'.$i];
			$link= @$_POST['link'.$i];
			$text= @$_POST['text'.$i];
			$text2= @$_POST['text2'.$i];
			$sub=@$_POST['sub'];
			if(isset($sub) && $sub>0){

				$tip = 3;
			}else{
				$tip = 1;
			}
			
			
			
			@$insert = MYSQLI_QUERY($connection,"INSERT INTO site_menu (sub_id, l_id, name, text, text2, status, tip, ordering, u_id, `url_tag`, title,`keyword`,`description`,`photo`, `link`) values('".$sub."', '".$i."', '".$name."', '".$text."', '".$text2."', '".$active."', '".$tip."', '".$getmax_order."','".$getmax."' , '$url_tag', '".$title."', '$keyword','$description','$avatar','$link')");
		}
		if($insert){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=pages&tip=$tip'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni səhifə əlavə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					
					<?php echo $dil['Menyu'][$lng]; ?>:<br>
					<select name="sub">
						<option value="0"><?php echo $dil['Seçin'][$lng]; ?></option>
						<?PHP 
                            $menu1 = mysqli_query($connection,'SELECT * FROM site_menu WHERE l_id=1 and sub_id=0 and tip= '.$tip.'');
							while ($menu2 = mysqli_fetch_assoc($menu1)) {
                                echo '<option value="'.$menu2['u_id'].'">'.$menu2['name'].'</option>';
                            }
                        
							
						?>
					</select>
					

					<div>
						<form action="">
							<ul style="float:right;position:relative;top:-38px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active"><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive"><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
						</form>
					</div>
					</td>
				</tr>
				
				
				<table cellpadding="0" cellspacing="0" border="0">
					
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (170 X 140):</b><br><input type="file" name="dosya" /></td>
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
									
								?>	
								</ul>

								<?PHP
									$say=1;
									$sl = MYSQLI_QUERY($connection,"SELECT * FROM site_langs WHERE status='0'");
									while($nl = MYSQLI_FETCH_ARRAY($sl)){
									
								?>
								<div id="tabs-<?PHP echo $say; ?>">
								<table>
								
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: </td>
										<td><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['url_tag'][$lng]; ?>: </td>
										<td><input name="url_tag<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td><?php echo $dil['Title'][$lng]; ?>: </td>
										<td><input name="title<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td><?php echo $dil['keyword'][$lng]; ?>: </td>
										<td><input name="keyword<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td><?php echo $dil['description'][$lng]; ?>: </td>
										<td><input name="description<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td><?php echo $dil['link'][$lng]; ?>: </td>
										<td><input name="link<?PHP echo $nl['id']; ?>" style="width:500px;border-radius:5px;"></td>
									</tr>
									<tr>
										<td>Qısa mətin: </td>
										<td><textarea name="text2<?PHP echo $nl['id']; ?>" style="width:500px;height:200px;border-radius:5px;"></textarea></td>
									</tr>
									<tr>
										<td><?php echo $dil['Text'][$lng]; ?>: </td>
										<td><textarea name="text<?PHP echo $nl['id']; ?>" style="width:500px;height:200px;border-radius:5px;"></textarea></td>
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