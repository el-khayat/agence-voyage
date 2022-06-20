<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" rel="stylesheet" href="style/bootstrap.min.css" />
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="style/contact.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactez nous</title>
</head>

<body>
    <?php
    require_once("./layout/nav-bar.php")
    ?>



    <section>

        <div class="listing-hero">
            <div class="hero-heading">
                <div class="hero-large">contactez-nous.</div>
                <div class="hero-text"> <i> avez-vous des questions? n'hésitez pas à demander ou à visiter notre page .. </i> </div>
            </div>
        </div>

        <div class="container-contact">
            <div class="wrap-contact">

                <form name="contact" class="contact-form validate-form" method="post" action="contact-form-handler.php">

                    <div class="wrap-input validate-input" data-validate="Please enter your name">
                        <input class="input" type="text" name="name" placeholder="votre nom">
                    </div>

                    <div class="wrap-input validate-input" data-validate="Please enter your email">
                        <input class="input" type="text" name="email" placeholder="E-mail">
                    </div>

                    <div class="wrap-input validate-input" data-validate="Please enter your message">
                        <textarea class="input" type="text" name="message" placeholder="votre Message"></textarea>
                    </div>

                    <div class="container-contact-form-btn">
                        <button type="submit" class="contact-form-btn">
                            <span>envoyer</span>
                        </button>
                    </div>

                    <div class="grid-container">
                        <div class="item1 left-align"><i class="fa fa-lg fa-map-marker-alt"></i> 4517 Washington Ave, Manchester, Kentucky 39495</div>
                        <div class="item4 right-align"><i class="fa fa-lg fa-phone"></i> (123) 456-7890<br>(123) 456-7890</div>

                    </div>

                </form>

            </div>
        </div>
        </div>

        </div>

    </section>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>