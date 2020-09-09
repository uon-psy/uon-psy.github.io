<!--

*********************************************************************

ooooo oooo       ooooo                                                  
`888'  88.       .888                                                  
 888   888b     d'888   .oooo.   oooo    ooo oooo oooo    oro  .ooooo.  
 888   8 Y88. .P  888  `P  )88b   `88b..8P'   `88. `88.  .8'  d88' `88b 
 888   8  `888'   888   .oP"888     Y666'      `88..]88..8'   888ooo888 
 888   8    Y     888  d8(  888   .o8"'88b      `i@n'`888'    888    .o 
o888o o8o        o888o `Y888""8o o88'   888o     `8'  `8'     `Y8bod8P' 

*********************************************************************
jan2020
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Loan Items</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="docs/z.css" rel="stylesheet" type="text/css" />
<link href="docs/boot.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="docs/JQ_boot.js"></script>
<style>
div.a {
    text-align: justify; /* For Edge */
    -moz-text-align-last: right; /* For Firefox prior 58.0 */
    text-align-last: right;
}
H2 {display: inline;}

 #rcor1 {
  border-radius: 16px;
 background:#f2f2f2;
  
  width:auto;
  margin: auto;
}

.panel-footer {
   
    border-bottom-right-radius: 16px !important;
    border-bottom-left-radius: 16px !important;
}

.panel-group .panel {
    margin-bottom: 0;
    border-radius: 16px !important;
}

.panel-heading {
    
    border-top-left-radius: 16px !important;
    border-top-right-radius: 16px !important;
}
</style>
</head>
<body>


<div id ="footer">
<div align="center">Uon Psychology.  <?php date_default_timezone_set('Europe/London');
          print date("Y");?> </div>
 
</div>

<div class="top-container">
  <h1><img src="images/uon-logo33.png" alt="UoN" width="207" height="96" align="left"></h1>
  <h1>&nbsp;</h1>
  <p>&nbsp;</p>
</div>

<div class="header" id="myHeader">
<table width=100%>
  <tr>
    <td ><h2>UON Psychology Equipment </h2></td>
	
    <td align="right"><input type="button" value="Admin" class="text_button" onclick="window.location.href='http://123uonpsy.dx.am/login22/EQview.php'" /></td>
  </tr>
  </table>

 
  
</div>

<p>
<BR>
<BR>
<form action="mail.php" method="post" >
<?php

$hostname = "fdb15.awardspace.net";
$username = "2478481_invent";
$password = "Academic999invent";
$db = "2478481_invent";
$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}
// get results from database
$query = mysqli_query($dbconnect, "SELECT * FROM items where active = 1 ORDER BY item ASC")
or die(mysqli_error());
// display data in table

while ($row = mysqli_fetch_array($query)) {
		$id=$row['id'];
        $item=$row['item'];
		$itemPic=$row['itemPic'];
		$serial=$row['serial'];
		$onLoan=$row['onLoan'];
		$details=$row['details'];
		$notes=$row['notes'];
		$requirements=$row['requirements'];
		$location=$row['location'];
		$email=$row['email'];
		
		

  
    
    $colorT ='#E9E9E9';


    if( $onLoan == 'no' || $onLoan == 'No'  || $onLoan == 'NO') {
        $colorT ='#269900';
       //$colorT = "style=color:'#269900;'";
       //$colorT = "style=color:'#269900;' style='font-weight: bold;'";
     
       }else {
         $colorT ='#ff0000';
        // $colorT = "style=color:'#ff0000;'";
       }


 
echo '<div class="container">';
echo '<div class="panel-group">';
echo '<div class="panel panel-default">';
echo '<div class="panel-heading">';

echo '<h4 class="panel-title">';

echo '<table width=100%>
  <tr>
    <td width="84">' .$item.'</td>
	
    <td width="161">&nbsp;</td>
  </tr>
  <tr>
    <td><small>'.$serial. '</td>
    <td><div align="right"><small> On Loan - <strong><span style="color: '. $colorT. ';">'. $onLoan.'</span></strong></small></div> </td>
    
  </tr>
</table>';

echo '</a>';
echo '</h4>';
echo '</div>'; 

echo '<div class="panel-body">';
echo '<table width=100%>
  <tr>'
  ?>

  <td style="width:90px"><img src="/inventory/images/<?php echo $itemPic; ?>" alt="Item Pic"  width="70px" height= "80px"  /></td>
  
  <?php
   echo'<td>'.  $details .' <br><br>Notes: ' .  $notes .'</div></td>
  </tr>
 
</table>';
echo '</div>'; 
echo '<div class="panel-footer">';
echo  '<table width=100%>
 
  <tr>
    <td><small>'. 'Requirements - '.$requirements. '</small></td>
    <td><div align="right"><small> Location - '.$location .'</small></div> </td>
  </tr>
  <tr>
  <td> '
  ?>
 <input type="button" value="Request / Query" class="text_button" onclick="window.location.href='mail.php?i=<?php echo $id; ?>'" />
 <?php
  echo'
 
  </td>   
  </tr>
</table>';


// <td><div align="middle">'.$request . '</div></td> '
//<a href="mail.html?id=0BwKccWiS2ZQMRFRGb08xbHBkams"  style= TEXT-DECORATION: NONE target="_blank" >Request Loan / Query</a><br />

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';


}

?>
</form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>




</p>
<p>&nbsp; </p>
<div class="scroll-to-top">
		<!-- <p>Scroll to top</p> *Use this as a text option, instead of the image icon.*--></div>
</body>
<script>
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

</html>
