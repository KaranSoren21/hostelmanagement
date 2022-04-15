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
mysql_connect("localhost","root","");
  mysql_select_db("register1");
 
           $sql="SELECT * FROM signup where t6='$t6' and t25 ";
          $records=mysql_query($sql);
 if($recs!=0)
	{
	  ?>
			
			<?php
	}
 else
	{
	  ?>
	
			<?php	
	}
?>
<html>
<body bgcolor="white">

     <head>
          <title>Hosteller Database</title>
      </head>
	  <script language="javascript">
               function check()
                {
                      window.print();
                     }
          </script>

                    <a href="login.html"><input type="button" value="Logout" onclick="logout();" size="50"></a>
           
      
	  <center>
	           <table>
	                <tr>
			      <td><img src="sxc.png" width="50%" height="50%"></td><td><h1>Hosteller Personal Data</h1></td>
				  
                        </tr>
         	   </table>
	  </center>
         <center>
     <input type="button" value="Print" onclick="check();" size="50">
    </center>
<br></br>	   
     <center> <fieldset style="display: inline-flex; background-color: "grey">
    <table width="600" border="1" cellpadding="1" cellspacing="1">
                <tr>
                      <th>First Name</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>CLass Roll no.</th>
                      <th>Exam Roll no.</th> 
                       <th>Registration no.</th> 
                      <th>Gender</th> 
                      <th>D.O.B.</th>
                      <th>Course</th> 
                       <th>Intermediate</th> 
                      <th>Graduation</th>
                      <th>Category</th> 
                      <th>Religion</th>
                      <th>Father's Occupation</th>
                      <th>Present Address</th>
                      <th>State</th>
                      <th>Pincode</th>
                     <th>Permanent Address</th>
                      <th>State</th>
                      <th>Pincode</th>
                       <th>Email Id</th>
                       <th>Mobile no.</th>
                       <th>Password</th>
                        <th>Confirm Password</th>
                         <th>Passport Size</th>
                         <th>Signature</th>
               </tr>
              <?php
                    while($book=mysql_fetch_assoc($records))
                          {
			     echo "<tr>";
							   echo "<td>".$book['t1']."</td>";
							   echo "<td>".$book['t2']."</td>";
							   echo "<td>".$book['t3']."</td>";
							   echo "<td>".$book['t4']."</td>";
                                                           echo "<td>".$book['t5']."</td>";
							   echo "<td>".$book['t6']."</td>";
							   echo "<td>".$book['t7']."</td>";
						 	   echo "<td>".$book['t8']."</td>";
                                                           echo "<td>".$book['t9']."</td>";
							   echo "<td>".$book['t10']."</td>";
							   echo "<td>".$book['t11']."</td>";
							   echo "<td>".$book['t12']."</td>";
							   echo "<td>".$book['t13']."</td>";
							   echo "<td>".$book['t14']."</td>";
							   echo "<td>".$book['t15'].$book['t16']."</td>";
							   
                                                           
							   echo "<td>".$book['t17']."</td>";
							   echo "<td>".$book['t18']."</td>";
						 	   echo "<td>".$book['t19'].$book['20']."</td>";
                                                           
							   echo "<td>".$book['t21']."</td>";
							   echo "<td>".$book['t22']."</td>";
							   echo "<td>".$book['t23']."</td>";
							   echo "<td>".$book['t24']."</td>";
							   echo "<td>".$book['t25']."</td>";
							   echo "<td>".$book['t26']."</td>";
							   echo "<td>".$book['t27']."</td>";
                               echo "<td>".$book['t28']."</td>";                
                           
                           echo"</tr>";	
						  }				 
			   ?>			
             </table>
		 </fieldset>
   </center>

</body>
</html>