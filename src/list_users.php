<?php
 include('../config/database.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' align="center">
        <tr> 
        <tr> 
            <td>firstname</td>
            <td>lastname</td>
            <td>email</td>
            <td>status</td>
            <td>...</td>
            </tr>
        </tr> 
        <?php
            //HERE CODE
            $sql = "
                select 
                firstname,
                lastname,
                email,
                case when status = true then 'Active' else 'No active' end as status
            from
                users
            ";
            $res = pg_query($conn, $sql);
            if(!$res){
                echo "query error";
                exit;
            }
            while($row = pg_fetch_assoc($res)){
                echo"<tr>"; 
                echo"<td>". $row['firstname']."</td>";
                echo"<td>". $row['lastname']."</td>";
                echo"<td>". $row['email']."</td>";
                echo"<td>". $row['status']."</td>";
                echo"<td>";
                echo "<a href=''><img src = 'icons/lapiz.png' width='30'>";
                echo "<a href=''><img src = 'icons/lupa.png' width='30'>";   
                echo "<a href=''><img src = 'icons/trash.jpg' width='30'>";
                echo"</td>";
                echo"</tr>";

            }

        ?>

    </table> 
</body>
</html>