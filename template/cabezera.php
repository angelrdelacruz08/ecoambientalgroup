<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer sitio con Tailwind</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="w-[1920px] xsm:w-full mx-auto">
        <nav class="bg-gray-800 flex justify-between lg:justify-start items-center">
            <div class="logo flex-initial p-2 w-1/6">
                <img src="https://ecoambientalgroup.com/wp-content/uploads/2021/09/56456-1.png" width="100" alt="">
            </div>
            <div class="links lg:block hidden w-1/6 md:w-4/6">
                <ul class="flex menu items-center justify-center gap-5">
                    <li><a href="index.php" class="link">Home</a></li>
                    <li><a href="cursos.php" class="link">Play Together</a></li>
                    <li><a href="#"class="link">Explore</a></li>
                    <li><a href="#"class="border-4 border-yellow-400 text-white font-bold p-2 rounded-full align-middle transition duration-500 hover:bg-white hover:text-black">Browser Fury</a></li>
                    <li><a href="#"class="rounded-full bg-red-500 text-white font-bold px-4 py-3 hover:bg-white hover:text-black transition duration-500">Buy Now</a></li>
                </ul>
            </div>

            <div class="block lg:hidden w-1/6 lg:w-4/6">
                <a href="#" class="link" id="mobile-menu">Menu</a>

                <ul class="mobile-links hidden w-full absolute z-50 left-0 text-center bg-gray-800">
                    <li><a href="#" class="link">Inicio</a></li>
                    <li><a href="#" class="link">Play Together</a></li>
                    <li><a href="#"class="link">Explore</a></li>
                    <li><a href="#"class="my-4 inline-block border-4 border-yellow-400 text-white font-bold p-2 rounded-full align-middle transition duration-500 hover:bg-white hover:text-black">Browser Fury</a></li>
                    <li><a href="#"class="my-4 inline-block rounded-full bg-red-500 text-white font-bold px-4 py-3 hover:bg-white hover:text-black transition duration-500">Buy Now</a></li>
                </ul>
            </div>
        </nav>