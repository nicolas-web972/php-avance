lines (20 sloc)  901 Bytes
<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv='X-UA-Compatible' content='ie=edge'>
        <meta name='description' content='Mon formulaire de contact'/>
        <title>Mon formulaire de contact</title>
    </head>
    <body>
        <div>
            <?php       
                echo "Merci " . $_POST['user_firstname'] . " " . $_POST['user_name'] . " de nous avoir contacté à propos de “". $_POST['user_subject'] ."”. Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone_number'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];
            ?>
        </div>
    </body>
</html>