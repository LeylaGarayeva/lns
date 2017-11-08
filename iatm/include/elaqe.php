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
$surname = substr(htmlspecialchars(trim($_POST['surname'])), 0, 1000);
$email = substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
$phone = substr(htmlspecialchars(trim($_POST['phone'])), 0, 1000); 		
$text = substr(htmlspecialchars(trim($_POST['text'])), 0, 1000); 		
 
 
// Текст письма
$mess = "
First name: $name<br /><br /> 
Last name: $surname<br /><br />  
E-mail: $email<br /><br />  
Phone.: $phone<br /><br />  
Message: $text<br /><br />  
";

// функция, которая отправляет наше письмо
$headers = 'From:  <'.$from.'>' . "\r\n";
$headers .= "Content-type: text/html; charset=\"utf-8\"";
$mail=mail($to, $title, $mess, $headers); 
	
	
echo '<script>
	function redi(){
	document.location=" '.$site_url.''.$lng2.'/elaqe/top/"
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
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="" class="rd-mailform text-left" novalidate="novalidate">
					<div class="range">
					
					
					
					
					
					
                      <div class="cell-lg-6">
                        <div class="form-group">
                          <label for="contact-me-name" class="form-label form-label-outside rd-input-label">First name</label>
                          <input id="contact-me-name" type="text" name="name" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                        <div class="form-group">
                          <label for="contact-me-last-name" class="form-label form-label-outside rd-input-label">Last name</label>
                          <input id="contact-me-last-name" type="text" name="surname" data-constraints="@Required" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label for="contact-me-email" class="form-label form-label-outside rd-input-label">E-mail</label>
                          <input id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label for="contact-me-phone" class="form-label form-label-outside rd-input-label">Phone</label>
                          <input id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric" class="form-control form-control-has-validation form-control-last-child"><span class="form-validation"></span>
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-12">
                        <div class="form-group">
                          <label for="contact-me-message" class="form-label form-label-outside rd-input-label">Message</label>
                          <textarea id="contact-me-message" name="text" data-constraints="@Required" style="height: 220px" class="form-control form-control-has-validation form-control-last-child"></textarea><span class="form-validation"></span>
                        </div>
                      </div>
					  
					  
                    </div>
                    <div class="text-center text-lg-left offset-top-20">
                      <input type="submit" name="submit" class="btn btn-primary send_ob2" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
              <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
                <div class="inset-md-left-30">
                  <h6 class="text-bold">Socials</h6>
                  <div class="hr bg-gray-light offset-top-10"></div>
                  <ul class="list-inline list-inline-xs list-inline-madison">
                    <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
                  </ul>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Əlaqə məlumatları</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a href="callto:1-800-1234-567" class="text-middle inset-left-10 text-dark">(+99412) 432-71-75 , (+99412) 480-28-45</a></li>
                        <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a href="callto:1-800-6547-321" class="text-middle inset-left-10 text-dark">(+99470) 511-77-31 , (+99455) 333-76-90</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">E-mail</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a href="mailto:info@demolink.org" class="text-primary text-middle inset-left-10">office@iatm.az</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Ünvan</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                        <div class="unit-body">
                          <p><a href="#" class="text-dark">AZ1100, Bakı şəhəri, Yasamal rayonu, M. Seyidov küçəsi  41, mənzil 2</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--div class="offset-top-30 offset-md-top-65">
                    <h6 class="text-bold">Opening Hours</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                        <div class="unit-body">
                          <div>
                            <p>Mon-Fri: 8:00am-8:00pm</p>
                          </div>
                          <div>
                            <p>Sat: 8:00am-3:00pm</p>
                          </div>
                          <div>
                            <p>Sun: Closed</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div -->
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-madison">
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.8989107052566!2d49.85922901504665!3d40.41109017936587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d55f3983be7%3A0xa9a9c6890592932!2zMS8yNSDGj2htyZlkIFLJmWPJmWJsaSwgQmFrxLEsINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1476104825581" style="height:450px; width:100%;" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>
      </main>
	  
<?PHP } ?>	  