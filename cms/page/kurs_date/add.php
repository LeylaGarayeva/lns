<?PHP
	if(@$send){
	
		
		@$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		$ddd=mysqli_query($connection,'select max(u_id) as uid from kurs_date');
		$bbb=MYSQLI_FETCH_ARRAY($ddd);
		$u_id=$bbb['uid'];
		$u_id++;
		
		$zzz=mysqli_query($connection,'select max(ordering) as uid from kurs_date');
		$ccc=MYSQLI_FETCH_ARRAY($zzz);
		$ordering=$ccc['uid'];
		$ordering+=10;
		
		$tip=0;
		
	
			
			$date= $_POST['date'];
			$kurs_cat= $cat_id;
				
			@$insert = MYSQLI_QUERY($connection,"INSERT INTO `kurs_date` (
				`date`,
				`kurs_cat`, 
				`s_id`,
				`ordering`, 
				`u_id`)				
			VALUES (
				'$date',
				'$kurs_cat',
				'$active',
				'$ordering',  
				'$u_id')");
				
			
			if($insert){
					echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=kurs_date&cat_id=$cat_id'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni_link'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					
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
							<ul style="float:right;position:relative;top:-38px;right:309px;">
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="active"><?php echo $dil['Aktiv'][$lng]; ?></li>
								<li style="float:left;"><input type="radio" name="situation" id="situation" value="passive"><?php echo $dil['Passiv'][$lng]; ?></li>
							</ul>
						</form>
					</div>
					</td>
				</tr>
				
				
	
				<tr>
					<td>
						<div id="tabs">
							
							<div id="tabs-<?PHP echo $say; ?>">
							<table>
							
							
								<tr>
									<td>Tarix </td>
									<td><input name="date" id="datepicker" style="width:150px;border-radius:5px;" required></td>
								</tr>
								
							</table>
							</div>
									
						</div>
						
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

///////////////////////date///////////////////////////////////

$(function() {
$( "#datepicker" ).datepicker({
dateFormat: 'yy-mm-dd'
});
});

///////////////////////end date///////////////////////////////


</script>	