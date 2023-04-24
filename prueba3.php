<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MJ-Marmol</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="resource/images/Iconos/logo.png" rel="icon">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="resource/js/css/style.css" rel="stylesheet">
    <audio src="resource/musica/violin.mp3" loop="3" autoplay="true"></audio>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
    }

    .header {
        position: sticky;
        top: 0;
        width: 100%;
        box-shadow: 0 4px 20px hsla(207, 24%, 35%, 0.1);
        background-color: #181818;
        z-index: 1;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }

    .logo a {
        font-size: 24px;
        font-weight: bold;
        color: #fff;
    }

    .logo a span {
        color: #ed6436;
    }

    .menu {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .menu a {
        display: block;
        padding: 7px 15px;
        font-size: 17px;
        font-weight: 500;
        transition: 0.2s all ease-in-out;
        color: #fff;
    }

    .menu:hover a {
        opacity: 0.6;
    }

    .menu a:hover {
        opacity: 1;
        color: #ed6436;
    }

    .menu-icon {
        display: none;
    }

    #menu-toggle {
        display: none;
    }

    #menu-toggle:checked~.menu {
        transform: scale(1, 1);
    }

    @media only screen and (max-width: 950px) {
        .menu {
            flex-direction: column;
            background-color: #151418;
            align-items: start;
            position: absolute;
            top: 70px;
            left: 0;
            width: 100%;
            z-index: 1;
            transform: scale(1, 0);
            transform-origin: top;
            transition: transform 0.3s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        }

        .menu a {
            margin-left: 12px;
        }

        .menu li {
            margin-bottom: 10px;
        }

        .menu-icon {
            display: block;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            background-color: #181818;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            z-index: 1;
            background-color: #181818;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            background-color: #181818;
        }

        .dropdown-toggle {
            display: block;
            background-color: #181818;
        }

        .dropdown-menu li {
            padding: 0px 0px;
            background-color: #181818;
        }

        .dropdown-menu li:hover {
            background-color: #181818;
        }
    }
</style>

<header class="header">
    <nav>
        <div class="logo">
            <h1 class="logo"><span class="text-primary">MJ</span><span style="color:white">Marmol</span></h1>
        </div>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <ul class="menu">
            <li><a class="active" href="index.html"><span class="lnr lnr-home"></span>  Inicio</a></li>
            <li><a href="#"><span class="lnr lnr-store"></span>  Productos</a></li>
            <li><a href="#contact"><span class="lnr lnr-envelope"></span>  Contacto</a></li>
            <li><a href="#about"><span class="lnr lnr-license"></span>  Sobre Nosotros</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="lnr lnr-user"></span>  Cuenta <span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color: #181818;">
                    <li><a href="login.php" style="font-size: 16px";><span class="lnr lnr-users"></span> - Registrarse</a></li>
                    <li><a href="#" style="font-size: 16px";><span class="lnr lnr-cart"></span> - Carrito</a></li>
                    <li><a href="Mover_imagen.php" style="font-size: 16px";><span class="lnr lnr-pencil"></span> - Crea tú</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>





<body>
    <!-- Navbar Start -->


    <!-- Navbar End -->


    <!-- Carousel Start -->


    <!-- PRODUCT SECTION -->



    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="resource/js/css/a.js"></script>
</body>

</html>