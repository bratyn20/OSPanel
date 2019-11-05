<h1><?= $var; ?></h1>

<div>
    <ul>




    <?php foreach ($array as $ar): ?>

    <p>
        <a href="/site/view/<?php echo '?id=' . $ar->id ?>"> <?php echo $ar->title ?> </a>
    </p>
        <?php endforeach; ?>

    </ul>
</div>