<?php
include 'lanConfig.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/484cbdb63e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="lib/paper-kit-2-html-v2.2.0/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/paper-kit-2-html-v2.2.0/assets/css/paper-kit.min.css?v=2.3.1">
    <link rel="stylesheet" href="lib/bootstrapvalidator-dist-0.5.3/css/bootstrapValidator.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="./css/img/favicon.png" type="image/x-icon">
    <title>TARGETSOFTDECOLOMBIA - <?= $title['title'] ?></title>
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TV48SWW"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVRTK8S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="header-3">
      <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: rgba(0, 0, 0, 0.1);">
        <div class="container">
          <a href="#"><img src="css/img/Logo_targetsoftdecolombia-removebg-preview.png" class="logo_image"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar"></span>
            <span class="navbar-toggler-bar"></span>
            <span class="navbar-toggler-bar"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent3">
            <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#home">
                      <i class="fas fa-home"></i>
                      <p><?= $nav['li1']?></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#product">
                      <i class="fas fa-microscope"></i>
                      <p><?= $nav['li2']?></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#customers">
                      <i class="fa-solid fa-people-group"></i>
                      <p><?= $nav['li3']?></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#plan">
                      <i class="fas fa-tags"></i>
                      <p><?= $nav['li4']?></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">
                      <i class="fas fa-user-astronaut"></i>
                      <p><?= $nav['li5']?></p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">
                      <i class="fas fa-mobile-alt"></i>
                      <p><?= $nav['li6']?></p>
                    </a>
                  </li>
                  <li class="nav-item">
                  <div class="btn-group">
                  <button class="btn btn-secondary btn-sm dropdown-toggle lan-button" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?= $_SESSION['lang']?>
                  </button>
                  <div class="dropdown-menu">
                  <a class="dropdown-item" href="?lang=es"><?= $nav['li7_a-1']?></a>
                  <a class="dropdown-item" href="?lang=en"><?= $nav['li7_a-2']?></a>
                  </div>
                  </div>
                  </li>
                </ul>
          </div>
        </div>
      </nav>
      <div class="page-carousel" id="home">
        <div class="filter"></div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="8000">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="page-header" style="background-image: url('css/img/micro16.png')">
                <div class="content-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 text-right">
                        
                        <h1><?= $carousel_page['h1-1'] ?></h1>
                        <h5><?= $carousel_page['h5-1'] ?></h5>
                       
                        <div id="contentContainer" class="trans3d"> 
                          <section id="carouselContainer" class="trans3d">
                            <figure id="item1" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/a.png"/></div></figure>
                            <figure id="item2" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/b.png"/></div></figure>
                            <figure id="item3" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/c.png"/></div></figure>
                            <figure id="item4" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/d.png"/></div></figure>
                            <figure id="item5" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/a.png"/></div></figure>
                            <figure id="item6" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/b.png"/></div></figure>
                            <figure id="item7" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/c.png"/></div></figure>
                            <figure id="item8" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/d.png"/></div></figure>
                            <figure id="item9" class="carouselItem trans3d"><div class="carouselItemInner trans3d"><img src="css/img/a.png"/></div></figure>
                          </section>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="page-header" style="background-image: url('css/img/lector8.png')">
                <div class="content-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7 text-left">
                        <h1 class="title" style="color: #ffb833;font-weight: 500;"><?= $carousel_page['h1-2'] ?></h1>
                        <h5><?= $carousel_page['h5-2'] ?></h5>
                        <br/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="page-header" style="background-image: url('css/img/multi5.jpg')">
                <div class="content-center">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-7" style="margin-top:-300px;margin-left:200px;">>
                        <h2 class="title" style="color: #ffb833;font-weight: 500;"><?= $carousel_page['h1-3'] ?></h2>
                        <h5><?= $carousel_page['h5-3'] ?></h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="fa fa-angle-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="fa fa-angle-right"></span>
            <span class="sr-only">Siguiente</span>
          </a>
        </div>
      </div>
    </div>
    
    <div class="section" id="product">
      <div class="container">
        
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
 <div class="info">
             <div class="icon icon-danger">
                <i class="far fa-lightbulb"></i>
              </div>
            </div>
            <a href="https://wa.me/573132359308?text=Me%20gustaria%20recibir%20mas%20informacion%20acerca%20de%20%20QHORTE" class="wspfloat" target="_blank"><i class="fa fa-whatsapp my-wspfloat"></i></a>
            <h2 class="title"><?= $product['title']?></h2>
            <h5><?= $product['h5-title']?></h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-justify">
            <p><?= $product['p-title'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-cloud"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-1'] ?></h4>
                <p class="text-justify"><?= $product['p-1'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-project-diagram"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-2'] ?></h4>
                <p class="text-justify"><?= $product['p-2'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-chart-pie"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-3'] ?></h4>
                <p><?= $product['p-3'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-tasks"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-4'] ?></h4>
                <p><?= $product['p-4'] ?>.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-fingerprint fingerprint"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-5'] ?></h4>
                <p class="description"><?= $product['p-5'] ?></p>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-barcode"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-6'] ?></h4>
                <p><?= $product['p-6'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-7'] ?></h4>
                <p><?= $product['p-7'] ?></p>
               </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-danger">
                <i class="fas fa-code"></i>
              </div>
              <div class="description">
                <h4 class="info-title"><?= $product['h4-8'] ?></h4>
                <p><?= $product['p-8'] ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="customers">
      <div class="container">
        
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <div class="info">
            </div>
            <h2 class="title"><?= $customers['title'] ?></h2>
            <h5><?= $customers['h5-title'] ?></h5>
          </div>
        </div>
        <div class="slider">
          <div class="slide-track">
            <div class="slide">
              <img src="./css/customer_logos/HEMATO.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/HUV.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/ESTANCIA.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/ASI.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/ISSSTE.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/NOGALES.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/MAG.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CITOMAP.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CYG.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/LABFG.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/LCC.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CAYM.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CAME.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/MEDIPATH.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CDC.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/DYS.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CITOHISPAT.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CITOLAB.png"   alt="" />
            </div>
              <div class="slide">
                <img src="./css/customer_logos/INDICE.png"   alt="" />
              </div>
              <div class="slide">
              <img src="./css/customer_logos/HEMATO.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/HUV.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/ESTANCIA.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/ASI.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/ISSSTE.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/NOGALES.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/MAG.png" height="120"  alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CITOMAP.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CYG.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/LABFG.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/LCC.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CAYM.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CAME.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/MEDIPATH.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CDC.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/DYS.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CITOHISPAT.png"   alt="" />
            </div>
            <div class="slide">
              <img src="./css/customer_logos/CITOLAB.png"   alt="" />
            </div>
              <div class="slide">
                <img src="./css/customer_logos/INDICE.png"   alt="" />
              </div>
          </div>
        </div>
        </div>
    </div>

 
    <div class="section" id="plan">
      <div class="content-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><?= $pricing['title'] ?></h2>
            <h5 class="description"><?= $pricing['h5-title'] ?></h5>
          </div>
        </div>
        <div class="space-top"></div>
        <div class="row">
          <div class="col-md-3">
            <div class="card text-center" data-color="orange" style="width: 17rem;">
              <div class="card-body">
                <div class="card-icon">
                  <span class="icon-simple"><i class="fas fa-user-cog"></i></span>
                </div>
                <h4 class="card-title"><?= $pricing['h4-1'] ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?= $pricing['h6-1'] ?></h6>
                <p class="card-text"><?= $pricing['p-1'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center" data-color="purple" style="width: 17rem;">
              <div class="card-body">
                <div class="card-icon">
                  <span class="icon-simple"><i class="fas fa-microscope"></i></span>
                </div>
                <h4 class="card-title"><?= $pricing['h4-2'] ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?= $pricing['h6-2'] ?></h6>
                <p class="card-text"><?= $pricing['p-2'] ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center" data-color="green" style="width: 17rem;">
              <div class="card-body">
                <div class="card-icon">
                  <span class="icon-simple"><i class="fas fa-hospital"></i></span>
                </div>
                <h4 class="card-title"><?= $pricing['h4-3'] ?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?= $pricing['h6-3'] ?></h6>
                <p class="card-text mb-4"><?= $pricing['p-3'] ?></p>             
              </div>              
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-left" data-color="blue" style="width: 17rem;">
              <div class="card-body">
                <div class="card-icon">
                  <span class="icon-simple"><i class="fas fa-sms"></i></span>
                </div>
                <h6 class="card-category"><?= $pricing['h6-4'] ?></h6>
                <h3 class="card-title"></h3>
                <ul class="text-white">
                  <li><?= $pricing['li-4_1'] ?></li>
                  <li><?= $pricing['li-4_2'] ?></li>
                  <li><?= $pricing['li-4_3'] ?></li>
                  <li><?= $pricing['li-4_4'] ?></li>
                  <li><?= $pricing['li-4_5'] ?></li>
                  <li><?= $pricing['li-4_6'] ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><?= $about['title']?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-justify">
            <p><?= $about['p-1']?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ">
            <br/>
            <p class="text-right"><i class="fas fa-quote-left"></i><?= $about['p-2']?><i class="fas fa-quote-right"></i></p><br/>
            <p class="text-justify"><?= $about['p-3']?></p>
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><?= $contact['title']?></h2>
            <h5 class="description"></h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 ml-auto">
            <div class="row">
              <div class="col-md-12 ml-auto">
                <div class="info info-horizontal">
                  <div class="icon icon-info">
                   <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title"><?= $contact['h4-1']?></h4>
                    <p><?= $contact['p-1']?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 ml-auto">
                <div class="info info-horizontal">
                  <div class="icon icon-info">
                  <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title"><?= $contact['h4-2']?></h4>
                    <p><?= $contact['p-2']?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ml-auto">
                <div class="info info-horizontal">
                  <div class="icon icon-info">
                   <i class="fas fa-headset"></i>
                  </div>
                  <div class="description">
                    <h4 class="info-title"><?= $contact['h4-3']?></h4>
                    <p><?= $contact['p-3']?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <form role="form" id="contact-form" name="contact-form" autocomplete="off">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="control-label"><?= $contact['label-1']?></label>
                    <input type="text" id="customer_name" name="customer_name" class="form-control"/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><?= $contact['label-2']?></label>
                    <input type="text" id="customer_lastname" name="customer_lastname" class="form-control"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label class="control-label"><?= $contact['label-3']?></label>
                    <input type="email" id="customer_email" name="customer_email" class="form-control"/>
                  </div>
                  <div class="col-sm-6">
                    <label class="control-label"><?= $contact['label-4']?></label>
                    <input type="text" id="customer_phone" name="customer_phone" class="form-control"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <label class="control-label"><?= $contact['label-5']?></label>
                    <textarea id="customer_message" name="customer_message" class="form-control" rows="6"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                     <button class="g-recaptcha btn btn-primary" id="EmailSend" data-size="invisible"><?= $contact['button-1']?></button>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12"><?= $contact['captcha']?></div>
                </div>
              </div>
            </form>
            <div id="respond"></div>
          </div>
        </div>
      </div>
    </div>
  
  <footer class="footer footer-black">
    <div class="container-fluid">
      <div class="row">
        <div class="credits">
          <span class="copyright">© 
          <script>document.write(new Date().getFullYear())</script></i><?= $footer['madeby']?></span>
        </div>
      </div>
    </div>
  </footer>
  <script src="lib/paper-kit-2-html-v2.2.0/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="lib/paper-kit-2-html-v2.2.0/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="lib/paper-kit-2-html-v2.2.0/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="lib/paper-kit-2-html-v2.2.0/assets/js/paper-kit.js?v=2.3.1" type="text/javascript"></script>
  <script type="text/javascript" src="lib/bootstrapvalidator-dist-0.5.3/js/bootstrapValidator.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="https://kit.fontawesome.com/59716f9fc8.js" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdEWDIaAAAAAPUEfoM02qqZWjdrXx7AokbI6Lo5"></script>
  <script src="lib/personalice.js" type="text/javascript"></script>
  
  <!--<script type="text/javascript">
    _linkedin_partner_id = "3258105";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script><script type="text/javascript">
    (function(){var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);})();
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3258105&fmt=gif" />
    </noscript>-->
  </body>
</html>