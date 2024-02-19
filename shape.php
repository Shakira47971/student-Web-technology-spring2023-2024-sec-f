
<html>
<head>
    <title>Shapes</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <?php
               
                for ($i = 1; $i <= 3; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
               
                for ($i = 3; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "($j) ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td>
                <?php
                
                $count = 65; 
                for ($i = 1; $i <= 3; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "(" . chr($count++) . ") ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
