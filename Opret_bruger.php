<?php include 'header.php'; ?>

<h3>Velkommen</h3>
<p> Udfyld nedenstående informationer om hver recept. Derefter kan du gå til 'Oversigt', og se hvad svindprocenten på den givne pølse er. </p>
<br> <br>


    <form action='formular.php' method="post">
    Receptnummer: <input type="text" id="recept"><br>
    Dato: <input type="text" id="dato"><br>
    Vejecelle ID: <input type="text" id="vejecelle"><br>
    <input type="submit">
 </form>


<?php include 'footer.php'; ?>