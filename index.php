<!doctype html>
<html lang="hu">
    <head>
        <script src="js/bootstrap.bundle.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/fontawesome.js" crossorigin="anonymous"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/site.js"></script>
        <link rel="stylesheet" href="css/site.css">
        <link rel="stylesheet" href="css/photoswipe.css">
        <script type="module" src="js/photoswipe-init.js"></script>

        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Szandi & Szabi Esküvő</title>
        <link rel="icon" type="image/x-icon" href="/img/favicon.png">
        <!-- https://www.freepik.com/ -->
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Szandi & Szabi</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="#photos"><i class="fa fa-photo" aria-hidden="true"></i> Képek <span class="rounded-pill badge bg-danger">Folyamatban...</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#events"><i class="fa fa-calendar" aria-hidden="true"></i> Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#important"><i class="fa fa-info-circle" aria-hidden="true"></i> Fontos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu"><i class="fa fa-cutlery" aria-hidden="true"></i> Menü</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./img/20250509_ulesrend_jpg.jpg"><i class="fa fa-chair" aria-hidden="true"></i> Ülésrend </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="video-wrapper pt-5 mb-2" id="photos">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 pt-2">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <b>Köszönjük, hogy eljöttetek, reméljük jól éreztétek magatokat😊. A fotók még nincsenek készen. Addig megleshetitek a ti képeiteket👇</b>
                            <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="col-md-6 category-img-div">
                        <a href="photos.php?category=all">
                            <p class="category-text video-text">Ti képeitek</p>
                            <img class="category-img img img-fluid" src="img/par.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-6 category-img-div" style="filter: grayscale(50)">
                        <a href="#">
                            <p class="category-text video-text">Hamarosan...</p>
                            <img class="category-img img img-fluid" src="img/szertartas.jfif" alt="" />
                        </a>
                    </div>
                    <div class="col-md-6 category-img-div" style="filter: grayscale(50)">
                        <a href="#">
                            <p class="category-text video-text">Hamarosan...</p>
                            <img class="category-img img img-fluid" src="img/torta.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-6 category-img-div" style="filter: grayscale(50)">
                        <a href="#">
                            <p class="category-text video-text">Hamarosan...</p>
                            <img class="category-img img img-fluid" src="img/keringo.jfif" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="video-wrapper">
            <div class="video-text">
                <h2 class>🥂Köszönjük, hogy eljöttetek😇</h2>
                <h1 class>Szandi & Szabi</h1>
                <h2 class>2025.06.06.</h2>
                <h3 class>Anna Karolina Esküvő és Rendezvényház</h3>
                <h3 class>Dabas, Örkényi út 16, 2370</h3>
                <h2 id="countdown-pill" class="rounded-pill badge bg-primary d-none">
                    <span id="countdown-text"></span>
                </h2>
            </div>
            <video loop autoplay muted playsinline class="video">
                <source src="vid/8775886-hd_1920_1080_25fps.mp4" type="video/mp4">
            </video>
        </div>

        <div class="video-wrapper">
            <div class="video-text">
                <h1 class>15:00 - Vendégvárás</h1>
                <h1 class>16:00 - Polgári Szertartás</h1>
                <h1 class>19:00 - Vacsora</h1>
                <h1 class>00:00 - Éjféli étkezés</h1>
                <h1 class>05:00 - Lakodalom vége</h1>
                <h1 class>09:00 - Reggeli</h1>
            </div>
            <video loop autoplay muted playsinline class="video" id="events">
                <source src="vid/8246990-hd_1920_1080_25fps.mp4" type="video/mp4">
            </video>
        </div>

        <div class="video-wrapper">
            <div class="video-text">
                <h1><i class="fa-solid fa-car"></i> Zárt parkoló a rendezvény területén.</h1>
                <h1><i class="fa-solid fa-champagne-glasses"></i> Korlátlan étel és ital fogyasztás.</h1>
                <h1><i class="fa-solid fa-users"></i> Polgári szertatás a helyszínen.</h1>
                <h1><i class="fa-solid fa-bed"></i> Szálláslehetőség helyben, másnap reggelivel.</h1>
            </div>
            <video loop autoplay muted playsinline class="video" id="important">
                <source src="vid/8503580-hd_1920_1080_24fps.mp4" type="video/mp4">
            </video>
        </div>

        <div class="video-wrapper">
            <div class="video-text menu-div">
                <table class="menu-table">
                    <tr>
                        <td>
                            <i class="fa-regular fa-address-book"></i> Vendégvárás
                            <ul>
                                <li>Sajtos és sokmagvas pogácsa</li>
                                <li>Rétes (barackos-túrós, meggyes-mákos, almás, epres, káposztás)</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-utensils"></i> Vacsora
                            <ul>
                                <li>Lakodalmas tyúkhúsleves</li>
                                <li>Marhapörkölt galuskával</li>
                                <li>Mediterrán csirkemellfilé</li>
                                <li>Sült csülök almaágyon, párolt káposztával</li>
                                <li>Sajttal-sonkával töltött rántott sertésborda</li>
                                <li>Jércemellfilé sörbundában</li>
                                <li>Rántott karfiol, rántott sajt, tartármártás</li>
                                <li>Sült burgonya, rizi-bizi, párolt zöldség (bébirépa, brokkoli, karfiol), káposztasaláta, csemeuborka, csípős savanyúság</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-moon"></i> Éjféli
                            <ul>
                                <li>Töltött káposzta tejfellel</li>
                                <li>Mangalica disznótoros</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <i class="fa-solid fa-martini-glass"></i> Ital
                            <ul>
                                <li>Alkoholos és mentes italok, üdítő, kávé</li>
                                <li>Sör, bor, pálinka, röviditalok</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <video loop autoplay muted playsinline class="video" id="menu">
                <source src="vid/8246936-hd_1920_1080_25fps.mp4" type="video/mp4">
            </video>
        </div>
    </body>
</html>
