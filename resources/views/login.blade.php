<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex flex-col justify-center items-center md:text-xl lg:text-base">
   <div class="flex flex-col w-full lg:w-1/2 ">
       <p class="text-white bg-blue-900 w-full font-bold px-1">facebook</p>
    
       @if(Session::has('success'))
       <div class="bg-blue-200 text-center ">
            {{Session::get('success')}}
       </div>
       @endif
       @if(Session::has('error'))
       <div class="bg-red-200 text-center text-red-800 font-bold my-2 rounded-lg">
            {{Session::get('error')}}
       </div>
       @endif
       <form action="/login" method="POST" class="bg-gray-200 ">
           @csrf
           <div class="mx-4">
                <div class="flex justify-center flex-col w-full ">
                    <label for="email" class="text-gray-500 font-bold">Numero de telephone ou adress email</label>
                    <input type="email" id="email"  name="email" required class="border-2 border-gray-400 bg-blue-100 h-10">
                </div>
                <div class="flex justify-center flex-col w-full ">
                    <label for="password" class="text-gray-500 font-bold">Mot de passe</label>
                    <input type="password" id="password"  name="password" required class="border-2 border-gray-400 h-10 bg-blue-100 ">
                </div>
                <div class="bg-blue-900 w-full text-center py-2 my-2 ">
                    <button type="submit" class="text-white fond-bold w-full ">Se connecter</button>
                </div>
            </div>
       </form>
       <div class="text-center">ou</div>
                <div class="flex justify-center flex-col items-center my-2 ">
                    <a href="/register" class="bg-green-600 text-white text-sm px-4 py-2">Creer nouveau compte</a>
                    <a href="" class="text-blue-900 text-sm md:text-xl lg:text-sm py-2">Mot de passe oublié?</a>
                </div>
   </div>
</body>
</html>