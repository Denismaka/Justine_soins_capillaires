<?php
session_start()
?>

<?php include('layouts/header.php'); ?>
<?php include('functions/viewAll.func.php'); ?>



<!-- section catalogue -->
<section class="catalogue" id="catalogue">

    <h1 class="heading">
        <span>t</span>
        <span>o</span>
        <span>u</span>
        <span>t</span>
        <span>e</span>
        <span>s</span>
        <span>-</span>
        <span>c</span>
        <span>a</span>
        <span>t</span>
        <span>é</span>
        <span>r</span>
        <span>i</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <h2 id="categorie-film">Films</h2>
    <div class="box-container">
        <?php

        if (!empty($posts)) {
            foreach ($posts as $post) {

        ?>
                <div class="box">
                    <img src="assets/img/posts/<?= $post->image_post  ?>" alt="<?= $post->title_post  ?>">
                    <div class="content">
                        <h3><?= $post->title_post ?></h3>
                        <p><?= substr($post->content_post, 0, 50) ?></p>
                        <div class="stars">
                            <i class="fa fa-star fa-1x"></i>
                            <i class="fa fa-star fa-1x"></i>
                            <i class="fa fa-star fa-1x"></i>
                            <i class="fa fa-star fa-1x"></i>
                            <i class="fa fa-star fa-1x"></i>
                        </div>
                        <a href="viewSingle.php?id_post=<?= $client->id_clients ?>#editclient" class="btn"><i class="fa fa-edit"></i></a>
                        <a href="deleteSingle.php?id_post=<?= $client->id_clients ?>" class="btn"><i class="fa fa-trash"></i></a>
                        <a href="viewSingle.php?id_post=<?= $client->id_clients ?>" class="btn"><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <h3 class="box-title text-center">Aucun post n'est disponible </h3>

        <?php
        }
        ?>

    </div>


</section>
<!-- fin section catalogue -->


<?php include('layouts/footer.php'); ?>