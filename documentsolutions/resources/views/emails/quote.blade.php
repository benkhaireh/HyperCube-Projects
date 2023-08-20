<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Demande de devis sur le site web Document Solutions</h2>
    <p>Réception d'un demande de devis avec les éléments suivants :</p>
    <ul>
      <li><strong>Nom complet</strong> : {{ $quote['fullname'] }}</li>
      <li><strong>E-mail</strong> : {{ $quote['email'] }}</li>
      <li><strong>Téléphone</strong> : {{ $quote['phone'] }}</li>
      <li><strong>Service(s)</strong> : {{ is_array($quote['service']) ? implode(", " , $quote['service']) : $quote['service'] }}</li>
    </ul>
  </body>
</html>