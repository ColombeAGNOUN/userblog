<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex flex-col justify-center items-center bg-gray-200 md:mx-10 md:text-xl lg:text-base">
    <div class="flex flex-col w-full  lg:w-1/2 ">
        <div class="flex flex-row justify-between bg-violet-800 p-2">
            <div>
                <p class="text-white text-xs md:text-lg lg:text-xs">Mode basique</p>
                <img src="">
            </div>
            <p class="text-white border-2 border-white p-1 text-xs md:text-lg lg:text-xs">Changer de mode</p>
        </div>
        <div class="bg-sky-700">
            <form action="" method="" class="flex flex-row justify-between  items-center text-white p-1">
                <img src="/images/log.jpg"class="w-6 h-5 md:w-10 md:h-8 lg:w-6 lg:h-5 rounded-sm ">
                <div class=" w-full h-min text-sm md:text-xl lg:text-sm mx-1 bg-white ">
                    <label for="search"></label>
                    <input type="search" id="search" name="search" placeholder="Recherche sur facebook"class=" w-full">
                </div>
                <div class=" h-min bg-sky-600">
                    <button class=" text-white text-xs md:text-xl lg:text-sm rounded-sm px-2">Rechercher</button>
                </div>
            </form>
            <div class="flex flex-row mr-10">
                <a href="/content" class="text-white px-4 ">Accueil</a>
                <a href="/profil" class="text-white  px-4">Profil</a>
                <a href="/publications" class="text-white  px-4">Publications</a>
                <a href="/users" class="text-white  px-4">Users</a>
            </div>
        </div> 
        <form action="/ajout" method="POST"class="flex flex-row justify-between my-4">
            @csrf
            <img src="/images/pro.png" class="w-16 h-12 mx-2 border-2 border-gray-400">
            <div class=" w-full mx-4 ">
                <input type="text" id="content"  name="content" placeholder="Que voulez-vous dire?" class="border-2 border-gray-400 px-2 bg-white rounded-2xl h-full w-full"> 
            </div>
            <button type="submit" class="bg-white border-gray-300 border-2 p-2">Publier</button>
        </form>

       
        <div class="bg-white p-1 m-2 border-2 border-gray-300">
            <div class="flex flex-row justify-between">
                <div class="flex flex-row items-center">
                    <p class=" font-bold text-blue-900"></p>
                    <p class=" font-bold text-blue-900 px-1"></p>
                </div>
                <div class="flex flex-row items-center text-xs ">
                    <p class="">Poster le:</p>
                    <p class="text-blue-900 px-1"></p>
                </div>
            </div>  
            <div class="border-2 border-gray-300  p-1">
                <p></p>
                <div class="border-2 border-gray-300 m-4 ">
                    Photo s'il y en a
                </div>
            </div>
            <div class="flex flexx-row justify-end text-sm md:text-xl lg:text-sm">
                <a href="" class="text-blue-800 px-4">Réagir</a>
                <a href="" class="text-blue-800 px-4">Commentaire</a>
            </div>
        </div>
       
        <div class="bg-gray-100 text-sm md:text-xl lg:text-sm">
            <div class="flex flex-row items-center border-b-2 border-gray-300 py-2">
                <img src="/images/pro.png" class="w-12 h-12 md:w-16 md:h-16 lg:w-12 lg:h-12 mx-2 border-2 border-gray-400">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                        <p class=" font-bold text-blue-900"></p>
                        <p class=" font-bold text-blue-900 px-1"></p>
                    </div>
                    <a href="">Photos</a>
                </div>
            </div>
            <div class="my-4 flex flex-col px-2">
                <a href="">Profil</a>
                <a href="">Publications</a>
                <a href="">Users</a> 
            </div>
        </div> 
        <div class="bg-black opacity-75">
            <form action="" method="" class="flex flex-row justify-between  items-center text-white p-1">
                <div class="bg-gray-300 flex flex-row w-full mx-1 px-2 py-1">
                    <img src="/images/log.jpg"class="w-8 h-6 md:w-10 md:h-8 lg:w-8 lg:h-8 rounded-sm">
                    <div class=" w-full h-min text-sm md:text-xl lg:text-sm mr-1 bg-gray-300 ">
                        <label for="search"></label>
                        <input type="search" id="search" name="search"  class="w-full bg-gray-300">
                    </div>
                    <div class=" h-min bg-sky-600  rounded-sm">
                        <button class=" text-white text-xs md:text-xl lg:text-xs px-2">Rechercher</button>
                    </div>
                </div>
               
            </form> 
            <div class=" border-2 border-gray-300 text-center text-gray-300 rounded-2xl mx-2 my-2">
                <a href="/content">Retour en haut de la page</p>
            </div>    
        </div>
    </div>
    
</body>
</html>