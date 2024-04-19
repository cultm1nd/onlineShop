<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 </head>
 <body>
    <!--header-->
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
          <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>
        </div>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="about" class="nav-link px-2 link-secondary">О нас</a></li>
          <li><a href="katalog" class="nav-link px-2">Каталог</a></li>
          <li><a href="where" class="nav-link px-2">Где нас найти?</a></li>
        </ul>
  
        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-outline-primary me-2">Вход</button>
          <button type="button" class="btn btn-primary">Регистрация</button>
        </div>
      </header>
<!--katalog-->
<div class="col-md-12">
    <h2>Featured <b>Products</b></h2>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>   
    <!-- Wrapper for carousel items -->
    <div class="carousel-inner">
        <div class="item carousel-item active">
            <div class="row">
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/ipad.jpg" class="img-fluid" alt="">									
                        </div>
                        <div class="thumb-content">
                            <h4>Apple iPad</h4>									
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/headphone.jpg" class="img-fluid" alt="Headphone">
                        </div>
                        <div class="thumb-content">
                            <h4>Sony Headphone</h4>									
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <p class="item-price"><strike>$25.00</strike> <b>$23.99</b></p>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>		
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/macbook-air.jpg" class="img-fluid" alt="Macbook">
                        </div>
                        <div class="thumb-content">
                            <h4>Macbook Air</h4>									
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                            </div>
                            <p class="item-price"><strike>$899.00</strike> <b>$649.00</b></p>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>								
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/nikon.jpg" class="img-fluid" alt="Nikon">
                        </div>
                        <div class="thumb-content">
                            <h4>Nikon DSLR</h4>									
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <p class="item-price"><strike>$315.00</strike> <b>$250.00</b></p>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
            </div>
        </div>
        <div class="item carousel-item">
            <div class="row">
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/play-station.jpg" class="img-fluid" alt="Play Station">
                        </div>
                        <div class="thumb-content">
                            <h4>Sony Play Station</h4>
                            <p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/macbook-pro.jpg" class="img-fluid" alt="Macbook">
                        </div>
                        <div class="thumb-content">
                            <h4>Macbook Pro</h4>
                            <p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/speaker.jpg" class="img-fluid" alt="Speaker">
                        </div>
                        <div class="thumb-content">
                            <h4>Bose Speaker</h4>
                            <p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/galaxy.jpg" class="img-fluid" alt="Galaxy">
                        </div>
                        <div class="thumb-content">
                            <h4>Samsung Galaxy S8</h4>
                            <p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>						
            </div>
        </div>
        <div class="item carousel-item">
            <div class="row">
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/iphone.jpg" class="img-fluid" alt="iPhone">
                        </div>
                        <div class="thumb-content">
                            <h4>Apple iPhone</h4>
                            <p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/canon.jpg" class="img-fluid" alt="Canon">
                        </div>
                        <div class="thumb-content">
                            <h4>Canon DSLR</h4>
                            <p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/pixel.jpg" class="img-fluid" alt="Pixel">
                        </div>
                        <div class="thumb-content">
                            <h4>Google Pixel</h4>
                            <p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Add to Cart</a>
                        </div>						
                    </div>
                </div>	
                <div class="col-sm-3">
                    <div class="thumb-wrapper">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <img src="/examples/images/products/watch.jpg" class="img-fluid" alt="Watch">
                        </div>
                        <div class="thumb-content">
                            <h4>Apple Watch</h4>
                            <p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <a href="korzina" class="btn btn-primary">Добавить в корзину</a>
                        </div>						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>
</div>
 <!--footer-->
 <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li><a href="about" class="nav-link px-2 link-secondary">О нас</a></li>
      <li><a href="katalog" class="nav-link px-2">Каталог</a></li>
      <li><a href="where" class="nav-link px-2">Где нас найти?</a></li>
    </ul>
    <p class="text-center text-muted">© 2024 Copy Star</p>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html><?php /**PATH C:\OSPanel\domains\borovinskikh\tests\onlineShop\resources\views/katalog.blade.php ENDPATH**/ ?>