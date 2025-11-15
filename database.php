<!DOCTYPE html>
    <head>
        <title>
            php+html
        </title>
    </head>
    <body>
        <form action="database.php" method="post">
        <label>username:</label><br/>
        <input type="text" name="username"/></br>
        <label>password:</label><br/>
        <input type="text" name="password"/></br>
        <input type="submit" value="Log in"/></form>
    </body>
</html>
<?php
    echo "{$_POST["username"]} <br/>";
    echo "{$_POST["password"]} <br/>";
?>
<!-- $_get is appended to the URL
    not secure
    char limit
    bookmark is possible with values
    GET request can be cached
    better for search page
$_post is packaged inside the body of the HTTPS
    more secure
    no data limit
    cannot bookmark
    request are not cached
    better for submiting credentials
-->
