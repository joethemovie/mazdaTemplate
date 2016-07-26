<?php
$employeeTitle = "E-Commerce Associate";
$location = "Ramsey Mazda";
$extension = "1234";
$emailAccount = "jromero@ramseysubaru.net";
$firstName = "Joe";
$lastName = "Romero";
$fullName = $firstName . " " . $lastName;
 ?>

<table align="center" border="0" cellpadding="20" cellspacing="0" width="650px">
  <tr align="left">
    <td style="border-collapse: collapse; font-family:Arial; padding-left:30px;">
          Sincerely,
          <br><br>
           <?php echo $fullName ?><br>
          <?php echo $employeeTitle ?> <br>
          <?php echo $location ?> <br>
          201.825.4444 ext.<?php echo $extension ?> <br>
          <?php echo $emailAccount ?>
    </td>

      <td valign="bottom" style="border-collapse: collapse; padding-right:0px;">
            <img width="200px" src="https://pictures.dealer.com/r/ramseysubaruramseysoa/1303/0b943303e3d594c198bede7f68338a82x.jpg" style="border: 0;height: auto;line-height: 100%;outline: none;text-decoration: none;display: inline;" mc:label="image" mc:edit="liwc600_image00">
      </td>

  </tr>
</table>
