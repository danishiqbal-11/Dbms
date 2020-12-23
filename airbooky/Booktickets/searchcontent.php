<?php
include("C:/wamp64/www/airbooky/Booktickets/searchstyle.php");
?>
<div id="search">
<fieldset style="width:90%">
<legend>Search and Book</legend>
<form method="POST" action="flightsearch.php"> 
FROM:<input type="text" name="from" maxlength="15" >
To:<input type="text" name="to" maxlength="15" >
Date:<input type="date" name="depart" maxlength="15" >
Traveller(s):  <select name="traveller">
    <option value="one">1</option>
    <option value="two">2</option>
    <option value="three">3</option>
  </select>
    <input type="submit" name="Search" value="Search"/>
</form> 
</fieldset>
</div>
