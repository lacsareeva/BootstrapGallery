<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Photo Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Style the images */
    .gallery-img {
      width: 80%;
      height: auto; /* Make the height responsive */
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .gallery-img:hover {
      transform: scale(1.05);
    }

    /* Style the container */
    .gallery-container {
      margin-top: 30px;
    }

    /* Style the headings */
    .gallery-heading {
      font-size: 35px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center gallery-heading">Photo Gallery</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="1.jpg" class="gallery-img" alt="Image 1" height = "250px;" width="250px;">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="2.jpg" class="gallery-img" alt="Image 2" height = "250px;" width="250px;">
      </div>
      <!-- Add more columns with images as needed -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="3.jpg" class="gallery-img" alt="Image 3" height = "250px;" width="250px;">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="4.jpg" class="gallery-img" alt="Image 4" height = "250px;" width="250px;">
      </div>
      <!-- Add more columns with images as needed -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="5.jpg" class="gallery-img" alt="Image 5" height = "250px;" width="250px;">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="6.jpg" class="gallery-img" alt="Image 6" height = "250px;" width="250px;">
      </div>
      <!-- Add more columns with images as needed -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="7.jpg" class="gallery-img" alt="Image 7" height = "250px;" width="250px;">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="8.jpg" class="gallery-img" alt="Image 8" height = "250px;" width="250px;">
      </div>
      <!-- Add more columns with images as needed -->
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="9.jpg" class="gallery-img" alt="Image 9" height = "250px;" width="250px;">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="10.jpg" class="gallery-img" alt="Image 10" height = "250px;" width="250px;">
      </div>
      <!-- Add more columns with images as needed -->
    </div>
  </div>
</body>
</html>
