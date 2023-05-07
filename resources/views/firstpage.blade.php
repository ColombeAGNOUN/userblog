<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="flex flex-col justify-center items-center md:text-2xl lg:text-base">
   <div class="flex flex-col w-full lg:w-1/2">
       <p class="text-white bg-blue-900 w-full font-bold px-1">facebook</p>
       <div class="bg-gray-200 my-2">
           <p class="text-gray-800 mx-2 font-bold text-stone-500 font-sans">Choisissez votre compte</p>
           <div class="border-2 bg-white border-gray-400 mx-2 my-2">
                @foreach($user as $user)
                <a href="/content" class="border-b-2 border-gray-400 flex flex-row items-center p-2">
                    <img src="/images/pro.png" class="w-8 h-8">
                    <div class="flex flex-row items-cnter">
                    <p class="px-2">{{$user->name}}</p>
                    <p class="">{{$user->firstname}}</p>
                    </div>
                </a>
                @endforeach
                <a href="/login" class="border-b-2 border-gray-400 flex flex-row items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 bg-blue-900 text-white ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <p class="px-2">Se connecter a un compte</p>
                </a>
                <a class=" border-gray-400 flex flex-row items-center p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6" class="w-8 h-8 border-2 bg-blue-900 text-white">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                     </svg>
                    <p class="px-2">Trouver votre compte</p>
                </a>
            </div>
            <div class="flex justify-center my-2 ">
                <a href="/register" class="bg-green-600 text-white text-sm md:text-xl lg:text-sm p-2">Creer nouveau compte</a>
            </div>
        </div>
   </div> 
</body>
</html>