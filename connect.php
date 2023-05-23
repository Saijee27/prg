<?php
$Name=$ POST['Name'];
$Pinnumber=$ POST['Pinnumber'];
$Schoolname=$ POST['Schoolname'];
$SGPA=$ POST['SGPA'];
$Collegename=$ POST['Collegename'];
$GPA=$ POST['GPA'];
$ENGcollegename=$ POST['ENGcollegename'];
$sem-1GPA=$ POST['sem-1GPA'];
$sem-2GPA=$ POST['sem-2GPA'];
$sem-3GPA=$ POST['sem-3GPA'];
$sem-4GPA=$ POST['sem-4GPA'];
$CGPA=$ POST['CGPA'];
$conn = new mysqli('localhost','root','','student_details');
if($conn->connect_error){
    die('Conection Failed :'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into details(Name,Pinnumber,Schoolname,SGPA,Collegename,GPA,ENGcollegename,sem-1GPA,sem-2GPA,sem-3GPA,sem-4GPA,CGPA) values(?,?,?,?,?,?,?,?,?,?,?,?)")
    $stmt->bind_param("sssdsdsddddd",$Name,$Pinnumber,$Schoolname,$SGPA,$Collegename,$GPA,$ENGcollegename,$sem-1GPA,$sem-2GPA,$sem-3GPA,$sem-4GPA,$CGPA)
    $stmt->execute();
    echo "submitted successsfully";
    $stmt->close();
    $conn->close();
}
?>

