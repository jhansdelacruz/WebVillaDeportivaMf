<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="title" content="Villa Deportiva | Monsefú" />
  <meta http-equiv="content-language" content="es" />
  <meta name="description" content="Te invitamos a la más cómoda y moderna Villa deportiva, Ubicanos en Monsefú..." />
  <meta name="MobileOptimized" content="width" />
  <meta name="HandheldFriendly" content="true" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Villa Deportiva || Monsefú</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/global.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="icon" href="img/public/logo.png" />
  <link rel="apple-touch-ico" href="img/public/logo.png" />
  <link rel="theme-color" content="#2f6627" />
</head>

<body>
  <?php
  require('./layout/header.php');
  ?>

  <main role="main">
    <article role="article" class="modefull">
      <div class="container">
        <div class="contet">
          <!--imagen de la sede-->
          <div class="host-picture">
            <article class="field-host-picture">
              <div class="name-field-host-picture">
                <img src="./img/home/VD-Monsefu.png" alt="Villa Deportiva Monsefú" title="Villa Deportiva Monsefú" typeof="foaf:Image">
              </div>
            </article>
          </div>
          <div class="host-content-wrap">
            <marquee>
              <div class="center-monsefu">
                <a href="#" hreflang="es">Visítanos</a>
              </div>
            </marquee>

            <div class="content-title">
              <h1 class="title">
                <span class="name-title">Villa Deportiva - Monsefú</span>
              </h1>
            </div>
            <div class="content-adress">
              <div class="host-adress">
                <div class="field-label">Dirección</div>
                <div class="field-item">LOTE A PREDIO SAN ANTONIO SECTOR EL PALMO</div>
              </div>
            </div>
            <div class="spectators-number">
              <div class="optime">
                <div class="field-labell">AREA TOTAL</div>

                <div class="field-item">4500 mts cuadrados</div>
              </div>

            </div>
            <div class="opening_time">
              <div class="optime">
                <div class="field-labell">E-MAIL</div>

                <div class="field-item">contratos@villadeportiva.com</div>
              </div>
            </div>
            <div class="btnmode">
              <div class="host-tickets">
                <a class="link-tickets" href="#gallery">
                  <span> Ver Galeria
                  </span>
                </a>
              </div>
              <div class="host-map">
                <a class="link-en-mapa" href="https://goo.gl/maps/KpmZiYqZW5BrMbSn6" target="_blank"> <span> Ver Mapa
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
    </article>
    <section class="sctGlob">
      <article class="artPrim">
        <section class="sctPrim">
          <div class="divLeft Wh680px">
            <div>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </p>
            </div>
            <div>
              <h2 class="titleDescription">Drescription</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex consequatur sit delectus quia, maxime beatae eius labore quidem repellat perspiciatis blanditiis fugit possimus aspernatur saepe, eos voluptates obcaecati. Harum.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ex consequatur sit delectus quia, maxime beatae eius labore quidem repellat perspiciatis blanditiis fugit possimus aspernatur saepe, eos voluptates obcaecati. Harum.
              </p>
            </div>
          </div>
          <div class="divFloatRight Wh340px facilit">
            <div>
              <h2>Características principales</h2>
            </div>
            <div>
              <ul>
                <li>
                  <span class="material-symbols-outlined">
                    wifi
                  </span>
                  Wi-Fi
                </li>
                <li>
                  <span class="material-symbols-outlined">
                    sports_soccer
                  </span>
                  Actividades
                </li>
                <li>
                  <span class="material-symbols-outlined">
                    food_bank
                  </span>
                  Comida/Bebida
                </li>
                <li>
                  <span class="material-symbols-outlined">
                    business_center
                  </span>
                  Salas de reuniones
                </li>
                <li>
                  <span class="material-symbols-outlined">
                    pets
                  </span>
                  Se permiten mascotas
                </li>
                <li>
                  <span></span>
                  <a href="#">+ Más</a>
                </li>
              </ul>
            </div>
          </div>
        </section>
      </article>
      <article id="gallery" class="artPrim">
        <section class="sctPrim">
          <div class="divLeft Wh1020px">
            <div class="full-Img" id="fullImgBox">
              <img src="" id="fullImg" alt="Gallery Image">
              <span onclick="closeImg()">❎</span>
            </div>
            <h2 class="titleDescription">Galería</h2>
            <div class="imgGallery">
              <img src="./img/home/gallery/img1b.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img3b.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img2b.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img5b.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img6b.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src=" ./img/home/gallery/img4d.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img3d.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img1d.png" onclick="openFulImg(this.src)" alt="Gallery Image">
              <img src="./img/home/gallery/img2d.png" onclick="openFulImg(this.src)" alt="Gallery Image">
            </div>
          </div>
          <div>

          </div>
        </section>
      </article>
      <article class="artPrim">

      </article>
    </section>
  </main>
  <footer></footer>
  <script src="js/app.js"></script>
  <script src="js/gallery.js"></script>
</body>

</html>