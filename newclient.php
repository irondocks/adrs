<?php

$form = '<h3 onclick=menuList(\'menu.php\');>Menu</h3><li><b style="font-size:16px;color:lightgray" onclick="javascriipt:mapView()">Click to Toggle Map</b></li><div class="fb-login-button" data-width="" data-size="medium" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="true"></div><form method="POST" action="marker.php"><label style="color:lightgray;">Enter your<br>company\'s contact<br>information <i style="color:red">required</i> <b style="color:red">*</b> : </label><br><b style="color:red">*</b> <input required id="name" type="text" name="name" placeholder="Contact Person"><br><b style="color:red">*</b> <input required id="biz" type="text" name="business" placeholder="Name of Business"><br><b style="color:red">*</b> <input required id="addr" style="background:white" name="address" type="text" placeholder="St. No, Street, City, State, Zip, Country"><br><b style="color:red">*</b> <input required id="no" style="background:white" name="no" type="text" placeholder="Store Number"><br><b style="color:red">*</b> <input required id="ph" style="background:white" name="phone" type="text" placeholder="Phone Number"><br><b style="color:red">*</b> <input required id="type" type="text" name="type" placeholder="Type of Establishment"><button onclick="submit">Welcome!</button><br></form></div>';

$f = str_replace('"','\'',$form);
echo json_encode($f);
?>