<?php use App\Service\Page\PageService; if (isset($_SESSION["user"])) { header("Location: /home"); } ?>
<!DOCTYPE html>
<html lang="en">

    <?php (new PageService())->getPart(['head'], $data); ?>

    <body class="text-center">

        <?php (new PageService())->getPart(['theme', 'navbar']); ?>

        <main class="form-signin w-100 m-auto">

            <?php (new PageService())->getPart(['form'], $data); ?>

        </main>
        
    <?php (new PageService())->getPart(['footer']); ?>
