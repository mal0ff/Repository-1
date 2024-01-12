<?php
    session_start();
    require 'databasecon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Employment</title>
    <style>
        
        body {
            font-size: 14px;
            line-height: 1.5;
        }
        th, td {
            font-size: 1.1em;
            padding: 8px;
        }
        .btn {
            font-size: 1.1em;
            margin: 4px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <?php include('message.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Employed details</h2>
                        <a href="zaposleni.php" class="btn btn-primary float-end">Add Employed</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Start date</th>
                                    <th>Supervisor</th>
                                    <th>Status</th>
                                    <th>JMBG</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM employed";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0) {
                                        foreach($query_run as $employed) {
                                            ?>
                                            <tr>
                                                <td><?= $employed['name'] ?></td>
                                                <td><?= $employed['email'] ?></td>
                                                <td><?= $employed['adress'] ?></td>
                                                <td><?= $employed['position'] ?></td>
                                                <td><?= $employed['date'] ?></td>
                                                <td><?= $employed['supervisor'] ?></td>
                                                <td><?= $employed['status'] ?></td>
                                                <td><?= $employed['jmbg'] ?></td>
                                                <td>
                                                    <a href="zaposleni-view.php?name=<?= $employed['name'] ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="zaposleni-edit.php?name=<?= $employed['name'] ?>" class="btn btn-success btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        echo "<h5>No employed found</h5>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
</html>
