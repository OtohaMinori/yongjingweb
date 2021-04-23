<?php
$Account = $_POST['Account'];
$Password = $_POST['Password'];

if ($Account == "YuukiAyano" && $Password == "Ayano1227") {
    echo "<script src=js/logedin.js></script>";
} else {
    echo "<script src=./js/accessdenied.js></script>";
}