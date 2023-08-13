<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mt-4">
        <div class="row ">
            <div class="col-3">
                <div class="text-center">
                    <a href="login.php">
                        <button class="btn bg-primary text-white mb-3" style="width:200px;">
                            Login
                        </button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="register.php">
                        <button class="btn bg-success text-white mb-3" style="width:200px;">
                            Register
                        </button>
                    </a>
                </div>
                <div class="text-center">
                    <a href="logout.php">
                        <button class="btn bg-danger text-white mb-3" style="width:200px;">
                            Logout
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-5">
                <div class="bg-success text-white text-center">
                    <b class="fs-1">Logout Success</b>
                </div>
            </div>
        </div>
    </div>
    <?php 
      session_start();

      session_destroy();
    ?>
</body>
<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

</html>