<?php require '../app/View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>
<?php require '../app/View/includes/divdroite.php' ?>

<section>
    <h1>Users</h1>
    
    <ul>
        <?php foreach ($users as $user) : ?>
            
            <?php /*<li><a href="index.php?page=articles-show&title=<?= $article["title"]?>"><?= $article["title"] ?> (<?= $article["publish_date"]?>)</a> </li>*/?>
            <li><a href="index.php?page=Users-show&Username=<?= $user->Username?>"><?=$user->Username ?>  </a></li>
        <?php endforeach; ?>
    </ul>
</section>

<?php require '../app/View/includes/footer.php'?>