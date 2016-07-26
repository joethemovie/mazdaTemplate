<?php include("inc/heading.php");
      include("inc/temInfo.php")
?>
<link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">




            <div class="priceAreaContainer">
              <table class="inputsTable" width="830px;">
                <tr>
                  <td>
                    <h1>Basic Email Inputs</h1>

                    <form method="post" action="blankTemplate.php">
                    <table style="line-spacing:20px;cell-padding:30px;">
                    <tr>
                        <th style="padding:20px 0;"><label for="name">Name</label></th>
                        <td><input type="text" id="name" name="name" /></td>
                    </tr>
                    <tr>
                        <th><label for="details">Email Body&nbsp;</label></th>
                        <td><textarea name="details" id="details"></textarea></td>
                    </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <table class="headings" width="870px">
                <tr>
                  <td>
                    <h2>&nbsp;<input type="checkbox" id="yourPrice" name="yourPrice" value="on">&nbsp;&nbsp;&nbsp;Price Module</h2>

                    <br>
                  </td>
                  <td>
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Template Modules</h2>
                    <br>
                  </td>
                </tr>
              </table>
            <table width="870px">

              <tr>
                  <th style="padding:20px 0;"><label for="price">Vehicle Price</label></th>
                  <td><input type="text" id="price" name="price" /></input></td>
                  <td>
                    <input type="checkbox" id="gap" name="gap" value="on"><span class="transText"> Gap Insurance</span>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="vehicleYear">Year</label></th>
                  <td><textarea name="vehicleYear" id="vehicleYear"><?php echo $vehicleYear ?></textarea></td>
                  <td>
                    <input type="checkbox" id="initialAlt" name="initialAlt" value="on"><span class="transText"> Initial Alt</span>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="model">Brand</label></th>
                  <td><textarea name="brand" id="brand"><?php echo $brand ?></textarea></td>
                  <td>
                    <input type="checkbox" id="tradeTemplate" name="tradeTemplate" value="on"><span class="transText"> Trade</span>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="model">Model</label></th>
                  <td><textarea name="model" id="model"><?php echo $section ?></textarea></td>
                  <td>
                    <input type="checkbox" id="dayOne" name="dayOne" value="on"><span class="transText"> Day One</span><br><br>
                    <input type="text" id="salesperson" name="salesperson" placeholder="Salesperson"/></input>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="trim">Trim</label></th>
                  <td><textarea name="trim" id="trim"><?php echo $trim ?></textarea></td>
                  <td>
                    <input type="checkbox" id="day517" name="day517" value="on"><span class="transText"> Day 5-17</span>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="img">Image</label></th>
                  <td><textarea name="img" id="img"><?php echo $img ?></textarea></td>
                  <td>
                    <input type="checkbox" id="day5060" name="day5060" value="on"><span class="transText"> Day 50-60</span>
                  </td>
              </tr>

              <tr>
                  <th style="padding:20px 0;"><label for="img">Enter Vehicle Url</label></th>
                  <td><textarea name="vehicleUrl" id="vehicleUrl"></textarea></td>
                  <td>
                    <input type="checkbox" id="leaseReturn" name="leaseReturn" value="on"><span class="transText"> Lease Return</span>
                  </td>
              </tr>

              <tr>
                  <th style="padding:20px 0;"><label for="xColor">Exterior Color</label></th>
                  <td><textarea name="xColor" id="xColor"><?php echo " " . $xColor ?></textarea></td>
                  <td>
                    <input type="checkbox" id="day7590" name="day7590" value="on"><span class="transText"> Day 75-90</span>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="iColor">Interior Color</label></th>
                  <td><textarea name="iColor" id="iColor"><?php echo " " . $iColor ?></textarea></td>
                  <td>
                    <input type="checkbox" id="used" name="used" value="on"><span class="transText"> Used</span>
                  </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="transmission">Transmission</label></th>
                  <td><input id="cvt" type="radio" name="transmission" value=" Automatic Transmission"> <span class="transText">Automatic Transmission</span><br>
                    <input id="cvt" type="radio" name="transmission" value=" All Wheel Drive"> <span class="transText">All Wheel Drive</span><br>
              <input type="radio" name="transmission" value=" Manual Transmission"> <span class="transText">Manual Transmission</span></td>
              <td>
                <input type="checkbox" id="usedSold" name="usedSold" value="on"><span class="transText"> Used Sold</span>
              </td>
              <td>

              </td>
              </tr>
              <tr>
                  <th style="padding:20px 0;"><label for="stocknumber">Stock Number</label></th>
                  <td><input type="text" id="stocknumber" name="stocknumber" /></textarea></td>
                  <td>
                    <input type="checkbox" id="phoneReturn" name="phoneReturn" value="on"><span class="transText"> Phone Return</span>
                  </td>
              </tr>

              <tr>
                  <th style="padding:20px 0;"><label for="priceAvail">Price Availability (MM/DD/YY)</label></th>
                  <td><input type="text" id="price" name="priceAvail" /></input></td>


              </tr>




            </table>



            </div>

            <div class="actionButtons" style="text-align:right;">
              <input id="theButton" type="submit" value="Send" />
            </div>
            </form>
            </div>
        </div>
    </div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
