<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid #636262;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    
    <table> 
        <tr style="background-color: gray;">
            <th colspan="10">BẢNG CỬU CHƯƠNG</th>
        </tr>   
        <?php 
            for($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for($j = 1; $j <= 10; $j++) {
                    echo "<td>" . $i . ' x ' . $j . ' = ' . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>