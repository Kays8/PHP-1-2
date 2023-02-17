<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>005-Thirayut</title>
</head>
<body>
    
    <?php
    require "connect.php";
    $sql = "SELECT * FROM food,menu WHERE food.Menu_ID = menu.Menu_ID"; 
    $stmt = $conn->prepare($sql);
    $stmt->execute();


    ?>

    <table width="800" border="1">
        <tr>
            <th width="90"> <div align="center">F_ID</div></th>
            <th width="140"> <div align="center">F_Name</div></th>
            <th width="120"> <div align="center">F_Price</div></th>
            <th width="100"> <div align="center">F_Description</div></th>
        </tr>
        
        <?php
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        
        <tr>
            <td>
            <a href="deleteF.php?Food_ID=<?php echo $result["Food_ID"]; ?>">
            <?php echo $result["Food_ID"]; ?>
            </td>
            <td><?php echo $result["Food_Name"]; ?></td>
            <td><?php echo $result["Food_Description"]; ?></td>
        </tr>
        
        <?php
        }
        ?>
        
    </table>

    <?php
    $conn = null;
    ?>

</body>
</html>