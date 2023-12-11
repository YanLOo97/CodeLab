<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-3">
                <div class="text-center mb-3">
                    <a href="./login.php">
                        <button class="btn bg-primary text-white w-100">login</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./register.php">
                        <button class="btn bg-success text-white w-100">Register</button>
                    </a>
                </div>
                <div class="text-center mb-3">
                    <a href="./logout.php">
                        <button class="btn bg-danger text-white w-100">logout</button>
                    </a>
                </div>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h3>Register</h3>
                        <form method="POST">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Confirm password</label>
                                <input type="password" name="confirmPassword" class="form-control">
                            </div>
                            <button type="submit" name="register" class="btn bg-dark text-white">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    session_start();

    function checkStrongPassword($password)
    {
        $upperStatus = false;
        $lowerStatus = false;
        $numberStatus = false;
        $specialStatus = false;

        if (preg_match('/[A-Z]/', $password)) {
            $upperStatus = true;
        }
        if (preg_match('/[a-z]/', $password)) {
            $lowerStatus = true;
        }
        if (preg_match('/[0-9]/', $password)) {
            $numberStatus = true;
        }
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
            $specialStatus = true;
        }

        if ($upperStatus && $lowerStatus && $numberStatus && $specialStatus) {
            echo true;
        } else {
            echo false;
        }
    }

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if ($name != "" && $email != "" && $password != "" && $confirmPassword != "") {
            if (strlen($password) >= 6) {
                if ($password == $confirmPassword) {
                    if (checkStrongPassword($password)) {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                        echo "Register success!";
                    } else {
                        echo "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
                    }
                } else {
                    echo "Passwords do not match!";
                }
            } else {
                echo "Passwords Length must be at least 6";
            }
        } else {
            echo "All fields are required!";
        }
    }
    ?>
</body>

</html>