<?PHP
	if(@$send){
	include 'upload_photos.php';
	
		@$hidsay = $_POST['hidsaysay'];
		$id = $_GET['p_id'];
		
		$update = MYSQLI_QUERY($connection,"UPDATE turlar set photo = '$avatar' where u_id=".$id);
		
			
			if($update){
					echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=turs'
					}
					setTimeout(\"redi()\", 3000);
					</script>";
			}else{
				"UPDATE turlar set photo = '$avatar' where u_id=".$id;
			}	
		}
	
	else {
		
		?>
		
		<form action="" method="POST" enctype="multipart/form-data">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b>Tur şəkli əlavə etmək</b></center></td>
				</tr>
				<tr>
					<td>
					
					</td>
				</tr>
				
			<tr>
			<td>
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td><b><?php echo $dil['Şəkli seç'][$lng]; ?> (554 X 350):</b><br><input type="file" name="dosya" /></td>
					</tr>
					</table>
				</td>
			</tr>		
				

				<tr>
					<td><input type="submit" name="send" value="<?php echo $dil['Əlavə et'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	
<?PHP 
}
?>