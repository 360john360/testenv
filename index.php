<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NursingDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h1>Welcome to The International Nursing Database</h1>
      <p class="lead">Hi, and welcome to the international nursing database for overseas nursing. Find all nurses that have been recruited into the UK from various countries. </p>
      <form class="mb-4">
        <div class="form-row">
          <div class="col-auto">
            <label for="email" class="sr-only">Email address</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Enter email">
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Sign up</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <img src="https://i2-prod.walesonline.co.uk/incoming/article14894059.ece/ALTERNATES/s615/RNP_MAI_081113_NHS01JPG.jpg" alt="Medical staff caring for a patient" class="img-fluid rounded">
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

<style>
  h1 {
    font-weight: bold;
    font-size: 3rem;
  }
  p {
    font-size: 1.25rem;
    line-height: 1.5;
  }
  .form-control {
    font-size: 1.25rem;
  }
  .btn-primary {
    background-color: #337ab7;
    border-color: #2e6da4;
  }
  .btn-primary:hover {
    background-color: #2e6da4;
    border-color: #2e6da4;
  }
  img {
    object-fit: cover;
  }
</style>

<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    const email = document.querySelector('#email').value;
    alert(`Thank you for signing up! You will receive our newsletter and job alerts at ${email}.`);
    form.reset();
  });
</script>
