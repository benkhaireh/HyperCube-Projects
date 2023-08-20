<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Nouveau Message - Site Web Document Solutions</h2>
    <p>Réception d'un nouveau message avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom complet</strong> : {{ $contact['fullname'] }}</li>
      <li><strong>E-mail</strong> : {{ $contact['email'] }}</li>
      <li><strong>Téléphone</strong> : {{ $contact['phone'] }}</li>
      <li><strong>Objet</strong> : {{ $contact['subject'] }}</li>
      <li><strong>Message</strong> : {{ $contact['message'] }}</li>
    </ul>
  </body>
</html>