<?php
$unita=$params->get('lastcont');
$ultimoArticolo=modtravelHelper::getUltimoArticolo($unita);

?>
<div class="news">
    <div class="text-center"><h3>CARIGELEARNING NEWS</h3></div>
    <div class="text-center">
        <h2>
            <a href="index.php?option=com_travel&view=contenuto&alias=<?php echo $ultimoArticolo->alias; ?>">
                <?php echo $ultimoArticolo->titolo; ?>
            </a>
        </h2>
    </div>
</div>