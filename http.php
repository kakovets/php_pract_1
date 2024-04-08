<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | HTTP</title>

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

<body>
    <header>
        <a href="/">
            <h1>
                <?php echo 'root: ' . $_SERVER['HTTP_HOST'] . '/' ?>
            </h1>
        </a>
    </header>
</body>

</html>

<?php
include'utils.php';

class Http {
    private $array;

    public function __construct($array) {
        $this->array = $array;
    }

    public function get($key) {
        return isset($this->array[$key]) ? $this->array[$key] : null;
    }

    public function echo($key) {
        echo isset($this->array[$key]) 
        ? "From wrapper by '$key' key: " . Utils::highlight($this->array[$key], 'cyan') . '<br>'
        : null;
    }

    public function getAll() {
        return $this->array;
    }
}

$httpGet = new Http($_GET);
$httpPost = new Http($_POST);

$httpGet->echo("getPorsche");
$httpPost->echo("postPorsche");


// Or without wrapper
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $getPorsche = isset($_GET["getPorsche"]) ? $_GET["getPorsche"] : "";
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postPorsche = isset($_POST["postPorsche"]) ? $_POST["postPorsche"] : "";
}

echo '<br>';

// _requests
if (isset($_REQUEST["getPorsche"])) {
    echo 'GET | from $_REQUESTs= ' . Utils::highlight($_REQUEST["getPorsche"], 'cyan');
}

if (isset($_REQUEST["postPorsche"])) {
    echo 'POST from $_REQUESTs= ' . Utils::highlight($_REQUEST["postPorsche"], 'cyan');
}

?>