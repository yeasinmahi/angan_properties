<?php
$content = '<div class="content-left">
        <h3>Enquiry</h3>
        <div class="content-details">
          
          <h4>Buyer</h4>

          <form method="post" action="sendmail-buyer.php">

            <table>
              <tbody><tr>
                <td width="180">Name:</td>
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
                <td>Project Location</td>
                <td>
                  <select name="location">
                    <option selected="selected">Please Select</option>
                    <option value="Angan Crystal Bridge">Angan Crystal Bridge</option>
                    <option value="Angan North View">Angan North View</option>
                    <option value="Angan Serenity">Angan Serenity</option>
                    <option value="Angan Jahan">Angan Jahan</option>
                    <option value="Khulna Trade Square">Khulna Trade Square</option>
                    <option value="Angan Fiera Vista">Angan Fiera Vista</option>
                    <option value="Angan Florella">Angan Florella</option>
                    <option value="Angan Rosarium">Angan Rosarium</option>
                    <option value="Angan Royel Enclave">Angan Royel Enclave</option>
                    <option value="Angan Crescent">Angan Crescent</option>
                    <option value="Angan Taj">Angan Taj</option>
                  </select>
                </td>
              </tr>

              <tr>
                <td>Preferred Location</td>
                <td>
                  <input name="plocation" type="text">
                  <!-- <select name="plocation">
                    <option selected="selected">Please Select</option>
                    <option value="Adabor">Adabor</option>
                    <option value="Baridhara">Baridhara</option>
                    <option value="Bashundhara">Bashundhara</option>
                    <option value="Crescent Road">Crescent Road</option>
                    <option value="Elephant Road">Elephant Road</option>
                    <option value="Kallyanpur">Kallyanpur</option>
                    <option value="Kakrail">Kakrail</option>
                    <option value="Maghbazar">Maghbazar</option>
                    <option value="Mirpur">Mirpur</option>
                    <option value="Uttara">Uttara</option>
                  </select> -->
                </td>
              </tr>

              <tr>
                <td>Preferred Apartment Size</td>
                <td>
                  <select name="psize">
                    <option selected="selected">Please Select</option>
                    <option value="800 - 1200 Sft">800 - 1200 Sft</option>
                    <option value="1200 - 2000 Sft">1200 - 2000 Sft</option>
                    <option value="2000 - 3000 Sft">2000 - 3000 Sft</option>
                    <option value="3000 - 4000 Sft">3000 - 4000 Sft</option>
                    <option value="4000 - 5000 Sft">4000 - 5000 Sft</option>
                    <option value="5000+ Sft">5000+ Sft</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>I am interested in</td>
                <td class="form-alt"><input type="checkbox" name="residential" value="Residential">Residential <input type="checkbox" name="commercial" value="Commercial"> Commercial</td>
              </tr>
              <tr>
                <td>Remarks</td>
                <td><textarea name="remarks"></textarea></td>
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