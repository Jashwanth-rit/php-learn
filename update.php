<?php
$host = 'localhost';
$username = "root";
$password = null;

try{
    $conn = new PDO("mysql:host=$host;dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connect done";
}catch(PDOException $err){
    echo "connect failed ".$err->getMessage();
}


if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $getstu = $conn->prepare("select * from students where id='$id'");
 $getstu->execute();
$stu = $getstu->fetchAll();

$name = $stu[0]['name'];
echo $name;
$city = $stu[0]['city'];
$marks = $stu[0]['marks'];
$rank = $stu[0]['rank'];

echo " <form action='index.php' method='post' enctype = 'multipart/form-data'>
        <br>
        <br>
        <input type='number'  name = 'id' value = ".$id.">
      <br>
      <br>
      <input type='text';  name = 'name' value = ".$name.">
      <br>
      <br>
      <input type='text' name = 'city' value = ".$city.">
      <br>
      <br>
      <input type='number'  name = 'marks' value = ".$marks.">
      <br>
      <br>
      <input type='number'  name = 'rank' value = ".$rank.">
      <br>
      <br>

      
      <button name='update' value= ".$id.">update</button>
      </form>
";

}

?>

