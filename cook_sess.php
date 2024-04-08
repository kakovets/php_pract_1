<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Cookies & Session</title>

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

    <main>

        <?php

        if (isset($_COOKIE["username"])) {
            echo "Hello again, " . $_COOKIE["username"] . "!" . '<br>';
        } else {
            echo "Welcome, guest" . '<br>';
            setcookie("username", rand(0, 10), time() + 5);
        }

        session_start();

        if (!isset($_SESSION["user_id"])) {
            $_SESSION["user_id"] = uniqid();
        }

        echo "User ID for sesh: " . $_SESSION["user_id"] . '<br>';
        ?>
    </main>

</body>

</html>