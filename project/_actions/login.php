<?php

session_start();

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$email = $_POST['email'];
$password = md5($_POST['password']);

$table = new UsersTable(new MySQL());

$user = $table->find($email, $password);

if ($user) {
   if ($user->suspended === 1) {
      HTTP::redirect("/index.php", "suspended=1");
   } else {
      $_SESSION['user'] = $user;
      HTTP::redirect("/profile.php");
   }
} else {
   HTTP::redirect("/index.php", "incorrect=1");
}
