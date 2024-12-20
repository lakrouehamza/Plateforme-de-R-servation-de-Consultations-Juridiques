<?php
session_start();
echo $_SESSION['role'];

if(!isset($_SESSION['role'])){
    header("location: ./../login.php");
    exit;
}elseif($_SESSION['role']==1){
    // header("location: avocate/home.php");
    // exit;
}elseif($_SESSION['role']==2){
    header("location: ./../client/home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"> </script>
</head>
<body>


<header class="lg:px-16 px-4 bg-white flex flex-wrap items-center py-4 shadow-md">
    <div class="flex-1 flex justify-between items-center">
<img src="./../../assets/img/logo.png" alt="image de logo " class="w-[100px] bg-[#D3CBC8] rounded-[50px]" />
    </div>

    <label for="menu-toggle" class="pointer-cursor md:hidden block">
      <svg class="fill-current text-gray-900"
        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
        <nav>
            <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
                <li><a class="md:p-4 py-3 px-0 block" href="home.php">About Me</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="profile.php">profile</a></li>
                <li><a class="md:p-4 py-3 px-0 block" href="listeRreservations.php">Rreservations</a></li>
            </ul>
        </nav>
    </div>
</header>