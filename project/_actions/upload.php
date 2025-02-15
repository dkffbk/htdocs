<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check();

$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($type == "image/jpeg" or $type == "image/png") {
   move_uploaded_file($tmp_name, "photos/$name");

   $table = new UsersTable(new MySQL);
   $table->changePhoto($auth->id, $name);

   $auth->photo = $name;

   HTTP::redirect("/profile.php");
} else {
   HTTP::redirect("/profile.php", "error=type");
}
