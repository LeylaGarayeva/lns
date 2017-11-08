<?PHP
	$u_id = $_GET['u_id'];
	

	@$video_code = $_POST['video_code'];
	if(@$_POST['send']){
		@$foto = $_POST['foto'];
		@$video = $_POST['video_code'];
		if(empty($video)){$tip=1;} else {$tip=2; }
		include 'upload_photos.php';
		@$gallery=$avatar;
		$hidsay = $_POST['hidsaysay'];
		@$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		$delphoto = MYSQLI_QUERY($connection,"SELECT * FROM partners WHERE partner_id='".$partner_id."'");
		$delphoto22 = MYSQLI_FETCH_ASSOC($delphoto);
		if(!empty($avatar) and $delphoto22['tip']==1)
		{
			unlink('../products/'.$delphoto22['photo']);
		}
		else{}
		
		$name= $_POST['name'];
		@$checkbox = $_POST['checkbox'];
		@$link = $_POST['link'];
		if(@empty($gallery))
		{
			
			$update = MYSQLI_QUERY($connection,"UPDATE partners SET  `partner_id` = '$partner_id',`name` = '$name', `image_url` = '$image_url',  `ordering` = '$ordering',  `tip` = '$tip',  `link` = '$link'  WHERE partner_id='".$partner_id."'");
		}

		else
		{
			if(empty($avatar) and $delphoto22['tip']==1 and $tip==2){
				unlink('../products/'.$delphoto22['photo']);
		}
			
		$update = MYSQLI_QUERY($connection,"UPDATE partners SET `partner_id` = '$partner_id',`name` = '$name', `image_url` = '$image_url',  `ordering` = '$ordering',  `tip` = '$tip',  `link` = '$link' WHERE u_id='".$u_id."' ");
		
		
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=partners&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
		}
	}
		
	}
	else {
		?>
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Gallery redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?PHP
					$s_redakte1=mysqli_query($connection,'SELECT * FROM partners WHERE partner_id='.$partner_id.'');
					$n_redakte1=MYSQLI_FETCH_ARRAY($s_redakte1);
					@$sub_halhazira=$n_redakte1['sub_id'];
					$sub_halhazira1='100';
					$tip_hh=$n_redakte1['tip'];
					$s_sub = mysqli_query($connection,'SELECT * FROM partners WHERE partner_id='.$partner_id.' ORDER BY ordering ASC ');
					$b=MYSQLI_FETCH_ASSOC($s_sub);
					?>
					
					
					<?php echo $dil['Menyu'][$lng]; ?>:<br>
						<?PHP
							
						?>
						
						<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM partners WHERE partner_id='".$partner_id."'");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
									if($dmm['checkbox']=='1'){
								?>	
								<span style="float:right;">
								<input type="checkbox" name="checkbox" checked value="1">Premier<br>
								</span>
								

								<?PHP
									}
									else{
								?>
								<span style="float:right;">
								<input type="checkbox" name="checkbox" value="1">Premier<br>
								</span>
								<?PHP
									}
								?>
					
					
						
					<div>
						<form action="">
						
					
						
						
						
						
						<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
						
						<div id="tabs">
				
				<ul style="float:right;margin-right:-575px;margin-top:5px;border:1px solid #ccc;position:relative;top:1px;border-radius:10px;left:-720px;background:none;">
						<li style="float:left;margin:5px;">
							<a href="#tabs-1" name="foto" ><div><?php echo $dil['Foto'][$lng]; ?></div></a>
						</li>
						
						
						
				</ul>
				<div style="clear:both;"></div>
					
					<div id="tabs-1"><b><?php echo $dil['Şəkli seç'][$lng]; ?> :</b><br><input type="file" name="dosya" style="width:400px;"/></div>
			
					
					
				</div>
						
						
						
						
							
							
						</form>
					</div>
					</td>
				</tr>
				
			
				
				<tr>
					
					 
						
						<td>
						<div id="tabs">
								<?PHP
									
									$dm=MYSQLI_QUERY($connection,"SELECT * FROM partners WHERE partner_id='".$partner_id."'  ");
									$dmm=MYSQLI_FETCH_ASSOC($dm);
									
								?>	
								<div id="tabs-<?PHP echo $say; ?>">
								

<table>
									
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: Az</td>
										<td><input name="name_az" style="width:300px;border-radius:5px; margin:10px 0;"
										value="<?PHP echo $dmm['name']; ?>"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: En</td>
										<td><input name="name_en" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['Ad'][$lng]; ?>: Ru</td>
										<td><input name="name_ru" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
									<tr>
										<td><?php echo $dil['link'][$lng]; ?>: </td>
										<td><input name="link" style="width:300px;border-radius:5px; margin:10px 0;"></td>
										
									</tr>
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