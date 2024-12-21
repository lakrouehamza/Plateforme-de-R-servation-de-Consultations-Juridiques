<?php
session_start();

if(!isset($_SESSION['role'])){
    // header("location: login.php");
    // exit;
}elseif($_SESSION['role']==1){
    header("location: avocate/home.php");
    exit;
}elseif($_SESSION['role']==2){
    header("location: client/home.php");
    exit;
} 
?>


<?php
require('connect.php');
$error ='';
if(isset($_POST['enregistrer'])){
$nom = htmlspecialchars($_POST['nom'],ENT_COMPAT,'UTF-8'); 
$prenom = htmlspecialchars($_POST['prenom'],ENT_COMPAT,'UTF-8');
$email = htmlspecialchars($_POST['email'],ENT_COMPAT,'UTF-8');
$role = htmlspecialchars($_POST['role'],ENT_COMPAT,'UTF-8');
$password = htmlspecialchars($_POST['password'],ENT_COMPAT,'UTF-8');
$telephone = htmlspecialchars($_POST['telephone'],ENT_COMPAT,'UTF-8');

if(inset_use($nom,$prenom,$email,$role,$password,$telephone)){
  $error ='';
} else 
  $error ='Déjà un compte ?';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
    <div class="w-full">
        <div class="text-center">
            <h1 class="text-3xl font-semibold text-gray-900">SignUp</h1>
            <p class="mt-2 text-gray-500">Sign in below to access your account</p>
        </div>
        <div class="mt-5">
        <form action="SignUp.php" method="POST">
          <div class="mb-4">
            <label for="nom" class="block mb-2 text-sm font-medium">Nom</label>
            <input  type="text"  id="nom" name="nom"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4"  placeholder="Dupont"  >
          </div>
        <div class="mb-4">
          <label for="prenom"  class="block mb-2 text-sm font-medium">Prénom</label>
          <input  type="text"  id="prenom" name="prenom"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4"  placeholder="Jean"  >
        </div>

  <div class="mb-4">
    <label for="email" class="block mb-2 text-sm font-medium">Email</label>
    <input  type="email"  id="email"  name="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4"   placeholder="lakroune@gmail.com" 
    >
  </div>

  <div class="mb-4">
    <label for="role" class="block mb-2 text-sm font-medium">Role</label>
      <select id="role" name="role" required class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4">
        <option value="" disabled selected>Choisissez un rôle</option>
        <option value="1">Admin</option>
        <option value="2">Utilisateur</option>
    </select>
  </div>

  <div class="mb-4">
    <label for="password" class="block mb-2 text-sm font-medium">Mot de passe</label>
    <input  type="password"  name="password" id="password"  class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4" placeholder="*********" 
    >
  </div>

  <div class="mb-4">
    <label for="telephone" class="block mb-2 text-sm font-medium">Téléphone</label>
    <input type="tel" id="telephone"  name="telephone" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 w-full py-2.5 px-4" placeholder="0606060606" 
    >
  </div>

  <div class="text-red-500 pb-5"></div>

  <div class="flex items-center justify-between mb-4">
    <input 
      type="submit"  name="enregistrer"
      class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm py-2.5 px-5 w-full sm:w-auto"
    >
      Enregistrer
</input>
    <div class="flex items-center text-sm">
      <p><?php  echo $error ?></p>
      <a href="login.php" class="underline cursor-pointer ml-1">Connectez-vous</a>
    </div>
  </div>
</form>


        </div>
    </div>
</div>
</body>
</html>