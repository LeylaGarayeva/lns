<?php 
// die('www-'.$www.'$$ll-'.$$ll);	
$sql1=mysqli_QUERY($connection,'select * from '.$tbn.' where '.$www.'="'.$$ll.'" and status=0 and l_id=1');
$b1=MYSQLI_FETCH_ASSOC($sql1);

$sql2=mysqli_QUERY($connection,'select * from '.$tbn.' where '.$www.'="'.$$ll.'" and status=0 and l_id=2');
$b2=MYSQLI_FETCH_ASSOC($sql2);

$sql3=mysqli_QUERY($connection,'select * from '.$tbn.' where '.$www.'="'.$$ll.'" and status=0 and l_id=3');
$b3=MYSQLI_FETCH_ASSOC($sql3);



?>
<header class="header">
		<!-- <a id="hamburger" href="#my-menu"><span>Меню</span></a> -->
		<a href="#menu" id="hamburger" class="mm-slideout">
			<span class="hamburger hamburger--collapse">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</span>d
		</a>
		<div class="header_content clearfix">
			<div class="logo"><a href="<?php echo $site_url;?>"><img src="<?php echo $site_url;?>images/logo.png" alt="LNS | Вместе для лучшей жизни" title="LNS | Вместе для лучшей жизни"></a></div>
			<div class="head_wrap">
				<div class="slogan">Продукция, ведущая к успеху!</div>
				<div class="block_wrap">
					<div class="block_language">
						<form action="" method="post">
							<select name="lng" onchange="this.form.submit()">

									<?php
										if($lng==3){
									?>
										<option selected disabled value="en">EN<option>
										<option value="az">AZ</option>
										<option value="ru">RU</option>
									<?PHP 
									} 
									elseif($lng==1){
									?>
										<option selected disabled value="az">AZ</option>
										<option value="en">EN</option>
										<option value="ru">RU</option>
									<?PHP 
									} 
									else{
									?>
										<option selected disabled value="ru">RU</option>
										<option value="en">EN</option>
										<option value="az">AZ</option>
										
									<?PHP 
									} 
									?>
							</select>
						</form>
					</div>


					<div class="block_search">
						<div class="search_btn">Поиск</div>
						<form action="#">
							<div class="form_item"><input type="text" class="form_text" placeholder="Введите слова для поиска"></div>
							<input type="submit" class="form_submit" value="Поиск">
						</form>
						<div class="popup_fon3"></div>
					</div>
					<div class="user_link"><a href="#">Мой профиль</a></div>
				</div>
				<div class="basket_header">
					<a class="basket_link" href="<?=$site_url.$lng2?>/basket/"></a>
					<span class="title">Корзина</span>
					<!-- <span class="order">Заказать <span>(1)</span></span> -->
				</div>
			</div>
		</div>
		<?php include "include/menu.php";?>
	</header>