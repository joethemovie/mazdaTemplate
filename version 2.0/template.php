<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Your Template is Ready</title>
  </head>
  <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800i" rel="stylesheet">
  <body>
    <?php
    include('inc/fill.php');
    include('emailTemplate.php');
    ?>

    <div style="padding-top:80px;background-color: #E7E7E7;">
      <center>
        <div class="emailBody" style="background-color: #E7E7E7;color: #000000;font-family: Arial, sans-serif;">
          <div class="emailContainer" style="background-color: #ffffff;width: 650px;">
            <div class="emailHeader">

                      <div class="subaruIcon" style="width: 650px;background-color: #191919;display: block;">
                        <img class="imageFix" src="https://www.mazdausa.com/contentassets/ef3a539342674bed9e36d271984b54d0/mazda_logo_global_nav3.png" alt="" width="70px" style="border: 0 none;height: auto;line-height: 100%;outline: none;text-decoration: none;display: block;margin: auto;padding: 15px 0 15px 0;">
                      </div>
            </div>
            <div class="headerImgArea">
              <img src="<?php echo $headerVideo ?>" alt="" style="border: 0 none;height: auto;line-height: 100%;outline: none;text-decoration: none;display: block;background-color: #ffffff;width: 100%;">
            </div>
            <div style="padding: 10px 30px;text-align: left;">
              <p>
                <br>Hello <?php echo $name ?>,<br><br>
              </p>
              Thank you for your interest in the <?php echo $vehicleNewYear . ' ' . $brand . ' ' . $model . ' ' . $trim . ' ' . $packagesInlay ?> from Ramsey Mazda.<br><br>
              <h3 style="font-weight: 600;">We currently have this vehicle in stock!</h3><br>
              <strong>Here&#39;s a price for the <?php echo $vehicleNewYear . ' ' . $brand . ' ' . $model . ' ' . $trim . ' ' ?></strong> (available until <?php echo $goodUntil ?> )<br><br>
            </div>

            <div class="priceArea" style="background-color: #ffffff;padding-bottom: 10px;border-top: 2px solid #ececec;border-bottom: 2px solid #ececec;">
              <div class="vehicleInfoArea bodyPadding" style="padding: 10px 20px;text-align: left;">
                <table width="100%" style="border-collapse: collapse;">
                  <tr>
                    <td style="text-align: left;border-collapse: collapse;" width="350px">
                      <span class="supportingText" style="font-size: 14px;font-weight: 600;"><?php echo $vehicleNewYear . ' ' . $brand ?></span>
                      <br><span class="superText" style="font-size: 30px;font-weight: 600;"><?php echo $model . ' ' . $trim ?></span>
                      <br><span class="supportingText" style="font-size: 14px;font-weight: 600;"><?php echo $packagesInlay ?></span>
                      <br><span class="supportingText" style="font-size: 10px;font-weight: 600;">Stock: <?php echo $stocknumber ?></span>
                    </td>
                    <td style="text-align: right;border-collapse: collapse;">
                      <?php echo $priceTemplate . $divider; ?>
                      <?php echo $leaseTemplate ?>
                    </td>
                  </tr>
                </table>
              </div>
              <table style="border-collapse: collapse;">
                <tr>
                  <td align="left" style="border-collapse: collapse;" width="300px">
                    <img src="<?php echo $img ?>;" alt="Vehicle Image" width="300px" style="border: 0 none;height: auto;line-height: 100%;outline: none;text-decoration: none;margin: 0 auto;">
                  </td>
                  <td width="30px;">

                  </td>
                  <td valign="right" style="padding-right: 10px;border-collapse: collapse;">
                    <span style="font-size:20px;text-align:right;font-weight:600;">Options &amp; Accessories</span>
                    <hr style="border: 0;height: 0;border-top: 1px solid rgba(0, 0, 0, 0.1);border-bottom: 1px solid rgba(255, 255, 255, 0.3);">
                    <span style="font-size:14px;font-weight:600;">Accessories: </span><br>
                    <span style="font-size:12px;"><?php echo $accessoriesInlay ?></span>

                  </td>
                </tr>
              </table>
              <br><br>
            </div>

            <div class="postPrice bodyPadding" style="padding: 30px 20px;text-align: left;">
              Here at Ramsey Mazda, we give you our <strong>Upfront Price</strong>. Our fees are the lowest in the area and we do not charge additional unnecessary fees like "Out of State Conveyance" or for "New Car Prep". Also, we make sure our customers know that Gap Insurance is optional, NOT necessary. If you have any questions about this vehicle or would like to come in for a test drive please let me know. If you are ready, I&#39;d be happy to schedule a time for you to come get your new !
              <br><br>
              <span style="font-size:12px;">*Not responsible for typographical errors</span>
            </div>
            <div class="footer bodyPadding" style="padding: 10px 20px;text-align: left;padding-bottom: 50px;">

                    <?php include("signature.php") ?>


            </div>
            <div class="contactInfo" style="color: #ffffff;background-color: #191919;text-align: center;padding: 35px 0;">
              <a href="http://www.ramseymazda.com/" style="text-decoration: none;color: #ffffff;display: inline-block;">RamseyMazda.Com</a> &nbsp;|&nbsp; <a href="http://www.ramseymazda.com/dealership/directions.htm" style="text-decoration: none;color: #ffffff;display: inline-block;">905 Rt17s Ramsey, NJ</a> &nbsp;|&nbsp; <a href="tel:2018254444" style="text-decoration: none;color: #ffffff;display: inline-block;">201.825.4444</a>&nbsp;
            </div>
          </div>
          </div>




      </center>
    </div>

  </body>
</html>
