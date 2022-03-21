<?php 
 $servername = "localhost";
 $username = "root";
 $password= "";
 $dbname="registration";
 $firstname = $_POST['fname'];
 $midname = $_POST['mname'];
 $lastname = $_POST['lname'];
 $address = $_POST['address'];

 $con=new mysqli($servername,$username,$password,$dbname);
 if($con->connect_error){
     die("connection failed :".$con->connect_error); 
 }
 else{
     $stmt = $con->prepare("insert into userinfo(fname,mname,lname,address) value(?,?,?,?)");
     $stmt->bind_param("ssss",$firstname,$midname,$lastname,$address);
     $stmt->execute();
     echo "registration successfull";
     $stmt->close();
     $con->close();
 }

?>
