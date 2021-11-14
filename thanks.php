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
        <?php
         // define variables and set to empty values
        $lastNameErr = $lastNameErr1 =  $firstNameErr = $firstNameErr1 = $emailErr = $emailErr1 = $phoneErr = $phoneErr1 = $subjectErr = $messageErr = "";
        $firstName = $lastName = $email = $phone = $suject = $message = "";
        $firstName1="";
        $succesMessage = "";
        $failMessage = "";

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["user_firstname"])) {
                $firstNameErr = "Le prénom est requis <br>";
                echo $firstNameErr;
            } else {
                $firstName1 = test_input($_POST["user_firstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName1)) {
                    $firstNameErr1 = "Seules les lettres et espaces sont acceptés.<br>";
                    echo $firstNameErr1;
                }
            }

            if (empty($_POST["user_lastname"])) {
                $lasttNameErr = "Le prénom est requis <br>";
                echo $lastNameErr;
            } else {
                $lastName = test_input($_POST["user_lastname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
                    $lastNameErr1 = "Seules les lettres et espaces sont acceptés.<br>";
                    echo $lastNameErr1;
                }
            }

            if (empty($_POST["user_email"])) {
                $emailErr = "L'e-mail est requis <br>";
                echo $emailErr;
            } else {
                $email = test_input($_POST["user_email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr1 = "Format d'e-mail invalide <br>";
                    echo $emailErr1;
                }
            }

            if (empty($_POST["user_phone_number"])) {
                $phoneErr = "Le téléphone est requis <br>";
                echo $phoneErr;
            } else {
                $phone = test_input($_POST["user_phone_number"]);
                if (!preg_match("/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/", $phone)) {
                    $phoneErr1 = "Format de téléphone invalide";
                    echo $phoneErr1;
                }
            }

            if (empty($_POST["user_subject"])) {
                echo $subjectErr = "Un choix est requis<br>";
            } else {
                $subject = test_input($_POST["user_subject"]);
            }

            if (empty($_POST["user_message"])) {
                echo $messageErr = "Le champs est vide<br>";
            } else {
                $message = test_input($_POST["user_message"]);
            }
        }

        if ($firstName1 && $lastName && $email && $phone && $subject && $message) {
            $succesMessage = "Merci " . $_POST["user_firstname"] . " " . $_POST["user_lastname"] . " de nous avoir contacté à propos de " . $_POST["user_subject"]. ". <br>Un de nos conseiller vous contactera soit à l'adresse : " . $_POST["user_email"] . " ou par téléphone au : " . $_POST["user_phone_number"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"];

            echo $succesMessage;
        } else {
            echo $failMessage;
        }            
        ?>
        </div>
    </body>
</html>