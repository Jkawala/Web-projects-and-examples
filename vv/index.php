  <?php
       $con = mysql_connect('127.0.0.1','root','');
       
       if(!$con){
           echo "not connected to the server";
       }
       if(!mysql_select_db($con, 'review'))
       {
           echo "database is not selected";
       }
       
       $Name = $_POST('username');
       $Email = $_POST('email');
       $Age = $_POST('age');
       $Review = $_POST('review');
       $Gender = $_POST('gender');
     
$sql ="INSERT INTO form (Name, Email, Review) VALUES ('$Name','$Email','$Review')";

if(mysql-query($con,$sql))
{
    echo 'Nothing has been inserted';    
}

else
{
    echo 'Input has been inserted';    
}

header("refresh2:2; url=reviews.html");
?>