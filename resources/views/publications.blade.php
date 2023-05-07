<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
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
            @foreach($user->articles as $coco)
        <div class="bg-white p-1 m-2 border-2 border-gray-300">
            
            <div class="border-2 border-gray-300  p-1">
                <p>{{$coco->content}}</p>
                <div class="border-2 border-gray-300 m-4 ">
                    Photo s'il y en a
                </div>
            </div>
            <div class="flex flexx-row justify-end text-sm md:text-xl lg:text-sm">
                <a href="/reagir" class="text-blue-800 text-sm px-2">Réagir</a>
                <a href="" class="text-blue-800 text-sm px-2">Commentaire</a>
                <button data-modal-target="authentications-modal" data-modal-toggle="authentications-modal" class="block t text-blue-800 text-sm px-2  focus:ring-4 focus:outline-none   text-sm px-5  text-center" type="button">
                Supprimer
                </button>
                <div id="authentications-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                  <div class="relative bg-white rounded-lg shadow ">
                   <div class="bg-white rounded-lg p-2">
                    @csrf
                     <div class="border-2 border-gray-300 h-1/2 justify-center my-8 mx-12 py-4 bg-white">
                        <p class="text-center py-2 text-blue-900  font-bold">Voulez-vous vraiment supprimer cette publication?</p>
                       <div class="flex justify-between my-4 mx-8  ">
                         <a href="" class="border-2 px-4 rounded-lg border-blue-600  bg-white">Oui</a>
                         <a href="/publications" class="border-2 border-blue-600 px-4 rounded-lg  bg-white">Non</a>
                       </div>
                     </div>
                  </div>
                  </div>
                </div>
              </div>
              
                <a href="" class="text-blue-800 text-sm px-1">Modifier</a>
            </div>
        </div>
        @endforeach
        
        <div class="bg-gray-100 text-sm md:text-xl lg:text-sm">
            <div class="flex flex-row items-center border-b-2 border-gray-300 py-2">
                <img src="/images/pro.png" class="w-12 h-12 md:w-16 md:h-16 lg:w-12 lg:h-12 mx-2 border-2 border-gray-400">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                        <p class=" font-bold text-blue-900">{{$user->name}}</p>
                        <p class=" font-bold text-blue-900 px-1">{{$user->firstname}}</p>
                    </div>
                    <a href="">Photos</a>
                </div>
            </div>
            <div class="flex flex-row justify-between">
                <div class="my-4 flex flex-col px-2">
                    <a href="/content">Accueil</a>
                    <a href="/profil">Profil</a>
                    <a href="/users">Users</a> 
                </div>
                <div class="flex flex-col items-center justify-center mx-4">
                    <p>Deconnexion</p>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>