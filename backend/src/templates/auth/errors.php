<?php
/**
 * Error template
 *
 * @author Marko
 * @version 1.0
 *
 */
include 'register/registration.php';
if (count($errors) > 0) : ?>
    <div class="error">
        <?php foreach ($errors as $error) : ?>
            <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>