<div id='search-bar'>
<?php

$con = new PDO("mysql:host=localhost;dbname=CodeFlix",'root','');

if(isset($_POST["submit"])) {
$str = $_POST["search"];
$sth = $con->prepare("SELECT * FROM 'search' WHERE Name = '$str'");

$sth->serFetchMode(PDO:: FETCH_OBJ);
$sth -> execute();

if($row == $sth->fetch())
{
    ?>
<br><br><br>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td><?php echo $row->Name; ?></td>
        <td><?php echo $row->Description; ?></td>
    </tr>
</table>

<?php
} 

else{
        echo 'Does not exist';
}
?>
</div>