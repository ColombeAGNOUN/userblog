<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex flex-col justify-center items-center bg-gray-200 md:text-xl lg:text-base">
   <div class="flex flex-col w-full lg:w-1/2 ">
       <p class="text-white bg-blue-900 w-full font-bold px-1">facebook</p>
       <p class="bg-white">Inscrivez-vous sur facebook</p>
       @if(Session::has('success'))
       <div class="bg-blue-200 text-center ">
            {{Session::get('success')}}
       </div>
       @endif
       <form action="/register" method="POST" class="mx-6 px-2">
           @csrf
       <div class="flex justify-center flex-col w-full">
            <label for="name">Prenoms</label>
            <input type="text" id="name"  name="name" required class="border-2 border-gray-400 bg-white">
        </div>
        <div class="flex justify-center flex-col w-full">
            <label for="firstname">Nom</label>
            <input type="text" id="firstname"  name="firstname" required class="border-2 border-gray-400 bg-white ">
        </div>
        <div class="flex justify-center flex-col w-full">
            <label for="email" class="text-gray-600 text-sm md:text-xl lg:text-sm">Email</label>
            <input type="email" id="email"  name="email" required class="border-2 border-gray-400 bg-white ">
        </div>
        <p class="text-gray-600 text-xs md:text-lg lg:text-xs text-center">Facebook demande votre numéro de
             téléphone à votre opérateur mobile et l’obtient par ce biais.
        </p>
        <div class="mt-4">
            <p>Genre</p>
            <div class="flex flex-row justify-between mr-16">
                <div class="flex flex-row items-center">
                    <input type="radio" id="femme" name="sexe" value="femme">
                    <label for="radio">Femme</label>
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" id="Homme" name="sexe" value="Homme">
                    <label for="radio">Homme</label>
                </div>
                <div class="flex flex-row items-center">
                    <input type="radio" id="Personnalise" name="sexe" value="Personnalise">
                    <label for="radio">Personnalisé</label>
                </div>
            </div>
        </div>

        <p class="text-gray-600 text-sm md:text-xl lg:text-sm">Sélectionnez Personnalisé pour choisir 
            un autre genre, ou si vous préférez ne rien .
        </p>

        <div  class="flex justify-center flex-col w-full">
        <label for="email" class="text-gray-600 text-sm md:text-xl lg:text-sm">Date de naissance</label>
            <input type="text" id="date" name="birth_date" required class="border-2 border-gray-400 bg-white">
        </div>

        <div class="flex justify-center flex-col w-full my-1">
            <label for="password " class="text-gray-600 text-sm ">Nouveau mot de passe</label>
            <input type="password" id="password"  name="password" required class="border-2 border-gray-400 bg-white ">
        </div>
        <div class="flex flex-col justify-center items-center my-10">
            <button type="submit" class="bg-blue-900 text-white px-20 rounded-sm">S'inscrire</button>
            <a href="/login" class="text-blue-900 text-sm py-1">Vous avez deja un compte?</a>
        </div>
       </form>
   </div>
</body>
</html>