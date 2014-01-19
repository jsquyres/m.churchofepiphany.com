<?php
    include('include/Mobile_Detect.php');
    $detect = new Mobile_Detect();
?><!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN"
"http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Church of the Epiphany</title>
<link type="text/css" rel="stylesheet" href="http://m.churchofepiphany.com/css/master.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
<style>
<?php include("css/cross-background.css"); ?>
</style>
<?php include("include/google_analytics.inc"); ?>
</head>
<body>
<div id="content">
    <div id="main">
        <h1>Church of the Epiphany<br />Louisville, KY</h1>
    </div>
    <div id="main-links">
        <ul>
        <!--<li><a id="announcement" href="announcement/" id="main-special-link">Christmas mass times</a></li>-->
        <li><a id="phonecall" href="tel:+15022459733">Call +1 (502) 245-9733</a></li>
        <li><a id="maps" href="<?php
    # For iOS, use the maps: URL.  Everyone else (including Android),
    # just use HTTP Google Maps.
    if ($detect->isiOS()) {
        print("maps:q=914+Old+Harrods+Creek+Rd,+40223");
    } else {
        print("http://goo.gl/maps/3E1RI");
    }
?>">Address / map</a></li>
        <li><a id="liturgies" href="liturgies/">Liturgy times</a></li>
        <li><a id="calendar" href="calendar/">Epiphany calendar</a></li>
        </ul>
     <div id="push"></div>
    </div>
</div>
<div id="footer">
    <a id="fullwebsite" href="http://www.churchofepiphany.com/?nomobi=true">View full website</a>
</div>
<script>
$('#announcement').click(function(){
    ga('send','event','Special announcement','click', 'Tapped special announcement button');
});
$('#phonecall').click(function(){
    ga('send','event','Call','click', 'Tapped Call button');
});
$('#maps').click(function(){
    ga('send','event','Maps','click', 'Tapped Address/map button');
});
$('#liturgies').click(function(){
    ga('send','event','Liturgies','click', 'Tapped Liturgies button');
});
$('#calendar').click(function(){
    ga('send','event','Calendar','click', 'Tapped Calendar button');
});
$('#fullwebsite').click(function(){
    ga('send','event','Full site','click', 'Tapped View full website button');
});
</script>
</body>
</html>
