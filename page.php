<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>

<body>
  
    <?php
    include "database/selectdata.php";
    if (mysqli_num_rows($query) > 1):?>
        <?php while ($row = mysqli_fetch_array($query)):?>
                <div class="card">
                    <img class="card-img-top" src="<?php echo($row['gambar']);?>" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Content</p>
                    </div>
                    <img class="card-img-bottom" src="" alt="">
                </div>
        <?php endwhile;?>
   <?php endif; ?>
   
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>