<html>
  <head>
    <title>Proses Input</title>
  </head>
  <body>
    <?php
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    ?>
    <h1>Perbandingan Nilai</h1>
    <hr />
    Bil1 : <?=$bil1;?><br />
    Bil2 : <?=$bil2;?><br />
    <?php
    if ($bil1 == $bil2) {
      echo "$bil1 sama dengan $bil2<br />";
    } elseif ($bil1 > $bil2) {
      echo "$bil1 lebih besar dari $bil2<br />";
    } else {
      echo "$bil2 lebih besar dari $bil1<br />";
    }
     ?>
  </body>
</html>
