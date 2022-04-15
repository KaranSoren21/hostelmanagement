<?php
$t29=$_GET['t29'];
$t30=$_GET['t30'];
$t31=$_GET['t31'];
$t32=$_GET['t32'];
$t33=$_GET['t33'];
$t34=$_GET['t34'];
print "<br>Name:=$t29";
print "<br>Class Roll no.:=$t30";
print "<br>Registration Roll no.=$t31";
print "<br>Hostel Block=$t32";
print "<br>Room sitter=$t33";  
print "<br>Amount:=$t34";
mysql_connect("localhost","root","");
  mysql_select_db("register1");
 $recs= mysql_query(" insert into hostelbill values('$t29','$t30','$t31','$t32','$t33','$t34')  ");
 if($recs!=0)
	{
	  ?>
			<script>alert('Successfully Submitting ');</script>
			<?php
	}
 else
	{
	  ?>
			<script>alert('Error While Submitting...');</script>
			<?php	
	}
?>
<!DOCTYPE HTML>
<html>
 <script language="javascript">
               function check()
                {
                      window.print();
                     }
          </script>
</html>		  