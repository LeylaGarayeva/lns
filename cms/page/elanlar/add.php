    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?PHP
function return_all_cats($sub_id=0){
	global $connection;
	$options = "";
	$prefix = "";
	$cats = mysqli_query($connection,"select kat_id, name from kateqoriyalar where l_id='1' and sub_id='".$sub_id."' order by kat_id asc") or die('error1'.mysqli_error($connection));
	if(mysqli_num_rows($cats)>0){
		while(list($kat_id,$name) = mysqli_fetch_array($cats)){
			if($sub_id!=0){
				$prefix = ' &nbsp; - &nbsp;';
			}else{
				$prefix = '';
			}
			$options .= '<option value="'.$kat_id.'">'.$prefix.' '.$name.'</option>'.return_all_cats($kat_id);
		
		}
		return $options;
	}else{
		return false;
	}
}
if(@$_POST['send1']){ 
	if(isset($_SESSION["etapData"])) unset($_SESSION["etapData"]); 
	$_SESSION["etapData"] = []; 
	foreach($_POST as $key=>$value){
		if($key=='send1')
			continue;
		else
			$_SESSION["etapData"][$key] = @$value;
	}
	
	?>
		<form name="form2" method="post" action="" enctype="multipart/form-data">
			<input type="hidden" name="etap" value="2"/>
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo ''; ?></b></center></td>
				</tr>
				
				<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
				<div id="tabs-1">
					<b><?php echo $dil['Şəkli seç'][$lng]; ?>1 :</b><br><input type="file" name="img[]" style="width:400px;"/>
					<p><b><?php echo $dil['Şəkli seç'][$lng]; ?>2 :</b><br><input type="file" name="img[]" style="width:400px;"/>
					<p><b><?php echo $dil['Şəkli seç'][$lng]; ?>3 :</b><br><input type="file" name="img[]" style="width:400px;"/>
					<p><b><?php echo $dil['Şəkli seç'][$lng]; ?>4 :</b><br><input type="file" name="img[]" style="width:400px;"/>
				</div>
				<tr>
					<td height="20" style="background-color: #FFFFFF;"></td>
				</tr>
				<tr>
					<td><input type="submit" name="send2" value="<?php echo $dil['novbeti'][$lng];?>"></td>
				</tr>
			</table>
		</form>
<?php 
}elseif(@$_POST['send2']){
	$faylinadi=[];
	$faylinozu=[];
	$j=0;
	for($i=0;$i<count($_FILES['img']['tmp_name']);$i++){
		if($_FILES['img']['tmp_name'][$i]!=""){
			$rnd=rand(10000,99999);
			$faylinadi[$j] = $rnd.$_FILES['img']['name'][$i];
			$faylinozu[$j] = $_FILES['img']['tmp_name'][$i];//shekillerin dushduyu yerdi
			$j++;
		}else{
			continue;
		}
	} 
	$_SESSION["etapData"]['images'] = @implode('||',$faylinadi);
	$_SESSION["etapData"]['tmp_images'] = $faylinozu;
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
            <p><input type="submit" name="send3" value="<?php echo $dil['Əlavə et'][$lng];?>"></p> 

		</form>
<?php }elseif(@$_POST['send3']){
		$_SESSION["etapData"]['different_price_country'] = null; //yeni ki eger all olke secilse ve elave olaraq +la azerbaycan secilse
		if(isset($_POST["all_olkeler"]) && $_POST["all_olkeler"]==1){
			$_SESSION["etapData"]['all_olke'] = 1;
			$_SESSION["etapData"]['all_price1'] = strip_tags($_POST["all_price1"]);
			$_SESSION["etapData"]['all_price2'] = strip_tags($_POST["all_price2"]);
			$_SESSION["etapData"]['all_price3'] = strip_tags($_POST["all_price3"]);
			$_SESSION["etapData"]['all_val_id'] = strip_tags($_POST["all_val"]);

		}else{
			// yeni ki butun olke checkboxuna qush qoyuldu ya qoyulmadi bazaya dushecek
			$_SESSION["etapData"]['all_olke'] = 0;
			$_SESSION["etapData"]['all_price1'] = null;
			$_SESSION["etapData"]['all_price2'] = null;
			$_SESSION["etapData"]['all_price3'] = null;
			$_SESSION["etapData"]['all_val_id'] = null;

		}
		if(isset($_POST["olke"]) && count($_POST["olke"])>0){
			// uje burda ferqi yoxdu butun olke secildi ya secilmedi. eger her hansi bir olke secilibse plusa basilma hissesinden 
			$_SESSION["etapData"]['olke'] = [];
			$_SESSION["etapData"]['price1'] = [];
			$_SESSION["etapData"]['price2'] = [];
			$_SESSION["etapData"]['price3'] = [];
			$_SESSION["etapData"]['val_id'] = [];

			for($i=0;$i<count($_POST["price1"]);$i++){
				$_SESSION["etapData"]['olke'][$i]   = @strip_tags($_POST["olke"][$i]);
				$_SESSION["etapData"]['price1'][$i] = @strip_tags($_POST["price1"][($i+1)]);
				$_SESSION["etapData"]['price2'][$i] = @strip_tags($_POST["price2"][($i+1)]);
				$_SESSION["etapData"]['price3'][$i] = @strip_tags($_POST["price3"][($i+1)]);
				$_SESSION["etapData"]['val_id'][$i] = @strip_tags($_POST["val"][$i]);
			}
			$_SESSION["etapData"]['different_price_country'] = implode(',', $_SESSION["etapData"]['olke']);
		}
		// echo "<pre>";
		// var_dump($_POST);
		// echo "</pre>";
		// die();
		if(count($_SESSION["etapData"]['tmp_images'])>0){
			$tip=1;
			$imagess = explode("||",$_SESSION["etapData"]['images']);
			for($i=0;$i<count($_SESSION["etapData"]['tmp_images']);$i++){
				if($imagess[$i]){
					@move_uploaded_file($_SESSION["etapData"]['tmp_images'][$i], '../products/elanlar/'. $imagess[$i]);
				}else{
					continue;
				}
				
			}
				
		} else {
			$tip=2; 

			$_SESSION["etapData"]['images'] = null;//shekil yoxsa imagese null gedsin
		}
		@$name_az = addslashes($_SESSION['etapData']['name_az']);
		@$name_en = addslashes($_SESSION['etapData']['name_en']);
		@$name_ru = addslashes($_SESSION['etapData']['name_ru']);

		@$home = addslashes($_POST['home']);
		@$description_az = addslashes($_SESSION['etapData']['description_az']);
		@$description_ru = addslashes($_SESSION['etapData']['description_ru']);
		@$description_en = addslashes($_SESSION['etapData']['description_en']);

		@$image_url = addslashes($_SESSION['etapData']['images']);
		@$kategory_id = addslashes($_SESSION['etapData']['kat_id']);
		



		
		function getMax($connection) {
			
			$q="select elan_id from elanlar order by elan_id desc limit 1";
			$res = mysqli_query($connection,$q);
			$b = mysqli_fetch_array($res);
			return $b[0];


		}

		function getMax_Order($connection) {
			$q="select max(ordering) from elanlar";
			$res = mysqli_query($connection,$q);
			$b=mysqli_fetch_array($res);
			return $b[0];
		}
			$getmax = getMax($connection)+1;

			$getmax_order = getMax_Order($connection)+1;
				
				$insert_az = MYSQLI_QUERY($connection,"INSERT INTO elanlar(elan_id, name, home, image_url, ordering,kat_id,l_id,description,tip,price1,price2,price3,all_country,different_price_country) values('".$getmax."', '".$name_az."', '".$home."', '".$image_url."',  '".$getmax_order."', '".$kategory_id."','1','".$description_az."', '".$tip."', '".$_SESSION["etapData"]['all_price1']."', '".$_SESSION["etapData"]['all_price2']."', '".$_SESSION["etapData"]['all_price3']."', '".$_SESSION["etapData"]['all_olke']."', '".$_SESSION["etapData"]['different_price_country']."')") or die('error az '.mysqli_error($connection));
				
				$insert_ru = MYSQLI_QUERY($connection,"INSERT INTO elanlar(elan_id, name, home, image_url, ordering,kat_id, l_id,description,tip,price1,price2,price3,all_country,different_price_country) values('".$getmax."', '".$name_ru."', '".$home."', '".$image_url."',  '".$getmax_order."', '".$kategory_id."', '2','".$description_ru."', '".$tip."','".$_SESSION["etapData"]['all_price1']."', '".$_SESSION["etapData"]['all_price2']."', '".$_SESSION["etapData"]['all_price3']."', '".$_SESSION["etapData"]['all_olke']."', '".$_SESSION["etapData"]['different_price_country']."')") or die('error ry '.mysqli_error($connection));
				
				$insert_en = MYSQLI_QUERY($connection,"INSERT INTO elanlar (elan_id, name, home, image_url, ordering,kat_id, l_id,description,tip,price1,price2,price3,all_country,different_price_country) values('".$getmax."', '".$name_en."', '".$home."', '".$image_url."',  '".$getmax_order."', '".$kategory_id."','3','".$description_en."', '".$tip."','".$_SESSION["etapData"]['all_price1']."', '".$_SESSION["etapData"]['all_price2']."', '".$_SESSION["etapData"]['all_price3']."', '".$_SESSION["etapData"]['all_olke']."', '".$_SESSION["etapData"]['different_price_country']."')") or die('error en '.mysqli_error($connection));
			
			if($insert_az){
				/*  insert   */
				if(isset($_SESSION["etapData"]['olke']) && is_array($_SESSION["etapData"]['olke']))
				{
					// echo "<pre>";
					// var_dump($_SESSION["etapData"]['val_id']);
					// echo "</pre>";
					// echo "<hr/><pre>";
					// var_dump($_POST['val']);
					// echo "</pre>";
					// die();
					/*yeni ayri ayri olkeler uzre yazibsa qiymetler*/
					// for($i=0;$i<count($_POST["price1"]);$i++){

					foreach($_SESSION["etapData"]['price1'] as $key=>$value){
						MYSQLI_QUERY($connection,"INSERT INTO mehsul_olke SET 
								elan_id = '".$getmax."',
								olke_id = '".$_SESSION["etapData"]['olke'][$key] ."',
								price1 = '".$_SESSION["etapData"]['price1'][$key] ."',
								price2 = '".$_SESSION["etapData"]['price2'][$key] ."',
								price3 = '".$_SESSION["etapData"]['price3'][$key] ."',
								valyuta_id = '".$_SESSION["etapData"]['val_id'][$key] ."' 
							") or die('Qiymet elavesi zamani xeta # '.mysqli_error($connection));
					}

					// }
					// $olke_kat_elaqe = '';
					if($_SESSION["etapData"]['all_olke']==1){

						$olkeler = mysqli_query($connection,"select kat_id from olkeler where l_id=1") or die('olke_erroru2');
						while($row = mysqli_fetch_assoc($olkeler)){
							// indi ne ishi gorurdun?
							// front edirdim buna deymemiwem
							// alinir birshey?edire m hele
							$seccc = @mysqli_query($connection,"SELECT id FROM olke_kateqoriya WHERE olke_id='".$row['kat_id']."' AND kat_id='".$kategory_id."' ") or die('error-olke_kat');
							if(mysqli_num_rows($seccc)>0){
								// yeni ki eger bir kategoriyanin idsi olkeye 1defe yazilibsa day oni 2ci defe yazmiriq tekrarlamiriq
								die('error 1');
								continue;
							}else{
								// yox yazilmayibsa insertle yaziriq
								mysqli_query($connection,"insert into olke_kateqoriya set 
									olke_id='".$row['kat_id']."',
									kat_id='".$kategory_id."'
								") or die("error 2");
							}
						}

					}elseif($_SESSION["etapData"]['all_olke']==0 && $_SESSION["etapData"]['different_price_country']!=''){
						$olkeler = mysqli_query($connection,"select kat_id from olkeler where kat_id in({$_SESSION["etapData"]['different_price_country']}) AND l_id=1");
						while($row = mysqli_fetch_assoc($olkeler)){
							$seccc = @mysqli_query($connection,"SELECT id FROM olke_kateqoriya WHERE olke_id='".$row['kat_id']."' AND kat_id='".$kategory_id."' ") or die('error-olke_kat');
							if(@mysqli_num_rows($seccc)>0){
								// yeni ki eger bir kategoriyanin idsi olkeye 1defe yazilibsa day oni 2ci defe yazmiriq tekrarlamiriq
								die('error 3');
								continue;
							}else{
								// yox yazilmayibsa insertle yaziriq
								@mysqli_query($connection,"insert into olke_kateqoriya set 
									olke_id='".$row['kat_id']."',
									kat_id='".$kategory_id."'
								") or die('error 4');
							}
						}
					}

				}
				else{
					// yeni butun olke secilibse
					if($_SESSION["etapData"]['all_olke']==1){
						$olkeler = mysqli_query($connection,"select kat_id from olkeler where l_id=1") or die('olke_erroru2');
						while($row = mysqli_fetch_assoc($olkeler)){
							$seccc = @mysqli_query($connection,"SELECT id FROM olke_kateqoriya WHERE olke_id='".$row['kat_id']."' AND kat_id='".$kategory_id."' ") or die('error-olke_kat');
							if(mysqli_num_rows($seccc)>0){
								// yeni ki eger bir kategoriyanin idsi olkeye 1defe yazilibsa day oni 2ci defe yazmiriq tekrarlamiriq
								die('error 1');
								continue;
							}else{
								// yox yazilmayibsa insertle yaziriq
								mysqli_query($connection,"insert into olke_kateqoriya set 
									olke_id='".$row['kat_id']."',
									kat_id='".$kategory_id."'
								") or die("insert into olke_kateqoriya set 
									olke_id='".$row['kat_id']."',
									kat_id='".$kategory_id."'
								");
							}
						}

				// 		$olkeler1 = mysqli_query($connection,'SELECT * FROM olkeler WHERE l_id=1 and sub_id=0 ');
				// 		while ($olkeler = mysqli_fetch_assoc($olkeler1)) {
    //                         MYSQLI_QUERY($connection,"INSERT INTO mehsul_olke SET 
				// 					elan_id = '".$getmax."',
				// 					olke_id = '".$olkeler['kat_id']."',
				// 					price1 = '".$_SESSION["etapData"]['all_price1']."',
				// 					price2 = '".$_SESSION["etapData"]['all_price2']."',
				// 					price3 = '".$_SESSION["etapData"]['all_price3']."',
				// 					valyuta_id = '".$_SESSION["etapData"]['all_val_id']."' 
				// 				") or die('Qiymet elavesi zamani xeta # '.mysqli_error($connection));
    //                     }
				// 	}
				// }

				// if($_SESSION["etapData"]['olke']=='all'){
				// 		$olkeler1 = mysqli_query($connection,'SELECT * FROM olkeler WHERE l_id=1 and sub_id=0 ');
				// 		// while ($olkeler = mysqli_fetch_assoc($olkeler1)) {
    //                         MYSQLI_QUERY($connection,"INSERT INTO mehsul_olke SET 
				// 					elan_id = '".$getmax."',
				// 					status = 1,
				// 					price1 = '".$_SESSION["etapData"]['all_price1']."',
				// 					price2 = '".$_SESSION["etapData"]['all_price2']."',
				// 					price3 = '".$_SESSION["etapData"]['all_price3']."',
				// 					valyuta_id = '".$_SESSION["etapData"]['all_val_id']."' 
				// 				") or die('Qiymet elavesi zamani xeta # '.mysqli_error($connection));
    //                     // }
					}
				}
				unset($_SESSION["etapData"]);
			
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=elanlar'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
		
	}
	else {
		/*
		* burda 1ci etap 
		*/
		?>
		
		
		<form name="form1" method="post" action="" enctype="multipart/form-data">
			<input type="hidden" name="etap" value="1"/>
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo 'Yeni elan'; ?></b></center></td>
				</tr>
				
				<link rel="stylesheet" href="js/jquery-ui.css">
						<script src="js/jquery-ui.js"></script>
						
			<!-- 	<div id="tabs">
				
				<ul style="float:right;margin-right:-575px;margin-top:5px;border:1px solid #ccc;position:relative;top:1px;border-radius:10px;left:-720px;background:none;">
						<li style="float:left;margin:5px;">
							<a href="#tabs-1"  name="foto" ><div><?php echo $dil['Foto'][$lng]; ?></div></a>
						</li>
						<li style="float:left;margin:5px; ">
							<a href="#tabs-2" name="video"><div><?php echo $dil['Video'][$lng]; ?></div></a>
						</li>
						
						
				</ul>
				<div style="clear:both;"></div>
					
					<div id="tabs-1"><b><?php echo $dil['Şəkli seç'][$lng]; ?> :</b><br><input type="file" name="img" style="width:400px;"/></div>
				
					<div id="tabs-2"><?php echo $dil['Video'][$lng]; ?>: http://www.youtube.com/watch?v=<input name="video_code" style="width:300px;border-radius:5px; margin:10px 0;"></div>
				</div> -->
				<?PHP
	
					@$catid = $_GET['catid'];
	?>
	

				
				<tr>
					
					 
						
						
		<?PHP include 'tiny_mce.php'; ?>
				    <td>
				    <div id="tabs-<?PHP echo $say; ?>">
								<table>

								 <tr>
								 	<td>Main page</td>
								 	<td>
								 		<select name="home">
								 			<option value="0">Ana səhifədə görünməsin</option>
								 			<option value="1">Ana səhifədə görünsün</option>
								 		</select>
								 	</td>
								 </tr>
									<tr>
										<td>Kateqoriya</td>
										<td>
											<select name="kat_id">
													<?php 
													
													echo return_all_cats();
													?>
							
										   </select>
										</td>		
									</tr>

										
									</tr>

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
								

									<tr>
										<!-- <td><?php echo $dil['link'][$lng]; ?>: </td> -->
										<td>Description:az</td>
										<td><textarea name="description_az" style="width:300px;border-radius:5px; margin:10px 0;" ></textarea></td>
										
									</tr>


									<tr>
										<!-- <td><?php echo $dil['link'][$lng]; ?>: </td> -->
										<td>Description:ru</td>
										<td><textarea name="description_ru" style="width:300px;border-radius:5px; margin:10px 0;" ></textarea></td>
										
									</tr>

									<tr>
										<!-- <td><?php echo $dil['link'][$lng]; ?>: </td> -->
										<td>Description:en</td>
										<td><textarea name="description_en" style="width:300px;border-radius:5px; margin:10px 0;" ></textarea></td>
										
									</tr>

								</table>
								<?PHP
									@$say+=1;
									
								?>	
						</div>
						<input type="hidden" name="hidsaysay" value="<?PHP echo 1; /*$hidsaysay;*/ ?>" />
					</td>
				</tr>
				<tr>
					<td height="20" style="background-color: #FFFFFF;"></td>
				</tr>
				<tr>
					<td><input type="submit" name="send1" value="<?php echo $dil['novbeti'][$lng];?>"></td>
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


