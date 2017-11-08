<!-- Page Header-->
      <header class="page-head header-panel-absolute">
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav data-md-device-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-offset="210" data-xl-stick-up-offset="85" class="rd-navbar rd-navbar-default" data-lg-auto-height="true" data-auto-height="false" data-md-layout="rd-navbar-static" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <h4 class="panel-title veil-md">Home</h4>
                <!-- RD Navbar Right Side Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-top-panel" class="rd-navbar-top-panel-toggle veil-md"><span></span></button>
                <div class="rd-navbar-top-panel">
                  <div class="rd-navbar-top-panel-left-part">
                    <ul class="list-unstyled">
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone text-middle"></span></div>
                          <div class="unit-body"><a href="callto:#">(+99412) 432-71-75,</a> <a href="callto:#" class="reveal-block reveal-md-inline-block">(+99412) 480-28-45</a>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle"></span></div>
                          <div class="unit-body"><a href="#">AZ1100, Bakı şəhəri, Yasamal rayonu, M. Seyidov küçəsi  41, mənzil 2</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-email-open text-middle"></span></div>
                          <div class="unit-body"><a href="mailto:#">office@iatm.az</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!--div class="rd-navbar-top-panel-right-part">
                    <div class="rd-navbar-top-panel-left-part">
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi mdi-login text-middle"></span></div>
                        <div class="unit-body"><a href="login-register.html">Login/Register</a></div>
                      </div>
                    </div>
                  </div-->
				  
				  <?PHP 

@$sql1=mysqli_QUERY($connection,'select * from '.$tbn.' where '.$www.'="'.$$ll.'" and status=0 and l_id=1');
@$b1=MYSQLI_FETCH_ASSOC($sql1);

@$sql3=mysqli_QUERY($connection,'select * from '.$tbn.' where '.$www.'="'.$$ll.'" and status=0 and l_id=3');
@$b3=MYSQLI_FETCH_ASSOC($sql3);

				  ?>
				  
				  <div class="rd-navbar-top-panel-right-part">
                    <div class="rd-navbar-top-panel-left-part">
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-body">
							<div class="leng">
								<a style="display:inline-block;" href="<?PHP echo $site_url;?>az<?PHP echo $str;?><?php echo $b1[''.$qqq.'']; ?>/<?PHP if(isset($_GET['sss'])) {echo $_GET['sss'].'/';} else{} ?>">az</a>
								<a style="display:inline-block;" href="<?PHP echo $site_url;?>en<?PHP echo $str;?><?php echo $b3[''.$qqq.'']; ?>/<?PHP if(isset($_GET['sss'])) {echo $_GET['sss'].'/';} else{} ?>">en</a>
							</div>
						</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rd-navbar-menu-wrap clearfix">
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="<?PHP echo $lng2; ?>/pages/home/" class="reveal-inline-block">
                    <div class="unit unit-xs-middle unit-xl unit-xl-horizontal unit-spacing-xxs">
                      <div class="unit-left"><img width='170' height='172' src='images/logo-170x172.jpg' alt=''/></div>
                      <div class="unit-body text-xl-left">
                        <div class="rd-navbar-brand-title"></div>
                        <div class="rd-navbar-brand-slogan"></div>
                      </div>
                    </div></a></div>
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-header-wrap">
                      <!--Navbar Brand Mobile-->
                      <div class="rd-navbar-mobile-brand"><a href="<?PHP echo $lng2; ?>/pages/home/"><img width='136' height='138' src='images/logo-170x172.jpg' alt=''/></a></div>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
					
					
					
					
					
					
					
					<!------------------------------------------------------------------------->
					
					
					
				<?php
				
				@$sql568=mysqli_QUERY($connection,'select * from `menu` where l_id="'.$lng.'" and tip="1" and status="0" and url_tag="'.$_GET['val'].'" limit 1');
				$b5985=MYSQLI_FETCH_ASSOC($sql568);
				
				$sql=mysqli_QUERY($connection,'select * from `menu` where l_id="'.$lng.'" and tip="1" and status="0" and sub_id="0" order by `ordering`asc');
				while($b=MYSQLI_FETCH_ASSOC($sql)){
					
					
					if(!empty($b['link']))	{$lh=$site_url.$lng2.'/'.$b['link'];}
						else{$lh=$site_url.$lng2.'/pages/'.$b['url_tag'].'/';}
						$sql11=mysqli_QUERY($connection,'select * from `menu` where l_id="'.$lng.'" and tip="1" and status="0" and sub_id="'.$b['u_id'].'" order by `ordering`asc');
						
						if($def_m_a==0 and $b['u_id']==1){$active='class="active"';}
						else{
							if($b['url_tag']==@$_GET['val']){$active='class="active"';} else{$active='';}
						}
						if(mysqli_num_rows($sql11)>0){
						
							
						if($b5985['sub_id']==$b['u_id']){$active='class="active"';} else{$active='';}
							
							echo '<li '.$active.'><a>'.$b['name'].'</a>';
						}
						else{
					echo'<li '.$active.'><a href="'.$lh.'">'.$b['name'].'</a>';
						}
						
						
					
				if(mysqli_num_rows($sql11)>0){ echo'<ul class="rd-navbar-dropdown">'; }
				else{}
					
						$sql2=mysqli_QUERY($connection,'select * from `menu` where l_id="'.$lng.'" and tip="1" and status="0" and sub_id="'.$b['u_id'].'" order by `ordering`asc');
						while($b2=MYSQLI_FETCH_ASSOC($sql2)){
						if(!empty($b2['link']))	{$lh=$site_url.$lng2.'/'.$b2['link'];}
						else{$lh=$site_url.$lng2.'/pages/'.$b2['url_tag'].'/';}
						
						
							echo'<li><a href="'.$lh.'">'.$b2['name'].'</a></li>';
						
							
															}
					if(mysqli_num_rows($sql11)>0){ echo'</ul>'; }
					else{}
				echo'</li>
					
				';}?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<!------------------------------------------------------------------------->
					
					
					
					
					
					
					
					
					
                    </ul>
                    <!--RD Navbar Mobile Search-->
                    <!--div id="rd-navbar-search-mobile" class="rd-navbar-search-mobile">
                      <form action="search-results.html" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                        <div class="form-group">
                          <label for="rd-navbar-mobile-search-form-input" class="form-label">Search...</label>
                          <input id="rd-navbar-mobile-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                        </div>
                        <button type="submit" class="icon fa-search rd-navbar-search-button"></button>
                      </form>
                    </div>
                  </div>
                </div-->
                <!--RD Navbar Search-->
                <!--div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-navbar-search" href="#" class="rd-navbar-search-toggle mdi"><span></span></a>
                  <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-navbar-search-form search-form-icon-right rd-search">
                    <div class="form-group">
                      <label for="rd-navbar-search-form-input" class="form-label">Search</label>
                      <input id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off" class="rd-navbar-search-form-input form-control form-control-gray-lightest"/>
                      <div id="rd-search-results-live" class="rd-search-results-live"></div>
                    </div>
                  </form>
                </div-->
				
				
				
                  
                </div>
				
                <!--RD Navbar shop-->
                
              </div>
            </div>
			
          </nav>
        </div>
		
      </header>