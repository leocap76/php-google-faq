<?php
// Esercizio:
// Riscrivere questa pagina del sito google
// https://policies.google.com/faq.
// Ci sono diverse domande con relative risposte.
// Gestire il “Database” e la visualizzazione di
// queste domande e risposte con PHP.

$googleFaq = [

  [
    "question" => "",
    "answer" => "",
  ],

  [
    "question" => "",
    "answer" => "",
  ],

  [
    "question" => "",
    "answer" => "",
  ],

  [
    "question" => "",
    "answer" => "",
  ],

  [
    "question" => "",
    "answer" => "",
  ],

  [
    "question" => "",
    "answer" => "",
  ],

];

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google-faq</title>
  </head>
  <body>
    <div class="container">
      <?php
      echo $googleFaq[0]["question"]. "<br>". $googleFaq[0]["answer"];
      ?>
      <?php
      echo $googleFaq[1]["question"]. "<br>". $googleFaq[1]["answer"];
      ?>
      <?php
      echo $googleFaq[2]["question"]. "<br>". $googleFaq[2]["answer"];
      ?>
      <?php
      echo $googleFaq[3]["question"]. "<br>". $googleFaq[3]["answer"];
      ?>
    </div>
  </body>
</html>

<!-- ESEMPI -->
<!-- <h1>Nome completo: <?php echo $nome . " " . $cognome; ?></h1>  STAMPA CON CONCATENAZIONE TRAMITE "."
<h2>Nome: <?php echo $nome; ?></h2>       STAMPA SOLO NOME
<h1>nome:  <?php echo $nome . ", " . "numero lettere:" . strlen($nome); ?>  </h1> STRLEN: NUMERO DI LETTERE DI CUI è COMPOSTO IL "NOME"
<h1>nome:  <?php  strpos($nome, "a") ?> VERIFICA NEL "NOME", IN CHE POSIZIONE SI TROVA LA LETTERA "A"
<h1>nome:<?php is_numeric($nome) ?>    VERIFICA CHE L'ELEMENTO SIA UN NUMERO
<h2>Cognome: <?php echo $cognome; ?></h2>  STAMPA SOLO COGNOME
<p>Variabile GET: <?php echo $_GET["nome"]; ?></p>  STAMPA CON RICHIAMO A VARIABILE
<p><?php var_dump($arrayText); ?></p>   STAMPA ARRAY
<h4><?php echo trim($arrayText[1]); ?></h4>  STAMPA SECONDO ELEMENTO IN ARRAY ( 0, "1", 2...)
<h1><?php echo str_replace("dolor", "***", $text); ?>  SOSTITUISCI IN "TEXT" LA PRIMA PAROLA(DOLOR) CON LA SECONDA (***)
<h5><?php echo ucwords($text); ?></h5> -->
<!-- __________________CICLI_____________________________ -->
  <!-- <?php for($i = 0; $i < count($array); $i++)  ?>  CICLO FOR, COUNT = .LENGHT
  <?php foreach($matches as $match){ echo $match . "<br>"}?>   UGUALE COME UN CICLO FOR, NELL'ARRAY MATCHES PARTE IL CICLO E STAMPA TUTTI I MATCH
  <?php foreach ($matches as $key => $value): ?> QUALORA ALL'INTERNO DELL'ARRAY CI SIANO PIù CONDIZIONI : $KEY(STUDENTE) => $VALUE(LEONARDO)

  <?php endforeach; ?>-->
<!-- _________________________________________________________ -->
  <!-- localhost:8888/php-snacks-blocco-1/index2.php?... PER APRIRE NUOVO INDEX -->
<!-- /ESEMPI -->
