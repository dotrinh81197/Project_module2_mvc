<!DOCTYPE html>
<html>

<head>
    <title>Creative Colorlib SignUp Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Custom Theme files -->
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <link href="./css/login.css" rel="stylesheet" type="text/css" media="all" />

    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->

    <div class="main-w3layouts wrapper">
        <h1>SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form action="\?controller=user&action=register" method="POST">
                    <input class="text" type="text" name="username" placeholder="Username" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="password" placeholder="Password" required="">
                    <div class="wthree-text">
                        <label class="anim">
                            <input type="checkbox" class="checkbox" required="">
                            <span>I Agree To The Terms & Conditions</span>
                        </label>

                    </div>
                    <div style="width:max-content; height: max-content">
                        <?php

                        if (isset($_GET['msg'])) {
                            $msg = (($_GET['msg']));

                            echo "<span>.$msg.</span>";
                        }
                        ?>
                    </div>

                    <input type="submit" value="SIGNUP">
                </form>
                <p>Have an Account? <a href="/view/login.php"> Login Now!</a></p>
            </div>
        </div>
    </div>
</body>

</html>