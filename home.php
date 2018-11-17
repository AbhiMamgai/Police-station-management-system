<html>
<?php
   include('session.php');
?>
<head>

    <title>Police Management System</title>
    <link href="styl.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="head">
        <img src="logo1.jpg" width="1345px">
<!---- <img src="logo.png" height="200px" width="200px"> 
        <h1>Police Management System</h1> -->
    </div>
<?php
   include('topnav.php');
?>
<div class="image"></div>​
    <div align="center" class="header-box">      
     <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="881" height="276" align="center">
       <param name="src" value="flashbanner.swf" />
       <embed src="flashbanner.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="881" height="276"></embed>
     </object>
    </div>
<div class="row" align="center">
    <div class="column" align="center">
        <a href="index.php">
        <img src="firsearch.jpg" height="230px">
    </a>
        <a href="fedms.php">
        <img src="criminalrecord.jpg" height="240px" >
    </a>
    </div>
    <div class="column" align="center">
        <a href="mis.php">
        <img src="missing.jpg" >
    </a>
    
    <button id="close-image"><a href="logout.php"><img src="signout.jpg"></button>
    </a>
    </div>
</div>
</body>
</html>