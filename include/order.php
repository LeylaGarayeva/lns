<?php 
	
 ?>
<div class="middle">
		<div class="container">
			<div class="page_title_wrapper">
				<h1 class="page_title">Оформить заказ</h1>
			</div>
			<div class="middle_content">
				<div class="order_form">
					<div class="block_title">Заполните поля для заказа товаров:</div>
					<form action="#">
						<div class="form_item">
							<label for="">Имя:</label>
							<input type="email" class="form_text">
						</div>
						<div class="form_item">
							<label for="">Фамилия:</label>
							<input type="email" class="form_text">
						</div>
						<div class="form_item">
							<label for="">Электронный адрес:</label>
							<input type="email" class="form_text">
						</div>
						<div class="form_item">
							<label for="">Телефон:</label>
							<input type="email" class="form_text">
						</div>
						
						<div class="form_item">
							<label for="">Страна:</label>
							<select>
								  <?PHP 
                            $valyuta1 = mysqli_query($connection,'SELECT * FROM olkeler WHERE l_id=1 and sub_id=0 ');
							while ($valyuta2 = mysqli_fetch_assoc($valyuta1)) {
                                echo '<option value="'.$valyuta2['kat_id'].'">'.$valyuta2['name'].'</option>';
                            }	
	                       ?>
							</select>
						</div>
						<div class="form_item">
							<label for="">Город:</label>
							<select>
								<option value="Россия">Россия</option>
								<option value="Белоруссия">Белоруссия</option>
							</select>
						</div>
						<div class="form_item">
							<label for="">Способ оплаты:</label>
							<select>
								<option value="Россия">Онлайн</option>
								<option value="Белоруссия">Наличными</option>
							</select>
						</div>
						<div class="form_item">
							<label for="">Способ доставки:</label>
							<select>
								<option value="Россия">Курьером</option>
								<option value="Белоруссия">Самовывоз</option>
							</select>
						</div>
						<div class="form_item form_textarea">
							<label for="">Добавить примечание</label>
							<textarea></textarea>
						</div>
						<div class="form_actions">
							<input type="submit" class="form_submit" value="Заказать товар">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>