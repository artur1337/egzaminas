<?php include('config.php'); ?>
<?php include(ROOT_PATH . '/includes/function.php'); ?>
<?php include(ROOT_PATH . '/includes/head_section.php'); ?>
<title>Register</title>
</head>
<body>
    <div>
        <table>
            <tr>
                <th>
                    <h2>Register</h2>
                </th>
            </tr>
            <tr>
                <td>
                    <form method="post" action="register.php">
                    <?php include(ROOT_PATH . '/includes/errors.php'); ?><br>
                    <input type="text" name="username" value="<?php echo $username ?>" placeholder="Username"><br>
                    <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email"><br>
                    <input type="password" name="password_1" placeholder="Password"><br>
                    <input type="password" name="password_2" placeholder="Password confirmation"><br>
                    <button type="submit" name="reg_btn">Register</button>
                    <p>
                        Already member? <a href="login.php">Sing in</a>
                    </p>
                    </form>
                </td>
            </tr>
        </table>
    </div>
<?php include( ROOT_PATH . '/includes/footer.php'); ?>