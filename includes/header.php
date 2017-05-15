<?php $sitetitle = 'Web Design Best Practices'; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $sitetitle; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/foundation@6.2.1(foundation.min.css),foundation-icons@3.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="/assets/css/style.css">
    <meta property="og:image" content="assets/ogimage.png"/>
</head>

<header>
    <div class="row">
        <div class="small-12 columns">
            <a href="/" class="logo"><?= $sitetitle; ?></a>
        </div>
    </div>
</header>

<?php include("../includes/nav.php"); ?>

<section id="content">