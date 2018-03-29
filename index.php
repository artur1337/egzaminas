<?php
require_once('config.php');
require_once(ROOT_PATH . '/includes/head_section.php');
include(ROOT_PATH . '/includes/function.php');
?>
    <title>Home</title>
</head>
<body>
<?php
if(!isLoggedIn()){
    $_SESSION['message'] = "You must log in first";
    header('location: login.php');
}
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['user']);
    header('location: login.php');
}
?>
<div>
    <?php if(isset($_SESSION['user'])) : ?>
        <strong><?php echo "Welcome to Home page user: " . $_SESSION['user']['username']; ?></strong>
        <small>
            <br>
            <a href="index.php?logout='1'">logout</a>
        </small>
    <?php endif ?>
</div>
<?php include( ROOT_PATH . '/includes/footer.php'); ?>
