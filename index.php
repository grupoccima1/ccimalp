<!DOCTYPE html>
<html lang="en">

<!-- Juan -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CCIMA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="public/css/main.css">
  <link rel="stylesheet" href="public/css/inv.css">
  <link rel="stylesheet" href="public/css/normalize.css">
  <link rel="stylesheet" href="publiccss/all.css">
  <link rel="stylesheet" href="publiccss/main2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
      <div class="container">
        <div class="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
            <!-- <a href="./public/files/presentacion_corta_general_precios.pdf" target="_blank" rel="nofollow"
              download="Portto Blanco">
              <button class="btn text-white bg__primario me-md-2 d-none d-lg-block" type="button">Descargar
                Brochure</button>
            </a> -->
            <a href="./public/files/CV-GrupoCCima.pdf" target="_blank" rel="nofollow"
              download="Portto Blanco">
              <button class="btn text-white bg__primario me-md-2 d-none d-lg-block" type="button">CV CCIMA</button>
            </a>
          </div>
        </div>
        <div class="">
          <div class="">
            <img class="log" src="public/img/logo_main.png" alt="">
          </div>
        </div>
        <div class="">
          <div class="collapse navbar-collapse justify-content-end Roboto-Medium" id="navbarNav">
            <ul class="navbar-nav ">
              <!-- <li class="nav-item">
                <a class="nav-link fw-bold" data-bs-toggle="popover" data-bs-placement="bottom"
                  data-bs-content="Content" href="#">Menu</a>
              </li> -->
               <li class="nav-item">
                <a class="nav-link fw-bold" href="#">Portto Blanco</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">Navetec</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-bold" href="#">Nosotros</a>
              </li>
            </ul>
            <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
              <a href="./public/files/presentacion_corta_general_precios.pdf" target="_blank" rel="nofollow"
                download="Portto Blanco">
                <button class="btn text-primary btn-outline-primary me-md-2 d-none d-lg-block"
                  type="button">Whatsapp</button>
              </a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
              <a href="./public/files/presentacion_corta_general_precios.pdf" target="_blank" rel="nofollow"
                download="Portto Blanco">
                <button class="btn text-white bg__primario me-md-2 d-none d-lg-block" type="button">Llamada</button>
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <!-- Principal -->
    <section id="hero">
      <div class="container">
        <div class="row pt_96px">
          <div class="col-sm-12 col-md-8 order-md-2 d-flex align-items-center ctr">
            <figure>
              <img class="rd-main mt-3" src="public/img/fotos_pagina_ccima-05.jpg" alt="">
            </figure>
          </div>
          <div class="col-sm-12 col-md-4 order-md-1 d-flex flex-column justify-content-center pr-2">
            <h1 class="FuturaDemi fs_40px text-center text-lg-start">GENERAMOS PROGRESO</h1>
            <h2 class="FuturaMedium pb-2 fs_28px text-center text-lg-start">CONSTRUYE TU FUTURO HOY</h2>
            <h4 class="FuturaMedium text-center text-lg-start ps text-l">Somos tus aliados para asegurar un futuro financiero exitoso</h4>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
              <a href="https://api.whatsapp.com/send?phone=524422912223"><button class="btn text-white bg__danger me-md-2 btn-tel" type="button">Hablamos por Whatsapp</button></a>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
              <a href="tel:+524422912223"><button class="btn text-white bg__primario me-md-2 btn-tel" type="button">Llamanos</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- simulador de Inveriones -->
    <section class="seccion">
      <div class="container">
        <h2 class="text-uppercase text-center FuturaDemi text-primario">Simulador de inversión </h2>
        <h2 class="FuturaDemi text-uppercase text-center text-secondary fs_20px">“Descubre el Potencial de Tu Inversión con Nuestro Simulador de Inversiones” </h2>
        <div class="row">
          <div class="col-6">
            <div class="d-flex flex-column justify-content-around h-100">
              <div class="mb-3">
                <label for="unidad_negocio" class="form-label"><span class="text-primario FuturaDemi text-uppercase">Unidad de Negocio</span></label>
                <select id="investment-select" class="form-select w-75" aria-label="Default select example">
                  <option value="1" disabled><span>Industrial</span></option>
                  <option value="2" selected><span>Residencial</span></option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><span class="text-primario FuturaDemi text-uppercase"> ¿Cuánto quieres invertir?</span></label>
                <select id="investment-select-2" class="form-select w-75" aria-label="Default select example">
                  <option value="3"><span>terreno 160 m2 - Portto Blanco Bernal</span></option>
                  <option value="4"><span>terreno 200 m2 - Portto Blanco Bernal</span></option>
                  <option value="5"><span>terreno 128 m2 - Portto Blanco Cimatario</span></option>
                </select>
              </div>
              <div class="">
                <table class="table table-hover border-0">
                  <tbody>
                    <tr class="">
                      <td class="text-primario FuturaDemi border-0">Inversión inicial</td>
                      <td class="text-primario FuturaBold border-0"> $<span id="inversion_inicial">100,000.00</span>MXN </td>
                    </tr>
                    <tr>
                      <td class="text-primario FuturaDemi">Plusvalía estimada</td>
                      <td class="text-primario FuturaBold"> $<span id="plusvalia_estimada">100,000.00</span>MXN</td>
                    </tr>
                    <tr>
                      <td class="text-primario FuturaDemi border-0">Renta total estimada</td>
                      <td class="text-primario FuturaBold border-0"> $<span id="valor_final">100,000.00</span>MXN</td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div>
          <div class="col-6">
            <div id="chart" class="charts"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Marcas -->
    <section id="section">
      <div class="container">
        <div class="row mt-5">
          <div class="col-12">
            <h4 class="FuturaDemi fs-2 my-5 text-center">Nuestras Marcas</h4>
          </div>
          <!-- <div class="col-12 d-flex justify-content-evenly">
            <div class="row">
              <div class="col-6 col-lg-3">
                <img class="py-2 py-xl-4" src="./public/img/logos/PorttoBlanco.svg" type="">
              </div>
              <div class="col-6 col-lg-3">
                <img class="py-2 py-xl-4" src="./public/img/logos/Construye.svg" type="">
              </div>
              <div class="col-6 col-lg-3">
                <img class="py-2 py-xl-4" src="./public/img/logos/Rent_solutions.svg" type="">
              </div>
              <div class="col-6 col-lg-3">
                <img class="py-2 py-xl-4" src="./public/img/logos/Capital_CCIMA.svg" type="">
              </div>
            </div>
          </div> -->
          <div class="card-body">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active p-4">
                    <div class="">
                        <img class="" src="./public/img/logos/PorttoBlanco.svg" alt="">
                    </div>
                  </div>
                  <div class="carousel-item p-4">
                    <div class="">
                            <img class="" src="./public/img/logos/Navetec.svg" alt="">
                    </div>
                  </div>
                  <div class="carousel-item p-4">
                    <div class="">
                            <img class="" src="./public/img/logos/Construye.svg" alt="">
                    </div>
                  </div>
                  <div class="carousel-item p-4">
                    <div class="">
                            <img class="" src="./public/img/logos/Rent_solutions.svg" alt="">
                    </div>
                  </div>
                  <div class="carousel-item p-4">
                    <div class="">
                            <img class="" src="./public/img/logos/Capital_CCIMA.svg" alt="">
                    </div>
                  </div>
                </div>
                <!-- Botones de previo y siguiente -->
                <div class="position-relative">
                    <div class="position-absolute" style="bottom: 40px; right: 75px;">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img class="w-32px" src="public/img/icons/icon_preview.svg" alt="Previo">
                        </button>
                    </div>
                    <div class="position-absolute" style="bottom: 40px; right: 30px;">
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img class="w-32px" src="public/img/icons/icon_next.svg" alt="Siguiente">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    
    <!-- Video Construye -->
    <section class="seccion" id="beneficios">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <div class="row d-flex justify-content-between">
              <div class="col-12 col-lg-4">
                <h2 class="FuturaDemi fs-2 fw-bold text-uppercase blue-text text-center text-lg-start">GENERAMOS PROGRESO
                </h2>
              </div>
              <div class="col-12 col-lg-4">
                <p class="text-center text-lg-end">Desde el 2002, dedicados a la innovacion y el éxito de nuestros aliados</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-12">
              <!-- <img src="public/video/sherpa.mp4" class="d-block w-100" alt="imagen 01"> -->
              <video src="public/video/El_bajio_2023.mp4" class="d-block w-100" controls autoplay loop muted></video>
              <!-- Sin controles y con autoplay -->
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Oportunidades -->
    <section class="seccion" id="">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-3">
            <h2 class="FuturaBook fs-3 fw-bold text-center text-lg-start"> Explora Nuestros Proyectos</h2>
          </div>
          <div class="col-12 col-lg-9 d-flex justify-content-end">
            <h2 class="text-master"> </h2>
            <p class="FuturaBook fs-5 text-center text-lg-end">Nuestros desarrollos y parques industriales son testimonios del progreso y visión hacia el futuro
            </p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-6 col-lg-3 rd-op ctr">
            <div class="col-12 d-flex justify-content-center">
              <img class="ptb" src="./public/img/icons/portto.svg" alt="">
            </div>
            <div class="col-12 d-flex justify-content-center">
              <h4 class="FuturaBook">Cimatario</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=c_EPHrxReT4"><img class="" src="public/img/image_14 1.jpg" alt=""></a>
            </figure>
          </div>
          <div class="col-6 col-lg-3 rd-op ctr">
            <div class="col-12 d-flex justify-content-center">
              <img class="ptb" src="./public/img/icons/navetec.svg" alt="">
            </div>
            <div class="col-12 d-flex justify-content-center">
              <h4 class="FuturaBook">Gamma II</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=jefg6pls8lw"><img class="" src="public/img/industrial-hall-1630742_640 1.jpg" alt=""></a>
            </figure>
          </div>
          <div class="col-6 col-lg-3 rd-op ctr">
            <div class="col-12 d-flex justify-content-center">
              <img class="ptb" src="./public/img/icons/navetec.svg" alt="">
            </div>
            <div class="col-12 d-flex justify-content-center">
              <h4 class="FuturaBook">Pedro Escobedo</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=dqUMHbGR8qA"><img class="" src="public/img/blog-post-12-1280x854 2.jpg" alt=""></a>
            </figure>
          </div>
          <div class="col-6 col-lg-3 rd-op ctr">
            <div class="col-12 d-flex justify-content-center">
              <img class="ptb" src="./public/img/icons/navetec.svg" alt="">
            </div>
            <div class="col-12 d-flex justify-content-center">
              <h4 class="FuturaBook">Santa Rosa</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=HyokbjeTmfM"><img class="" src="public/img/10 1.jpg" alt=""></a>
            </figure>
          </div>
        </div>
      </div>
    </section>


    <!-- Indicadores -->
    <section class="seccion bg__indicadores">
      <div class="container bgk wow animate__animated animate__bounceInUp">
        <h1 class="text-center cl FuturaBook">Indicadores</h1>
        <div class="row d-flex justify-content-end">
          <div class="col-6 col-lg-3 text-center pt-5 contador ocultar">
            <span class="FuturaHeavy contador_cantidad fs-1 fw-bold white-text" data-cantidad-total="21">00</span>
            <p class="FuturaBook p_indicadores">Años de experiencia</p>
          </div>
          <div class="col-6 col-lg-3 text-center pt-5 contador ocultar">
            <span class="FuturaHeavy contador_cantidad fs-1 fw-bold white-text" data-cantidad-total="10">00</span>
            <p class="FuturaBook p_indicadores">Desarrollos industriales y Residenciales</p>
          </div>
          <div class="col-6 col-lg-3 text-center pt-5 contador ocultar">
            <span class="FuturaHeavy contador_cantidad fs-1 fw-bold white-text" data-cantidad-total="120">000</span>
            <p class="FuturaBook p_indicadores">Colaboradores</p>
          </div>
          <div class="col-6 col-lg-3 text-center pt-5 contador ocultar">
            <span class="FuturaHeavy contador_cantidad fs-1 fw-bold white-text" data-cantidad-total="2400">0000</span>
            <p class="FuturaBook p_indicadores">Clientes</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Testimonios -->
    <section class="seccion ">
      <div class="container">
          <div class="row justify-content-around">
              <div class="col-6">
                  <!-- carusel -->
                  <div class="card bg-light border-0 rounded-3">
                      <div class="card-body">
                          <div id="carouselExampleFad" class="carousel slide carousel-fade" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active p-4">
                                  <div class="">
                                      <div class="">
                                          <img class="w64px" src="public/img/icons/comillas1.svg" alt="comillas1">
                                      </div>

                                      <span class="fs_46px FuturaDemi text-primario">Ver más gente invirtiendo
                                          me da seguridad</span>
                                      <div class=" position-relative">
                                          <div class="position-absolute" style="bottom: 10px; right: 15px;">
                                              <img class="w64px" src="public/img/icons/comillas2.svg" alt="comillas2">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="pt-3">
                                      <hr class="">
                                      <p class="FuturaDemi fs_20px text-primario m-0"></p>
                                      <span class="FuturaDemi fs_20px text-secondary pb-3">Cliente de Portto Blanco</span>
                                  </div>
                                </div>
                                
                                <div class="carousel-item p-4">
                                  <div class="">
                                      <div class="">
                                          <img class="w64px" src="public/img/icons/comillas1.svg" alt="comillas1">
                                      </div>

                                      <span class="fs_46px FuturaDemi text-primario">Es un desarrollo que recomiendo, es el momento 
                                          para adquirir un terreno 
                                          en preventa</span>
                                      <div class=" position-relative">
                                          <div class="position-absolute" style="bottom: 10px; right: 15px;">
                                              <img class="w64px" src="public/img/icons/comillas2.svg" alt="comillas2">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="pt-3">
                                      <hr class="">
                                      <p class="FuturaDemi fs_20px text-primario m-0">Jorge Huesca</p>
                                      <span class="FuturaDemi fs_20px text-secondary pb-3">Cliente de Portto Blanco</span>
                                  </div>
                                </div>
                                
                                <div class="carousel-item p-4">
                                  <div class="">
                                      <div class="">
                                          <img class="w64px" src="public/img/icons/comillas1.svg" alt="comillas1">
                                      </div>

                                      <span class="fs_46px FuturaDemi text-primario">
                                          El desarrollo está estupendo, amenidades, y plusvalía firmada por contrato
                                      </span>
                                      <div class=" position-relative">
                                          <div class="position-absolute" style="bottom: 10px; right: 15px;">
                                              <img class="w64px" src="public/img/icons/comillas2.svg" alt="comillas2">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="pt-3">
                                      <hr class="">
                                      <p class="FuturaDemi fs_20px text-primario m-0">Mauricio Lima</p>
                                      <span class="FuturaDemi fs_20px text-secondary pb-3">Cliente de Portto Blanco</span>
                                  </div>
                                </div>
                                
                              </div>
                              <!-- Botones de previo y siguiente -->
                              <div class="position-relative">
                                  <div class="position-absolute" style="bottom: 40px; right: 75px;">
                                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFad" data-bs-slide="prev">
                                          <img class="w-32px" src="public/img/icons/icon_preview.svg" alt="Previo">
                                      </button>
                                      
                                  </div>
                                  <div class="position-absolute" style="bottom: 40px; right: 30px;">
                                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFad" data-bs-slide="next">
                                          <img class="w-32px" src="public/img/icons/icon_next.svg" alt="Siguiente">
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- accordion -->
              <div class="col-6">
                  <div class="card bg-light border-0">
                      <div class="card-body">
                          <div class="accordion " id="accordionPanels">
                              <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                  <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                      <span class="fs_22px FuturaDemi text-primario">
                                          ¿Cómo puedo utilizar el Simulador de Inversiones para evaluar una oportunidad de terreno residencial?
                                      </span>
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                  <div class="accordion-body">
                                      <span class="fs_20px FuturaBook">
                                          Nuestro Simulador de Inversiones te guía a través de un proceso sencillo para proporcionar una cotización rápida basada en tus preferencias y necesidades específicas.
                                      </span>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                  <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                      <span class="FuturaDemi fs_22px text-primario">
                                          ¿Qué tipos de propiedades desarrolla Grupo CCIMA?
                                      </span>
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                  <div class="accordion-body">
                                      <span class="FuturaBook fs_20px text-primario">
                                          Nos especializamos en desarrollos residenciales de alta calidad y parques industriales innovadores, en Querétaro
                                      </span>
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item bg-transparent border-0">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                  <button class="accordion-button collapsed bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                      <span class="FuturaDemi fs_22px text-primario">
                                          ¿Ofrece Grupo CCIMA opciones de financiamiento?
                                      </span>
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                  <div class="accordion-body">
                                  <span class="FuturaBook fs_20px text-primario">
                                      Sí, ofrecemos diversas opciones de financiamiento adaptadas a las necesidades de nuestros clientes
                                  </span>
                                  </div>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <!-- Noticias -->
    <section class="seccion">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 d-flex justify-content-center align-items-end">
            <h4 class="FuturaDemi fs-2 pb-3">Porque lo viste en</h4>
          </div>
          <div class="col-6 col-lg-2 d-flex justify-content-center align-items-center" style="height:10rem;">
            <div class="">
              <img class="w-100 grayscale" src="./public/img/logos/image 21.svg" type="">
            </div>
          </div>
          <div class="col-6 col-lg-2 d-flex justify-content-center align-items-center" style="height:10rem;">
            <div class="">
              <img class="w-100 grayscale" src="./public/img/logos/image 22.svg" type="">
            </div>
          </div>
          <div class="col-6 col-lg-2 d-flex justify-content-center align-items-center" style="height:10rem;">
            <div class="">
              <img class="w-100 grayscale" src="./public/img/logos/image 23.svg" type="">
            </div>
          </div>
          <div class="col-6 col-lg-2 d-flex justify-content-center align-items-center" style="height:10rem;">
            <div class="">
              <img class="w-100 grayscale" src="./public/img/logos/image 24.svg" type="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Bolsa de trabajo -->
    <!-- <section class="d-none d-lg-block">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12">
            <h4 class="text-center FuturaDemi fs-2 pb-3">Bolsa de Trabajo</h4>
          </div>
          <div class="col-sm-12 col-md-7">
            <p class="text-center">Bienvenido a Grupo CCIMA, donde construimos más que edificios; construimos futuros.
              Nos enorgullece ser una empresa líder en el sector de la construcción,y nuestro éxito se debe al talento y
              dedicación de nuestro equipo.</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-6 col-lg-3 ctr">
            <figure>
              <img class="rd-op" src="public/img/main_9.png" alt="">
            </figure>
            <h5 class="pt-3">Gerente de ventas</h5>
            <div class="row">
              <div class="col-9">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ad hic laudantium repellendus</p>
              </div>
              <div class="col-3">
                <embed src="./public/img/icons/Group 85.svg" type="">
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 ctr">
            <figure>
              <img class="rd-op" src="public/img/main_10.png" alt="">
            </figure>
            <h5 class="pt-3">Asistente de Ventas</h5>
            <div class="row">
              <div class="col-9">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ad hic laudantium repellendus</p>
              </div>
              <div class="col-3">
                <embed src="./public/img/icons/Group 85.svg" type="">
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 ctr">
            <figure>
              <img class="rd-op" src="public/img/main_11.png" alt="">
            </figure>
            <h5 class="pt-3">Auxiliar Contable</h5>
            <div class="row">
              <div class="col-9">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ad hic laudantium repellendus</p>
              </div>
              <div class="col-3">
                <embed src="./public/img/icons/Group 85.svg" type="">
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 ctr ">
            <figure>
              <img class="rd-op" src="public/img/main_12.png" alt="">
            </figure>
            <h5 class="pt-3">Mecanico a Disel</h5>
            <div class="row">
              <div class="col-9">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt ad hic laudantium repellendus</p>
              </div>
              <div class="col-3">
                <embed src="./public/img/icons/Group 85.svg" type="">
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 d-flex justify-content-center align-items-end">
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-3">
              <button class="btn text-white bg__primario me-md-2" type="button">Discover More</button>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <!-- Contacto -->
    <section class="seccion" id="beneficios">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="card bg-light rounded-3 border-0 ">
              <div class="card-body">
                <div class="row d-flex justify-content-between">
                  <div class="col-12 col-lg-4 ctr">
                    <h5 class="h4 card-title text-shadow-sm fw-bold">Tu Futuro Comienza Aquí</h5>
                    <p class="card-text">Completa el formulario</p>
                    <p class="card-text"></p>Uno de nuestros aliados se pondrá en contacto contigo</p>
                    <figure>
                      <img class="rd-op" src="./public/img/logos/image 11.jpg" alt="">
                    </figure>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="">
                      <form class="flex-column py-4 py-lg-0" id="datos_form">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nombre Completo</label>
                          <input type="text" class="form-control formulario-input" id="nombre">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Telefono</label>
                          <input type="text" class="form-control formulario-input" id="telefono">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Correo Electronico</label>
                          <input type="email" class="form-control formulario-input" id="correo">
                        </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Mensaje</label>
                          <textarea class="form-control formulario-mensaje" id="mensaje" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn text-white bg__primario">Enviar</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section id="footer">
      <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
          <hr style="height:2px;border-width:1;color:black;background-color:black">
          <div class="col-10 col-lg-4">
            <h5 class="text-center">Suscribete a nuestro Newlestter</h5>
            <div class="input-group mb-3">
              <input type="text" class="form-control newsletter-input" placeholder="Ingresa tu email" aria-label=""
                aria-describedby="button-addon2">
              <button class="btn text-white bg__primario newsletter-button" type="button"
                id="button-addon2">Suscribir</button>
            </div>
          </div>
        </div>


        <div class="row justify-content-between mt-5">
          <div class="col-12 col-lg-3 text-center">
            <img class="lgo pb-5 pb-lg-0" src="./public/img/main_19.png" alt="">
          </div>
          
          <div class="col-12 col-lg-3 d-flex align-items-end">
            <ul class="list-unstyled">
              <a href="#"><button class="btn text-white bg__primario me-md-2" type="button">Bolsa de Trabajo</button></a>
              <br>
              <br>
              <br>
              <li><a class=" text-primario text-decoration-none" href="">Politicas de privacidad</a></li>
              <li><a class=" text-primario text-decoration-none" href="">Condiciones de uso</a></li>
            </ul>
          </div>
          <div class="col-12 col-lg-3 d-flex align-items-center">
            <ul class="list-unstyled">
              <span class="text-primario fs_20px fw-bold"> Nuestras Marcas</span>
              <li><a class=" text-primario text-decoration-none" href="">Construye</a></li>
              <li><a class=" text-primario text-decoration-none" href="">Portto Blanco</a></li>
              <li><a class=" text-primario text-decoration-none" href="">Navetec</a></li>

            </ul>
          </div>
          <div class="col-12 col-lg-2 d-flex align-items-end">
            <ul class="list-unstyled">
              <li><a class=" text-primario text-decoration-none" href="">1900 soluciones financieras</a></li>
              <li><a class=" text-primario text-decoration-none" href="">Capital CCIMA</a></li>
              <li><a class=" text-primario text-decoration-none" href="">Rent Solutions</a></li>
            </ul>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 col-lg-8 d-flex justify-content-end">
            <h4 class="FuturaBook text-center text-lg-start mb-3 mb-lg-0">Derechos reservados Grupo CCIMA 2024</h4>
          </div>
          <div class="col-12 col-lg-4 text-center text-lg-end">
            <a class="social" rel="nofollow" href="#" target="_blank"><img class="w-32px"
                src="./public/img/icons/social_media/youtube.svg" alt=""></a>
            <a class="social" rel="nofollow" href="#" target="_blank"><img class="w-32px"
                src="./public/img/icons/social_media/facebook.svg" alt=""></a>
            <a class="social" rel="nofollow" href="#" target="_blank"><img class="w-32px"
                src="./public/img/icons/social_media/Whatsapp.svg" alt=""></a>
            <a class="social" rel="nofollow" href="#" target="_blank"><img class="w-32px"
                src="./public/img/icons/social_media/Instagram.svg" alt=""></a>

          </div>
        </div>

      </div>
    </section>
    <!-- Juan Cambios -->

    <!-- Agregar el video de Sherpa Reproduccion automatica -->
    <!-- Agregar las Fuentes Futura book demi bold -->
    <!-- animar el countdown  -->
  </main>

  <!-- <div class="container-boton "> -->
  <a href="https://api.whatsapp.com/send?phone=524422912223" target="_blank">
    <img class="btn-wsp" src="./public/img/wa.png" alt="">
  </a>
  <a href="#" target="_blank">
    <img class="btn-rg" src="./public/img/cel.png" alt="">
  </a>
  <a href="./public/files/presentacion_corta_general_precios.pdf" target="_blank" rel="nofollow"
    download="Portto Blanco">
    <img class="btn-dw" src="./public/img/PTB.png" alt="">
  </a>
  <a href="#" target="_blank" rel="nofollow"
    download="Portto Blanco">
    <img class="btn-nt" src="./public/img/icons/navetec.svg" alt="">
  </a>
  <!--  </div> -->
  <!-- EChart -->
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.5.0/dist/echarts.min.js"></script>

  <!-- Script -->
  <script src="./public/js/main.js"></script>
  <script src="./public/js/contador.js"></script>
  <script src="./public/js/sweetAlert.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })
  </script>
  <script src="./public/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

</body>

</html>