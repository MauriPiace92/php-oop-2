<?php
    require_once __DIR__ . '/Prodotti.php';
    require_once __DIR__ . '/Attrezzi.php';
    require_once __DIR__ . '/Abbigliamento.php';
    require_once __DIR__ . '/Piani_allenamento.php';
    require_once __DIR__ . '/Utente.php';


    // attrezzi
    $bilanciere= new Attrezzi ('pesi', 'una-mano');
    $bilanciere->marca='adidas';
    $bilanciere->peso=6;

    $kettlebell= new Attrezzi ('pesi', 'due-mani');
    $kettlebell->marca='quechua';
    $kettlebell->peso=14;

    $panca= new Attrezzi ('panca-piana', 'sostegno');
    $panca->marca='nike';

    // Abbigliamento
    $Maglietta= new Abbigliamento ('microfibra', 'manica-corta');
    $Maglietta->marca='adidas';
    $Maglietta->taglia='M';

    $Maglietta2= new Abbigliamento ('microfibra', 'canotta');
    $Maglietta2->marca='nike';
    $Maglietta2->taglia='s';

    $Felpa= new Abbigliamento ('microfibra', 'manica-lunga');
    $Felpa->marca='ARENA';
    $Felpa->taglia='XL';

    // Piani allenamento:
    $Dimagrimento= new Piani_Allenamento ('Cardio', 'HIIT');
    $Dimagrimento->marca='EthicalFit';
    $Dimagrimento->durata_piano_all= 12;

    $Tonificazione= new Piani_Allenamento ('Calisthenics', 'Tabata');
    $Tonificazione->marca='MYcoach';
    $Tonificazione->durata_piano_all= 8;

    $Relax= new Piani_Allenamento ('pilates', 'Dynamic Pilates');
    $Relax->marca='MYpers.Trainer';
    $Relax->durata_piano_all= 4;

    // USERS:
    $first = new Utente('Mario', 'Rossi');
    $first->aggiungiCarrello($Dimagrimento);
    $first->aggiungiCarrello($Maglietta);
    $first->aggiungiCarrello($Felpa);

    $second = new Utente('Paolo', 'Bianchi');
    $second->aggiungiCarrello($Dimagrimento);
    $second->aggiungiCarrello($Maglietta);
    $second->aggiungiCarrello($Felpa);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista acquisti</title>
</head>
<body>

    <h1>-- MAURI'S Shop -- </h1>
    <h3>ordine di:<?php echo $first->nome ?> <?php echo $first->cognome ?></h3>

    <ul> 
        <h2>Riepilogo Ordine:</h2>

        <?php foreach($first->getCarrello() as $prodotto){ ?>

            <li>
                <?php echo $prodotto->genere?> <?php echo $prodotto->tipo?> 
            </li>       

        <?php } ?>


    </ul>

  
    
</body>
</html>