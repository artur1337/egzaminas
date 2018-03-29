<?php include('config.php'); ?>
<?php include(ROOT_PATH . '/includes/function.php'); ?>
<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
<title>Login</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>
                    <h2>Login</h2>
                </th>
            </tr>
            <tr>
                <td>
                    <form method="post" action="login.php">
                    <?php include(ROOT_PATH . '/includes/errors.php'); ?><br><input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username"><br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <button type="submit" class="btn" name="login_btn">Login</button>
                    <p>
                        Not yet a member? <a href="register.php">Sing up</a>
                    </p>
                    </form>
                </td>
            </tr>
        </table>
    </div>
<?php include( ROOT_PATH . '/includes/footer.php'); ?>