<?php
$content = '
      
      <div class="content-left">
        <h3>Enquiry</h3>
        <div class="content-details">
          
          <h4>Land Owner</h4>

          <form method="post" action="sendmail-owner.php">

            <table>
              <tbody><tr>
                <td width="190">Landowner\'s Name:</td>
                <td><input name="name" type="text"></td>
              </tr>
              <tr>
                <td>Address:</td>
                <td><input name="address" type="text"></td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td><input name="email" type="email"></td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td><input name="phone" type="text"></td>
              </tr>

              <tr>
                <td>Land Location:</td>
                <td><input name="location" type="text"></td>
              </tr>
              <tr>
                <td>Land Address:</td>
                <td><input name="landaddress" type="text"></td>
              </tr>
              <tr>
                <td>land Size (in Katha):</td>
                <td><input name="size" type="text"></td>
              </tr>
              <tr>
                <td>Any Special Features: <br>(Corner plot, lake, park etc.)</td>
                <td><input name="features" type="text"></td>
              </tr>

              <tr>
                <td>Type of Use</td>
                <td class="form-alt"><input type="checkbox" name="residential" value="Residential">Residential <input type="checkbox" name="commercial" value="Commercial"> Commercial</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input class="form-submit" name="submit_message" type="submit" value="SUBMIT"></td>
              </tr>
            </tbody></table>
            
          </form>


        </div>
      </div>';
include('index.php');
?>