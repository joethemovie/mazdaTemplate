<?php
$name = trim($_POST["name"]);
$price = trim($_POST["price"]);
$details = trim($_POST["details"]);
$alloyWheels = trim($_POST["alloyWheels"]);
$eyeSight = trim($_POST["eyeSight"]);
$model = trim($_POST["model"]);
$trim = trim($_POST["trim"]);
$img = trim($_POST["img"]);
$yourPrice = trim($_POST["yourPrice"]);
$gap = trim($_POST["gap"]);
$template = trim($_POST["template"]);

$accessories = $alloyWheels . " " . $eyeSight;
echo $template;

if ($yourPrice = "on"){
  $yourPrice .=
  '
  <table border="0" cellpadding="20" cellspacing="0" width="100%">
      <tr>
          <td valign="top" style="border-collapse: collapse; padding:030px;">
              <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">
  <p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">Thank you for your interest in the 2016 Mazda' . $section .  " " . $trim . 'from Ramsey Mazda. </p>
  <h3>We currently have this vehicle in stock!</h3>
  <strong>Here’s a price for the 2016 Mazda' . $section .  " " . $trim . '</strong> (available until Thursday)



              </div>
  </td>
      </tr>
  </table>



  <table border="0" cellpadding="0" cellspacing="0" width="100%" mc:repeatable="siwc_600" mc:variant="content with left image">


            <td align="center" valign="top" style="border-collapse: collapse;">



            <table border="0" cellpadding="20" cellspacing="0" width="100%" mc:repeatable="siwc_600" mc:variant="content with left image" style="padding:0px 0px;">
                <tr style="background:#545454;margin:-600px;">
                    <td align="center" valign="top" style="border-collapse: collapse;">
                        <img width="300px" src="' .  $img . '"style="border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;" mc:label="image" mc:edit="liwc600_image00">
                    </td>
                    <td valign="top" style="border-collapse: collapse;">
                        <div mc:edit="liwc600_content00" style="color: #fff;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">
                         <h1 class="h1" style="color: #fff;display: block;font-family: Arial;font-size: 34px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 0px;margin-left: 0;text-align: left;">' . $price . '</h1>
                         <strong>Transmission:</strong> CVT Automatic
                         <br>
                         <strong>Exterior Color:</strong>' . $xColor . '
                         <br>
                         <strong>Interior Color:</strong>'. $iColor . '
                         <br>
                         <strong>Stock Number:</strong>ENTER STOCK NUMBER
                         <br>

                        </div>
                    </td>
                </tr>
            </table>
          </td>
      </tr>
      <tr style="background:#545454;margin:-600px;">
          <td align="center" valign="top" style="border-collapse: collapse;color:#fff;font-family:Arial; padding:0 30px 20px 30px; ">
            Included Accessories: Enter Here
          </td>
        </tr>
  </table>'



  };

 ?>
