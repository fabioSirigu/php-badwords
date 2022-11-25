<!-- Creare un form PHP che permetta di inviare due campi:
un paragrafo
una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server (con il form).
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
      <title>Document</title>
</head>
<body>
      <div class="container mt-5">
            <h1 class="text-uppercase text-center">censura una parola!</h1>
      <form action="greetings.php" method="get">
      <div class="mb-3">
        <label for="name" class="form-label">Paragrafo</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="paragrafo" aria-describedby="paragrafo">
      </div>
      <div class="mb-3">
        <label for="badWord" class="form-label">Parola da censurare</label>
        <input type="text" name="badWord" id="badWord" class="form-control" placeholder="parola da censurare" aria-describedby="parola da censurare">
      </div> 
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-danger">Reset</button>     
      </form>
      </div>
</body>
</html>