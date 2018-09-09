<?php include 'function.php';
if(isset($_POST['submit'])){
	$x = $_SESSION['semnum'];
	$total=0;
	
	switch($x)
	{
		 case 1:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				for($i=0;$i<9;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/26);
				break;
		 case 2:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				for($i=0;$i<18;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/51);
				break;
		 case 3:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub22'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				for($i=0;$i<27;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/76);
				break;
		case 4: $a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				for($i=0;$i<35;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/98);
				break;
		 case 5:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
				for($i=0;$i<44;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/124);
				break;
		 case 6:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
		        $a[44] = $_POST['sub44'];
				$a[45] = $_POST['sub45'];
				$a[46] = $_POST['sub46'];
				$a[47] = $_POST['sub47'];
				$a[48] = $_POST['sub48'];
				$a[49] = $_POST['sub49'];
				$a[50] = $_POST['sub50'];
				$a[51] = $_POST['sub51'];
				$a[52] = $_POST['sub52'];
				for($i=0;$i<53;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/148);
				break;
		 case 7:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
		        $a[44] = $_POST['sub44'];
				$a[45] = $_POST['sub45'];
				$a[46] = $_POST['sub46'];
				$a[47] = $_POST['sub47'];
				$a[48] = $_POST['sub48'];
				$a[49] = $_POST['sub49'];
				$a[50] = $_POST['sub50'];
				$a[51] = $_POST['sub51'];
				$a[52] = $_POST['sub52'];
		        $a[53] = $_POST['sub53'];
		        $a[54] = $_POST['sub54'];
				$a[55] = $_POST['sub55'];
				$a[56] = $_POST['sub56'];
				$a[57] = $_POST['sub57'];
				$a[58] = $_POST['sub58'];
				$a[59] = $_POST['sub59'];
				$a[60] = $_POST['sub60'];
				for($i=0;$i<61;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/169);
				break;
		 case 8:$a[0] = $_POST['sub0'];
				$a[1] = $_POST['sub1'];
				$a[2] = $_POST['sub2'];
				$a[3] = $_POST['sub3'];
				$a[4] = $_POST['sub4'];
				$a[5] = $_POST['sub5'];
				$a[6] = $_POST['sub6'];
				$a[7] = $_POST['sub7'];
				$a[8] = $_POST['sub8'];
				$a[9] = $_POST['sub9'];
				$a[10] = $_POST['sub10'];
				$a[11] = $_POST['sub11'];
				$a[12] = $_POST['sub12'];
				$a[13] = $_POST['sub13'];
				$a[14] = $_POST['sub14'];
				$a[15] = $_POST['sub15'];
				$a[16] = $_POST['sub16'];
				$a[17] = $_POST['sub17'];
				$a[18] = $_POST['sub18'];
				$a[19] = $_POST['sub19'];
				$a[20] = $_POST['sub20'];
				$a[21] = $_POST['sub21'];
				$a[22] = $_POST['sub22'];
				$a[23] = $_POST['sub23'];
				$a[24] = $_POST['sub24'];
				$a[25] = $_POST['sub25'];
				$a[26] = $_POST['sub26'];
				$a[27] = $_POST['sub27'];
				$a[28] = $_POST['sub28'];
				$a[29] = $_POST['sub29'];
				$a[30] = $_POST['sub30'];
				$a[31] = $_POST['sub31'];
				$a[32] = $_POST['sub32'];
				$a[33] = $_POST['sub33'];
				$a[34] = $_POST['sub34'];
				$a[35] = $_POST['sub35'];
				$a[36] = $_POST['sub36'];
				$a[37] = $_POST['sub37'];
				$a[38] = $_POST['sub38'];
				$a[39] = $_POST['sub39'];
				$a[40] = $_POST['sub40'];
				$a[41] = $_POST['sub41'];
				$a[42] = $_POST['sub42'];
				$a[43] = $_POST['sub43'];
		        $a[44] = $_POST['sub44'];
				$a[45] = $_POST['sub45'];
				$a[46] = $_POST['sub46'];
				$a[47] = $_POST['sub47'];
				$a[48] = $_POST['sub48'];
				$a[49] = $_POST['sub49'];
				$a[50] = $_POST['sub50'];
				$a[51] = $_POST['sub51'];
				$a[52] = $_POST['sub52'];
		        $a[53] = $_POST['sub53'];
		        $a[54] = $_POST['sub54'];
				$a[55] = $_POST['sub55'];
				$a[56] = $_POST['sub56'];
				$a[57] = $_POST['sub57'];
				$a[58] = $_POST['sub58'];
				$a[59] = $_POST['sub59'];
				$a[60] = $_POST['sub60'];
				$a[61] = $_POST['sub61'];
				$a[62] = $_POST['sub62'];
				$a[63] = $_POST['sub63'];
		        $a[64] = $_POST['sub64'];
				$a[65] = $_POST['sub65'];
				for($i=0;$i<66;$i++)
				{
				$total += $a[$i];
				}
				$gpa = ($total/187);
				break;			
	}
	}?>
	


<!DOCTYPE html>
<html>
	<head>	
		<title>CGPA CALCULATOR</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" type="text/css" href="css/slider.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<script src="js/jquery.min.js" type="text/javascript"></script>
		
		 <!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<!---//end-slider---->
		<script type="text/javascript"  src="js/menu.js"></script>
	
	
	</head>

	<body>
			<div class="slider" id="home"> 
				<div class="wrap">
			<!---start-da-slider----->
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><img src="images/star.png">YOUR CGPA<img src="images/star.png"></h2>
					<p>Cumulative Grade Point Average = <?php echo "$gpa"; ?><br/>
					Your Total Grade points = <?php echo "$total";?><br/>
					</p>
				</div>
			</div>
		
			<script type="text/javascript" src="js/jquery.cslider.js"></script>
			 <!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
				<!---//End-da-slider----->
			
			<!--//End-header---->
		</div>
	            </div>
</body>
</html>
