<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Heat MVMNT</title>
  <!-- bootstrap link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css ">
  <!-- font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js">

  </script>
  <!-- bootstrap script -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  
  
  <style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
       var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("back_end_search.php", {term: inputVal}).done(function(data){
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>

</head>
<body>

  <!-- navigation bar-->
  <section id='navbar'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">
   <img class='image'src="images/icon.png" width="50" height="50" alt="">
 </a>  <a class="navbar-brand" href="#">My Shooz</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
          <form class="form-inline my-2 my-lg-0">
             <div class="search-box">
             <input  class="form-control mr-sm-2" type="text" autocomplete="off" placeholder="Search..." />
           <div class="result"></div>
        </div>
          </form>
          <li class="nav-item dropdown middle">
       <a class="nav-link dropdown-toggle  my-dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon class="profileicon" name="person-circle-outline"></ion-icon>
       <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdown">
         <div class="inline">
            <button type="button" class="btn btn-outline-danger">SIGN UP</button>
            <button type="button" class="btn btn-outline-danger">LOGIN</button>
        </div>
          <a class="dropdown-item" href="#"></i>Shop</a>
         <a class="dropdown-item" href="#">orders</a>
         <a class="dropdown-item" href="#">address</a>
         <a class="dropdown-item" href="#"></i>Favourites</a>


     </li>

          <li class="nav-item middle">
            <i class="far fa-newspaper ">
            <a class="nav-link" href="#"></i>News </a>
          </li>
          <li class="nav-item middle">
            <i class="fas fa-shopping-bag  ">
            <a class="nav-link" href="#"></i>Releases</a>
          </li>

          <li class="nav-item middle">
            <i class="fas fa-envelope">
            <a class="nav-link " href="#"></i>Alerts</a>
          </li>
    <!--    <li class="nav-item middle">
            <i class="fas fa-home"></i>
            <a class="nav-link " href="#">Shop</a>
          </li> -->

        </ul>

      </div>
    </nav>

  </section>

<section id="footer">

    <footer id="footer">
  <i class=" social-icons fab fa-facebook"></i>
  <i class=" social-icons fab fa-twitter"></i>
  <i class=" social-icons fab fa-instagram"></i>
  <i class="social-icons fa fa-fw fa-envelope"></i>
    <p class="footer"> ©Copyright 2020 <a class="navbar-brand" href="#"><img class='image' src="images/icon.png" width="30" height="30" alt="">  </p>

    </footer>


</section>
  <!-- Footer -->




</body>

</html>



