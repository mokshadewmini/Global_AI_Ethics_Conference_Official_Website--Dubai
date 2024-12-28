<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Global AI Ethics Conference|Pre-registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets\img\Global AI Ethics Conference Logo.svg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

<?php include "header.php";
         

// Assuming you have a MySQL connection, replace the placeholders with your actual credentials
$servername = "localhost";
$username = "globalaiethics_root";
$password = "Password@2020*";
$dbname = "globalaiethics_leads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<main id="main" class="main-page">
      <!-- ======= Speaker Details Sectionn ======= -->
      <section id="speakers-details">
        <div class="container">
          <div class="section-header">
            <h2>PRE-REGISTRATION</h2>
         
          </div>
  
         

            <div class="col-md-12">
              <div class="details">
                
            
<?php 

// Get form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


// Insert data into the 'users' table
$sql = "INSERT INTO users (full_name, email, phone) VALUES ('$full_name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "<h4>Registration is successful!</h4><br>We will contact you shortly. If you have any questions, please, kindly reach us at info@globalaiethics.com. Thank you";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>

       </div>
            </div>
       
      </section>
    </main>
    <!-- End #main -->

    <?php include "footer.php"; ?>

    <a href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="script.js"></script>
  </body>
</html>



