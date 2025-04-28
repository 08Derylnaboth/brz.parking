<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/slider-bg.jpg" alt="">
    </div>
    <!-- header section starts -->

    @include('home.header')

    <!-- end header section -->

    <!-- slider section -->

    @include('home.slider')

    <!-- end slider section -->
  </div>

  <!-- about section -->

  @include('home.body')

  <!-- end client section -->

  <!-- info section -->

  @include('home.footer')

    <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js">
  </script>
  <!-- nice select -->
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>

</body>

</html>