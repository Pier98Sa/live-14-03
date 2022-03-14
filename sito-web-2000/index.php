<?php
require __DIR__ . '/partials/header.php';
require __DIR__ . '/utils/functions.php';
?>

    <main>
        <h1>Benvenuto su Sito Web 200!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, expedita vitae modi quibusdam consectetur provident incidunt placeat aspernatur earum quam porro deserunt qui ratione tenetur, velit, omnis ipsa exercitationem vel.</p>

        <?php
            echo '<h3>'. getSommaNumeriCasuali(1,100). '</h3>';
        ?>
    </main>

<?php
require __DIR__ . '/partials/footer.php';
?>

   