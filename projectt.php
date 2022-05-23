<html>
<head>
<style> div.cd{background:teal;} a{text-decoration:none; color:white;} p{font-size:20;text-align:justify;} th:hover{background-color:black;} th{font-size: 20}
</style>
</head>
<body bgcolor="">
   <div class="cd" style="color:white;font-size:50;width:100%;top:0;left:0;position:sticky;border: 1px solid black"> 
        
       <table  >
       <tr> <td><img src="logo.png" width="100" height="100" style="padding-left:50" alt="loading.."></td>
            <td width="40%"> <font color="white" size="33" face="cooper" >  Fast  &  Furious  Logics </font> </td>
            <form method="post" action="<?php $_PHP_SELF ?>">
              <td align="right" style="padding-left:350;font-size:25">
               <font color="white"  face="cooper" >   search <input type="search" name="search"> <input type="submit" name="go" value="Go">
               </font>
             </td>
               </form>
             
       </tr>
     </table>
   </div>
   <table >
    <tr >
      <td height="100%" valign="top" >
   <iframe src="links.php"  height="520" style="overflow:scroll;top:0"></iframe>
      </td>
      <td valign="top"  style="font-size: 20;font-family: cursive;" width="750">
          
       <b> "Practice makes programming perfect" </b>
       <center> <img src="rss.jpg"  width="700" height="500"></center>
     
     </td>
     <td valign="top">
       <iframe src="comment.php"  height="520"></iframe>
     </td>
   </tr>
   
  </body>
  </html>
  
 <?php
   $servername="localhost";
   $username="root";
   $password="animeshroot@123";
   $DBName="project";

     $conn=new mysqli($servername,$username,$password,$DBName);

     if($conn->connect_error)
     {
      die("Connection Failed: ".$conn->connect_error);
     }

     $s=$_POST['search'];
     
    if(empty($s))
     $temp=0;
    else 
     $temp=1;

  if($temp==1)
  {
      $sql="SELECT links FROM Pages WHERE ProgName= '$s' ";
      $result=$conn-> query($sql);
      //header("Location: $sql");

      if ($result -> num_rows > 0)
      {
        while($row = $result-> fetch_assoc())
        {  
          $l= $row['links'];
          header("Location: $l");
        }
      }
  }
      $conn->close();
  ?>