<?php
require __DIR__ . '/partials/header.php';
?>
    <main>
        <h1>Contattaci</h1>

        <form  method="GET">

            <input type="text" name="nome" placeholder="inserisci il tuo nome">
            <input type="text" name="telefono" placeholder="inserisci il tuo numero di telefono">
            <input type="text" name="contatto" placeholder="Motivo del contatto">
            <textarea name="richiesta" id="" cols="30" rows="10" placeholder="Inserisci i motivi della richiesta..."></textarea>
            <button type="submit">Invia Richiesta</button>

        </form>
    </main>
<?php
require __DIR__ . '/partials/footer.php';
?>
 