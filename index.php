<!-- Esercizio:
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Aggiungete una pagina (vista) in cui creare istanze delle classi create e mostrare alcuni dati. Su cosa sia la pagina siete liberi (potrebbe essere la pagina di account dell'utente, oppure una pagina di elenco prodotti o dettaglio prodotto, con visualizzazione dello username utente in alto a destra). -->


<?php 
    include_once __DIR__ . '/category.php';
    require_once __DIR__ . '/product.php';
    require_once __DIR__ . '/user.php';

    $prodotto = new product("Airpods", "Apple", "Elettronica", 150, 15, "Cuffie bluetooth");
    var_dump($prodotto);
; ?>
