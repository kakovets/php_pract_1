<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Basics</title>
    <style>
        body {
            padding: 2rem 20%;
            margin: 0;
            box-sizing: border-box;
            font-size: 20px;
        }
        header {
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<header>
        <a href="/">
            <h1>
                <?php echo 'root: ' . $_SERVER['HTTP_HOST'] . '/' ?>
            </h1>
        </a>
    </header>
</html>

<?php


$manufacturer = 'Porsche';
$model = 911.992;

$dreamSpeech = '<h1>Hello, today I bought a ' . $manufacturer . ' ' . $model . '!</h1>';
echo $dreamSpeech;

echo '<strong>Wheels:</strong><br>';
$wheels = ['FR', 'RR', 'RL', 'FL'];
for ($i = 0; $i < count($wheels); $i++) {
    echo "$i: $wheels[$i]<br>";
}

echo '<strong>Parts:</strong><br>';
$parts = array(
    'engine' => '4.0L naturally aspirated flat-6',
    'gearbox' => 'PDK',
);
foreach ($parts as $k => $v) {
    echo "$k: $v<br>";
}

echo '<br>';





$wheelsToString = implode(', ', $wheels); 
echo "WheelsToString: $wheelsToString.<br>";
$engineToArray = explode(' ', $parts['engine']);
echo 'EngineToArray:<br>';
print_r($engineToArray);


echo '<br><br>';


$array = [10, 20, 30];
$reference = &$array;
echo 'ref[1]: ' . $reference[1] . '<br>';   // 20
$reference[1] = 5;
echo 'arr[1]: ' . $array[1] . '<br>';       // 5

$i = 'j';
$j = 8;
$k = $$i;
echo "k = $k<br>";


echo '<br>';


$porsche1 = 911; 
$porsche2 = '911'; 

echo 'Those Porshes are: ';
if ($porsche1 != $porsche2) {
    echo 'not ';
}
echo 'equal<br>';

printf("Those Porshes are: %s identical<br>", $porsche1 === $porsche2 ? '' : 'not');

echo '<br>';


$porsche_sum = $porsche1 + $porsche2;
print ("911 + '911' = $porsche_sum <br><br>");


?>