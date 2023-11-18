
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Review 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
     @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap');

    #intro-example {
      height: 400px;
    }

    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }

    body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            margin: 0;
            font-family: "Josefin Sans", sans-serif;
            background-image: url('assets/bgh.jpg');
        }

        main {
            flex: 1;
        }

        footer {
            background: linear-gradient(180deg, rgba(59, 29, 10, 1) 0%, rgba(119, 62, 2, 1) 47%, rgba(59, 29, 10, 1) 100%);
            color: white;
            text-align: center;
            padding: 1rem;
            bottom: 0;
            width: 100%;
            position:fixed;
            height: 60px;

         }

  </style>


</head>
<body>
<?php require_once 'components/navbar.php'; ?>





<header>
   
  
  <div id="intro-example" class="p-5 text-center">
    <div class="mask " style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100 p-5">
        <div class="text-white">
          <h1 class="mb-3">Big Library</h1>
          <h5 class="mb-4">
          Discover art in your unique way
          </h5>
          <a class="btn btn-outline-light btn-lg m-2" href="book.php"
            role="button" rel="nofollow" target="_blank"><img src="assets/book.png" alt=""><h2>Book</h2></a>
          <a class="btn btn-outline-light btn-lg m-2" href="cd.php"
            target="_blank" role="button"><img src="assets/cd.png" alt=""><h2>CD</h2></a>
            <a class="btn btn-outline-light btn-lg m-2" href="dvd.php"
            target="_blank" role="button"><img src="assets/dvd.png" alt=""><h2>DVD</h2></a>
        </div>
      </div>
    </div>
  </div>
  
</header>



<?php require_once 'components/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>