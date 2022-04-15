<!DOCTYPE html>
<html>
<head>

<script language="javascript">
function check()
{
x=frm.t16.value;
y=frm.t17.value;
if(x=="admin" && y=="123")
{
return(true);
}
else
{
return(false);
}
}
</script>


    <title>Css descendent selector</title>
        <style>
              body legend
                 {
                        background:white;
                  }
        </style>

</head>
<body bgcolor="white">
<form action="Bill4.html" method="get">
     <input type="submit" value="Back" onclick="valid();">
	 </form>
<script>
        $(document).ready(function(){
           $("input").focus(function(){
              $(this).css("background-color","#cccccc");
            });
          $("input").blur(function(){
              $(this).css("background-color","#ffffff");
           });
});
</script>
     
    <br></br><br></br>
      <div align="center">
    <form name="frm"  onsubmit="return check();"action="display_records.php" "admin login.php"   method="get">
        
        <fieldset style="display: inline-flex; background-color: white;">
            <legend><strong><h1>Admin Login</h1></strong></legend>
                  <table>
                   <tr><td><p><strong><label for="regis">Username:</label></td><td><input type="text" name="t16" id="nm" placeholder="Enter User Name" required/>*</p></strong></td></tr><br>
                    <tr><td><p><strong><label for="pass">Password:</label></td><td><input type="password" name="t17" id="pwd" placeholder="Enter Password" required/>*</p></td></strong></tr><br>
                      <tr><td><input type="submit" name="btn-login" value="Submit"></td><td><input type="reset" name="nm" value="Reset"></td></tr>    
                   </table> 
       </fieldset>
       
     </form>
    </div>
</body>
</html>