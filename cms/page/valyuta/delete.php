<?PHP
	@$tip = $_GET['tip'];
	@$kat_id = $_GET['kat_id'];
	if(@$_POST['imtina']){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=valyuta'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$_POST['delete']){
		$select = MYSQLI_QUERY($connection,"SELECT * FROM valyuta WHERE kat_id='".$kat_id."'");
		$n = MYSQLI_FETCH_ASSOC($select);
		@unlink($_SERVER['DOCUMENT_ROOT'].'/Bakujaluzi/products/'.$n['photo']);
		$hidsay = $_POST['hidsay'];
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM valyuta WHERE kat_id='".$kat_id."'"); 
		}
		if($delete){
		
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=valyuta'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
		}
	}
	else {
			$sl = MYSQLI_QUERY($connection,"SELECT * FROM site_langs WHERE status='0'");
			$say = mysqli_num_rows($sl);
		?>
		<form name="form1" method="post" action="">
			<input type="hidden" name="hidsay" value="<?PHP echo $say; ?>" />
			<br><br><center><b><font size="4" color="red"> <?php echo $dil['silməyə_əminsiniz'][$lng]; ?> </font></center>
			<br><center><input type="submit" name="delete" value="Bəli"> <input type="submit" name="imtina" value="Xeyir"> </center>
		</form>
	<?PHP
	}
	?>