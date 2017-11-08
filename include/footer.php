<footer class="footer">
		<div class="footer_content clearfix">
			<div class="social_links">
				<a href="#" class="social social_1">Facebook</a>
				<a href="#" class="social social_2">Instagram</a>
				<a href="#" class="social social_3">Twitter</a>
				<a href="#" class="social social_4">Youtube</a>
				<a href="#" class="social social_5">Pinterest</a>
			</div>
			<div class="logo_wrapper">
				<div class="logo"><a href="<?php echo $site_url;?>"><img src="<?php echo $site_url;?>images/logo_footer.png" alt="LNS | Вместе для лучшей жизни" title="LNS | Вместе для лучшей жизни"></a></div>
				<div class="copyright">© 2014-2017  | Copyright<br>LNS INTERNATIONAL SRL <br>C.F/P.IVA 08165340962</div>
			</div>
			<div class="menu_wrapper clearfix">
					<?php
					$sql = "select * from site_menu where l_id='".$lng."' and sub_id=0 and footer=1 ORDER BY ordering desc limit 3";
					// die($sql);
					$kateqoriyalar= mysqli_query($connection,$sql) or die('oldur gedsin');
								                        
								                        while($row = mysqli_fetch_array($kateqoriyalar)){

								                        	echo '
						<div class="col-md-3 w3_footer_grid">
									<h3>'.$row['name'].'</h3>';
									$subcats = mysqli_query($connection,"select * from site_menu where l_id='".$lng."' and sub_id='".$row['u_id']."' ") or die("sub islemir");
								                        	if(mysqli_num_rows($subcats)>0){
								                        		echo '<ul class="w3_footer_grid_list">';
								        while($row1 = mysqli_fetch_array($subcats)){
								                        			echo'                		
								<li><a href="">'.$row1['name'].'</a></li>';
												
												echo "<ul></div>";

					 }}}?>
				</div>
			
			
			</div>


		</div>
	</footer>


		