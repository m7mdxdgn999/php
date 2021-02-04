<?php
//pengulangan: for,while,do wile,  foreach_khusus array

for ($i = 0; $i < 5; $i++) {
    echo "hello world";
}

$i = 0;
while ($i < 5) {
    echo "hello wordl";
    $i++;
}

$i = 10;
do {
    echo "hello wordl";
    $i++;
} while ($i < 5);


?>

<html>

    <head>
        <title>latihan1</title>
    </head>
    <body>
        <table  border="1" cellpadding="10" cellspacing="0"> 
             <?php for ($i=1; $i<=5;$i++):?>
            <tr>
                <?php for ($x=1; $x<=5;$x++):?>
                <td><?="$x,$i"; ?></td>
            </tr>

            <?php endfor; ?>      

        
        
        </table>
    </body>

</html>