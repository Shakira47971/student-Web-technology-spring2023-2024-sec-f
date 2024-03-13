
<html>
<head>
    <title>Shape</title>
</head>
<body>
    <table border=1 cellspacing=0>
        <tr>
            <td width=100>
                <?php
               
                for ($i = 1; $i <= 3; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td width=100>
                <?php
               
                for ($i = 3; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "$j ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <td width=100>
                <?php
                
                $count = 65; 
                for ($i = 1; $i <= 3; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "" . chr($count++) . " ";
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
