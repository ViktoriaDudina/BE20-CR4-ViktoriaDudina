<?php
    require_once 'components/db_connect.php';

    $sql = "SELECT * FROM `library`  WHERE `type` = 'DVD'";
    $result = mysqli_query($conn, $sql);
    $cards = "";

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $cards .= "
                <div class='p-2'>
                    <div class='card'>
                        <img src='assets/$row[picture]' class='card-img-top' alt='...'>
                        <div class='card-body d-flex flex-column'>
                            <h5 class='card-title'>$row[title]</h5>
                            <hr>
                            <p class='card-text'><b>Author</b>: $row[author_first_name] $row[author_last_name]</p>
                            <p class='card-text'><b>Short description</b>: <br> $row[short_description]</p>
                            <a href='details.php?id=$row[id]' class='btn btn-primary mt-auto'>Details</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }

    mysqli_close($conn);
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Review 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
body {

    background-image: url("assets/bg3.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: "Josefin Sans", sans-serif;
}
.card{
    height: 100%;
}

.card-img-top {
    width: 100%;
    height: 400px;
;
}
</style>



</head>
<body>
<?php require_once 'components/navbar.php'; ?>
 
<div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
            <?= $cards; ?>
        </div>
    </div>

    <?php require_once 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>