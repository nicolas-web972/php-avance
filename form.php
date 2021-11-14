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
    <h1>Formulaire de contact</h1>
    <form action="thanks.php" method="post">
    <div>
        <label for="lastname">Nom :</label>
        <input type="text"  id="name"  name="user_lastname">
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="name" name="user_firstname">
        </div>
    <div>
        <label  for="email">E-mail :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="number" id="phone" name="user_phone_number">
    </div>
    <div>
        <label for="subject">Le sujet de votre message :</label>
        <select name="user_subject" id="subject">
            <option value="Demande de renseignement">Demande de devis</option>
            <option value="Demande de devis">Demande d'informations</option>
            <option value="Réclamation">Autres</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>   
    </form> 
</body>
</html>