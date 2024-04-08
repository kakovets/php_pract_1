<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | OOP</title>
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
include'utils.php';

interface Heater {
    public function heat();
    public function idle();
}

abstract class Device {
    abstract public function work();
}

trait HangOnTheWall {
    public function hang() {
        echo 'Hanging around<br>';
    }
}

class SmartHeater extends Device implements Heater {
    private $name;

    // magic
    public function __construct($name) {
        echo 'SmartHeater __construct<br>';
        $this->name = $name;
    }

    public function __destruct() {
        echo 'Bye.. (' . $this->name . ')<br>';
    }

    public function __toString() {
        return "SmartHeater with name: {$this->name}.";
    }

    // get/set
    public function getName() {
        return $this->name;
    }
    public function setName($newName) {
        $this->name = $newName;
    }

    // from abstract func
    public function work() {
        echo 'Device is working<br>';
    }

    // interface's funcs
    final public function heat() {
        echo 'Heating...<br>';
    }

    public function idle() {
        echo 'Well, I\'m bored<br>';
    }
}

final class WiFiHeater extends SmartHeater {
    use HangOnTheWall;

    public $connectedWiFi;

    public function __construct($name, $connectedWiFi) {
        parent::__construct($name);
        $this->connectedWiFi = $connectedWiFi;
        echo 'WiFiHeater __construct <br>';
    }

    public function idle() {
        echo 'I will watch YouTube for now<br>';
    }

}


class Singleton {
    private static $instance;

    private function __construct() {}

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}




$heater = new SmartHeater('Mr Heater');
echo '<br>';

$wifiHeater = new WiFiHeater('Super Heater', 'somewifinet');
echo '<br>';


echo 'Wifi heater\'s name is ' . $wifiHeater->getName() . '<br>';
echo 'Wifi heater connected to ' . $wifiHeater->connectedWiFi . '<br><br>';

echo 'work from ' . Utils::highlight('abstract', 'cyan') .': ';
echo $wifiHeater->work() . '<br>';

echo 'hang from ' . Utils::highlight('trait', 'cyan') .': ';
echo $wifiHeater->hang() . '<br>';

echo 'heat and idle from ' . Utils::highlight('interface', 'cyan') .': <br>';

echo $wifiHeater->heat();
echo $wifiHeater->idle() . '<br>';

$wifiHeater->setName('Scott Heatman');
echo 'New Wifi heater\'s name is ' . Utils::highlight($wifiHeater->getName()) . '<br><br>';


echo $heater . '<br>';
echo $wifiHeater . '<br><br>';

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

$result = 'identical.';
$areIdentical = $singleton===$singleton2;

switch ($areIdentical) {
    case '1': break;
    case '0': $result = 'not ' . $result;  break;
    default: $result = 'elephants.';
}

echo 'Singletons are: ' . Utils::highlight($result, $areIdentical ? 'lightgreen' : 'lightcoral') . '<br><br>';

?>