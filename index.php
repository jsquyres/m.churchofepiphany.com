<?php
include('include/Mobile_Detect.php');
$detect = new Mobile_Detect();
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Church of the Epiphany</title>
<link type="text/css" rel="stylesheet" href="http://m.churchofepiphany.com/css/master.css" />
<?php 
print("<style>");
include("css/cross-background.css");
print("</style>\n");
include("include/google_analytics.inc"); ?>
</head>
<body>
<div id="content">
    <div id="main">
        <h1>Church of the Epiphany<br />Louisville, KY</h1>
    </div>
    <div id="main-links">
        <ul>
        <!--<li><a href="announcement/" id="main-special-link">Christmas mass times</a></li>-->
        <li><a href="tel:+15022459733">Call +1 (502) 245-9733</a></li>
        <li><a href="<?php
    # For iOS, use the maps: URL.  Everyone else (including Android),
    # just use HTTP Google Maps.
    if ($detect->isiOS()) {
        print("maps:q=914+Old+Harrods+Creek+Rd,+40223");
    } else {
        print("http://goo.gl/maps/3E1RI");
    }
?>">Address / map</a></li>
        <li><a href="liturgies/">Liturgy times</a></li>
        <li><a href="calendar/">Epiphany calendar</a></li>
        </ul>
     <div id="push"></div>
    </div>
</div>
<div id="footer">
    <a href="http://www.churchofepiphany.com/?nomobi=true">View full website</a>
</div>
</body>
</html>
