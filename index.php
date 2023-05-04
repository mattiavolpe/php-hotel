<?php
/*
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate per steps:
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.
Bonus: 1
Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
NOTA: deve essere possibile utilizzare entrambi i filtri contemporaneamente (es. ottenere una lista con hotel che dispongono di parcheggio e che hanno un voto di tre stelle o superiore)
Se non viene specificato nessun filtro, visualizzare come in precedenza tutti gli hotel.
*/
  $hotels = [
    [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
    ],
    [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
    ],
    [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
    ],
    [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
    ],
    [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
    ],
  ];
?>

<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- PERSONAL EXTERNAL CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
        
    <title>Hotel</title>
  </head>
  
  <body>

    <form action="index.php" method="get" class="mx-auto w-50 text-center my-5">
      <div class="form-check p-0 text-center mb-5">
        <label class="form-check-label mb-2" for="parking">Has parking</label>
        <br>
        <input class="form-check-input m-0" name="parking" type="checkbox" id="parking">
      </div>
      <div class="mb-5">
        <label for="rating" class="form-label mb-2">Rating (0 - 5)</label>
        <input type="number"
          class="form-control mb-2" min="0" max="5" name="rating" id="rating" aria-describedby="ratingHelper" placeholder="Insert a rating">
        <small id="ratingHelper" class="form-text text-muted m-0">Insert a rating</small>
      </div>
      <button type="submit" class="btn btn-primary">Filter</button>
    </form>
    
    <table class="mx-auto my-5">
      <thead>
        <tr>
          <th>Hotel name</th>
          <th>Hotel description</th>
          <th>Parking</th>
          <th>Rating</th>
          <th>Distance to center</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($hotels as $hotel) : ?>
        <tr>
          <?php foreach ($hotel as $field) : ?>
          <td class="text-center px-3 py-2 border border-dark">
            <?php if ($field !== true && $field !== false) {
              echo $field;
            } elseif ($field === true) {
              echo "Yes";
            } else {
              echo "No";
            } ?>
          </td>
          <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    
  </body>
  
</html>
