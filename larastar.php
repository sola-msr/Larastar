<?php
//----------- config -------------

const VERSION = "5.5.*";
const DIRECTORY_NAME = "";

// -------------------------------

echo "\n\n---------【 Laravel & laravel homestead セットアップバッチ「ララスター☆彡」 開始 】------------- \n\n";

echo "--------- laravel/laravel install start ------------- \n";

$output = [];
$return_var = null;
exec("composer create-project --prefer-dist laravel/laravel=" . VERSION . " " . DIRECTORY_NAME, $output, $return_var);

if ($return_var !== 0) {
    var_dump($output);
    var_dump($return_var);
    echo "★★★★★　laravel/laravel install error! ★★★★★\n";
    exit;
}

echo "--------- laravel/laravel instaled! ------------- \n";

sleep(2);

echo "--------- composer laravel/homestead install start ------------- \n";

$output = [];
$return_var = null;
exec("composer require laravel/homestead --dev", $output, $return_var);

if ($return_var !== 0) {
    var_dump($output);
    var_dump($return_var);
    echo "★★★★★　laravel/homestead install error! ★★★★★\n";
    exit;
}

echo "--------- composer laravel/homestead instaled! ------------- \n";

sleep(2);

echo "--------- make command for generate Vagrantfile and Homestead.yaml start ------------- \n";
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo "\nThis OS is Windows! Execute the command for Windows. \n\n";
    exec("vendor\bin\homestead make");
} else {
    echo "\nThis OS is not Windows! Execute the command for Linux/Mac. \n\n";
    exec("php vendor/bin/homestead make");
}

echo "--------- make command for generate Vagrantfile and Homestead.yaml end ------------- \n";

sleep(2);

echo "--------- vagrant up start ------------- \n";

$output = [];
$return_var = null;
exec("vagrant up", $output, $return_var);

if ($return_var !== 0) {
    var_dump($output);
    var_dump($return_var);
    echo "★★★★★　vagrant up error! ★★★★★\n";
}

echo "--------- vagrant up end ------------- \n";

echo "\n【Notice】Confirm 'to' of 'folders' in 'Homestead.yaml'. And 'vagrant reload' please. \n\n";

echo "--------- Laravel & laravel homestead installed! ------------- \n";

echo "\n---------【 Laravel & laravel homestead セットアップバッチ「ララスター☆彡」 終了 】------------- \n";