<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website pribadi</title>
    <link rel="stylesheet" href="template/user/output.css">
    <link rel="stylesheet" href="template/user/input.css">
    <link rel="shortcut icon" href="template/user/assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap" rel="stylesheet">
</head>

<body class="font-Outfit leading-8 dark:bg-darkTheme dark:text-white">
    <div class="fixed top-0 right-0 w-11/12 -z-10 translate-y-[-80%] dark:hidden">
        <img src="template/user/assets/header-bg-color.png" alt="" class="w-full" />
    </div>

    <!-- nav section -->
<?php include "komponen/alinia/navbar.php" ?>
    <!-- ----- home section ------ -->
   <?php include "komponen/pages/home.php" ?>" 

    <!-- ----- about me section ------ -->
   <?php include "komponen/pages/about.php" ?>" 

    <!-- My Work Section -->
     <?php include "komponen/pages/work.php" ?>" 
    <!-- Contact me section -->
    <?php include "komponen/pages/contact.php" ?>" 

    <!-- Footer -->
    <?php include "komponen/alinia/footer.php" ?>" 
    <script src="template/user/script.js"></script>

</body>

</html>