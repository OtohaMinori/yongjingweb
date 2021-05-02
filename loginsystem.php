<?php
$Account = $_POST['Account'];
$Password = $_POST['Password'];

if ($Account == "Admin" && $Password == "Admin") {
    echo "alert(`已成功登入！\n歡迎回來${Account}！`);";
} else {
    echo "alert(`無法登入${Account}！\n拒絕存取\n請檢察帳號密碼！`);";
}