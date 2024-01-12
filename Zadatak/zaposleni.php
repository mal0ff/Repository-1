<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Zaposleni</title>
    <style>
        .card {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-control {
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <?php include('message.php') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Employed
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" name="adress" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Position</label>
                                <input type="text" name="position" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Start date</label>
                                <input type="text" name="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Supervisor</label>
                                <input type="text" name="supervisor" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Status</label>
                                <input type="text" name="status" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>JMBG</label>
                                <input type="text" name="jmbg" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_info" class="btn btn-primary">Save Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
