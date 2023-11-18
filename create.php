<?php
    require_once 'components/db_connect.php';
    require_once 'components/fileUpload.php';

    if(isset($_POST["Create"])){
        $title = $_POST["title"];
        $picture = fileUpload($_FILES["picture"]);
        $ISBN = $_POST["ISBN"];
        $short_description = $_POST["short_description"];
        $type = $_POST["type"];
        $author_first_name = $_POST["author_first_name"];
        $author_last_name = $_POST["author_last_name"];
        $publisher_name = $_POST["publisher_name"];
        $publisher_address = $_POST["publisher_address"];
        $publish_date = $_POST["publish_date"];
        
        
        

        $sql = "INSERT INTO `library` (`title`, `picture`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) 
        VALUES ('$title', '$picture[0]', '$ISBN', '$short_description', '$type', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publish_date')";


        if(mysqli_query($conn, $sql)){
            echo "
            <div class='alert alert-success' role='alert'>
                New product created!
            </div>";
        }
        else {
            echo "
            <div class='alert alert-danger' role='alert'>
                Something went wrong!
            </div>";
        }
    }

    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
 @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');
body {
    background-image: url("assets/bg5.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: "Josefin Sans", sans-serif;
}
</style>

</head>
<body>
    <?php require_once 'components/navbar.php' ?>

    <div class="container">
        <form class="m-5" action="" method="post" enctype="multipart/form-data">
            
        <br>
        <label class="form-label">
            Title: 
        </label>
        <input type="text" name="title" placeholder="Title" class="form-control">
    
    <br>

        <label class="form-label"> 
            Type:
        </label>
        <select name="type">
              <option value="book">Book</option>
              <option value="CD">CD</option>
              <option value="DVD">DVD</option>
         </select>
         <br>
         <br>

         <label class="form-label">
         ISBN:
        </label>
             <input type="text" name="ISBN" placeholder="ISBN" class="form-control">
         
         <br>

         <label class="form-label">
            First name of author:
        </label> 
            <input type="text" name="author_first_name" placeholder="First name of author" class="form-control">
        
        <br>

        <label class="form-label">
            Last name of author:
        </label>  
        <input type="text" name="author_last_name" placeholder="Last name of author" class="form-control">
       
       <br>
    

       <label class="form-label"> 
       Name of publisher:
    </label> 
        <input type="text" name="publisher_name" placeholder="Name of publisher" class="form-control">
      
      <br>

      <label class="form-label">
        Address of publisher:
    </label> 
        <input type="text" name="publisher_address" placeholder="Address of publisher" class="form-control">
       
       <br>

       <label class="form-label"> 
        Date of publication:
    </label> 
        <input type="date" name="publish_date" placeholder="Date of publication" class="form-control">
      
      <br>

      <label class="form-label"> 
      Short description of the product:
    </label> 
        <input type="textarea" name="short_description" placeholder="Short description of the product" class="form-control">
      
      <br>

      <label class="form-label">Image 
          </label>
        <input type="file" name="picture" class="form-control">        
      
      <br>

        <input type="submit" name="Create" value="Create" class="btn btn-success">
     

    </form>
    </div>
    
    <?php require_once 'components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>