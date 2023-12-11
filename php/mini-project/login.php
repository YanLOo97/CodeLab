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
                        <h3>Log in</h3>
                        <form action="">
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control">
                            </div>
                            <button type="submit" class="btn bg-dark text-white">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>