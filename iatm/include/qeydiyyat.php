<?PHP 
$home44=MYSQLI_QUERY($connection,"SELECT * from `menu` where u_id='$u_id' and l_id=$lng ORDER BY ordering desc limit 1");
$home33=MYSQLI_FETCH_ARRAY($home44);

$home22=MYSQLI_QUERY($connection,"SELECT * from `menu` where u_id=1 and l_id=$lng limit 1");
$home=MYSQLI_FETCH_ARRAY($home22);
 ?>

<section class="breadcrumb-classic context-dark">
	<div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
	  <h1 class="veil reveal-sm-block"><?PHP echo $home33['name'];?></h1>
	  <div class="offset-sm-top-35">
		<ul class="list-inline list-inline-lg list-inline-dashed p">
		   <li><a href="<?PHP echo $lng2; ?>/pages/<?PHP echo $home['url_tag'];?>/"><?PHP echo $home['name'];?></a></li>
		  <li><?PHP echo $home33['name'];?></li>
		</ul>
	  </div>
	</div>
</section>

<?php




if(isset($_POST['submit'])){

$to = 'office@iatm.az';

$from = $sitename;
$title = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000); 
$name = substr(htmlspecialchars(trim($_POST['name'])), 0, 1000);
$il = substr(htmlspecialchars(trim($_POST['il'])), 0, 1000);
$ay = substr(htmlspecialchars(trim($_POST['ay'])), 0, 1000);
$gun = substr(htmlspecialchars(trim($_POST['gun'])), 0, 1000);
$dogum_tarixi = $gun.".".$ay.".".$il;
$email = substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
$aile = substr(htmlspecialchars(trim($_POST['aile'])), 0, 1000); 		
$cins = substr(htmlspecialchars(trim($_POST['cins'])), 0, 1000); 		 		
$tel2 = substr(htmlspecialchars(trim($_POST['tel2'])), 0, 1000); 		
$tel = "012".$tel2; 		
 
$mobil1 = substr(htmlspecialchars(trim($_POST['mobil1'])), 0, 1000); 		
$mobil2 = substr(htmlspecialchars(trim($_POST['mobil2'])), 0, 1000); 		 		
$mobil = $mobil1.$mobil2; 		
$kursun_adi_id = substr(htmlspecialchars(trim($_POST['kursun_adi'])), 0, 1000);
$kurs_date = substr(htmlspecialchars(trim($_POST['kurs_date'])), 0, 1000);
$kurs_sql22=mysqli_QUERY($connection,'SELECT name from `kurs` where l_id="'.$lng.'" and s_id=0 and u_id="'.$kursun_adi_id.'"');
$kurs_sql=MYSQLI_FETCH_ARRAY($kurs_sql22);
$kursun_adi=$kurs_sql['name'];

 
// Текст письма
$mess = "
Ad Soyad: $name<br /><br /> 
Doğum tarixi: $dogum_tarixi<br /><br /> 
Cins: $cins<br /><br />  
Ailə vəziyyəti: $aile<br /><br /> 
E-mail: $email<br /><br /> 
Telefon: $tel<br /><br />  
Mobil: $mobil<br /><br />  
Kurs: $kursun_adi<br /><br />  
Kursun tarixi: $kurs_date<br /><br />  
";

// функция, которая отправляет наше письмо
$headers = 'From:  <'.$from.'>' . "\r\n";
$headers .= "Content-type: text/html; charset=\"utf-8\"";
$mail=mail($to, $title, $mess, $headers); 
	
	
echo '<script>
	function redi(){
	document.location=" '.$site_url.''.$lng2.'/qeydiyyat/registration/"
	}
	setTimeout(\'redi()\', 0);
	</script>
';
	
	
}
else{
	
?>






<main class="page-content">
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-md-8 text-md-left">
                <h2 class="text-bold"><?PHP echo $home33['name'];?></h2>
                <hr class="divider bg-madison hr-sm-left-0">
                
                <div class="offset-top-30">
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="rd-mailform text-left qeydiyyat_form" novalidate="novalidate">
					<div class="range">
					
					
                      <div class="cell-lg-12">
                          <input type="text" id="name" name="name" placeholder="Ad Soyad" class="q_input" required>
                      </div>
					  
					  <div class="cell-lg-12 offset-top-12 q_dogum">
                          
						  <select name="il" id="il" class="q_input_s" required>
							<option>Doğum ili</option>
							<?PHP 
								for($i = 2017; $i >= 1960; $i--)
								{ 
								?>
								<option value="<?PHP echo $i;?>"><?PHP echo $i;?></option>	
								<?PHP 
								}
								?>
							</select>
							<select name="ay" id="ay" class="q_input_s" required>
								<option>Doğum ayı</option>
							<?PHP 
								for($ii = 1; $ii <= 12; $ii++)
								{ 
								?>
								<option value="<?PHP echo $ii;?>"><?PHP echo $ii;?></option>	
								<?PHP 
								}
								?>
							</select>
							<select  name="gun" id="gun" class="q_input_s" required>
								<option>Doğum günü</option>
							<?PHP 
								for($iii = 1; $iii <= 31; $iii++)
								{ 
								?>
								<option value="<?PHP echo $iii;?>"><?PHP echo $iii;?></option>	
								<?PHP 
								}
								?>
							</select>
						 
                      </div>
					  
					  <div class="cell-lg-12 offset-top-12">
                          <select id="cins" class="cins" name="cins" required>
							<option>Cins</option>
							<option value="Kişi">Kişi</option>
							<option value="Qadın">Qadın</option>
						  </select>
                      </div>
					  
					  <div class="cell-lg-12 offset-top-12">
                          <select id="aile" class="aile" name="aile" required>
							<option>Ailə vəziyyəti</option>
							<option value="Ailəli">Ailəli</option>
							<option value="Subay">Subay</option>
						  </select>
                      </div>
					  
					  <div class="cell-lg-12 offset-top-12">
                          <input type="email" name="email" placeholder="E-mail" class="q_input" required>
                      </div>
					  
					   <div class="cell-lg-12 offset-top-12">
                          <input type="text" name="tel1" disabled  value="012" class="q_input1">
                          <input type="text" name="tel2" id="tel2" placeholder="Telefon" class="q_input2" required>
                      </div>
					  
					  <div class="cell-lg-12 offset-top-12 q_mobil">
                          <select name="mobil1" class="q_input1">
							<option value="055">055</option>
							<option value="050">050</option>
							<option value="051">051</option>
							<option value="070">070</option>
							<option value="077">077</option>
						  </select>
                          <input type="text" name="mobil2" id="mobil2" placeholder="Mobil" class="q_input2" required>
                      </div>
					  
					  
					  <div class="cell-lg-12 offset-top-12">
                          <select id="kursun_adi" name="kursun_adi" class="q_input_c" required>
						  <option>Kursun adı</option>
						  <?PHP 
$xeberler22=mysqli_QUERY($connection,'SELECT * from `kurs` where l_id="'.$lng.'" and s_id=0  ORDER BY ordering desc ');
while($xeberler=MYSQLI_FETCH_ARRAY($xeberler22))
{
						  ?>
							<option value="<?PHP echo $xeberler['u_id']; ?>"><?PHP echo $xeberler['name']; ?></option>
<?PHP } ?>	
							
						  </select>
                      </div>
					  
					  
					  <div  class="cell-lg-12 offset-top-12">
                          <select name="kurs_date" id="kurs_tarix" class="q_input_c" required>
							<option>Kursun tarixi</option>	
						  </select>
                      </div>
					  
                    </div>
                    <div class="text-center text-lg-left offset-top-20">
                      <input type="submit" name="submit" class="btn btn-primary send_ob" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
              
            </div>
          </div>
        </section>
        
      </main>
	  
	  
<?PHP } ?>	  