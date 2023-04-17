<?php
    setlocale(LC_TIME, 'pt_BR.utf8');

    $now = new \DateTime('now');
    $month = $now->format('m');
    $date_obj = DateTime::createFromFormat('!m', $month);
    $month = $date_obj->format('F');
?>

<section>
    <div class="sect-content">
        <div class="sect-header">
            <div class="col g-16 ta-ce">
                <span class="txt-spaced-light fs-14">OS CLIENTES ESCOLHERAM</span>
                <h2>Mais vendidos de <?php echo $month ?></h2>
                <p>Mobiliário para sala, cozinha, quartos, escritórios, casas de banho, exteriores, e muito mais.</p>
            </div>
        </div>
        <div class="row g-24"></div>
    </div>
</section>