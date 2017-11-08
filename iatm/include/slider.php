           
 
       <section>
          <!-- Swiper-->
          <div data-height="42.1875%" data-loop="true" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
             
			 
<?PHP 


$topslider22=MYSQLI_QUERY($connection,'SELECT * from `topslider` where s_id=0 and l_id="'.$lng.'" ORDER BY ordering desc');
while($topslider=MYSQLI_FETCH_ARRAY($topslider22)){
?>
			 
			 
              <div data-slide-bg="<?PHP echo 'products/'.$topslider['photo']; ?>" style="background-position: 80% center" class="swiper-slide">
                <div class="swiper-slide-caption">
                  <div class="container">
                    <div class="range range-xs-center range-lg-left">
                      <div class="cell-md-9 text-md-left cell-xs-10">
                        <div data-caption-animate="fadeInUp" data-caption-delay="100">
                          <h1 class="text-bold"><a><?PHP echo $topslider['name']; ?></a></h1>
                        </div>
                        <div data-caption-animate="fadeInUp" data-caption-delay="150" class="offset-top-20 offset-xs-top-40 offset-xl-top-60 inset-lg-right-100">
                          <h5><?PHP echo $topslider['text']; ?></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
			  
			<?PHP } ?>  
			  
             
			  
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
          </div>
        </section>