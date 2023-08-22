<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2 style="font-family: Helvetica; padding-bottom: 50px;">Nouveau message de {{ $details['fullname'] }}</h2>
    <h3 style="font-family: Helvetica;">Information de contact :</h3>
    <ul style="font-family: Helvetica; margin: 0; padding-bottom: 80px;">
      <li style="padding-bottom: 10px;"><strong>Son adresse e-mail</strong> : {{ $details['email'] }}</li>
      <li style="padding-bottom: 10px;"><strong>Son numéro mobile</strong> : {{ $details['phone'] }}</li>
      <li style="padding-bottom: 10px;"><strong>L'objectif de son contact</strong> : {{ $details['subject'] }}</li>
    </ul>
    <p style="font-family: Helvetica;">{{ $details['message'] }}</p>
  </body>
</html>