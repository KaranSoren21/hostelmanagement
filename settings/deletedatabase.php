<?php
$t6=$_GET['t6'];
print " Registration no.=$t6";

   mysql_connect("localhost","root","");
  mysql_select_db("register1");
 $recs= mysql_query("delete from signup where t6='$t6'");
 if($recs!=0)
	{
	  print "<h2>Record deleted !..</h2>";
          print " Registration no.=$t6";
	}
 else
	{
	  print "<h2> Sorry Try Again !..</h2>";	
	}
?>