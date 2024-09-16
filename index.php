<?php
// echo 10 + 10;

// // * how to go for next line 

// // STRONG NOTE : if u r using or doing php then just think about "HTML" (MASTER_THINK)

//  echo "<br>";
//  echo "i am jk <br>";
//  echo  " i am coder <br>";

//  //using echo as function 

//  echo("this is echo function");

//  //variables in php

//  // $ - tells that this is variable
// // = - assigns value to that varible
//  $name = "jk";

//  echo $name;
//  echo "<br>";

 //PHP WITH HTML

 //echo "<h1> i love coding<h1/>";

//how to use variable in html tag

//  $name = "jk";
//  echo "<h1> i am ".$name."<h1/>";
//  echo "<h1> i am $name<h1/>";

 //initailizing variable inside php and using inside html

//  note: to use veriable inside html , 
//  we should declare variable inside php first

// $h2_color = "red";
// echo  phpinfo();

//define constant 

//const data = "jk";
//echo data;

//or

// define("data","jk");
// echo data;

//use of . (dot) operator

// define("name","jk");
// define("age",20);

// NOTE: dot operator can be used as cancatination of two string 
// or combining two string

// $name = "jk";
// $age = 20;
// echo 'my name is '.$name. ' and my age is ' .$age;
// echo "<br>";
// $str1 = 'my name is '.$name;
// $str2 = ' and my age is ' .$age;
// $str1.= $str2;
// $str3 = "";
// $str3 = $str1 .$str2;
// echo $str3;

// NOTE: 
//  * if , if else, else if , switch , for loop , while loop, do while loop,
//     are same as javascript
//  * function are same as javascript  
//(consist of return as well as declaration as javascript)
//  * only difference is variable usage can be used in html statement 
//  * used with dollar sign


//GOLDEN NOTE: JUST THINK ABOUT JAVASCRIPT

//call back function - passing function name as parameter

// function print_smt(){
//     echo "printed fun";
    

// }

// function main($fun){
//     echo "printed main";
//     $fun();
// }
// $fun = "print_smt";

// echo main($fun);

//some in-biult function 

// 1-strlen
// 2-var_dump
// 3-date
// 4-phpinfo
// 5-is_string
// 6-rand
// 7-substr


//DIAMOND NOTE: if any doubt in function just open documentation and learn
//  just google it


//foreach - loop

// $even = [2,4,6,8,10];

// foreach($even as $a){
//     echo $a;
//     echo "<br>";
// }


//Associative array

//this consist of key and value

// $info = ["name"=>"jk",
// "age"=>20,
// "city"=>"hassan",
// "state"=>"karnataka"];

//note:only for each loop can be used with associative array

// foreach($info as $a){
//     echo $a;
//     echo "<br>";

// }

//multidimensional array

// $users = [
//     [1,"jk","hassan"],
//     [2,"pk","bang"],
//     [3,"ak","hyderabad"]
// ];

// for($i = 0 ;$i <count($users);$i++){
//     for($j = 0 ;$j <count($users[$i]);$j++){
//         echo $users[$i][$j];
//         echo "<br>";
    
//     }
// }

//=>to convert it to table form
// echo "<table border = 1>";
// for($i = 0 ;$i <count($users);$i++){
//     echo "<tr >";
//     for($j = 0 ;$j <count($users[$i]);$j++){
//         echo "<td>";
//         echo $users[$i][$j];
//         echo "</td>";
//         // echo "<br>";
    
//     }
//     echo "</tr>";
// }
// echo "</table>";

//multidimensional associative array

//note: * its a combination of multidimensional and associative array
// * use double foreach for printing purpose


//include file in other another file

// include('./neededfile.php');

// note : include will import file again and again how many times function called 
// but include_once will import file by checking whether file is not imported previously

// note : require will give error if file not present or any error occurs
// but include will give warnig if file not present or any error  occurs 

// diffrent type of file import 
// 1-include
// 2-include_once
// 3-require
// 4-require_once


//GET REQUEST FROM PHP TO HTML 

//* HTML STORES INFO AND TRnsfer to php file

// note: always remember $_GET  NOT $get 
// and    always remember password not passward
// and    name and password below mentioned should be same as 
//we used in html file else shows error

// if($_GET){
//     echo 'user name is '.$_GET['name'];
//     echo "<br>";
//     echo 'user password is '.$_GET['password'];
// }

//note:post request is also same as get request, 
//access , using is all same but info not passed through url


// if($_POST){
//     echo 'user name is '.$_POST['name'];
//     echo "<br>";
//     echo 'user password is '.$_POST['password'];
// }

//THERE OTHER ONE METHOD CALLED REQUEST

//in this request method whether the method is get or put in html 
//both can be managed by request method in php

// if($_REQUEST){
//     echo 'user name is '.$_REQUEST['name'];
//     echo "<br>";
//     echo 'user password is '.$_REQUEST['password'];
// }

//note: if there is many data , then it can be printed using foreach
// this data will act as associative array 
// key is feild name 
// value is feild value


// if($_REQUEST){
//     foreach($_REQUEST as $keys => $data)
// {
//     echo $keys." is ".$data;
//     echo "<br>";
// }
// }


// some of super global variable

// 1-$GLOBALS
// 2-$_COOKIE
// 3-$_ENV
// 4-$_FILES
// 5-$_GET
// 6-$_POST
// 7-$_REQUEST
// 8-$_SERVER
// 9-$_SESSION

//$_FILES - SUPER GLOBAL VARIABLE

//print_r($_FILES);

//checking if file is uplouded or not

// if($_FILES['file_name']){
//     //echo "<br>";
//    // getting name of the file
//    $name = $_FILES['file_name']['name'];
// //    echo "<br>";
// //    echo  $name;
//    //here files is the name of the folder to which we need to uploud get files
//    $path = "./files/".$name;
// //    echo "<br>";
// //    echo  $path;
//    //adding file to specified path
   
//    if(move_uploaded_file($_FILES['file_name']['tmp_name'],$path)){
//     echo "file uplouded successfully";
//    }
//    else{
//     die("failed to uploud");
//    }
   
//    }else{
//     die("no file found");
//    }


// calling php function when button is clicked

//note : here button is name of the button tag
// print_r($_REQUEST);


// if(isset($_REQUEST['button'])){
//     echo "button clicked";
// }


//cockies in php

// cockie is a place where some amount of data related to browsing is stored , stored in browser
// * it is function with 6 parameters first one is cumpulsary others are optional
// * varible name 
// * value
// * time to when to expire
// *path to access
// * secured http or not 
// *httponly -  means runned only by servers 

//setcookie("name","jk",time()+(86400));

//print cookie if present

//isset prevents from showing error if name specified in global variable not present
// if(isset($_COOKIE['fun'])){
//     echo $_COOKIE['name'];
//     echo print_r($_COOKIE);
// }
// else{

//     //die means which shows with error
//     die("no cookie found!");
//     //echo means print on screen
//     echo "no cookie found!";
// }

//to check go to inspect -> application -> cookies -> localhost-> found


// cookie mini project

// if(isset($_REQUEST['button'])){

//     if($_REQUEST['button'] == 'set'){
//         $val = $_REQUEST['name'];
//         setcookie('name',$val);
//     }
//     else  if($_REQUEST['button'] == 'display'){

//         if(isset($_COOKIE['name'])){
//             echo $_COOKIE['name'];
//         }
//         // foreach($_COOKIE as $keys => $data ){
//         //     echo $data;
//         //     echo "<br>";
//         // }
//     }
//     else  if($_REQUEST['button'] == 'delete'){
//         if(isset($_COOKIE['name'])){
//             setcookie('name',null,-1);
//         }
//     }
// }

// session - we can store information in server side
//more secure and more space available

// session_start();
// if(isset($_REQUEST['button'])){

//         if($_REQUEST['button'] == 'set'){
//             $val = $_REQUEST['name'];
//            $_SESSION['name'] = $val;
//         }
//         else  if($_REQUEST['button'] == 'display'){
    
//             if(isset($_SESSION['name'])){
//                 echo $_SESSION['name'];
//             }
//             // foreach($_COOKIE as $keys => $data ){
//             //     echo $data;
//             //     echo "<br>";
//             // }
//         }
//         else  if($_REQUEST['button'] == 'delete'){
//             if(isset($_SESSION['name'])){

//                 session_destroy();
               
//             }
//         }
//     }
    

//create file and write to the file using html
// if(isset($_REQUEST)){
//     $filename = "./files/".$_REQUEST['file_name'];
// $content = $_REQUEST['data'];
// $file = fopen($filename,'w') or die("no such directory found");
// fwrite($file,$content);
// fclose($file);
// echo $_REQUEST['file_name']." created successfully";

// }





// get file and print the data in file using html


// if(isset($_REQUEST)){
//     $filename = $_FILES['file_name']['tmp_name'];

// $file = fopen($filename,'r') or die("this file or directory not found");
// echo fread($file,filesize($filename));
// fclose($file);
// echo "<br>";
// echo $_FILES['file_name']['tmp_name']." printed successfully";

// }else{
// die("no file found");
// }


//printing all the files name present in folder

// here path gets path of folder
// item stores all the files present in folder
// scandir gets all the file name, means scans folder and gets files name.
// array_diff get first parameter as array list and second paramter as which all files should not present in item
// using for each we print all the files name present in item

// $path = "files";
// $item = scandir($path);
// $item  = array_diff($item,array('.','..'));
// foreach($item as $i){
//     echo "<a href=./files/$i>$i</a>";
//     echo "<br>";
// }

//handle json files using php

// here json_encode function makes array as json formate
//here json_decode function makes json file to array formate


// $users = ['name'=>'jk','petname'=>'chintu','age'=>'30'];
// $userjson = json_encode($users);
// echo  $userjson;
// echo "<br>";
// $userarray = json_decode($userjson,true);
// print_r($userarray);
// // echo $userarray
// foreach($userarray as $kay => $value){
//     echo  $key .""
// }


//date and time function 

//first set time zone;

// date_default_timezone_set('Asia/Kolkata');

// echo date('d m y');
// echo "<br>";
// echo "<br>";
// echo date('D M Y');
// echo "<br>";
// echo "<br>";
// echo date('h:i:sa');
// echo "<br>";
// echo "<br>";
// echo date('H:i:sa');

//php 10 most important array function

// 1-is_array(array_name) - check whther the variable is array or not
// 2-count(array_name) -  gives number of elements in array
// 3-unset(array_with_index) - this eleminates array element present in array
// 4-array_push(array_name,element) - pushs element to array to last
// 5 -array_pop(array_name) -  delets element present at last from array
// 6-array_keys(array_name) - gives all the keys present in associative array
// 7-implode(array_name) - gives array elements by converting to string 
// 8-explode(" ",string_name) - convert and gives string where space is there as array elements
// note: if we pash 'o' instead of empty place then break occurs at 'o' and gives array elemnts
// 9-array_merge(array_name1,array_name2) - maerges two array to single arra and gives 
// 10-array_unique(array_name) - helps to remove duplicates in the array


//die, exit, and return


//die and exit is used to stop the exicution of code

//die and exit both are same, exit came from c++ and die came from some other langueges
//return is used mainly in functions and it can also be used to stop the exicution
//if die or exit is called inside function then entire code exicution will be stoped 
//if function is called then return returns the value , if function is not called return is used simply in middle further will not be exicuted
// and also in functions the statement present after the return not be exicuted


//form handling in php - mini project


//2 vedios should be seen


//connection with data-base - mysqli class

// $host = 'localhost';
// $username = "root";
// $password = null;
// $database = 'college';
// $conn = new mysqli($host,$username,$password,$database);
// if($conn->connect_error){
//     die("connection failed ");
// }
// echo  "connected successfully";
// echo "<br>";

// performing querry operation on database using $conn

// $result = $conn->query('show tables')->fetch_all();
// print_r($result);

//connection with data-base - mysqli PDO

// $host = 'localhost';
// $username = "root";
// $password = null;

// try{
//     $conn = new PDO("mysql:host=$host;dbname=college",$username,$password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//     echo "connect done";
// }catch(PDOException $err){
//     echo "connect failed ".$err->getMessage();
// }

// echo "<br>";
// $result = $conn->query('show tables')
// while($row = $result->fetch(PDO::FETCH_NUM)){
//     print_r($row);
// }



//read data from database and make the table - using pdo connection




// $getstu = $conn->prepare("select * from students");
//  $getstu->execute();
// $stu = $getstu->fetchAll();
// //print_r($stu);

//echo "<table border = 1>";
// echo "<tr>
// <th>id</th>
// <th>name</th>
// <th>city</th>
// <th>marks</th>
// <th>rank</th>
// </tr>";



// foreach($stu as $st)
// {
   
//     echo "<tr>";
//     echo "<td>".$st['id']."</td>";
//     echo "<td>".$st['name']."</td>";
//     echo "<td>".$st['city']."</td>";
//     echo "<td>".$st['marks']."</td>";
//     echo "<td>".$st['rank']."</td>";
    
   
//    
//     echo "</tr>";
    
   
// }
// echo "</table>";



// inserting data into table - using pdo connection

//NOTE: TABLE HEADING SHOULD BE ENCLOSED WITH `` BUT VALUES SHOULD BE ENCLOSED WITH ''

//NOTE: HERE WE FOLLOW THRE STEPS 
//STEP1:PERFORM OPERATION USING PREPARE
//STEP2:ECECUTE THE VARIABLE
//STEP3:CHECKING WHETHER PERFECTLY WORK IS DONE OR NOT


// if(isset($_REQUEST)){
//     $id = $_REQUEST['id'];
//     $name = $_REQUEST['name'];
//     $city = $_REQUEST['city'];
//     $marks = $_REQUEST['marks'];
//     $rank = $_REQUEST['rank'];
//     $in = $conn->prepare("insert into `students` (`id`,`name`,`city`,`marks`,`rank`)
// values ('$id','$name','$city','$marks','$rank')
// ");
// $res = $in->execute();
// if($res){
//     echo "data inserted successfully";
// }
// else{
//     echo "problem in inserting data";
// }

// }else{
//     echo "not data input";
// }


//DROPDOWN USING PHP

//NOTE: USING THIS DROPDOWN WE GET ID VALUE , USING THAT ID VALUE WE CAN DLT , UPDATE , EDIT OPERATION CAN BE PERFORMED.

// $getname = $conn->prepare('select id,name from students');
// $getname->execute();
// $stud = $getname->fetchAll();


// echo "<select>";
// echo "<option>select_name</option>";
// foreach($stud as $s){
//     echo "<option value=".$s['id'].">".$s['name']."</option>";
// }
// echo "</select>";

//DELETING DATA OF GIVEN ID.


// if(isset($_REQUEST['delete'])){
//     $id = $_REQUEST['delete'];
//     $getstu = $conn->prepare("delete from students where id = '$id'");
//  $res = $getstu->execute();

// if($res){
//     goto here;
// }
// else{
//     echo "problem in deleting";
// }
// }

// here:
// $getstu = $conn->prepare("select * from students");
//  $getstu->execute();
// $stu = $getstu->fetchAll();
// //print_r($stu);

//echo "<table border = 1>";
// echo "<tr>
// <th>id</th>
// <th>name</th>
// <th>city</th>
// <th>marks</th>
// <th>rank</th>
// </tr>";



// foreach($stu as $st)
// {
   
//     echo "<tr>";
//     echo "<td>".$st['id']."</td>";
//     echo "<td>".$st['name']."</td>";
//     echo "<td>".$st['city']."</td>";
//     echo "<td>".$st['marks']."</td>";
//     echo "<td>".$st['rank']."</td>";
    
   
//     echo "<td>";
    
//     echo " <form action = 'index.php' method='post' enctype = 'multipart/form-data'>
//        <button name='delete' value =".$st['id']." >delete</button>
//       </form>
// ";
//     echo "</td>";
//     echo "</tr>";
    
   
// }
// echo "</table>";


//UPDATE VALUE PRESENT IN DATABASE

//NOTE: BY USING NAME AND VALUE WE CAN CALL SAME PHP FILE FOR MANY TIME BY SETTING VALUE


// $getstu = $conn->prepare("select * from students");
//  $getstu->execute();
// $stu = $getstu->fetchAll();
// //print_r($stu);

// echo "<table border = 1>";
// echo "<tr>
// <th>id</th>
// <th>name</th>
// <th>city</th>
// <th>marks</th>
// <th>rank</th>
// </tr>";



// foreach($stu as $st)
// {
   
//     echo "<tr>";
//     echo "<td>".$st['id']."</td>";
//     echo "<td>".$st['name']."</td>";
//     echo "<td>".$st['city']."</td>";
//     echo "<td>".$st['marks']."</td>";
//     echo "<td>".$st['rank']."</td>";
    
   
//    echo "<td>";
    
//     echo " <form action = 'index.php' method='post' enctype = 'multipart/form-data'>
//        <button name='delete' value =".$st['id']." >delete</button>
//       </form>
// ";
//     echo "</td>";

// //using populate data -  sending id in url

// echo "<td><a href='update.php?id=".$st['id']."' style='color:black; text-decoration:none;'>edit</a></td>";

//     //using post request method 

//    echo "<td>";
    
//     echo " <form action = 'update.php' method='post' enctype = 'multipart/form-data'>
//        <button name='id' value =".$st['id']." >update</button>
//       </form>
// ";
//     echo "</td>";

//     echo "</tr>";
    
   
// }
// echo "</table>";

// //note: update operation can also be performed by deleting that id values and insert  values got by update

// //step1: pass id to update and get all the value from update to update it
// //step2: store all the value need to be updated 
// //step3: delete the values which are under updating id
// //step4: just insert the value to table which are stored

// if(isset($_REQUEST['update'])){

//     $id = $_REQUEST['id'];
//     echo $_REQUEST['name'];
//     $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
//     $city = isset($_REQUEST['city']) ? $_REQUEST['city'] : null;
//     $marks = isset($_REQUEST['marks']) ? $_REQUEST['marks'] : null;
//     $rank = isset($_REQUEST['rank']) ? $_REQUEST['rank'] : null;
//     if($name != null){
//         $updatestudent = $conn->prepare("update students set
//         name = '$name',
//          city = '$city',
//           marks = '$marks',
//            rank = '$rank'
//         where id = '$id'
//         ");
//     }
    
// //after once the data got updated redirect it by using header function
//     if($updatestudent->execute()){
//         header('location:index.php');
//     }
//     else{
//         echo 'update not success';
//     }

// }

//NOTE:make search 

// if($_REQUEST['name']){
//     $name = $_REQUEST['name'];
//     $search = $conn->prepare("select * from students where name= '%$search%'");
//     $search->execute();
//     $stu = $search->fetchAll();

    


// echo "<table border = 1>";
// echo "<tr>
// <th>id</th>
// <th>name</th>
// <th>city</th>
// <th>marks</th>
// <th>rank</th>
// </tr>";



// foreach($stu as $st)
// {
   
//     echo "<tr>";
//     echo "<td>".$st['id']."</td>";
//     echo "<td>".$st['name']."</td>";
//     echo "<td>".$st['city']."</td>";
//     echo "<td>".$st['marks']."</td>";
//     echo "<td>".$st['rank']."</td>";
    
   
//    echo "<td>";
    
//     echo " <form action = 'index.php' method='post' enctype = 'multipart/form-data'>
//        <button name='delete' value =".$st['id']." >delete</button>
//       </form>
// ";
//     echo "</td>";

// //using populate data -  sending id in url

// echo "<td><a href='update.php?id=".$st['id']."' style='color:black; text-decoration:none;'>edit</a></td>";

//     //using post request method 

//    echo "<td>";
    
//     echo " <form action = 'update.php' method='post' enctype = 'multipart/form-data'>
//        <button name='id' value =".$st['id']." >update</button>
//       </form>
// ";
//     echo "</td>";

//     echo "</tr>";
    
   
// }
// echo "</table>";

//}


//OOPS IN PHP

//NOTE: CLASSES AND OBJECTS IN PHP IS LIKE JAVA AND C++

//EXTENDS IS USED LIKE JAVA
//PUBLIC IS DEFAULT ACCESS SPECIFIER LIKE JAVA
//ARROW OPRATION IS USED AS C++



//SIMPLE CLASS WITH OBJECT

// class main_class{

//     public $val = true;
//     public function public_f(){
//         echo "this is public function accessed by anywhere";
//         echo "<br>";

//         return $this->val;
//     }
//     private function private_f(){
//         echo "this is private function accessed within the class";
//         echo "<br>";

//     }
//     protected function protected_f(){
//         echo "this is protected function accessed inherited class";
//         echo "<br>";

//     }
//     public function public_private(){
//         echo "this is public function to access private class";
//         echo "<br>";

//         return $this->private_f();
//     }

    

// }

// class protected_inherite extends main_class{

//     public function public_protected(){
//         echo "this is public function to access protected by using inheritance";
//         echo "<br>";

//         return $this->protected_f();
//     }
    
// }

// $m = new main_class();
// $i = new protected_inherite();

// //ACCESSING PUBLIC OF MAIN CLASS    

// echo $m->public_f();
// echo "<br>";

// //ACCESSING PRIVATE USING PUBLIC 

// echo $m->public_private();
// echo "<br>";


// //ACCESSING PROTECTED USING INHERITANCE

// echo  $i->public_protected();
// echo "<br>";

// echo "<br>";

//CONSTANT ACCESSING

//OUTSIDE OF CLASS -  BY SCOPE RESOLUTION OPERATOR  -  CLASS_NAME::CONSTANT _NAME
//INSIDE OF CLASS -  USING SELF - SELF::CONSTANT _NAME


//FINAL -  USE PREVENT INHERITANCE FROM OTHER CLASSES
//IT CAN ADDED TO CLASS AS WELL AS FUNCTION ,
//BY THIS CLASS AND FUNCTION BOTH OR NOT ACCESSED BY INHERITED CLASS


// IF U WANT TO NOT ALLOW OTHER CLASS TO ACCESS SOME OF FUNCTION IN BASE CLASS ,
//THEN FINAL KEY SHOULD BE ADDED BEFORE IT


//STATIC KEYWORD - USED ACCESS FUNCTION OR VARIBLE DECLARED INSIDE CLASS WITHOUT CRATEING OBJECT

// USED AS -  CLASS_NAME::VARIABLE_NAME OR FUNCTION_NAME

//NOTE: ALL THIS FINAL,STATIC,CONST ARE USED WHILE DECLARING VARIABLE OR FUNCTION


//LATE STATIC METHODS - VALUE OF VARIABLE IN CHILD IS USED NOT WHICH IS IN PARENT CLASS


//ABSTRACTION - ABSTRACT KEY WORD IS USED AS ABOW DECLARATION 
//WHICH GIVES INFORMATION ABOUT WHAT ALL FUNCTION SHOULD BE DEFINED IN CHILD CLASS
// FUNCTION DECLARATION IS DONE ON ABSTRACT CLASS OF WHICH DEFIANTION SHOULD BE THERE IN CHILD CLASS
//ABSTRACT CLASS CAN HAVE OTHER FUNCTION DEFINITION AS WELL
//DECLARED AS PUBLIC OR PRETECTED
//KEYWORD SHOULD BE USED IN ALL THE FUNCTION DECLARAION


//INTERFACE -  INTERFACE KEY WORD IS USED AS ABOW DECLARATION
//WHICH GIVES INFORMATION ABOUT WHAT ALL FUNCTION SHOULD BE DEFINED IN CHILD CLASS
// ONLY FUNCTION DECLARATION IS DONE ON INTERFACE CLASS OF WHICH DEFIANTION SHOULD BE THERE IN CHILD CLASS
//INTERFACE CLASS CANNOT HAVE OTHER FUNCTION DEFINITIONS
//DECLARED AS PUBLIC 
//KEYWORD SHOULD NOT BE USED IN ALL THE FUNCTION DECLARAION

//TRAITS WHICH USED IN PLACE OF CLASS -  WHICH COVERS THE LIMITAION OF SINGLE INHERITANCE

//TRAIT IS KEYWORD USED IN PLACE OF CLASS

//AND THEN USE IS USED IN CHILD CLASS -  USE CLASS_NAME OR TRAIT_NAME;
//BY THIS ALL THE FUNCTION TRAIT WILL BE INHERITED TO CHILD CLASS

//NAMESPACE DECLARATION 

//WHEN WE HAVE SAME CLASS IN DIFFRENT FILES , WE IMPORT AND IF WE USE SHOWS ERROR
//SO WE USE NAMESPACE AS ASSIGNING NAME AS - NAMESPACE ANY_NAME; - AT THE TOP OF CLASS
//THEN USING IT IN IMPORTED FILE AS -  $OBJECT = ANY_NAME(GIVEN DURING NAMESPACE)\CLASS_NAME(IN DIFFRENT FILE)
//THIS MAKES CLASSES DIFFRENT FROM ONE ANOTHER


//METHOD CHAINING = $OBJECT->FUN1()->FUN2();
//USE RETURN $THIS FOR ALL THE FUNCTION USED DURING METHOD CHAINING , SO THAT METHOD CHAINING IS POSSIBLE.

//CLASSES WITH DATABASE



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

class students{

public $dbconn;
    function __construct($conn){
        $this->dbconn = $conn;
        echo  "constructor called";
    }

    function getdata(){
        $getstu = $this->dbconn->prepare("select * from students");
        $getstu->execute();
        $data = $getstu->fetchAll();
        return $data;
    }

    //IN SAME WAY CREATE INSERT,UPDATE,DELETE FUNCTION

}

$s  =  new students($conn);
$stu =  $s->getdata();

echo "<table border = 1>";
echo "<tr>
<th>id</th>
<th>name</th>
<th>city</th>
<th>marks</th>
<th>rank</th>
</tr>";
foreach($stu as $st)
{
   
    echo "<tr>";
    echo "<td>".$st['id']."</td>";
    echo "<td>".$st['name']."</td>";
    echo "<td>".$st['city']."</td>";
    echo "<td>".$st['marks']."</td>";
    echo "<td>".$st['rank']."</td>";
    echo "</tr>";
    
   
}
echo "</table>";




?>



<!-- php inside html tag -->

<!-- <h2 style  = "color:<?php echo $h2_color;?>"> <?php 
echo " this is php inside html tag";
?><h2/> -->