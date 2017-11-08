<?PHP
$topslider22=MYSQLI_QUERY($connection,"SELECT * from `site_topslider` where s_id=0 and l_id='".$lng."' ORDER BY ordering desc") or die('slider islemir');
$sls=1;?>
<div class="middle">
		<div class="container">
			<div class="middle_content">
				<div class="main_slider">
					<div class="block_content">
<?PHP
while($topslider=MYSQLI_FETCH_ARRAY($topslider22)){
?>
						<div class="slide slide_<?PHP echo $sls; if($sls==1) {echo ' black';}?>">
							<div class="slide_content">
								<div class="image"><img src="<?php echo $site_url;?>products/<?php echo $topslider['photo'];?>" alt=""></div>
								<div class="title_wrapper">
									<div class="main_title"><?php echo $topslider['name'];?></div>
									<div class="title"><a href="#"><?php echo $topslider['text'];?></a></div>
									<div class="price_wrapper">
										<div class="old_price"><?php echo $topslider['old_price'];?></div>
										<div class="price"><?php echo $topslider['new_price'];?><span>руб</span></div>
										<div class="add_to_basket"><a href="#">Купить</a></div>
									</div>
								</div>
								<div class="good_image">
									<img src="" alt="">
								</div>
							</div>
						</div>

<?php 
$sls++;
}?>
					</div>
				</div>
				<div class="block_products">
					<div class="block_title">Наша продукция</div>
					<div class="block_content">
						<?php
								$product_cat=mysqli_QUERY($connection,'SELECT * from `product_cat` where l_id="'.$lng.'" and status=0  ORDER BY ordering desc limit 12');
								while($product_cats=MYSQLI_FETCH_ARRAY($product_cat))
								{	
 						?>
		
						<div class="col col_1">
								<div class="image"><a href="<?PHP echo $lng2; ?>/product/<?PHP echo $product['url_tag'] ; ?>/"><img src="products/<?php echo $product_cats['foto'];?>" alt=""></a></div>
								<div class="title"><a href="#"><?php echo $product_cats['name'];?></a></div>
						</div>

						<?php }?>
							<!-- <div class="col col_1">
								<div class="image"><a href="#"><img src="images/prod_1.svg" alt=""></a></div>
								<div class="title"><a href="#">Часы</a></div>
							</div>
							<div class="col col_2">
								<div class="image"><a href="#"><img src="images/prod_2.svg" alt=""></a></div>
								<div class="title"><a href="#">Ремешки для часов</a></div>
							</div>
							<div class="col col_3">
								<div class="image"><a href="#"><img src="images/prod_3.svg" alt=""></a></div>
								<div class="title"><a href="#">Ювелирные изделия</a></div>
							</div>
							<div class="col col_4">
								<div class="image"><a href="#"><img src="images/prod_4.svg" alt=""></a></div>
								<div class="title"><a href="#">Смарт-часы</a></div>
							</div>
							<div class="col col_5">
								<div class="image"><a href="#"><img src="images/prod_5.svg" alt=""></a></div>
								<div class="title"><a href="#">Телевизоры</a></div>
							</div>
							<div class="col col_6">
								<div class="image"><a href="#"><img src="images/prod_6.svg" alt=""></a></div>
								<div class="title"><a href="#">Ноутбуки</a></div>
							</div>
							<div class="col col_7">
								<div class="image"><a href="#"><img src="images/prod_7.svg" alt=""></a></div>
								<div class="title"><a href="#">Электросамовары</a></div>
							</div>
							<div class="col col_8">
								<div class="image"><a href="#"><img src="images/prod_8.svg" alt=""></a></div>
								<div class="title"><a href="#">Кухонные плиты</a></div>
							</div>
							<div class="col col_9">
								<div class="image"><a href="#"><img src="images/prod_9.svg" alt=""></a></div>
								<div class="title"><a href="#">Бытовая техника</a></div>
							</div>
							<div class="col col_10">
								<div class="image"><a href="#"><img src="images/prod_10.svg" alt=""></a></div>
								<div class="title"><a href="#">Все для путеществий</a></div>
							</div>
							<div class="col col_11">
								<div class="image"><a href="#"><img src="images/prod_11.svg" alt=""></a></div>
								<div class="title"><a href="#">Духи</a></div>
							</div>
							<div class="col col_12">
								<div class="image"><a href="#"><img src="images/prod_12.svg" alt=""></a></div>
								<div class="title"><a href="#">Разное</a></div>
							</div> -->
					</div>
				</div>
				<div class="about_block">
					<div class="block_content clearfix">
						<div class="links_wrap">
							<div class="block_title">О компании</div>
							<div class="links">
								<a href="#">О LNS</a>
								<a href="#">Менеджмент</a>
								<a href="#">Бизнес регистрация</a>
								<a href="#">Банковские реквизиты</a>
							</div>
						</div>	
						<div class="text_wrap">
							<h3>Компания LIFE NETWORK SYSTEM, известная своими инвестициями в дизайнерские решения, создала свой бренд на пороге нового тысячилетия. </h3>
							<div class="body">
								<p>Веб-сайт электронной торговли LNS удобен в использовании и предлагает широкий выбор часов швейцарского производства под собственным брендом. К услугам покупателей часов LNS все функции веб-сайта, помогающие сделать верный выбор часов экстра-класса. В этом кроется единственная причина успеха компании LNS, стремящейся к постоянному расширению ассортимента, не требуя ничего взамен.</p>

								<p>Отдавая безусловный приоритет удовлетворенному покупателю, нежели прибыли, компания LNS предлагает своим клиентам круглосуточную техническую онлайн-поддержку.</p>
							</div>
							<div class="benefits_wrap">
								<div class="col">
									<div class="image">
										<div class="field_content"><img src="images/benefit_1.svg" alt=""></div>
									</div>
									<div class="title"> Огромный выбор<br> товаров в наличии<br> и на заказ</div>
								</div>
								<div class="col">
									<div class="image">
										<div class="field_content"><img src="images/benefit_2.svg" alt=""></div>
									</div>
									<div class="title">Отдаем безусловный <br> приоритет покупателю, <br> нежели прибыли</div>
								</div>
								<div class="col">
									<div class="image">
										<div class="field_content"><img src="images/benefit_3.svg" alt=""></div>
									</div>
									<div class="title">Только<br> сертифицированный<br> товар</div>
								</div>
								<div class="col">
									<div class="image">
										<div class="field_content"><img src="images/benefit_4.svg" alt=""></div>
									</div>
									<div class="title">Прием заказов 24 часа <br> в сутки</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block_goods goods_popular">
					<div class="block_title">Самое популярное</div>
					<div class="block_content">
					<?php
								$top_product=mysqli_QUERY($connection,'SELECT * from `elanlar` where l_id="'.$lng.'" and home=1 ORDER BY ordering desc');
								while($top_products=MYSQLI_FETCH_ARRAY($top_product))
								{	
					?>
						<div class="col col_1">
							<div class="image">
								<div class="field_content"><img src="products/<?php echo $top_products['image_url'];?>" alt="Товар"></div>
							</div>
							<div class="title"><a href="#"><?php echo $top_products['name'] ?></a></div>
							<div class="price_wrap">
								<!-- <div class="old_price">2 699</div> -->
								<div class="price">1 999<span>руб</span></div>
							</div>
							<div class="add_to_basket"><a href="#">Купить</a></div>
						</div>
						<?php }?>
					<!-- 	<div class="col col_2">
							<div class="image">
								<div class="field_content"><img src="images/good_2.png" alt="Товар"></div>
							</div>
							<div class="title"><a href="#">Masculine & Feminine Elegance LN7002/LN7004</a></div>
							<div class="price_wrap">
								<div class="old_price">2 699</div>
								<div class="price">1 999<span>руб</span></div>
							</div>
							<div class="add_to_basket"><a href="#">Купить</a></div>
						</div>
						<div class="col col_3">
							<div class="image">
								<div class="field_content"><img src="images/good_3.png" alt="Товар"></div>
							</div>
							<div class="title"><a href="#">Bottega Veneta Eau Legere EDT Eau De Toilette Spray 30ml/1oz Perfume</a></div>
							<div class="price_wrap">
								<div class="old_price">2 699</div>
								<div class="price">1 999<span>руб</span></div>
							</div>
							<div class="add_to_basket"><a href="#">Купить</a></div>
						</div>
						<div class="col col_4">
							<div class="image">
								<div class="field_content"><img src="images/good_4.png" alt="Товар"></div>
							</div>
							<div class="title"><a href="#">Masculine & Feminine Elegance LN7002/LN7004</a></div>
							<div class="price_wrap">
								<div class="old_price">2 699</div>
								<div class="price">1 999<span>руб</span></div>
							</div>
							<div class="add_to_basket"><a href="#">Купить</a></div>
						</div>
						<div class="col col_5">
							<div class="image">
								<div class="field_content"><img src="images/good_2.png" alt="Товар"></div>
							</div>
							<div class="title"><a href="#">Bottega Veneta Eau Legere EDT Eau De Toilette Spray 30ml/1oz Perfume</a></div>
							<div class="price_wrap">
								<div class="old_price">2 699</div>
								<div class="price">1 999<span>руб</span></div>
							</div>
							<div class="add_to_basket"><a href="#">Купить</a></div>
						</div> -->
					</div>
				</div>
				<div class="block_benefits">
					<div class="block_title">Преимущества работы с нами</div>
					<div class="block_content">
						<div class="col">
							<div class="image">
								<div class="field_content"><img src="images/ben_1.svg" alt=""></div>
							</div>
							<div class="title">Безопасные сделки не выходя из дома</div>
							<div class="body">Равным образом новая модель организационной деятельности влечет за собой процесс внедрения</div>
						</div>
						<div class="col">
							<div class="image">
								<div class="field_content"><img src="images/ben_2.svg" alt=""></div>
							</div>
							<div class="title">Принципы профессионализма, этики и доверия</div>
							<div class="body">Отдавая безусловный приоритет покупателю, нежели прибыли, компания </div>
						</div>
						<div class="col">
							<div class="image">
								<div class="field_content"><img src="images/ben_3.svg" alt=""></div>
							</div>
							<div class="title">10 лет успешной <br> работы</div>
							<div class="body">С другой стороны дальнейшее развитие различных форм деятельности играет важную роль в </div>
						</div>
						<div class="col">
							<div class="image">
								<div class="field_content"><img src="images/ben_4.svg" alt=""></div>
							</div>
							<div class="title">Уважительное отношение к клиенту</div>
							<div class="body">Процесс внедрения и модернизации существенных финансовых и административных</div>
						</div>
					</div>
				</div>
				<div class="reviews_block">
					<div class="block_title">Отзывы</div>
					<div class="block_content">
						<div class="add_review">Написать свой отзыв</div>
						<div class="main_reviews">
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Борис Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любые действия или деятельность, способные причинить или направленные на причинение ущерба репутации компании LNS, ее клиентам, или способные нанести ущерб коммерческим интересам компании LNS считаются недобросовестными и влекут за собой отмену права Клиента на совершение покупок.Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Олег Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Борис Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любые действия или деятельность, способные причинить или направленные на причинение ущерба репутации компании LNS, ее клиентам, или способные нанести ущерб коммерческим интересам компании LNS считаются недобросовестными и влекут за собой отмену права Клиента на совершение покупок.Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Олег Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Борис Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любые действия или деятельность, способные причинить или направленные на причинение ущерба репутации компании LNS, ее клиентам, или способные нанести ущерб коммерческим интересам компании LNS считаются недобросовестными и влекут за собой отмену права Клиента на совершение покупок.Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Олег Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Борис Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любые действия или деятельность, способные причинить или направленные на причинение ущерба репутации компании LNS, ее клиентам, или способные нанести ущерб коммерческим интересам компании LNS считаются недобросовестными и влекут за собой отмену права Клиента на совершение покупок.Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
							<div class="review">
								<div class="image">
									<div class="field_content"><img src="images/review_1.png" alt=""></div>
								</div>
								<div class="name">Олег Юдиновский</div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="body">Любое информация противозаконного, мошеннического, угрожающего, оскорбительного, клеветнического, дискредитирующего, вульгарного, порнографического, вредного, назойливого, нечестного характера, либо посягающая на конфиденциальность данных другого клиента, или пропагандирующая ненависть, расовую, этническую и прочую неприязнь, или подлежит соглашению о конфиденциальности, или посягает на нашу интеллектуальную собственность и прочие права, в том числе и третьей стороны Любая внутренняя информация о той или иной компании</div>
							</div>
						</div>
						<div class="thumb_reviews">
							<div class="review"><img src="images/rev_thumb_1.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_2.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_3.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_4.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_5.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_6.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_2.png" alt=""></div>
							<div class="review"><img src="images/rev_thumb_3.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="block_news">
					<div class="block_container">
						<div class="block_sidebar">
							<div class="block_title">Новости</div>
							<div class="more_link"><a href="<?PHP echo $site_url.$lng2; ?>/news/">Смотреть все</a></div>
						</div>
						<div class="block_content">
							<?php
							$xeberler22=mysqli_QUERY($connection,'SELECT * from `site_xeberler` where l_id="'.$lng.'" and status=0 and checkbox=1 ORDER BY ordering desc limit 3');
							while($xeberler=MYSQLI_FETCH_ARRAY($xeberler22))
							{	
							 ?>
							<div class="col col_1">
								<div class="image"><a href="<?PHP echo $site_url.$lng2; ?>/xeber/<?PHP echo $xeberler['url_tag'] ; ?>/"><img src="products/<?php echo $xeberler['photo'];?>" alt=""></a>
								</div>
								<div class="date"><?php echo $xeberler['current_date'];?></div>
								<div class="title"><a href="<?PHP echo $site_url.$lng2; ?>/xeber/<?PHP echo $xeberler['url_tag'] ; ?>/"><?php echo $xeberler['description'];?></a></div>
							</div>

							<?php }?>
						<!-- 	<div class="col col_2">
								<div class="image"><a href="#"><img src="images/news_1.jpg" alt=""></a></div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="title"><a href="#">С самого начала данный проект LNS в области электронной коммерции</a></div>
							</div>
							<div class="col col_3">
								<div class="image"><a href="#"><img src="images/news_3.jpg" alt=""></a></div>
								<div class="date">10 марта 2017, 19:20</div>
								<div class="title"><a href="#">С самого начала данный проект LNS в области электронной коммерции</a></div>
							</div> -->
						</div>
					</div>
				</div>
				<div class="block_feedback">
					<div class="block_container clearfix">
						<div class="block_sidebar">
							<div class="block_title">Остались <br> вопросы?</div>
							<div class="subtitle">Напишите нам и мы <br> радостью ответим.</div>
						</div>
						<div class="image"><img src="images/girl.png" alt=""></div>
						<div class="block_form">
								<?php include ("include/send.php");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>