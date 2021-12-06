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
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="service.php">Service</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header>
        <!--Label-->
        <section class="label">
            <div class="container">
                <p> Home/About</p>
            </div>

        </section>

        <!--About-->
        <section class="about">
            <div class="container">
                <img src="img/banner.jpg"width="100%">
                <h3>ABOUT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <strong>Langit Design</strong> veritatis vero id vitae placeat in reprehenderit! Commodi velit odio non veritatis quibusdam blanditiis, voluptate odit eligendi, enim natus est possimus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse ipsa accusamus perspiciatis nisi accusantium rerum et repudiandae doloribus sint molestias consequatur expedita, quisquam mollitia dolorem commodi reprehenderit explicabo unde voluptate? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem illo, sequi, accusamus sunt autem impedit quasi magnam placeat est provident iusto architecto voluptatibus esse quibusdam ipsam dolorem veniam natus iure!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio, odio, impedit architecto, enim modi repellendus quidem nihil fugit ipsum adipisci dolore eum iure? Iusto recusandae quam non veritatis ullam deserunt?</p>
                <h3>VISI</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus nihil laudantium sapiente corrupti! Illo quisquam nobis, deserunt autem eum id laborum sit doloremque accusamus consequatur vero blanditiis corporis, ducimus quidem.</P>
                <h3>MISI</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus nihil laudantium sapiente corrupti! Illo quisquam nobis, deserunt autem eum id laborum sit doloremque accusamus consequatur vero blanditiis corporis, ducimus quidem.</P>
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