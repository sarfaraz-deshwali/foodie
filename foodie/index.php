<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Bootstrap  -->

  <!-- localcss -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- localcss -->




  <title>Foodie.com</title>
</head>
<body>


  <!-- nav -->

  <nav class="navbar navbar-expand-lg navbar-light bg-nav" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <img src="./static/short_logo.png" class="navbar-logo">

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ">Contact</a>
        </li> <li class="nav-item">
          <a class="nav-link ">Aboutz</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- nav -->


<!-- slider -->

<div id="carouselExampleDark" class="carousel carousel-dark slide py-2"  data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://images.hdqwalls.com/wallpapers/bthumb/raspberry-good-fruit-plant-4k-um.jpg" class="d-block slide-img w-100"  alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://images.hdqwalls.com/wallpapers/bthumb/macaroon-cookies-jv.jpg" class="d-block slide-img w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.hdqwalls.com/wallpapers/bthumb/pizza-baked-chesse-spicy-7t.jpg" class="d-block slide-img w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- slider -->


<!-- h1 -->
<div class=" text-center mx-auto p-4"> <h1 class="fw-bolder"> Our Product.</h1></div>
<!-- h1 -->


<!-- card -->

<div class="album py-5">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


     <div class="col">
       <div class="card" style="width: 18rem;">
        <img src="https://images.hdqwalls.com/wallpapers/bthumb/hot-spicy-burger-ys.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Fast Food</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>



    <div class="col ">
     <div class="card" style="width: 18rem;">
      <img src="https://images.hdqwalls.com/wallpapers/bthumb/coffee-beside-coffee-beans-pp.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Coffee</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>


  <div class="col">
   <div class="card" style="width: 18rem;">
    <img src="https://images.hdqwalls.com/wallpapers/bthumb/smoothie-food-8k-3w.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cold Drink</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>
</div>
</div>

<!-- card -->


<!-- new add -->

<div class=" text-center  w-50 py-5 m-auto">
  <div  class="container">
    <div  class="justify-content-center mb-lg-5">
      <div class="col-lg-9 mb-5 mb-lg-0 text-center">
        <div  class="badge bg-primary-soft text-primary fw-500 mb-2">Now available!
        </div>
        <h1  class="display-4 fw-600 fw-bolder mb-3">DESI TADKA</h1>

        <p class="lead mb-4">Contact forms can be tricky, so we built
         <strong class="text-dark">Start Bootstrap Forms. </strong>In minutes, you can set up your form and start getting form submissions straight to your inbox.</p>

         <a class="btn btn-primary btn-lg fw-500 shadow mx-2">Try it free</a>
         <a  class="btn btn-primary-soft text-primary btn-lg fw-500 mx-2">See how it works</a>
       </div>
     </div>
   </div>                                                                                                
 </div>
</div> 

<!-- new add -->


<!-- big card -->

<hr class="featurette-divider">
<div class="row featurette p-5">
  <div class="col-md-7">
    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
  </div>
  <div class="col-md-5">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" style="height: 350px;"  role="img" aria-label="Placeholder: 500x350" src="https://i.pinimg.com/originals/0a/65/e7/0a65e70000192b80bf7cdf0b29e9d65a.jpg"><title>Placeholder</title>

  </div>
</div>
<hr class="featurette-divider">

<div class="row featurette p-5">
  <div class="col-md-7 order-md-2">
    <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
    <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
  </div>
  <div class="col-md-5 order-md-1">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" style="height: 350px;"  role="img" aria-label="Placeholder: 500x350" src="https://bestlifeonline.com/wp-content/uploads/sites/3/2019/07/spicy-food-1.jpg?fit=1200%2C800&ssl=1"><title>Placeholder</title>

    </div>
  </div>  
 

 <hr class="featurette-divider">
<div class="row featurette p-5">
  <div class="col-md-7">
    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
    <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
  </div>
  <div class="col-md-5">
    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" style="height: 350px;"  role="img" aria-label="Placeholder: 500x350" src="https://www.adotrip.com/public/images/blogs/master_images/60ed723c9ea0f-Cover_Image_Blog.jpg"><title>Placeholder</title>

  </div>
</div>
<!-- big card -->

</body>
</html>
