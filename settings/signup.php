<?php
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$t3=$_GET['t3'];
$t4=$_GET['t4'];
$t5=$_GET['t5'];
$t6=$_GET['t6'];
$t7=$_GET['t7'];
$t8=$_GET['t8'];
$t9=$_GET['t9'];
$t10=$_GET['t10'];
$t11=$_GET['t11'];
$t12=$_GET['t12'];
$t13=$_GET['t13'];
$t14=$_GET['t14'];
$t15=$_GET['t15'];
$t16=$_GET['t16'];
$t17=$_GET['t17'];
$t18=$_GET['t18'];
$t19=$_GET['t19'];
$t20=$_GET['t20'];
$t21=$_GET['t21'];
$t22=$_GET['t22'];
$t23=$_GET['t23'];
$t24=$_GET['t24'];
$t25=$_GET['t25'];
$t26=$_GET['t26'];
$t27=$_GET['t27'];
$t28=$_GET['t28'];
print "<br>First Name:=$t1";
print "<br>Middle Name:=$t2";
print "<br>Last Name/Surname:=$t3";
print "<br>Class Roll no.:=$t4";
print "<br>Exam Roll no.=$t5";
print "<br>Registration Roll no:.=$t6";
print "<br>Gender:=$t7";
print "<br>Select date of birth:=$t8";
print "<br>Course studying in St.Xavier's College,Ranchi=$t9";
print "<br>Year=$t10";
print "<br>Graduation=$t11";
print "<br>Category=$t12";
print "<br>Religion=$t13";
print "<br>Father's Occupation=$t14";
print "<br>Line1=$t15";
print "<br>Line2=$t16";
print "<br>State=$t17";
print "<br>Pincode:=$t18";
print "<br>Line1=$t19";
print "<br>Line2=$t20";
print "<br>State=$t21";
print "<br>Pincode:=$t22";
print "<br>E-mail:=$t23";
print "<br>Mobile no.:=$t24";
print "<br>New Password=$t25";
print "<br>Confirm Password=$t26";
print "<br>Select image to upload:=$t27";  
print "<br>Select signature to upload:=$t28";
mysql_connect("localhost","root","");
  mysql_select_db("register1");
 $recs= mysql_query(" insert into signup values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$t12','$t13','$t14','$t15','$t16','$t17','$t18','$t19','$t20','$t21','$t22','$t23','$t24','$t25','$t26','$t27','$t28')  ");
 if($recs!=0)
	{
	  ?>
			<script>alert('Successfully Registered ');</script>
			<?php
	}
 else
	{
	  ?>
			<script>alert('Error While Registering You...');</script>
			<?php	
	}
?>