
<html>
<head>
    <title>Shapes2</title>
</head>
<body>
    <table border='1' cellspacing='0' width=350 height=350>
        <tr>
            <td width=100 height=70>
                <?php
                print("Declare Array");
                ?>
            </td>
            <td width=100 height=70>
                <?php
                print(" print the shapes");
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <table border='1' cellspacing='0' width=100 height=100>
                    <?php
                    $Array = array(
                        array('<td>1</td>', '<td>2</td>', '<td>3</td>', '<td>A</td>'),
                        array('<td>1</td>', '<td>2</td>', '<td>B</td>', '<td>C</td>'),
                        array('<td>1</td>', '<td>D</td>', '<td>E</td>', '<td>F</td>')
                    );
                    foreach ($Array as $row) {
                        echo '<tr>' . implode('', $row) . '</tr>';
                    }
                    ?>
                </table>
            </td>
            <td>
                <table border='1' cellspacing='0' width=90 height=90>
                    <tr>
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
                            for ($i = 0; $i < 3; $i++) {
                                for ($j = 0; $j <= $i; $j++) {
                                    echo "(" . chr($count++) . ") ";
                    }
                    echo "<br>";
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>  write simple code