<?php
session_start();
?>

<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="../assets/css/login.css" rel="stylesheet" type="text/css" media="all" />

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Pet's Store </h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <?php
                if (isset($_GET['msg'])) {
                    $msg = (($_GET['msg']));

                    echo "<span>.$msg.</span>";
                }
                ?>
                <form action="\?controller=user&action=login" method="POST">
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <div class="clear"> </div>
                    <input type="submit" value="LOGIN">
                </form>
                <p>Don't have an Account? <a href="/view/register.php"> Register Now!</a></p>
            </div>
        </div>
    </div>

</body>