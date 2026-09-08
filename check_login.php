
<?php

$con = mysqli_connect("localhost", "root" , "", "bit25_w4_db");

$username = $_POST['username'];
$password = $_POST['password'];
// คือ เริ่มการทำงานของฟังชั่น
session_start();
//คือ  เลือกทั้งหมดจากยูสเชร์, แทนค่ายซเนมในดาต้าเบสให้ตรงกับยูสเซอเนมที่อินพุดเข้ามา,     พาสเวิดในดาตาเบสให้ตรงค่ากับพาสเวิดที่อินพุดเข้ามา
$q = "SELECT * FROM users
WHERE username = '$username'
AND password = '$password' ";

// echo $q;
// การจับเอาคอนกับคิวมาทำงานด้วย
$result = mysqli_query($con, $q);


// เช็คว่าเป็น 1 or 0
// login ถูก
if(mysqli_num_rows($result) > 0){

$user = mysqli_fetch_assoc($result);
$_SESSION["fname"] = $user["fname"]; // สามารถดึงไปใช้หน้าใหม่ได้โดยที่เราไม่ต้องแทนค่าใหม่
header("location: index.php");
exit;

}else{
// login ผิด
header("location: login.php");
exit;
}