<?php
$t29=$_GET['t29'];
$t30=$_GET['t30'];
$t31=$_GET['t31'];
$t32=$_GET['t32'];
$t33=$_GET['t33'];
$t34=$_GET['t34'];
mysql_connect("localhost","root","");
  mysql_select_db("register1");
 
           $sql="SELECT * FROM hostelbill";
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
                      <th>Name</th>
                      <th>CLass Roll no.</th>
                       <th>Registration no.</th> 
                       <th>Hostel Block</th>
                        <th>Room no.</th>
                         <th>Amount</th>
               </tr>
              <?php
                    while($book=mysql_fetch_assoc($records))
                          {
			     echo "<tr>";
							   echo "<td>".$book['t29']."</td>";
							   echo "<td>".$book['t30']."</td>";
							   echo "<td>".$book['t31']."</td>";
							   echo "<td>".$book['t32']."</td>";
                                                           echo "<td>".$book['t33']."</td>";
							   echo "<td>".$book['t34']."</td>";
							              
                           
                           echo"</tr>";	
						  }				 
			   ?>			
             </table>
		 </fieldset>
   </center>
   </body>
</html>