<!-- Esercizio:
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditariet√† dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);
BONUS:
Aggiungete una pagina (vista) in cui creare istanze delle classi create e mostrare alcuni dati. Su cosa sia la pagina siete liberi (potrebbe essere la pagina di account dell'utente, oppure una pagina di elenco prodotti o dettaglio prodotto, con visualizzazione dello username utente in alto a destra). -->


<?php 
    include_once __DIR__ . '/Category.php';
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/User.php';

    $Prodotto = new Product("Airpods", "Apple", "Elettronica", 150, 15, "Cuffie bluetooth");
    // var_dump($Prodotto);
; ?>

<h2>Nome: <?= $Prodotto->nome ?></h2>
<h2>Marca: <?= $Prodotto->marca ?></h2>
<h2>Categoria: <?= $Prodotto->categoria ?></h2>
<h2>Prezzo: <?= $Prodotto->prezzo ?></h2>
<h2>Giacenza: <?= $Prodotto->giacenza ?></h2>
<p>Descrizione: <?= $Prodotto->descrizione ?></p>