

<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranč v Hájku</title>
    <link id="styly" rel="stylesheet" href="">
    <link rel="stylesheet" href="./styly_kontakt.css">
   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
</head>

<body>
    <div class="left"id="left">
        <div class="topnav"id="topnav">
            <a href="index.html">Úvod</a>
            <a class="active" href="kontakt.php">Kontakt</a>
            <a href="fotogalerie.html">Fotogalerie</a>
            <a href="angus.html">Aberdeen Angus</a>
            <a href="mangalice.html">Mangalice</a>
            <a href="muflon.html">Muflon</a>
            <a href="kladrub.html">Starokladrubský kůň</a>
        </div>
    </div>
    <div id="menu-toggle" onclick="menu()">
        <div id="menu-icon"> 
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>

    <div id="kontakt_sedy">
        <table class="tabulka_kontakt">

            <tr>
                <td>
                    <a><img id="kontakt_ikona" src="img/jmeno.png">
                </td>
                <td>
                    <div>
                        <h1 class="a">Lenka Scholzová</h1>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a><img id="kontakt_ikona" src="img/pozice.png">
                </td>
                <td>
                    <div>
                        <h1 class="a">Machov 195, 549 63</h1>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a><img id="kontakt_ikona" src="img/tel.png">
                </td>
                <td>
                    <div>
                        <h1 class="a">737 787 061</h1>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a><img id="kontakt_ikona" src="img/mail.png">
                </td>
                <td>
                    <div>
                        <h1 class="a">bio@rancvhajku.cz</h1>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a class="facebook" href="https://www.facebook.com/RancvHajku"><img class="facebook_icon"src="img/facebook.png" alt="facebook"></a>
                </td>
                
                <td>
                    <div>
                        <h1 class="a">Facebook</h1>
                    </div>
                </td>
            </tr>
        </table>
    </div>


    <iframe id="mapid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2538.0042696544265!2d16.247945815818834!3d50.496878291899286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e6988a31104f3%3A0x93d2ad3d546e9514!2sMachov%20195%2C%20549%2063%20Machov!5e0!3m2!1scs!2scz!4v1645477967250!5m2!1scs!2scz"  allowfullscreen="" loading="lazy"></iframe>

    

    <div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Jméno</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Předmět</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Zpráva</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="1"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Odeslat" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="main.js"> </script>


</body>

</html>

<?php
require 'vendor/autoload.php';
if(!empty($_POST["send"])){
    $mail = new Nette\Mail\Message;
    $mail->setFrom($_POST['userEmail'])
    ->addTo('levienstark12@gmail.com')
    ->setSubject($_POST['subject'])
	->setBody($_POST['content']);

    $mailer = new Nette\Mail\SendmailMailer;
    $mailer->send($mail);
    
}
?>