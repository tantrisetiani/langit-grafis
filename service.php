<!DOCTYPE html>
<php>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="" width=device-width, initial-scale="1">
        <title> Langit Grafis </title>
        <link rel="stylesheet" type="text/css" href="design.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </head>

    <body>
        <!--loader-->
        <div class="bg-loader">
        <div class="loader"></div>
        </div>
        <!--header-->
        <div class="medsos">
            <div class="container">
                <ul>

                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#">
                            <i<i class="fab fa-instagram"></i>
                        </a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <h1><a href="index.php">Langit Grafis</a></h1>
                <ul>
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li  class="active" ><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header>
       <!--Label-->
       <section class="label">
            <div class="container">
                <p> Home/Service</p>
            </div>

        </section>
        <!--Service-->
        <section class="service">
            <div class="container">
                <h3>SERVICE</h3>
                <div class="box">
                    <div class="col-4">
                        <div class ="icon"><i class="fas fa-mobile-alt"></i></div>
                        <h4>UI DESIGN FOR MOBILE APP</h4>
                    </div>
                    <div class="col-4">
                        <div class ="icon"><i class="fas fa-star"></i></div>
                        <h4>LOGO DESIGN</h4>
                    </div>
                    <div class="col-4">
                        <div class ="icon"><i class="fas fa-edit"></i></div>
                        <h4>EDITING PHOTOSHOP</h4>
                    </div>
                    <div class="col-4">
                        <div class ="icon"><i class="fas fa-play-circle"></i></div>
                        <h4>VIDEO COMPANY WITH PREMIERE PRO</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer>
            <div class="container">
                <small>© 2021 Langit Grafis Allright Reserved.</small>

            </div>
        </footer>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>

    </body>

</php>