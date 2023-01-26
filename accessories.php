<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height ,width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Купить аксессуары для BBQ Tartar-meat Самара</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900|Roboto+Slab:400,700&amp;subset=cyrillic" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
	<link href="background-attachment/style.css" rel="stylesheet"> 
  	<link href="background-attachment/normalize.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/mk.png" type="image/png">
    <meta name="description" content="Магазин премиального мяса, крафтовых сыров, специй и акссессуаолв для BBQ TarTarMeat - выгодные цены, натуральные и качественные мясные и сырные изделия, большое количество специй"> 
    <meta name="keywords" content="Мясо, премиальное, сыры, крафтовые, купить, цена, продажа, Самара, аксессуары, BBQ, грилью, бургеры, барбекю, TarTar, мясная, лавка, магазин" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <style>
      .bg-ios__back{
        background-image: url(../img/items/accessoires/accessoires-bg.jpg);
      }

      @media screen and (max-device-width: 2000px) {
    .item-img, .test{
      height: 570px;
      width: 440px;
    }
    }
     @media screen and (max-device-width: 1500px) {
      .item-img, .test{
      height: 570px;
      width: 390px;
      }
    }
    @media screen and (max-device-width: 1000px) {
      .item-img, .test{
        height: 340px;
        width: 340px;
      }
    }
    @media screen and (max-device-width: 950px) {
      .item-img, .test{
         height: 340px;
        width: 340px;
      }
    }
    @media screen and (max-device-width: 800px) {
    	.item-img, .test{
        height: 340px;
        width: 340px;
    	}
  }
  @media screen and (max-device-width: 575px) {
    	.item-img, .test{
        height: 410px;
        width: 310px;
    	}
  }
  @media screen and (max-device-width: 400px) {
    	.item-img, .test{
        height: 340px;
        width: 260px;
    	}
  }
  @media screen and (max-device-width: 350px) {
    	.item-img, .test{
        height: 340px;
        width: 240px;
    	}
  }
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      /* display: flex; */
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .swiper-pagination-bullet-active {
     background-color: red !important;
    }
    .swiper-button-next,.swiper-button-prev{
      color: red;
    }
  </style>
  </head>

<body>
<button onclick="topFunction()" id="scrollBtn" title="Перейти к началу"><div class="arrow mx-auto"></div></button>
<div class="bg-ios">
    <div class="bg-ios__back"></div>
              <div class="row mt-2">
                <div class="col-xl-3 col-lg-3 col-md-4 col-ms-4 col-sm-4 col-12 mt-2 mx-auto px-0">
                  <a href="meat-list.php">
                    <h3 class="pb-3" style="text-align: center;">Мясная лавка</h3>
                  </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-ms-4 col-sm-4 col-12 mt-2 mx-auto px-0">
                  <a href="cheese-list.php">
                    <h3 class="pb-3" style="text-align: center;">Крафтовые сыры</h3>
                  </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-ms-4 col-sm-4 col-12 mt-2 mx-auto px-0">
                  <a href="spice-list.php">
                    <h3 class="pb-3" style="text-align: center;">Соусы и специи</h3>
                  </a>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-ms-4 col-sm-4 col-12 mt-2 mx-auto px-0">
                  <a href="accessories.php">
                    <h3 class="pb-3" style="text-align: center;">Грили и аксессуары BBQ</h3>
                  </a>
                </div> 
        <div class="container">          
          <div class="row">
            <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 mx-auto mt-5">
              <a class="" href="index.php"><img src="img/logo.svg" alt="TARTAR Meat market" class="img-fluid"></a>
            </div>
          </div>
          <div class="container">
            <div class="row" >
              <div class="col-md-12 col-lg-12 my-3 ">
                <div class="staff">
                  <div class="container">
                    <?php
                      include 'accessories-data.php'; 
                      $data = new SimpleXMLElement($xmlstr);                                        
                      for($i = 0; $i <= (count($data->grills->items->item)-1);$i++){
                        $name = $data->grills->items->item[$i]->name;
                        $description= $data->grills->items->item[$i]->description;
                        $function = explode(":", $data->grills->items->item[$i]->function);
                        $price = $data->grills->items->item[$i]->price;
                        $size = $data->grills->items->item[$i]->size;
                        $img =  explode(":", $data->grills->items->item[$i]->img);
                        echo("
                        <div class='row pt-5 mt-5'>
                          <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                            <div class='test  align-center'>
                              <div class='swiper mySwiper'>
                                <div class='swiper-wrapper'>");
                                foreach ($img as $im) {
                                echo("
                                  <div class='swiper-slide'style='color:black'>
                                   <img src='$im'class='align-center img-fluid item-img'>                                           
                                  </div>");}
                                echo("  </div>
                                <div class='swiper-pagination'></div>
                                <div class='swiper-button-next'></div>
                                <div class='swiper-button-prev'></div>
                              </div>
                            </div>
                          </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>
                            <div class='text text-center'>
                                <h3 class='mb-0 list-item-header text-underline'>$name</h3>
                            </div>
                            <div class='text pt-2 px-3 text-left'>
                              <span class='position px-3  pl-3 mb-2 text'>
                                $description
                              </span>
                            </div>
                            <div class='text pt-2 px-3 text-left'>
                              <span class='position mb-2 text'>
                                <h6 class='mb-0 list-item-header'>Размер:</h6>
                                  $size
                              </span>
                            </div>
                            <div class='text pt-2 text-center'>
                              <h4 class='mb-0 list-item-header'>Особенности:</h4>
                            </div>
                            <div class='text pt-2 text-left'>
                              <span class='position mb-2 text' style='font-size: 12pt;'>
                               <ul>");
                                   foreach ($function as $fun) {
                                       echo("<li>");
                                       echo($fun);
                                       echo("</li>");
                                      }
                            echo(" 
                                      </ul>
                              </span>
                            </div>
                                <div class='text pt-2 text-center'>
                                    <span class='position mb-2 text price'>$price</span>
                                </div>
                                <div class='text pb-2 pt-2 text-center'>
                                    <div id='btn-main'class='mx-auto my-auto' >
                                        <a id='btn-mes' href='tel:89178163030'>Заказать</a>
                                    </div>
                                </div>
                          </div>
                        </div>");}

                      for($i = 0; $i <= (count($data->accessories->items->item)-1);$i++){
                        $name = $data->accessories->items->item[$i]->name;
                        $description= $data->accessories->items->item[$i]->description;
                        $properties = explode(":", $data->accessories->items->item[$i]->properties);
                        $price = $data->accessories->items->item[$i]->price;
                        $img = $data->accessories->items->item[$i]->img;
                        echo("
                        <div class='row pt-5 mt-5'>
                            <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                              <img src='$img'class='align-center img-fluid item-img'></a>    
                            </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>
                            <div class='text text-center'>
                              <h3 class='mb-0 list-item-header text-underline'>$name</h3>
                            </div>
                            <div class='text pt-2 px-3 text-left'>
                              <span class='position pl-3 mb-2 text'>
                                $description
                              </span>
                            </div>
                            <div class='text pt-2 pl-3 text-left'>
                              <span class='position mb-2 text'>
                                <h6 class='mb-0 list-item-header'>Пищевая ценность:</h6>
                                <ul>");
                                  foreach ($properties as $prop) {
                                  echo("<li>");
                                  echo($prop);
                                  echo("</li>");
                                  }
                                  echo(" </ul>
                              </span>
                            </div>
                            <div class='text pt-2 text-center'>
                              <span class='position mb-2 text price'>$price</span>
                            </div>
                            <div class='text pb-2 pt-2 text-center'>
                              <div id='btn-main'class='mx-auto my-auto' >
                                <a id='btn-mes' href='tel:89178163030'>Заказать</a>
                              </div>
                            </div>
                          </div>  
                          </div> ");}


                      for($i = 0; $i <= (count($data->others->items->item)-1);$i++){
                        $name = $data->others->items->item[$i]->name;
                        $description = $data->others->items->item[$i]->description;
                        $price = $data->others->items->item[$i]->price;
                        $img =  explode(":", $data->others->items->item[$i]->img);
                        echo("
                        <div class='row pt-5 mt-5'>
                        <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                          <div class='test  align-center'>
                            <div class='swiper mySwiper'>
                              <div class='swiper-wrapper'>");
                              foreach ($img as $im) {
                              echo("
                                <div class='swiper-slide'style='color:black'>
                                 <img src='$im'class='align-center img-fluid item-img'>                                           
                                </div>");}
                              echo("  </div>
                              <div class='swiper-pagination'></div>
                              <div class='swiper-button-next'></div>
                              <div class='swiper-button-prev'></div>
                            </div>
                          </div>
                          </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>
                            <div class='text text-center'>
                              <h3 class='mb-0 list-item-header text-underline'>$name</h3>
                            </div>
                            <div class='text pt-2 px-3 text-left'>
                            <span class='position pl-3 mb-2 text'>
                              $description
                            </span>
                          </div>
                            <div class='text pt-2 text-center'>
                              <span class='position mb-2 text price'>$price</span>
                            </div>
                            <div class='text pb-2 pt-2 text-center'>
                              <div id='btn-main'class='mx-auto my-auto' >
                                <a id='btn-mes' href='tel:89178163030'>Заказать</a>
                              </div>
                            </div>
                          </div>  
                          </div> ");}
                      ?>
                  </div>                                      
                </div>
              </div>
            </div>
          </div>
        </div>                                      
    


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });
</script>

<!-- Chatra {literal} -->
<script>
    (function(d, w, c) {
        w.ChatraID = 'TtfTKEvX5rydEJsdm';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>

<!-- /Chatra {/literal} -->
<script>
    mybutton = document.getElementById("scrollBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0; 
      document.documentElement.scrollTop = 0;
    }
</script>
</body>