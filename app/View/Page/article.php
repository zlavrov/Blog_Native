<?php use App\Service\Page\PageService; if (!isset($_SESSION["user"])) { header("Location: /login"); } ?>
<!DOCTYPE html>
<html lang="en">

    <?php (new PageService())->getPart(['head'], $data); ?>

    <body>

        <?php (new PageService())->getPart(['theme', 'navbar']); ?>

        <main>

            <h1>This is Page Article</h1>

        </main>
        
    <?php (new PageService())->getPart(['footer']); ?>
