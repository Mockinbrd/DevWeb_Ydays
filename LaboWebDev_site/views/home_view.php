<!DOCTYPE html>

<html>
<head>

    <?php include_once 'includes/head.php' ?>
    <title><?= ucfirst($page) ?> - Blog Sneakers</title>

</head>

<body>
<div class="container">

<?php include_once 'includes/header.php' ?>


    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">

            <?php

            foreach($allCategories as $index => $category){ ?>

                <a class="p-2 text-muted" href="#"><?= $category['name']?></a>

            <?php } ?>


        </nav>
    </div>

    <div style="background-color: #d0d2ff" class="jumbotron p-4 p-md-5 text-white rounded ">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?= $lastArticle['title']?></h1>
            <p class="lead my-3"><?= $lastArticle['sentence']?></p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"><?= $lastArticleLeft['category']?></strong>
                    <h3 class="mb-0"><?= $lastArticleLeft['title']?></h3>
                    <div class="mb-1 text-muted"><?= date_format(date_create($lastArticleLeft['date']), "m/Y")?></div>
                    <p class="card-text mb-auto"><?= $lastArticleLeft['sentence']?></p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img width="200" height="250" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Notre_Dame_de_Paris_DSC_0846w.jpg/280px-Notre_Dame_de_Paris_DSC_0846w.jpg">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success"><?= $lastArticleRight['category']?></strong>
                    <h3 class="mb-0"><?= $lastArticleRight['title']?></h3>
                    <div class="mb-1 text-muted"><?= date_format(date_create($lastArticleRight['date']), "m/Y")?></div>
                    <p class="mb-auto"><?= $lastArticleRight['sentence']?></p>
                    <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img width="200" height="250" src="https://lesraffineurs.b-cdn.net/941-large_default/montre-komono-winston-blue-cognac.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
            </h3>

            <?php

                foreach($allArticles as $index => $article){ ?>
                    <div class="blog-post">
                        <h2 class="blog-post-title"><?= $article['title']?></h2>
                        <p class="blog-post-meta"><?= date_format(date_create($article['date']),"d/m/Y H:i")?> par <a href="#"><?= $article['firstname'] . ' ' . $article['lastname']?></a></p>

                        <p><?= $article['content']?></p>
                    </div><!-- /.blog-post -->

            <?php } ?>



            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->




<?php include_once 'includes/footer.php' ?>

<script src="assets/js/app.js"></script>


</body>


</html>