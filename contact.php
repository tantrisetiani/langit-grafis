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
                    <li ><a href="about.php">About</a></li>
                    <li class="active"><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header>
        <!--Label-->
        <section class="label">
            <div class="container">
                <p> Home/Contact</p>
            </div>

        </section>

        <!--Service-->
        <section class="service">
            <div class="container">
                <h3>CONTACT INFO</h3>
                <div class="box">
                    <div class="col-4">
                        <h4>Address</h4>
                        <p>Jl. Kenanga RT 3 RW 1 Ds. Bancong Kec. Wonoasri Kab.Madiun</p>
                    </div>
                    <div class="col-4">
                        <h4>Email</h4>
                        <p>Adrewana6690@gmail.com</p>
                    </div>
                    <div class="col-4">
                        <h4>Telp</h4>
                        <p>(021) 123456789</p>
                    </div>
                    <div class="col-4">
                        <h4>WhatsAap</h4>
                        <p>081332387213</p>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15820.630414067844!2d111.63029974999999!3d-7.557788699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79c78dffd8bc51%3A0xa6c7320e7e1a6486!2zN8KwMzMnMjcuMyJTIDExMcKwMzgnMTAuNiJF!5e0!3m2!1sid!2sid!4v1634482154595!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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