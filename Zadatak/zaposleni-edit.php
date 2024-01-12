<?php
session_start();
require 'databasecon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Employed Edit</title>
  </head>
  <body>
    <div class="contaner mt-5">

         <?php include('message.php') ?>
    
        <div class="row">
          <div class="col-md-12">
           <div class="card">
            <div class="card-header">
              <h4> Employed Edit
                <a href="index.php" class="btn btn-danger float-end">BACK</a>
               </h4>
            </div>
            <div class="card-body">

            <?php
 if(isset($_GET['name']))
{
    $employed_name = $_GET['name'];
    $query = "SELECT * FROM employed WHERE name='$employed_name'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $employed = mysqli_fetch_array($query_run);
        //print_r($employed);
        ?>

       

                <form action="code.php" method="POST">
                
                <div class="mb-3">
                
                <input type="hidden" name="id" value="<?= $employed['id'];?>" class="form-control">
                 </div><div class="mb-3">

                 <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="<?= $employed['name'];?>" class="form-control">
                 </div><div class="mb-3">
                <label>Email</label>
                <input type="text" name="email" value="<?= $employed['email'];?>" class="form-control">
                 </div><div class="mb-3">
                <label>Adress</label>
                <input type="text" name="adress" value="<?= $employed['adress'];?>" class="form-control">
                 </div>
                 <div class="mb-3">
                <label>Position</label>
                <input type="text" name="position" value="<?= $employed['position'];?>" class="form-control">
                 </div>
                 <div class="mb-3">
                <label>Start date</label>
                <input type="text" name="date" value="<?= $employed['date'];?>" class="form-control">
                 </div>
                 <div class="mb-3">
                <label>Supervisor</label>
                <input type="text" name="supervisor" value="<?= $employed['supervisor'];?>" class="form-control">
                 </div>
                 <div class="mb-3">
                <label>Status</label>
                <input type="text" name="status" value="<?= $employed['status'];?>" class="form-control">
                 </div>
                 <div class="mb-3">
                <label>JMBG</label>
                <input type="text" name="jmbg" value="<?= $employed['jmbg'];?>" class="form-control">
                 </div>
                 <div class="mb-3">
                    <button type="submit" name="update_employed" class="btn btn-primary">Update Employed</button>
                    
                     
        <?php
    }
    else
    {
        echo "<h4> No such name found</h4>";
    }
}
?>
                 </div>
            </div>
        </div>
       </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>