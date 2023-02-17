<?php
 require "connect.php";
    $sql = "DELETE from food WHERE Food_ID = :Food_ID"; 
    $stmt = $conn->prepare($sql);
    $stmt->bindparam(':Food_ID',$_GET['Food_ID']);
    
    if($stmt->execute()){
        header("Location:showFood.php");
    }else {
        $message ="Fail";
    }
?>