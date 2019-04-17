<!DOCTYPE html>

<html>
<head>

    <?php include_once 'includes/head.php' ?>
    <title><?= ucfirst($page) ?> - Blog Sneakers</title>

</head>

<body>
<div class="container">

<?php include_once 'includes/header.php' ?>


    <h1>Contact</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Prénom</label>
            <input type="text" name="firstname" class="form-control" id="xampleFormControlSelect1" placeholder="John">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="8" placeholder="..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="btnContact">Envoyer</button>
    </form>


</div>

<?php include_once 'includes/footer.php' ?>


</body>


</html>