<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CandleStone Rupali Bank Growth Fund</title>
    <script
        src="https://kit.fontawesome.com/8fcf1eb3ce.js"
        crossorigin="anonymous"
    ></script>


    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    


    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <!-- Data Table  -->
  
    <link href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css"
    /> -->

</head>
<body>
@include('frontend.layout.header')
<main>
    <div class="wrapper">
            @yield('content')
    </div>
</main>
@include('frontend.layout.footer')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <!-- Data Table  -->
  
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
    <script
      src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"
      type="text/javascript"
    ></script>
    <script src="./js/Carousel.js"></script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
      
      $(document).ready(function() {
    $('#example1').DataTable();
} );

$(document).ready(function() {
    $('#example2').DataTable();
} );

$(document).ready(function() {
    $('#example3').DataTable();
} );

$(document).ready(function() {
    $('#example4').DataTable();
} );
    </script>
    <script>
      $(".kCSlider").carousel({
        // the number of images to display
        num: 3,

        // max width of the active image
        maxWidth: 450,

        // min width of the active image
        maxHeight: 297,

        // enable auto play
        autoPlay: true,

        // autoplay interval
        showTime: 4000,

        // animation speed
        animationTime: 1000,

        // 0.0 - 1.0
        scale: 0.6,

        // the distance between images
        distance: 200,
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <!-- datepicker -->
    <script>

      $("#datepicker").datepicker({
        uiLibrary: "bootstrap4",
          format: "yyyy-mm-dd"
      });
      $("#datepicker2").datepicker({
        uiLibrary: "bootstrap4",
          format: "yyyy-mm-dd"
      });
    </script>
<!-- scriting part -->
</body>
</html>
