<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="opleidingen">
        <div class="row">
            <h2>Educations:</h2>
            <hr>
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-12"><?= $education->start_year ?>/<?= $education->end_year ?></div>
                <div class="col-12"><?= $education->company_name ?></div>
            <?php endforeach ?>
        </div>
    </section>

  
</div>


<?php require 'views/partials/footer.view.php' ?>