<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800i" rel="stylesheet">
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/master.js"></script>
</head>
  <body>
    <div class="container">

      <div class="topBar">
        <div class="leftContent">
          <h4>
            <a href="index.php" id="volvoHeader">Ramsey Mazda</a>
          </h4>
        </div>
        <form action="emailTemplate.php" method="post">
        <div class="majorMenu">
          <ul>
            <li><a class="showSingle" target="name">Name</a></li>
            <li><a class="showSingle" target="price">Price</a></li>
            <li><a class="showSingle" target="vehicle">Vehicle</a></li>
            <li><a class="showSingle" target="packages">Packages</a></li>
            <li><a class="showSingle" target="accessories">Accessories</a></li>
            <li><button type="submit" name="next" id="submit">Submit</button></li>
          </ul>
        </div>
      </div>
      <div class="test">

        <div id="nameSection" class="targetDiv">
          <h1>Customer's Name</h1>
            <input type="text" name="name" id="name">
        </div>

        <div id="vehicleSection" class="targetDiv">
          <h1>Vehicle Select</h1>
          Stock Number <input type="text" name="stocknumber" id="stocknumber">
          <br>

          <br>
          &nbsp;&nbsp;&nbsp;Vehicle Year <input type="text" name="vehicleNewYear" id="vehicleNewYear">
          <br>
          <br>
          <select id="car">
            <option value="filler" disabled>Select Vehicle</option>
            <option value="cx3">CX3</option>
            <option value="cx5">CX5</option>
            <option value="mazda6">Mazda6</option>
            <option value="mazda34dr">Mazda3 4dr</option>
            <option value="mazda35dr">Mazda3 5dr</option>
            <option value="mx5">Mx5</option>



          </select>

<!-- END GROUP SELECT -->
      <div id="cx3" class="group" >
        <select name="model" id="cx3Model">

          <option value="cx3SportColor"><a class="showSingle" target="cx3Sport">CX3 Sport</a></option>
          <option value="cx3TouringColor"><a class="showSingle" target="cx3Touring">CX3 Touring</a></option>
          <option value="cx3GrandTouringColor"><a class="showSingle" target="cx3GrandTouring">CX3 Grand Touring</a></option>

        </select>
        <div class="colorGroup" id="cx3SportColor">
          <h3>Color</h3>
          <br>
          <div class="control-group">

            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportCwp"/> Crystal White Pearl
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportSrm"/> Soul Red Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportCm"/> Ceramic Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportDcb"/> Deep Crystal Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportDb"/> Dynamic Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportJb"/> Jet Black
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportMg"/> Meteor Gray
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3SportTf"/> Titanium Flash
            <div class="control__indicator"></div>
            </label>
          </div>
        </div>

        <div class="colorGroup" id="cx3TouringColor">
          <h3>Color</h3>
          <br>
          <div class="control-group">

            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringCwp"/> Crystal White Pearl
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringSrm"/> Soul Red Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringCm"/> Ceramic Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringDcb"/> Deep Crystal Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringDb"/> Dynamic Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringJb"/> Jet Black
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringMg"/> Meteor Gray
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3TouringTf"/> Titanium Flash
            <div class="control__indicator"></div>
            </label>
          </div>
        </div>


        <div class="colorGroup" id="cx3GrandTouringGrandColor">
          <h3>Color</h3>
          <br>
          <div class="control-group">

            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandCwp"/> Crystal White Pearl
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandSrm"/> Soul Red Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandCm"/> Ceramic Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandDcb"/> Deep Crystal Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandDb"/> Dynamic Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandJb"/> Jet Black
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandMg"/> Meteor Gray
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX3GrandTouringGrandTf"/> Titanium Flash
            <div class="control__indicator"></div>
            </label>
          </div>
        </div>

       </div>

        <div id="cx5" class="group" >
          <select name="model" id="cx5Model">

            <option value="cx5SportColor"><a class="showSingle" target="cx5SportColor">CX5 Sport</a></option>

            <option value="cx5TouringColor"><a class="showSingle" target="cx5TouringColor">CX5 Touring</a></option>

            <option value="cx5GrandTouringColor"><a class="showSingle" target="cx5GrandTouringColor">CX5 Grand Touring</a></option>

          </select>
          <div class="colorGroup" id="cx5SportColor">
            <h3>Color</h3>
            <br>
            <div class="control-group">


            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportCwp"/>Crystal White Pearl
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportSrm"/>Soul Red Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportCm"/>Ceramic Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportDcb"/>Deep Crystal Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportDb"/>Dynamic Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportJb"/>Jet Black
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportMg"/>Meteor Gray
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5SportTf"/>Titanium Flash
            <div class="control__indicator"></div>
            </label>


            </div>
          </div>

          <div class="colorGroup" id="cx5TouringColor">
            <h3>Color</h3>
            <br>
            <div class="control-group">


            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringCwp"/>Crystal White Pearl
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringSrm"/>Soul Red Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringCm"/>Ceramic Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringDcb"/>Deep Crystal Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringDb"/>Dynamic Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringJb"/>Jet Black
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringMg"/>Meteor Gray
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5TouringTf"/>Titanium Flash
            <div class="control__indicator"></div>
            </label>


            </div>
          </div>

          <div class="colorGroup" id="cx5GrandTouringColor">
            <h3>Color</h3>
            <br>
            <div class="control-group">


            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringCwp"/>Crystal White Pearl
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringSrm"/>Soul Red Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringCm"/>Ceramic Metallic
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringDcb"/>Deep Crystal Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringDb"/>Dynamic Blue
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringJb"/>Jet Black
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringMg"/>Meteor Gray
            <div class="control__indicator"></div>
            </label>
            <label class="control control--radio">
            <input type="radio" name="color" value="mazdaCX5GrandTouringTf"/>Titanium Flash
            <div class="control__indicator"></div>
            </label>


            </div>
          </div>
         </div>

         <div id="mazda6" class="group" >
           <select name="model" id="mazda6Model">

             <option value="mazda6SportColor"><a class="showSingle" target="mazda6Sport">Mazda6 Sport</a></option>

             <option value="mazda6TouringColor"><a class="showSingle" target="mazda6Touring">Mazda6 Touring</a></option>

             <option value="mazda6GrandTouringColor"><a class="showSingle" target="mazda6GrandTouring">Mazda6 Grand Touring</a></option>

           </select>
           <div class="colorGroup" id="mazda6SportColor">
             <h3>Color</h3>
             <br>
             <div class="control-group">

               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportSfw">Snowflake White<div class="control__indicator"></div>
               </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda6SportSrm">Soul Red Metallic<div class="control__indicator"></div>
                 </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportSs">Sonic Silver<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportDcb">Deep Crystal Blue<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportRbm">Reflex Blue Mica<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportJb">Jet Black<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportMg">Meteor Gray<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6SportTf">Titanium Flash<div class="control__indicator"></div>
               </label>
             </div>
           </div>

           <div class="colorGroup" id="mazda6TouringColor">
             <h3>Color</h3>
             <br>
             <div class="control-group">

               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringSfw">Snowflake White<div class="control__indicator"></div>
               </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda6TouringSrm">Soul Red Metallic<div class="control__indicator"></div>
                 </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringSs">Sonic Silver<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringDcb">Deep Crystal Blue<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringRbm">Reflex Blue Mica<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringJb">Jet Black<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringMg">Meteor Gray<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6TouringTf">Titanium Flash<div class="control__indicator"></div>
               </label>
             </div>
           </div>

           <div class="colorGroup" id="mazda6GrandTouringColor">
             <h3>Color</h3>
             <br>
             <div class="control-group">

               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringSfw">Snowflake White<div class="control__indicator"></div>
               </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda6GrandTouringSrm">Soul Red Metallic<div class="control__indicator"></div>
                 </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringSs">Sonic Silver<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringDcb">Deep Crystal Blue<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringRbm">Reflex Blue Mica<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringJb">Jet Black<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringMg">Meteor Gray<div class="control__indicator"></div>
               </label>
               <label class="control control--radio">
                 <input type="radio" name="color" value="mazda6GrandTouringTf">Titanium Flash<div class="control__indicator"></div>
               </label>
             </div>
           </div>
          </div>

          <div id="mazda34dr" class="group" >
            <select name="model" id="mazda34drModel">

              <option value="mazda34drSportColor"><a class="showSingle" target="mazda34drSport">Mazda3 4dr Sport</a></option>

              <option value="mazda34driTouringColor"><a class="showSingle" target="mazda34driTouring">Mazda3 4dr iTouring</a></option>

              <option value="mazda34driGrandTouringColor"><a class="showSingle" target="mazda34driGrandTouring">Mazda3 4dr iGrand Touring</a></option>

              <option value="mazda34drsTouringColor"><a class="showSingle" target="mazda34drsTouring">Mazda3 4dr sTouring</a></option>

              <option value="mazda34drsGrandTouringColor"><a class="showSingle" target="mazda34drsGrandTouring">Mazda3 4dr sGrand Touring</a></option>

            </select>
            <div class="colorGroup" id="mazda34drSportColor">
              <h3>Color</h3>
              <br>
              <div class="control-group">

                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportSfw">Snowflake White
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportSrm">Soul Red Metallic
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportLs">Liquid Silver
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportDcb">Deep Crystal Blue
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportRbm">Reflex Blue Mica
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportJb">Jet Black
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportMg">Meteor Gray
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drSportTf">Titanium Flash
                  <div class="control__indicator"></div>
                </label>

              </div>
            </div>

            <div class="colorGroup" id="mazda34driTouringColor">
              <h3>Color</h3>
              <br>
              <div class="control-group">

                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringSfw">Snowflake White
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringSrm">Soul Red Metallic
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringLs">Liquid Silver
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringDcb">Deep Crystal Blue
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringRbm">Reflex Blue Mica
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringJb">Jet Black
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringMg">Meteor Gray
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driTouringTf">Titanium Flash
                  <div class="control__indicator"></div>
                </label>

              </div>
            </div>

            <div class="colorGroup" id="mazda34driGrandTouringColor">
              <h3>Color</h3>
              <br>
              <div class="control-group">

                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringSfw">Snowflake White
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringSrm">Soul Red Metallic
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringLs">Liquid Silver
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringDcb">Deep Crystal Blue
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringRbm">Reflex Blue Mica
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringJb">Jet Black
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringMg">Meteor Gray
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34driGrandTouringTf">Titanium Flash
                  <div class="control__indicator"></div>
                </label>

              </div>
            </div>

            <div class="colorGroup" id="mazda34drsTouringColor">
              <h3>Color</h3>
              <br>
              <div class="control-group">

                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringSfw">Snowflake White
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringSrm">Soul Red Metallic
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringLs">Liquid Silver
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringDcb">Deep Crystal Blue
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringRbm">Reflex Blue Mica
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringJb">Jet Black
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringMg">Meteor Gray
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsTouringTf">Titanium Flash
                  <div class="control__indicator"></div>
                </label>

              </div>
            </div>

            <div class="colorGroup" id="mazda34drsGrandTouringColor">
              <h3>Color</h3>
              <br>
              <div class="control-group">

                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringSfw">Snowflake White
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringSrm">Soul Red Metallic
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringLs">Liquid Silver
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringDcb">Deep Crystal Blue
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringRbm">Reflex Blue Mica
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringJb">Jet Black
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringMg">Meteor Gray
                  <div class="control__indicator"></div>
                </label>
                <label class="control control--radio">
                  <input type="radio" name="color" value="mazda34drsGrandTouringTf">Titanium Flash
                  <div class="control__indicator"></div>
                </label>

              </div>
            </div>

           </div>

           <div id="mazda35dr" class="group" >
             <select name="model" id="mazda35drModel">

               <option value="mazda35drSportColor"><a class="showSingle" target="mazda35drSportColor">Mazda3 5dr Sport</a></option>

               <option value="mazda35driTouringColor"><a class="showSingle" target="mazda35driTouringColor">Mazda3 5dr iTouring</a></option>

               <option value="  mazda35driGrandTouringColor"><a class="showSingle" target="  mazda35driGrandTouringColor">Mazda3 5dr iGrand Touring</a></option>

               <option value="mazda35drsTouringColor"><a class="showSingle" target="mazda35drsTouringColor">Mazda3 5dr sTouring</a></option>

               <option value="mazda35drsGrandTouringColor"><a class="showSingle" target="mazda35drsGrandTouringColor">Mazda3 5dr sGrand Touring</a></option>

             </select>
             <div class="colorGroup" id="mazda35drSportColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">

                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportSfw">Snowflake White
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportSrm">Soul Red Metallic
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportLs">Liquid Silver
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportDcb">Deep Crystal Blue
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportRbm">Reflex Blue Mica
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportJb">Jet Black
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportMg">Meteor Gray
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drSportTf">Titanium Flash
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>

             <div class="colorGroup" id="mazda35driTouringColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">

                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringSfw">Snowflake White
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringSrm">Soul Red Metallic
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringLs">Liquid Silver
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringDcb">Deep Crystal Blue
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringRbm">Reflex Blue Mica
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringJb">Jet Black
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringMg">Meteor Gray
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driTouringTf">Titanium Flash
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>

             <div class="colorGroup" id="mazda35driGrandTouringColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">

                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringSfw">Snowflake White
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringSrm">Soul Red Metallic
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringLs">Liquid Silver
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringDcb">Deep Crystal Blue
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringRbm">Reflex Blue Mica
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringJb">Jet Black
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringMg">Meteor Gray
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35driGrandTouringTf">Titanium Flash
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>

             <div class="colorGroup" id="mazda35drsTouringColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">

                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringSfw">Snowflake White
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringSrm">Soul Red Metallic
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringLs">Liquid Silver
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringDcb">Deep Crystal Blue
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringRbm">Reflex Blue Mica
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringJb">Jet Black
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringMg">Meteor Gray
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsTouringTf">Titanium Flash
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>

             <div class="colorGroup" id="mazda35drsGrandTouringColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">

                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringSfw">Snowflake White
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringSrm">Soul Red Metallic
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringLs">Liquid Silver
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringDcb">Deep Crystal Blue
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringRbm">Reflex Blue Mica
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringJb">Jet Black
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringMg">Meteor Gray
                   <div class="control__indicator"></div>
                 </label>
                 <label class="control control--radio">
                   <input type="radio" name="color" value="mazda35drsGrandTouringTf">Titanium Flash
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>

            </div>

            <div id="mx5" class="group" >
              <select name="model" id="mx5Model">

                

                <option value="mazdaMx5ClubColor"><a class="showSingle" target="mazdaMx5Club">Mazda MX5 Club</a></option>

                <option value="mazdaMx5GrandTouringColor"><a class="showSingle" target="mazdaMx5GrandTouring">Mazda MX5 Grand Touring</a></option>

              </select>



              <div class="colorGroup" id="mazdaMx5ClubColor">
                <h3>Color</h3>
                <br>
                <div class="control-group">

                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5ClubAw">Artic White
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5ClubSrm">Soul Red Metallic
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5ClubCm">Ceramic Metallic
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5ClubMg">Meteor Gray Metallic
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5ClubJb">Jet Black
                    <div class="control__indicator"></div>
                  </label>

                </div>
              </div>

              <div class="colorGroup" id="mazdaMx5GrandTouringColor">
                <h3>Color</h3>
                <br>
                <div class="control-group">

                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5GrandTouringAw">Artic White
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5GrandTouringSrm">Soul Red Metallic
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5GrandTouringCm">Ceramic Metallic
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5GrandTouringMg">Meteor Gray Metallic
                    <div class="control__indicator"></div>
                  </label>
                  <label class="control control--radio">
                    <input type="radio" name="color" value="mazdaMx5GrandTouringJb">Jet Black
                    <div class="control__indicator"></div>
                  </label>


                </div>
              </div>

             </div>


<!--END XC90------------------------------------------------------------------->

<!-- END TRIM SELECT -->




        </div>

        <div id="priceSection" class="targetDiv">
          <h1>Pricing Section</h1>
          <h2 style="font-size:30px;font-weight:700;padding:20px 0;">Finance</h2>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               Vehicle Price <input type="text" name="vehiclePrice" id="vehiclePrice"> <br>
            Price Good Until <input type="text" name="goodUntil" id="goodUntil">

            <h2 style="font-size:30px;font-weight:700;padding:20px 0;">Lease</h2>

     Monthly Payment <input type="text" name="monthlyPayment" id="monthlyPayment"> <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lease Term <input type="text" name="term" id="term"> <br>
        &nbsp;&nbsp;&nbsp;Down Payment <input type="text" name="downPayment" id="downPayment"> <br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mileage <input type="text" name="mileage" id="mileage">
             <br><br><br><br><br>

        </div>






<!-- PACKAGES         --------------------------------------------------------->
        <div id="packagesSection" class="targetDiv">
          <h1>Packages</h1>

        <div class="packagesControl" id="packagesArea">
          <div class="control-group">

            <label  class="control control--checkbox"><input type="checkbox" id="premiumPackage" name="premiumPackage" value="Premium Package"> Premium Package<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="appearancePackage" name="appearancePackage" value="Appearance Package"> Appearance Package<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="popularEquipPackage" name="popularEquipPackage" value="Popular Equipment Package"> Popular Equipment Package<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="advancedKeyless" name="advancedKeyless" value="Advanced Keyless"> Advanced Keyless<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="bremboBBSPackage" name="bremboBBSPackage" value="Brembo/BBS Package"> Brembo/BBS Package<div class="control__indicator"></div>
            </label>

          </div>
        </div>
      </div>

<!-- ACCESSORIES -------------------------------------------------------------->
        <div id="accessoriesSection" class="targetDiv">
          <h1>Accessories Select</h1>
        <div class="packagesControl" id="accessoriesArea">
          <div class="control-group">

            <label  class="control control--checkbox"><input type="checkbox" id="carpetCargoMat" name="carpetCargoMat" value="Carpet Cargo Mat"> Carpet Cargo Mat<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="rearParkingSensors" name="rearParkingSensors" value="Rear Parking Sensors"> Rear Parking Sensors<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="mazdaMobileStart" name="mazdaMobileStart" value="Mazda Mobile Start"> Mazda Mobile Start<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="cargoNet" name="cargoNet" value="Cargo Net"> Cargo Net<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="carpetCargoTray" name="carpetCargoTray" value="Carpet Cargo Tray"> Carpet Cargo Tray<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="roofRackSideRails" name="roofRackSideRails" value="Roof Rack Side Rails"> Roof Rack Side Rails<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="intLightingKit" name="intLightingKit" value="Interior Lighting Kit"> Interior Lighting Kit<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="AWFloormats" name="AWFloormats" value="All Weather Floor Mats"> All Weather Floor Mats<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="doorsillPlates" name="doorsillPlates" value="Doorsill Trim Plates"> Doorsill Trim Plates<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="bodyColorRearLipSpoiler" name="bodyColorRearLipSpoiler" value="Body Color Rear Lip Spoiler"> Body Color Rear Lip Spoiler<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="blackLipSpoiler" name="blackLipSpoiler" value="Black Rear Lip Spoiler"> Black Rear Lip Spoiler<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="rearBumperGuard" name="rearBumperGuard" value="Rear Bumper Guard"> Rear Bumper Guard<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="DoorEdgeRearBumperTopProtection" name="DoorEdgeRearBumperTopProtection" value="Door Edge and Rear Bumper Top Paint Protection"> Door Edge and Rear Bumper Top Paint Protection<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="clearFilmFrontPaint" name="clearFilmFrontPaint" value="Clear Film, Front Paint Protection"> Clear Film, Front Paint Protection<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="paintProtectionHoodFrontFenderMirror" name="paintProtectionHoodFrontFenderMirror" value="Paint Protection: Hood, Front Fender and Mirror Kit"> Paint Protection: Hood, Front Fender and Mirror Kit<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="clearPaintProtectionFilm" name="clearPaintProtectionFilm" value="Clear Paint Protection Film"> Clear Paint Protection Film<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="autoDimmingRearViewMirror" name="autoDimmingRearViewMirror" value="Auto-Dimming Rearview Mirror"> Auto-Dimming Rearview Mirror<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="autoDimmingMirrorwCompass" name="autoDimmingMirrorwCompass" value="Auto-Dimming Rearview Mirror with Compass and HomeLink"> Auto-Dimming Rearview Mirror with Compass and HomeLink<div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="wheelLocks" name="wheelLocks" value="Wheel Locks"> Wheel Locks<div class="control__indicator"></div>
            </label>

          </div>
        </div>
      </div>



        </form>



      </div>
    </div>

  </body>
</html>
