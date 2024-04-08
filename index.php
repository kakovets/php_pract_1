<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        a {
            color: #FFF;
        }

        body {
            padding: 2rem 20%;
            margin: 0;
            box-sizing: border-box;
            font-size: 20px;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 10px;
            background-color: #9900ff;
        }
    </style>
</head>


<body>

    <div style='margin: 2rem 0'>
        <span class='btn'>
            <a href="/basics.php">Basics</a>
        </span>
    </div>

    <div style='margin: 2rem 0'>
        <span class='btn'>
            <a href="/oop.php">OOP</a>
        </span>
    </div>

    <div style="padding: 20px"></div>
    <div style="border-top: 1px solid red"></div>
    <div style="padding: 20px"></div>


    <div style="display: flex; justify-content: space-between; gap:1rem;">

        <form method="GET" action="http.php">
            get porsche:
            <input type="text" name="getPorsche" placeholder="GET Porsche">
            <input type="submit">
        </form>

        <span>|</span>

        <form method="POST" action="http.php">
            post porsche:
            <input type="text" name="postPorsche" placeholder="POST Porsche">
            <input type="submit">
        </form>

    </div>


    <div style="padding: 20px"></div>
    <div style="border-top: 1px solid red"></div>
    <div style="padding: 20px"></div>


    <div style='margin: 2rem 0'>
        <span class='btn'>
            <a href="/cook_sess.php">Cookies & Sessions</a>
        </span>
    </div>

</body>




</html>