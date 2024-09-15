
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <title>Foodies</title>
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
 
  <!-- OWN CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive-style.css">
</head>

<body>
  <!-- header design -->
  <header>
    <nav class="navbar navbar-expand-lg navigation-wrap">
      <div class="container">
        <a class="navbar-brand" href="#"><img decoding="async" src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-stream navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#explore-food">Explore Foods</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonial">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">FAQ</a>
            </li>
            <li><button class="main-btn">1200 345 123</button></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
   
  <!-- section-1 top-banner -->
  <section id="home">
    <div class="container-fluid px-0 top-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <h1>Good food choices are good investments.</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum amet leo.
            </p>
            <div class="mt-4">
              <button class="main-btn">Order now <i class="fas fa-shopping-basket ps-3"></i></button>
              <button class="white-btn ms-lg-4 mt-lg-0 mt-4">Order now <i class="fas fa-angle-right ps-3"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section-2 counter -->
  <section id="counter">
    <section class="counter-section">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count1"></span>+
            </h2>
            <p>SAVINGS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count2"></span>+
            </h2>
            <p>PHOTOS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count3"></span>+
            </h2>
            <p>ROCKETS</p>
          </div>
          <div class="col-md-3 mb-lg-0 mb-md-0 mb-5">
            <h2>
              <span id="count4"></span>+
            </h2>
            <p>GLOBES</p>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- section-3 about-->
   <section id="about">
     <div class="about-section wrapper">
       <div class="container">
         <div class="row align-items-center">
           <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
             <div class="card border-0">
               <img decoding="async" src="images/img/img-1.png" class="img-fluid">
             </div>
           </div>
           <div class="col-lg-5 col-md-12 text-sec">
            <h2>We pride ourselves on making real food from the best ingredients.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit
              amet leo. Mauris feugiat erat tellus.</p>
              <button class="main-btn mt-4">Learn More</button>
           </div>
         </div>
       </div>
       <div class="container food-type">
         <div class="row align-items-center">
           <div class="col-lg-5 col-md-12 text-sec mb-lg-0 mb-5">
            <h2>We make everything by hand with the best possible ingredients.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit
              amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from the countries
              Vokalia and Consonantia, there live the blind texts.</p>
            <ul class="list-unstyled py-3">
              <li>Etiam sed dolor ac diam volutpat.</li>
              <li>Erat volutpat aliquet imperdiet.</li>
              <li>purus a odio finibus bibendum.</li>
            </ul> 
            <button class="main-btn mt-4">Learn More</button>
           </div>
           <div class="col-lg-7 col-md-12">
             <div class="card border-0">
               <img decoding="async" src="images/img/img-2.png" class="img-fluid">
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-3 story-->
   <section id="story">
     <div class="story-section">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="text-content">
              <h2>When a man's stomach is full it makes no
                difference whether he is rich or poor.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio
                finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                <button class="main-btn mt-3">Read More</button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-4 explore food-->
   <section id="explore-food">
     <div class="explore-food wrapper">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="text-content text-center">
              <h2>Explore Our Foods</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in sit
                amet leo. Mauris feugiat erat tellus. Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
             </div>
           </div>
         </div>
         <div class="row pt-5">
           <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
             <div class="card">
               <img decoding="async" src="images/img/img-3.jpg" class="img-fluid">
               <div class="pt-3">
                <h4>Rainbow Vegetable Sandwich</h4>
                <p>Time: 15 - 20 Minutes | Serves: 1</p>
                <span>$10.50 <del>$11.70</del></span>
                <button class="mt-4 main-btn">Order Now</button>
              </div>
             </div>
           </div>
           <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card">
              <img decoding="async" src="images/img/img-4.jpg" class="img-fluid">
              <div class="pt-3">
                <h4>Vegetarian Burger</h4>
                <p>Time: 30 - 45 Minutes | Serves: 1</p>
                <span>$9.20<del>$10.50</del></span>
                <button class="mt-4 main-btn">Order Now</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
            <div class="card">
              <img decoding="async" src="images/img/img-5.jpg" class="img-fluid">
              <div class="pt-3">
                <h4>Raspberry Stuffed French Toast</h4>
                <p>Time: 10 - 15 Minutes | Serves: 1</p>
                <span>$12.50<del>$13.20</del></span>
                <button class="mt-4 main-btn">Order Now</button>
              </div>
            </div>
          </div>
         </div>
       </div>
     </div>
   </section>

  <!-- Section-5 testimonial-->
   <section id="testimonial">
     <div class="wrapper testimonial-section">
       <div class="container text-center">
         <div class="text-center pb-4">
           <h2>Testimonial</h2>
         </div>
         <div class="row">
          <div class="col-sm-12 col-lg-10 offset-lg-1">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="carousel-caption">
                    <img decoding="async" src="images/review/review-1.jpg">
                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                      live the blind texts. "</p>
                    <h5>Johnthan Doe - UX Designer</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img decoding="async" src="images/review/review-2.jpg">
                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                      live the blind texts. "</p>
                    <h5>Maccy Doe - Front End</h5>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="carousel-caption">
                    <img decoding="async" src="images/review/review-1.jpg">
                    <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                      live the blind texts. "</p>
                    <h5>Johnthan Doe - UX Designer</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
     </div>
   </section>

  <!-- section-6 faq-->
   <section id="faq">
     <div class="faq wrapper">
       <div class="container">
         <div class="row">
           <div class="col-sm-12">
             <div class="text-center pb-4">
              <h2>Frequently Asked Questions</h2>
             </div>
           </div>
         </div>
         <div class="row pt-5">
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>Is Foodies Bread really baked fresh each day?</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
            </p>
           </div>
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>Do you bake breads containing animal fats or products?</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
            </p>
           </div>
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>Can I order your products online?</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
            </p>
           </div>
           <div class="col-sm-6 mb-4">
            <h4><span>~</span>When are you opening a shop near me?</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language.
            </p>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-7 book-food-->
   <section id="book-food">
     <div class="book-food">
       <div class="container book-food-text">
         <div class="row text-center">
           <div class="col-lg-9 col-md-12">
            <h2>Baked fresh daily by bakers with passion.</h2>
           </div>
           <div class="col-lg-3 col-md-12 mt-lg-0 mt-4">
             <button class="main-btn">Learn more</button>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-8 newslettar-->
   <section id="newslettar">
     <div class="newslettar wrapper">
       <div class="container">
         <div class="row">
           <div class="sol-sm-12">
             <div class="text-content text-center pb-4">
              <h2>Hurry up! Subscribe our newsletter
                and get 25% Off</h2>
              <p>Limited time offer for this month. No credit card required. </p>
             </div>
             <form class="newsletter">
               <div class="row">
                 <div class="col-md-8 col-12">
                   <input class="form-control" placeholder="Email Address here" name="email" type="email">
                 </div>
                 <div class="col-md-4 col-12">
                   <button class="main-btn" type="submit">Subscribe</button>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </section>

  <!-- section-9 footer-->
  <footer id="footer">
    <div class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <a class="footer-link" href="#">Register</a>
            <a class="footer-link" href="#">Forum</a>
            <a class="footer-link" href="#">Affiliate</a>
            <a class="footer-link" href="#">FAQ</a>
            <div class="footer-social pt-4 text-center">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-dribbble"></i></a>
              <a href="#"><i class="fab fa-linkedin"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="footer-copy">
              <div class="copy-right text-center pt-5">
                <p class="text-light">© 2021. Foodies. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
   

  <!-- JS Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
  <!-- own js -->
  <script src="js/main.js"></script>
</body>
</html>

