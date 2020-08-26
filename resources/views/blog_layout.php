<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <title>B2C PHP Web App</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= asset("/theme/style.css")?>" rel="stylesheet" type="text/css" />

</head>

<body>

    <div id="container">
        <div id="banner">
            <h1>B2C PHP Web App</h1>
        </div>
        <div id="navcontainer">
            <ul id="navlist">
                <li id="active">
                    <a id="current" href="/">Home</a>
                </li>
                <li>
                    <a href="https://github.com/Azure-Samples/active-directory-b2c-php-webapp-openidconnect">View Source Code on Github</a>
                </li>
                <?php if ($user_logged_in):?>
                <?php if ($user_is_admin):?>
                <li>
                    <a href="new_post">New Blog Post</a>
                </li>
                <?php endif ?>
                <li>
                    <a href="edit_profile">Edit Profile</a>
                </li>
                <li>
                    <a href="logout">Logout</a>
                </li>
                <?php else: ?>
                <li>
                    <a href="login">Sign In or Sign Up</a>
                </li>
                <?php endif ?>
            </ul>
        </div>

        <?php if ($user_logged_in):?>
        <h2>You have successfully logged in with B2C!</h2>
        <div class="roundcont">
            <div class="roundtop">
                <img src="theme/img/tl.gif" alt="tl img" width="10" height="10" class="corner" style="display: none" />
            </div>
            <p>Details:</p>
            <p>
                Given name: <?=$given_name ?>
            </p>
            <p>
                Is Admin?
                <?php if ($user_is_admin):?>
                Yes
                <?php else: ?>
	            No
                <?php endif ?>
            </p>
            <div class="roundbottom">
                <img src="<?= asset("theme/img/bl.gif") ?>" alt="bl img" width="10" height="10" class="corner" style="display: none" />
            </div>
        </div>
        <?php else: ?>
        <h1>You are not logged in. Please try logging in.</h1>
        <?php endif ?>
    </div>
</body>
</html>