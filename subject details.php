<?php include 'function.php';
	$x = $_POST['sem_detail'];
	$y = $_POST['dept_detail'];	
	$_SESSION['semnum'] = $x;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title>CGPA Calculator</title>

<!-- Bootstrap Core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <linkhref='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <linkhref='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

<!-- Theme CSS -->
<style>
  #option{
	  padding-left:400px;
	  padding-right:200px;
         }
.jumbotron {
        background: #358CCE;
        color: #FFF;
         border-radius: 0px;
           }
.jumbotron-sm { 
          padding-top: 24px;
          padding-bottom: 24px; 
              }
.jumbotron small {
          color: #FFF;
           }
.h1 small {
font-size: 24px;
}
.label{
	padding-right:400px;
}
  </style>
	
</head>
<body id="page-top">
<section class="center">
<form class="form-horizontal" action='/mark_system/web/index.php' method="post">
<div id="option">
<div id="legend">
<legend class="">Enter the Grades</legend>
</div>
<!-- Username -->
<?php $i=0;$j=0;$e=0;
	  
	    $sql = "SELECT * FROM `calculate` where `semno` <= $x and `deptname` = '$y'";
		$res = mysqli_query($conn,$sql);
		while($rest = mysqli_fetch_array($res))
		{
			$a[$i++] = $rest['subcode'];
			$b[$j++] = $rest['subname'];
		}
		for($i=0;$i<$j;$i++,$e++)
		{?>
			<label class="control-label"><?php echo $a[$i];?></label>
			<label class="control-label"><?php echo $b[$i];?></label>
<div id="label">
			<select name="<?php echo "sub"."$e";?>">
			<option value="<?php
			$sql1 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res1 = mysqli_query($conn,$sql1);
		while($rest1 = mysqli_fetch_array($res1)){ 
		$c = $rest1['credits'];}
		$d = ($c*10);
		echo "$d";
			?>">S</option>
			<option value="<?php  			
		$sql2 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res2 = mysqli_query($conn,$sql2);
		while($rest2 = mysqli_fetch_array($res2)){ 
		$c = $rest2['credits'];}
		$d = ($c*9);
		echo "$d";
			?>" >A</option>
			<option value="<?php  			
		$sql3 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res3 = mysqli_query($conn,$sql3);
		while($rest3 = mysqli_fetch_array($res3)){ 
		$c = $rest3['credits'];}
		$d = ($c*8);
		echo "$d";
			?>" >B</option>
			<option value="<?php  			
		$sql4 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res4 = mysqli_query($conn,$sql4);
		while($rest4 = mysqli_fetch_array($res4)){ 
		$c = $rest4['credits'];}
		$d = ($c*7);
		echo "$d";
			?>" >C</option>
			<option value="<?php  			
		$sql5 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res5 = mysqli_query($conn,$sql5);
		while($rest5 = mysqli_fetch_array($res5)){ 
		$c = $rest5['credits'];}
		$d = ($c*6);
		echo "$d";
			?>" >D</option>
			<option value="<?php  			
		$sql6 = "SELECT * FROM `calculate` where `subcode` = '$a[$i]'";
		$res6 = mysqli_query($conn,$sql6);
		while($rest6 = mysqli_fetch_array($res6)){ 
		$c = $rest6['credits'];}
		$d = ($c*5);
		echo "$d";
			?>" >E</option>
			<option value="0" >U</option>
		</select></div>
		<br/>
		<?php }?>

		<input type="submit" name="submit" class="btn btn-primary btn-xl" value="Submit">		
</form>
</section>
</body>
</html>
