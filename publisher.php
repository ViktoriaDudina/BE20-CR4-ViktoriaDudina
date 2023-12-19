<?php
require_once 'components/db_connect.php';

$card = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `library` WHERE publisher_name = (SELECT publisher_name FROM `library` WHERE id = $id)";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        

        while ($row = mysqli_fetch_assoc($result)) {
            $publisher_name = $row['publisher_name'];

            $card .= "
            <div class='p-2'>
                <div class='card'>
                    <img src='assets/{$row['picture']}' class='card-img-top mt-3' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>{$row['title']}</h5>
                        <hr>
                        <p class='card-text'>Status: {$row['status']}</p>
                        <p class='card-text'>ISBN: {$row['ISBN']}</p>
                        <p class='card-text'>Category: {$row['type']}</p>
                        <p class='card-text'>Author: {$row['author_first_name']} {$row['author_last_name']}</p>
                        <p class='card-text'>Publisher name: <a href='publisher.php?id={$row['id']}'> {$row['publisher_name']} </a></p>
                        <p class='card-text'>Publisher address: {$row['publisher_address']}</p>
                        <p class='card-text'>Publisher date: {$row['publish_date']}</p>
                        <p class='card-text'>Short description: {$row['short_description']}</p>
                        <a href='update.php?id={$row['id']}' class='btn btn-warning'>Update</a>
                        <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
                    </div>
                </div>
            </div>
            ";
        }
    }
} else {
    echo "<h1>Error: This publisher ID not provided</h1>";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
        body {
            background-image: url("assets/bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            font-family: "Josefin Sans", sans-serif;
        }
        .card-img-top {
            width: 25%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            object-fit: cover;
        }

        h1{ 
            display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 6%;
  background: url("assets/bg5.jpg");
  padding-top: 40px;
  padding-right: 30px;
  padding-bottom: 40px;
  padding-left: 80px;
            border:  6px solid;
            border-color: #773E02FF;
            border-radius: 30px;
    }

    </style>
</head>
<body>

<?php require_once 'components/navbar.php'; ?>

<div class="container">
   <h1>All products from publisher: &nbsp; <b>  <?php echo $publisher_name; ?> </b></h1>; 
   <?= $card; ?>
</div>

<?php require_once 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
