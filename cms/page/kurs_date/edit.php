<?PHP
	$idx = $_GET['id'];
	if(@$send){
		
		$active=$_POST['situation'];
		if ($active=='active') {
			$active=0;
		}
		elseif ($active=='passive') {
			$active=1;
		}
		

$tip=0;

		
		
			
			$date= $_POST['date'];
			 
			$update = MYSQLI_QUERY($connection,"UPDATE kurs_date SET `date` = '$date', `s_id` = '$active'  WHERE u_id='".$idx."' ");
			
		
		
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
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
			<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Məhsulu redaktə et'][$lng]; ?></b></center></td>
		</tr>
		<tr>
			<td>
<?php $dm=MYSQLI_QUERY($connection,"SELECT * FROM kurs_date WHERE u_id='".$idx."'");
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
		
		<tr>
			<td>
				<div id="tabs">
						
					<div id="tabs-<?PHP echo $say; ?>">
					<table>
						<tr>
							<td>Tarix</td>
							<td><input name="date" id="datepicker" style="width:150px;border-radius:5px;" value="<?PHP echo $dmm['date']; ?>"></td>
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

///////////////////////date///////////////////////////////////

$(function() {
$( "#datepicker" ).datepicker({
dateFormat: 'yy-mm-dd'
});
});

///////////////////////end date///////////////////////////////


</script>