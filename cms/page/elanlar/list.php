<?PHP

	@$catid = $_GET['catid'];
	@$save = $_POST['save'];
	@$delete = $_POST['delete'];
	@$aktiv = $_POST['aktiv'];
	@$tip = $_GET['tip'];
	@$u_id = $_GET['u_id'];


	if(isset($save)){
			$array = $_POST['order'];

			foreach($array as $k=>$vpppal) {
				foreach($vpppal as $ooo){
					$supdate = MYSQLI_QUERY($connection,"UPDATE elanlar SET ordering='".$ooo."' WHERE elan_id ='".$k."' ");
				}
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Sıralama yerinə yetirildi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=elanlar&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($delete)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$s_del = MYSQLI_QUERY($connection,"DELETE FROM elanlar WHERE elan_id = '".$chek[$n]."'");
			}
			if($s_del){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=elanlar&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	
	
	if(isset($aktiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{
				$supdate = MYSQLI_QUERY($connection,"UPDATE elanlar SET s_id='0' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=elanlar&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}

	if(isset($passiv)){
			$chek = $_POST['chek'];
			for($n=0; $n<count($chek); $n++)
			{ 
				$supdate = MYSQLI_QUERY($connection,"UPDATE elanlar SET s_id='1' WHERE u_id = '".$chek[$n]."'");
			}
			if($supdate){
				echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=elanlar&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
	}
	?>
	
	
	<table>
		<!-- HEAD -->
		<thead>
			<tr>
			   <th>
			   <?php echo $dil['Id'][$lng]; ?>
			   </th>
			   <th>Photo</th>
			   <th><?php echo $dil['Ad'][$lng]; ?></th>
			<!--    <th>Qiymət</th> -->
                           <th>Description</th>
                           <th>Kateqoriya id</th>
			   <th><?php echo $dil['Idarə'][$lng]; ?></th>
			</tr>
		</thead>
		<!-- BODY -->
		<tbody>
			<?PHP
				$diller=array('az'=>1,'en'=>3,'ru'=>2);			
				$s_m = MYSQLI_QUERY($connection, "SELECT * FROM elanlar where l_id='".$diller[$lng]."' ORDER BY ordering ASC");
				while($n_m = MYSQLI_FETCH_ASSOC($s_m)){
					?>
					<input type="hidden" name="elan_id" value="<?PHP echo $n_m['elan_id'];?>" />
					<tr>
						<td><?PHP echo $n_m['elan_id'];?></td>
						<td>
							<img src="../products/<?PHP echo $n_m['image_url'];?>" width="100"  border="0" />
						
						</td>
						<td><?PHP echo $n_m['name'];?></td>
					<!-- 	<td><?PHP echo $n_m['qiymet'];?></td> -->
                                                <td><?PHP echo $n_m['description'];?></td>
                                                <td><?PHP echo $n_m['kat_id'];?></td>
						
						<td>
								<!-- Icons -->
								<a href="?menu=elanlar&mod=edit&elan_id=<?PHP echo $n_m['elan_id'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
								<img src="images/pencil.png" alt="Düzəliş et" />
								</a>&nbsp;
								<a href="?menu=elanlar&mod=delete&elan_id=<?PHP echo $n_m['elan_id'];?>" title="<?php echo $dil['Sil'][$lng]; ?>">
									<img src="images/cross.png" alt="Sil" />
								 </a> 
							</td>
					</tr>
					<?PHP
				}
				?>
		</tbody>
		
	</table>
</form>