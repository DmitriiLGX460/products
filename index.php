<?php

// $n= 5;
// for ($i = 1; $i <= $n; $i++) {

//     for ($j = $n; $j > $i; $j--) {
//         echo " _ ";
//     }
//     // $n=$n+2;
//         for ($j = 1; $j <= $i; $j++) {
//         echo " * ";
//     }
//         for ($j = 2; $j <= $i; $j++) {
//         echo " * ";
//     }
    
//         for ($j = $n; $j > $i; $j--) {
//         echo " _ ";
//     }
//     echo "<br>";
//     echo "\n";
// }

// echo "<br>";
// echo "<br>";
// echo "<br>";


?>

<?php
$array = [[
    "item" => "product 1",
    "description" => "description 1",
    "price" => 1_000,
    "currency" => "RUB",
    "discount" => "false",
    "currency-with-discount" => 999
    ,
],
[
    "item" => "product 2",
    "description" => "description 2",
    "price" => 2_000,
    "currency" => "RUB",
    "discount" => "true",
    "currency-with-discount" => 1_999
    ,
],
[
    "item" => "product 1",
    "description" => "description 1",
    "price" => 3_000,
    "currency" => "RUB",
    "discount" => "false",
    "currency-with-discount" => 2_999
    ,
],
[
    "item" => "product 2",
    "description" => "description 2",
    "price" => 4_000,
    "currency" => "RUB",
    "discount" => "true",
    "currency-with-discount" => 3_999
    ,
]]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
</head>
<body>
    <?php foreach($array as $item): ?>
        <table>
            <tr>
                <?php foreach($item as $key => $value): ?>
                    <th>
                        <?= $key ?>
                    </th>
                    <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach($item as $key => $value): ?>
                    <td>
                        <?= $value?>
                    </td>

                    <?php endforeach; ?>
            </tr>
        </table>
        <?php endforeach;?>
</body>
</html>
<?php