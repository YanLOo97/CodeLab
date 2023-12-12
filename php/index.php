<?php
echo "<h1 style=\"text-align: center;\">This is php </h1>";

$name = "Yan Lin Oo";                     //variable declaration
var_dump($name);
print($name);
print_r($name);

$array = ['one', 'two', 'three'];         //array

$assoArray = [                          //associated arrray
    'name' => 'mgmg',
    'role' => 'developer'
];

echo "<pre>";
var_dump($assoArray);                 //output

$result = $name == "Yan Lin Oo" ? "Yes" : "no";             //ternary operator
echo "$result";

$car = ['bmw', 'toyota', 'honda'];

for ($i = 0; $i < count($car); $i++) {              //loops
    echo $car[$i] . '<br>';
}

foreach ($car as $item) {
    echo $item . '<br>';
}

function outputmessage($num1, $num2)
{              //function
    echo "The result is " . $num1 + $num2;
}

outputmessage(10, 14);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Methods</h3>

    <p style="margin-left: 50px;">
        <!-- string methods -->
        strlen() <br>
        str_word_count() <br>
        strrev() <br>
        str_shuffle() <br>
        strpos(str,search) <br>
        substr(str, start, end) <br>
        strtoupper() <br>
        strtolower() <br>
        strip_tags() <br>
        str_replace(find,new,string) <br>
        trim() <br> <!-- delete spaces left and right -->
        str_split(string,arg) <br>
        explode(arg,string) <br>
        <!-- math methods -->
        pow(x,y) <br>
        sqrt(x) <br>
        abs(x) <br>
        round(x) <br>
        ceil(x) <br>
        floor(x) <br>
        rand(start,end) <br>
        max() <br>
        min() <br>
        <!-- array methods -->
        count() <br>
        current() <br>
        end() <br>
        array_rand() <br>
        array_sum() <br>
        range(start,end) <br>
        in_array(string,$array) <br>
        array_key_exists() <br>
        array_keys() <br>
        array_values() <br>
        inplode() <br> join() <br>
        array_push()pop() unshift()shift() <br>
        sort() <br>
        shuffle() <br>
    </p>

    <hr>

    <?php

    define("NAME", "yanlinoo");
    $name = "Yan lin Oo";
    function showMsg()
    {
        global $name;
        echo $name;
    }
    showMsg();

    // Encrypt Decrypt
    $encName = md5($name);
    $secName = sha1($name);

    $password = "123456";
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    echo "<br>" . $hashPassword;
    echo "<br>";
    echo password_verify("123456", $hashPassword) ? "same password" : "wrong password";

    //date time
    date_default_timezone_set("Asia/Yangon");
    echo date("Y-m-d h:i:a") . "<br>";

    $currentDate = date_create(date("Y-m-d"));
    date_add($currentDate, date_interval_create_from_date_string("5 days"));
    echo date_format($currentDate, "Y-m-d") . "<br>";
    echo cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));

    //include | require example usage database connection
    include("home.php"); //continues the script execution even if the included file is not found or there's an error while including it.
    include_once("home.php");
    require("home.php"); //stops the script execution if the file is not found or there's an error while including it.
    require_once("home.php");

    /*php file structure
        asset
            css
            js
            img
        view
            index.php
            home.php
        controller
            index.php
            home.php
        helper
            base.php
        template
            header.php
            footer.php
        */
    ?>
    <!-- Request/Response  -->
    <!-- GET method show data on URL/ POST method -->
    <h3>Client page</h3>
    <form action="./server.php" method="POST" enctype="multipart/form-data"><!-- for input file -->
        Name<input type="text" name="Name">
        Choose image<input type="file" name="image" id="">
        <input type="submit" value="Send">
    </form>
    <?php
    echo "<pre>";
    var_dump($_REQUEST);
    var_dump($_GET); //  can use $_POST
    var_dump($_FILES); //  will show file data
    ?>

    <!-- File upload -->
    <h3>File upload</h3>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Save" name="storeFile">
    </form>

    <?php
    if (isset($_POST['storeFile'])) {
        $img = $_FILES['image'];
        $name = $img['name'];
        $tmp_name = $img['tmp_name'];

        $target_dir = "uploads/" . $name;
        move_uploaded_file($tmp_name, $target_dir);
        echo "File uploaded";
    }
    ?>

    <!-- Session -->
    page 1
    <?php
    session_start();
    $_SESSION['userName'] = "Yan Lin Oo Session";
    echo "Session success"
    ?>
    page 2
    <?php
    session_start();
    echo "Welcome From " . $_SESSION['userName'];
    session_destroy();
    ?>

    <!-- cookie -->
    page 1 cookie create
    <?php
    setcookie("userName", "YanLinOo", time() + 10);
    echo "Cookie created successfully";
    ?>
    page 2
    <?php
    echo "<br>";
    echo $_COOKIE['userName'];
    ?>

    <!-- password hash -->
    <form method="post">
        Email<input type="email" name="userEmail"><br>
        Password<input type="password" name="userPassword"><br>
        <!-- <input type="submit" value="log in" name="loginBtn"> -->
        <button type="submit" name="loginBtn">Login</button>
    </form>

    <?php
    $name = "yanlinoo@mail.com";
    $password = '$2y$10$bJzFQFMhkj.K.JOpTrRjOOdvb6QD4NplH5XDm5jIfl2JFh4l7nDGe';
    // password_hash($password, PASSWORD_BCRYPT);

    if (isset($_POST['loginBtn'])) {
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];

        if ($userEmail == $name && password_verify($userPassword, $password)) {
            echo "login success";
        } else {
            echo "login fail";
        }
    }
    ?>

    <!-- database connection -->
    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'test');

    if (!$connection) {
        die('Connection error: ' . mysqli_connect_error());
    } else {
        echo 'Connection successful';
    }
    ?>

    <!-- To do list -->
    <form method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="taskName" id="name" placeholder="Enter your task...">
            <button name="addBtn">Add</button>
        </div>
    </form>
    <!-- create task -->
    <?php
    require_once("./db_connection.php");

    if (isset($_POST['addBtn'])) {
        $taskName = $_POST['taskName'];

        if (empty(trim($taskName))) {
            echo "Please enter a task name";
            return;
        } else {
            $sql = "INSERT INTO work (name) VALUES ('$taskName')";

            if (mysqli_query($conn, $sql)) {
                header("Location: ./read.php");
            } else {
                echo "Error adding task: " . mysqli_error($conn);
            }
        }
    }
    ?>
    <!-- read task -->
    <h1>Tasks List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "db_connection.php";

            $sql = "SELECT * FROM work";
            $query = mysqli_query($conn, $sql);
            $totalrow = mysqli_num_rows($query);

            while ($row = mysqli_fetch_assoc($query)) {

                $time = date('Y.M.d|g:i:a', strtotime($row['created_at']));

                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $time . "</td>";
                echo "<td>
                        <a href='update.php'>Update</a>|
                        <a href='./delete.php?id={$row['id']}'>Delete</a>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="./create.php">Create new task</a>

    <!-- delete task -->
    <?php
    require_once('db_connection.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM work WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: read.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    ?>
</body>

</html>