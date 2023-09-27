<!DOCTYPE html>
<html>
<head>
  <title>International Nursing Recruitment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Header styling */
    .header {
      background-image: linear-gradient(135deg, #5a009d 0%, #007bff 100%);
      border-bottom: 1px solid #dee2e6;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 0.5rem 1rem;
    }

    .navbar-brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: #fff;
    }

    .navbar-brand img {
      height: 50px;
      width: auto;
    }

    .navbar-nav .nav-item .nav-link {
      color: #ffffff;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link:hover {
      color: #cccccc;
    }

    .btn {
      font-weight: bold;
      border-radius: 0.25rem;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background-color: #32cd8e;
      border-color: #32cd8e;
    }

    .btn-primary:hover {
      background-color: #28a46d;
      border-color: #28a46d;
    }

    .fa {
      color: #ffffff;
      font-size: 1.2rem;
      margin-right: 0.5rem;
      transition: all 0.3s ease;
    }

    .fa:hover {
      color: #cccccc;
    }

    /* Custom changes */
    .navbar-nav .nav-item {
      position: relative;
    }

    .navbar-nav .nav-item .nav-link {
      padding-right: 2rem;
      padding-left: 2rem;
    }

    .navbar-nav .nav-item .nav-link:after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 2px;
      background-color: #ffffff;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link:hover:after {
      width: 100%;
    }

    .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
      display: block;
      opacity: 1;
      transform: translateY(0);
      visibility: visible;
      transition: all 0.3s ease;
    }

    .navbar-nav .nav-item.dropdown .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(-10px);
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      background-color: #fff;
      box-shadow: 0 4px 8px rgba(0,

0, 0, 0.1);
border-radius: 0.25rem;
padding: 1rem;
}
      .navbar-nav .nav-item.dropdown .dropdown-menu a {
  color: #212529;
}

.navbar-nav .nav-item.dropdown .dropdown-menu a:hover {
  color: #007bff;
}

.navbar-nav .nav-item.dropdown .dropdown-toggle::after {
  content: "\f078";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  color: #ffffff;
  margin-left: 0.5rem;
  transition: all 0.3s ease;
}

.navbar-nav .nav-item.dropdown:hover .dropdown-toggle::after {
  transform: rotate(180deg);
}
  </style>
</head>
<body>
  <header class="header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img src="images/nhs-logo.png" alt="NHS Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="nurses.php">Nurses</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Service 1</a>
                <a class="dropdown-item" href="#">Service 2</a>
                <a class="dropdown-item" href="#">Service 3</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a href="#" class="btn btn-primary mr-2">Log In</a>
            </li>
            <li class="nav-item">
              <a href="#" class="btn btn-primary"><i class="fa fa-user"></i> Sign Up</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
</body>
</html>
      
