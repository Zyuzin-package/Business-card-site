<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height ,width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Кейтеринг и события </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900|Roboto+Slab:400,700&amp;subset=cyrillic" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/mk.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    <meta name="title" content="Магазин премиального мяса TarTar meat market">
    <meta name="description" content="Магазин премиального мяса, крафтовых сыров, специй и акссессуаолв для BBQ TarTarMeat - выгодные цены, натуральные и качественные мясные и сырные изделия, большое количество специй"> 
    <meta name="keywords" content="Кейтеринг, Мероприятие, Мясо на вынос, вынос, событие, события, Мясо, премиальное, сыры, крафтовые, купить, цена, продажа, Самара, аксессуары, BBQ, грилью, бургеры, барбекю, TarTar, мясная, лавка, магазин" />
    <style>

    .test{
        height: 770px;
        width: 970px;
    }

    .plain{
        height: 40vh;
    }

    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
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
  
  /* .swiper-slide img {
    width: 100%;
    height: 100%;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    overflow: hidden;
 } */
    /* .swiper-slide img {
      display: block;
      
       object-fit: cover;
       width: 100%;
        height: 100%; 

    } */
   
    @media screen and (max-device-width: 2000px) {
    .item-img{
      height: 580px;
      width: 540px;
      display: block;
    }
    }
     @media screen and (max-device-width: 1500px) {
      .item-img{
      height: 550px;
      width: 550px;
      display: block;
      }
    }
    @media screen and (max-device-width: 1200px) {
      .item-img{
        height: 500px;
        width: 550px;
        display: block;
      }
    }
    @media screen and (max-device-width: 1000px) {
      .item-img{
        height: 500px;
        width: 550px;
        display: block;
      }
    }
    @media screen and (max-device-width: 950px) {
      .item-img{
        height: 450px;
        width: 620px;
        display: block;
      }
    }
    @media screen and (max-device-width: 800px) {
    	.item-img{
        height: 450px;
        width: 620px;
        display: block;
    	}
  }
  @media screen and (max-device-width: 400px) {
    	.item-img{
        height: 320px;
        width: 620px;
        display: block;
    	}
  }
    .swiper-button-next,.swiper-button-prev{
      color: red;
    }
    .swiper-pagination-bullet-active {
     background-color: red !important;
    }
    </style>
</head>

<body >
    <div>
      <video autoplay muted loop id="myVideo" class="fixed-top">
        <source src="video/bg.MP4" type="video/mp4">
      </video> 
        <div class="row mt-2">
                  <div class="col-xl-2 col-lg-2 col-md-2 col-ms-2 col-sm-4 col-12 mt-2 mx-auto px-0">
                    <a href="meat-list.php">
                      <h3 class="pb-3" style="text-align: center;">Мясная лавка</h3>
                    </a>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-2 col-ms-2 col-sm-4 col-12 mt-2 mx-auto px-0">
                    <a href="cheese-list.php">
                      <h3 class="pb-3" style="text-align: center;">Крафтовые сыры</h3>
                    </a>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-2 col-ms-2 col-sm-4 col-12 mt-2 mx-auto px-0">
                    <a href="spice-list.php">
                      <h3 class="pb-3" style="text-align: center;">Соусы и специи</h3>
                    </a>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-2 col-ms-2 col-sm-4 col-12 mt-2 mx-auto px-0">
                    <a href="accessories.php">
                      <h3 class="pb-3" style="text-align: center;">Грили и аксессуары BBQ</h3>
                    </a>
                  </div>         
                  <div class="col-xl-2 col-lg-2 col-md-2 col-ms-2 col-sm-4 col-12 mt-2 mx-auto px-0">
                    <a href="catering.php">
                      <h3 class="pb-3" style="text-align: center;">Кейтеринг и события</h3>
                    </a>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-2 col-ms-2 col-sm-4 col-12 mt-2 mx-auto px-0">
                    <a href="delivery.php">
                      <h3 class="pb-3" style="text-align: center;">Доставка</h3>
                    </a>
                  </div>
          </div>    
<div class="container ">
  <div class="row">
      <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4 mx-auto mt-5">
            <a class="" href="index.php"><img src="img/logo.svg" alt="TARTAR Meat market" class="img-fluid"></a>
      </div>
  </div>
        
    <div class="col-12 mb-3 pt-5"> 
        <div class="container-fluid ">
            <div class='row pt-5 mt-5'>
                <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                    <!-- <img src="img/items/catering/DSC_8286.jpg"class='align-center img-fluid item-img'></a>     -->
                    
                    <img src="img/items/catering/DSC_8467.jpg"class='align-center img-fluid item-img'>  
                </div>
                <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>

                      <div class='text pt-2 px-3 text-left'>
                          <span class='position pl-3 mb-2 text-catering'>
                          <span  class='list-item-header'>Кейтеринг</span> — это выездное ресторанное обслуживание. Полный комплекс услуг включает в себя не только приготовление меню, но и доставку его на место проведения мероприятия, а также сервировку, обслуживание, наведение порядка и т. д.  
                          </span>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-2 pb-3"> 
        <div class="container-fluid ">
            <div class='row mt-3'>
                <div class='text pt-2 px-3 text-left'>
                    <span class='position pl-3 mb-2 text-catering'>
                    Главная  <span  class='list-item-header'>особенность</span > и <span  class='list-item-header'>преимущество</span > кейтеринга — это его мобильность. 
                    Это может быть помещение вашего офиса, сопровождение делового мероприятия, пляж на берегу Волги, 
                    загородный коттедж или романтический вечер для двоих. 
                    </span>
                </div>
            </div>
        </div>
    </div>
 

    <div class="col-12 mt-2 pb-3"> 
        <div class="container-fluid ">
            <div class='row mt-3'>
              <div class='text text-center align-center'>
                <h3 class='mb-0 text-underline '>Мы предлагаем несколько видов кейтеринга:</h3>
              </div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-2 pb-3"> 
      <div class="swiper mySwiper">
          <div class="swiper-wrapper">
 
                <div class="swiper-slide">
                    <div class="container-fluid mb-4">
                      <div class='row mt-3'>
                        <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                            <img src='img/items/catering/DSC_8286.jpg'class='align-center img-fluid item-img'></a>    
                          </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>

                          <div class='text text-center'>
                            <h3 class='mb-0 list-item-header text-underline'>Барбекю</h3>
                          </div>
                          <div class='text  pt-2 px-3 text-left'>
                              <span class='position pl-3 mb-2 text-catering'style='color:white;'>
                              Востребованный вид кейтеринга при проведении мероприятия под открытым небом . Основу меню составляют свежие овощи, а также мясные и овощные блюда, приготовленные на гриле или открытом огне. Свежий воздух в сочетании с ароматом жареного мяса как нельзя лучше способствуют расслаблению и комфортному отдыху. 
                            </span>
                          </div>
                        </div>
                      </div>          
                    </div>
                </div>  

                <div class="swiper-slide">
                    <div class="container-fluid mb-4">
                      <div class='row mt-3'>
                        <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                            <img src='img/items/catering/DSC_8297.jpg'class='align-center img-fluid item-img'></a>    
                          </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>

                          <div class='text text-center'>
                            <h3 class='mb-0 list-item-header text-underline'>Фуршет</h3>
                          </div>
                          <div class='text  pt-2 px-3 text-left'>
                              <span class='position pl-3 mb-2 text-catering'style='color:white;'>
                              В отличие от банкета проходит в менее формальной обстановке. На столах расставлены легкие блюда и закуски, каждый участник сам выбирает понравившееся блюдо и самостоятельно перекладывают его на свою тарелку. Официанты лишь предлагают посетителям напитки. Часто к такому формату прибегают при проведении выставок, презентаций, пресс-конференций, деловых съездов, торжественных приемов.
                            </span>
                          </div>
                        </div>
                      </div>          
                    </div>
                </div>  


                
                <div class="swiper-slide">
                    <div class="container-fluid mb-4">
                      <div class='row mt-3'>
                        <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                            <img src='img/items/catering/DSC_8405.jpg'class='align-center img-fluid item-img'></a>    
                          </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>

                          <div class='text text-center'>
                            <h3 class='mb-0 list-item-header text-underline'>Гала-ужин</h3>
                          </div>
                          <div class='text  pt-2 px-3 text-left'>
                            <span class='position pl-3 mb-2 text-catering'style='color:white;'>
                            Своеобразный аналог банкета для VIP-персон. Предполагает строгий дресс-код, изысканные блюда, которые готовят непосредственно на месте проведения самого мероприятия.
                            </span>
                          </div>
                        </div>
                      </div>          
                    </div>
                </div>
                
                                
                <div class="swiper-slide">
                    <div class="container-fluid mb-4">
                      <div class='row mt-3'>
                        <div class='col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 pb-5 scale align-center'>
                            <img src='img/items/catering/DSC_8451.jpg'class='align-center img-fluid item-img'></a>    
                          </div>
                          <div class=' col-xl-6 col-lg-6 col-md-12 col-ms-12 col-12 my-0 mx-0 px-0 py-0 '>

                          <div class='text text-center'>
                            <h3 class='mb-0 list-item-header text-underline'>Кофе-брейк</h3>
                          </div>
                          <div class='text  pt-2 px-3 text-left'>
                            <span class='position pl-3 mb-2 text-catering'style='color:white;'>
                            Быстрый и очень популярный формат перекуса, к которому прибегают во время перерывов на деловых встречах и бизнес-конференциях. Меню для кофе-брейка состоит из легких закусок, мясных нарезок, канапе, сэндвичей, свежих фруктов, пирожных и безалкогольных напитков. Подобный перерыв позволяет немного отдохнуть от активной работы, подкрепиться, привести мысли в порядок и с новыми силами вернуться к своим обязанностям.
                            </span>
                          </div>
                        </div>
                      </div>          
                    </div>
                </div> 
          </div>
                <div class='swiper-pagination'></div>
                <div class='swiper-button-next'></div>
                <div class='swiper-button-prev'></div>
      </div>
    </div>

    <div class="col-12 mt-2 pb-5 mb-5"> 
        <div class="container-fluid ">
            <div class='row mt-3'>
                <div class='text pt-2 px-3 text-left'>
                     <span class='position pl-3 mb-2 text-catering'>
                    С учетом пожеланий заказчика, мы возьмем на себя все организационные моменты выездного мероприятия.
                    Оставьте заявку и специалист по кейтерингу свяжется с Вами в короткий срок:
                        <br>
                        <a class=" text-catering list-item-header" href="tel:+89178163030">+8 (917) 816 30 30</a>
                        <br>
                        <a class=" text-catering list-item-header" href="mailto:tartar.meat.market@gmail.com">tartar.meat.market@gmail.com</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>

<noscript>
  <div><img src="https://mc.yandex.ru/watch/88074025" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });
</script>
</body>