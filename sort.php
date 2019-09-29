<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sorting page">
  <meta name="author" content="Rahimbayli Sattar">

  <title>Sorting algorithms</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="img/icon.png">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">
  <link href="css/adjusted.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">Sorting</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="sort.php">Sort</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="algorithms.php">Algorithms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" target="_blank" href="https://device999.github.io/CV/">About Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="page-section" id="services">
    <div class="container">
    <h2 class="text-center mt-0">Sort yourself</h2>
      <hr class="divider my-4 black">
      <form method="post" action="results.php">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choose sorting algorithm</label>
    <select class="form-control" name="sort" id="exampleFormControlSelect1">
      <option value="1">Quicksort</option>
      <option value="2">Mergesort</option>
      <option value="3">In-place merge sort</option>
      <option value="4">Heapsort</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Input numbers</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="value" rows="3" placeholder="15, 52, 243"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" class="form-control btn btn-success"/>
  </div>
</form>
    </div>
  </section>


  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

</body>

</html>
