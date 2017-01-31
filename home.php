<?php
   $content = '
<div id="sliderFrame">
              <div id="slider" style="background: url(&quot;http://anganpropertiesltd.com/wp-content/themes/anjon-properties/assets/images/slides/home-2.jpg&quot;) no-repeat;">

                <a href="#" class="imgLink" style="display: none;"><img src="./src/home-1.jpg" alt="" style="display: none;"></a>
                <a href="#" class="imgLink" style="display: block;"><img src="./src/home-2.jpg" alt="" style="display: none;"></a>
                <a href="#" class="imgLink" style="display: none;"><img src="./src/home-3.jpg" alt="" style="display: none;"></a>
                <a href="#" class="imgLink" style="display: none;"><img src="./src/home-4.jpg" alt="" style="display: none;"></a>

              </div>
              <!--Custom navigation buttons on both sides-->
              <div class="group1-Wrapper">
                  <a onclick="imageSlider.previous()" class="group1-Prev"></a>
                  <a onclick="imageSlider.next()" class="group1-Next"></a>
              </div>
              
          </div>';
          include('index.php');
?>