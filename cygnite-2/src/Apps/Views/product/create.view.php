<?php use Cygnite\AssetManager\Asset; ?>

<div class="pull-right">
    <?php echo Asset::anchor('product', 'Back', ['class' => 'btn btn-default btn-small btn-inverse']); ?>
</div>

<div>
    <?php
    if (!empty($validation_errors)) {
        /*
         | Display all validation error messages here
         */
        foreach ($validation_errors as $key => $message) { ?>

            <p style="color:#FF0000;"> <?php echo $message; ?> </p>
    <?php
        }
    }
    ?>
</div>

<div >
    <?php echo $form; ?>
</div>