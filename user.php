<?php

if (isset($_GET["user-name"]) && isset($_GET["user-firstname"]) ) {
    echo strip_tags($_GET["user-name"] . " " . $_GET["user-firstname"]);
}
else {
    echo "que dalle";
}

if (isset($_POST["user-name"]) && isset($_POST["user-firstname"]) ) {
    echo strip_tags($_POST["user-name"] . " " . $_POST["user-firstname"]);
}
else {
    echo "que dalle";
}
