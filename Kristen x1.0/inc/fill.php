<?php
$name = trim($_POST["name"]);
$price = trim($_POST["price"]);
$details = trim($_POST["details"]);
$vehicleYear = trim($_POST["vehicleYear"]);
$model = trim($_POST["model"]);
$trim = trim($_POST["trim"]);
$img = trim($_POST["img"]);
$xColor = trim($_POST["xColor"]);
$iColor = trim($_POST["iColor"]);
$stocknumber = trim($_POST["stocknumber"]);
$transmission = trim($_POST["transmission"]);
$yourPrice = trim($_POST["yourPrice"]);
$priceAvail = trim($_POST['priceAvail']);
$gap = trim($_POST["gap"]);
$day517 = trim($_POST["day517"]);
$day5060 = trim($_POST["day5060"]);
$day7590 = trim($_POST["day7590"]);
$dayOne = trim($_POST["dayOne"]);
$initialAlt = trim($_POST["initialAlt"]);
$phoneReturn = trim($_POST["phoneReturn"]);
$leaseReturn = trim($_POST["leaseReturn"]);
$tradeTemplate = trim($_POST["tradeTemplate"]);
$usedSold = trim($_POST["usedSold"]);
$used = trim($_POST["used"]);
$brand = trim($_POST["brand"]);
$vehicleUrl = trim($_POST["vehicleUrl"]);
$salesperson = trim($_POST["salesperson"]);


$packagesArray = implode(array_filter($packagesArray));
$employeeTitle = "E-Commerce Associate";
$location = "Ramsey Mazda";
$extension = "5405";
$emailAccount = "kalexander@ramseymazda.com";
$firstName = "Kristen";
$lastName = "Alexander";
$fullName = $firstName . " " . $lastName;



// PRICE------------------------------------------------------------------------

if ($yourPrice == "on"){
  $yourPrice =

  '<table border="0" cellpadding="20" cellspacing="0" width="100%">
        <tr>
          <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">
    <p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">Thank you for your interest in the' . ' ' . $vehicleYear . ' ' . $brand . ' ' . $model .  ' ' . $trim . ' from Ramsey Mazda. </p>
    <h3>We currently have this vehicle in stock!</h3>
    <strong>Here’s a price for the' . ' ' . $vehicleYear . ' ' . $brand . ' ' . $model . ' ' . $trim . $packagesArray .'</strong> (available until ' . $priceAvail . ' )<br><br>
            </div>
          </td>
        </tr>
    </table>

  <table border="0" cellpadding="0" cellspacing="0" width="100%" mc:repeatable="siwc_600" mc:variant="content with left image">

        <tr style="background:#545454;margin:-600px;">
            <td align="center" valign="top" style="border-collapse: collapse;">



            <table border="0" cellpadding="20" cellspacing="0" width="100%" mc:repeatable="siwc_600" mc:variant="content with left image" style="padding:0px 0px;">
                <tr style="background:#545454;margin:-600px;">
                    <td align="center" valign="top" style="border-collapse: collapse;">
                        <a href="' . $vehicleUrl . '" alt="vehicle"><img width="250px" src="' . $img . '" style="border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;" mc:label="image" mc:edit="liwc600_image00"></a>

                    </td>
                    <td valign="top" style="border-collapse: collapse;">
                        <div mc:edit="liwc600_content00" style="color: #fff;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">
                         <h1 class="h1" style="color: #fff;display: block;font-family: Arial;font-size: 34px;font-weight: bold;line-height: 100%;margin-top: 0;margin-right: 0;margin-bottom: 0px;margin-left: 0;text-align: left;"><a href="' . $vehicleUrl . '" alt="vehicle" style="color:#fafafa; text-decoration:none;">' . $price . '</a></h1>
                         <strong>Transmission:</strong> ' . $transmission . '
                         <br>
                         <strong>Exterior Color:</strong> ' . $xColor . '
                         <br>
                         <strong>Interior Color:</strong> ' . $iColor . '
                         <br>
                         <strong>Stock Number:</strong> ' . $stocknumber . '<br>
                        </div>
                    </td>
                </tr>
            </table>
          </td>
      </tr>
  </table><br><br>';



} else {
  $yourPrice = " ";
}

// GAP--------------------------------------------------------------------------

if ($gap == "on"){
  $gap =

  '<table border="0" cellpadding="20" cellspacing="0" width="100%">
      <tr>
          <td valign="top" style="border-collapse: collapse; padding:0 30px;">
              <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

  <p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
          Here at ' . $location . ', we give you our <strong>Upfront Price</strong>. Our fees are the lowest in the area and we do not charge additional unnecessary fees like "Out of State Conveyance" or for "New Car Prep". Also, we make sure our customers know that Gap Insurance is optional, NOT necessary. If you have any questions about this vehicle or would like to come in for a test drive please let me know. If you are ready, I&#39;d be happy to schedule a time for you to come get your new  ' . $brand . '!
          <br><br>
          <span style="font-size:12px;">*Not responsible for typographical errors</span>
        </td>
    </tr>
  </table><br><br>';;



} else {
  $gap = " ";
}
// DAY 5-17---------------------------------------------------------------------

if ($day517 == "on"){
  $day517 =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
Thank you for your inquiry into the Mazda' . $section . 'I wanted to follow up with you to see if you have any questions or if you wanted to schedule a time to come in and see the vehicle. We are the largest Mazda Dealership in New Jersey and we are eager to earn your business. Please let me know where we can help and we will work to get you into the vehicle you are looking for. Thanks!<br><br>Please check out the online showroom of the vehicle you are interested in: </p><br><a style="text-decoration: none; background: #006cbf; font-weight: 600; color: #ffffff; padding-bottom: 10px; padding-top: 10px; padding-left: 40px; padding-right: 40px" href="http://www.ramseymazda.com/showroom/index.htm">Mazda Showroom</a>
            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $day517 = " ";
}

// DAY 50-60--------------------------------------------------------------------

if ($day5060 == "on"){
  $day5060 =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
Thank you for your inquiry into the ' . $vehicleYear . ' ' . $brand . ' ' . $model . '. I would like to follow up with you to see how your search is going. I want to make sure that my staff has been working with you diligently to get you into the vehicle you are interested in. If you have any questions or would like to schedule a time to meet with me in person, please give me a call at the number below and mention code "21". Thank you for choosing ' . $location . '.
</p>
            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $day5060 = " ";
}

// DAY 75-90--------------------------------------------------------------------

if ($day7590 == "on"){
  $day7590 =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
Thank you for your inquiry into the  ' . $brand . '. It has been a few months since we have heard from you and we were wondering if you were still in the market for a new or pre-owned vehicle. Please let us know either way so that we can help you out the best way possible. We look forward to working with you!</p>
            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $day7590 = " ";
}

// DAY ONE----------------------------------------------------------------------

if ($dayOne == "on"){
  $dayOne =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

            <p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
            At Ramsey Subaru, we consider ourselves family. Most of us have know each other for years and have a great working relationship with each other. With that being said, I would like to introduce my colleague ' . $salesperson . '. He will be assisting me in getting you into the Subaru you are looking for. You will be receiving emails and phone calls from ' . $salesperson . ' and I to assist you. Please feel free to contact us at 201-825-4444 so we can help you out. We look forward to assisting you in your purchase.
</p>                                        </div>
</td>
    </tr>
</table><br><br>';



} else {
  $dayOne = " ";
}



// INITIAL ALT------------------------------------------------------------------

if ($initialAlt == "on"){
  $initialAlt =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
My name is ' . $firstName . ' and I want to personally welcome you to the Ramsey Mazda Family. For years ' . $location . ' has had a family atmosphere and we want you to be a part of that. We know your time is valuable and we want to make this as simple as possible. Because of technology that has been used that creates inquiries that are not real, to receive your no hassle quote on the ' . $brand . ' you are looking for, please respond back to this email to introduce yourself. You can respond to this email, email me at ' . $emailAccount . ', or call me at 201-825-4444 ext.' . $extension . '.
<br><br>
By the way, just as an incentive to you, ' . $location . ' has a policy that we beat any written quote you are given on most Mazda vehicles. So when responding to us, please let us know if there is a quote and we will beat it, guaranteed!
<br><br>

We look forward to introducing you to our family!
</p>
            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $initialAlt = " ";
}

// LEASE RETURN-----------------------------------------------------------------

if ($leaseReturn == "on"){
  $leaseReturn =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 16px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
Our records indicate that you are 12 months away from returning your lease and you may be wondering what your options are. At ' . $location . ' we can help you with that. We can give you a wide variety of options like keeping your vehicle of getting out of your lease early to get into a new Mazda vehicle. Please let me know if you have any questions that we can answer. We look forward to working with you in the future.
</p>
            </div>
</td>
    </tr>
</table><br><br>';


} else {
  $leaseReturn = " ";
}

// PHONE TEMPLATE---------------------------------------------------------------

if ($phoneReturn == "on"){
  $phoneReturn =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
Thank you for your email. As I was follow up with you I noticed your phone number was missing or incorrect. I want to make sure that I get you the most up to date information possible on getting you the best deal. <BR><BR>Please respond to me as soon as possible to receive the most current information on you inquiry. You can also call me at 201.825.4444 ext.' . $extension . '. Thanks!
</p>
            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $phoneReturn = " ";
}

// TRADE TEMPLATE---------------------------------------------------------------

if ($tradeTemplate == "on"){
  $tradeTemplate =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">Thank you for your trade inquiry for ' . $location .'. I see that you have been given a range and we would love to narrow that down for you. Is there a time that we can schedule for you to come in and meet with one of my appraisers to evaluate your trade? Please let me know and we will work to get you into the vehicle you are looking for. Thanks!
</p>


            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $tradeTemplate = " ";
}

// USED SOLD--------------------------------------------------------------------


if ($usedSold == "on"){
  $usedSold =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
My name is ' . $firstName . ' and thank you for your inquiry. I see that you are interested in the pre-owned ' . $vehicleYear . ' ' . $brand . ' ' . $model . '. As of right now, the ' . $model .  ' you are interested in has been sold. Please go to our website at

<a href="http://ramseymazda.com/">www.RamseyMazda.Com</a> to see our selection of pre-owned vehicles. If there is another vehicle that you would be interested in, please let me know and we will put you on the calendar. Thanks!
</p>

            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $usedSold = " ";
}

// USED-------------------------------------------------------------------------


if ($used == "on"){
  $used =

'<table border="0" cellpadding="20" cellspacing="0" width="100%">
    <tr>
        <td valign="top" style="border-collapse: collapse; padding:0 30px;">
            <div mc:edit="std_content00" style="color: #000000;font-family: Arial;font-size: 14px;line-height: 150%;text-align: left;">

<p style="font-size: 14px; font-family: Arial, sans-serif; color: #000000; text-align: left; line-height: 20px">
My name is ' . $firstName . ' and thank you for your inquiry into the largest Mazda Dealership in New Jersey. I see that you are looking for the pre-owned ' . $vehicleYear . ' ' . $brand . ' ' . $model . '. We have this vehicle in stock and it is in great condition. Is there a time that you would like to schedule to come in and see the vehicle for yourself? Please let me know and we will put you on the calendar to see the ' . $vehicleYear . ' ' . $brand . ' ' . $model . ' you are looking for. Thanks!
</p>



            </div>
</td>
    </tr>
</table><br><br>';



} else {
  $used = " ";
}

?>
