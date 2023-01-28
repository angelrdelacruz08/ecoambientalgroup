 
 <?php include("template/cabezera.php"); ?>
 
 
        <div class="header">
            <img src="https://www.autonoma.pe/wp-content/uploads/2022/06/autonoma-peru-ingenieria-ambiental.jpg" alt="">
        </div>

        <section>
            <div class="bg-wave-pattern h-6 bg-repeat-x relative -top-2"></div>
            <div class="bg-wave-pattern-dots text-center p-4 flex md:flex-row flex-col gap-3 justify-center">
                <a href="#" class="inline-block py-3 px-16 bg-black text-white font-bold border-transparent border-8 text-2xl rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200">Buy Now</a>
                <a href="#" class="inline-block py-3 px-16 bg-red-500 text-white font-bold border-transparent border-8 text-2xl rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200">Watch the Trailer</a>
            </div>
            <div class="bg-wave-pattern bg-repeat-x h-6 relative top-2"></div>
        </section>
        
        <!-- SECCIÓN DE CARDS -->
        <section class="bg-pattern-characters-red py-28">
            <div class="lg:container 2xl:w-3/5 mx-auto md:flex gap-5 md:w-full p-3 ">
                <div class="left bg-character-mario bg-no-repeat bg-contain bg-top w-5/6 md:w-1/2 pt-52 mx-auto">
                    
                    <!--CARD -->
                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-72 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/presentacion.mp4" autoplay loop muted controls></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-10">INICIO 31 DE ENERO</h3>
                            <p class="text-xl">Ingresa a nuestra apertura</p>
                            <a href="#" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-red-500 text-white font-black border-transparent border-8 rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200 group">
                                VER APERTURA
                                <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-[5px] border-r-[5px] transition-all transform rotate-45 group-hover:border-red-500 xl:group-hover:ml-4"></span>
                            </a>
                        </div>
                        <div class="dots flex justify-between p-4">
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>

                </div>

                <div class="right w-5/6 md:w-1/2 text-center mx-auto">
                    <h2 class="font-black text-white text-6xl py-8">Available Now</h2>

                    <p class="font-bold text-white text-2xl mx-auto py-10 w-4/5">One of the best Mario games ever...</p>

                    <p class="font-black text-white text-4xl mx-auto py-10 w-4/5">Team up for a paws-itively adorable adventure!</p>
                    <p class="text-white text-center w-4/5 mx-auto">
                        Bowser is up to his old tricks again and only Mario and his friends can save the day! Use power-ups like the Super Bell, which grants catlike abilities like climbing and scratching, to overcome Bowser and his minions.
                    </p>
                    
                    <!--CARD -->
                    <div class="card text-center bg-white 2xl:w-5/6 mx-auto mt-16 rounded-2xl overflow-hidden xl:w-4/5">
                        <div class="cover bg-black">
                            <video src="videos/video02.mp4" autoplay loop muted></video>
                        </div>
                        <div class="content bg-wave-pattern bg-repeat-x relative -top-3">
                            <h3 class="font-black text-4xl py-8">Explore</h3>
                            <p class="text-xl">Prowl through some popular places.</p>
                            <a href="#" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-red-500 text-white font-black border-transparent border-8 rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200 group">
                                Take a look! 
                                <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-[5px] border-r-[5px] transition-all transform rotate-45 group-hover:border-red-500 xl:group-hover:ml-4"></span>
                            </a>
                        </div>

                        <div class="dots flex justify-between p-4">
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                            <div class="dot h-3 w-3 bg-blue-600 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-yellow-dots">
            <div class="bg-wave-pink bg-repeat-x h-6 relative -top-4"></div>
            <div class="xsm:w-full sm:container w-2/3 mx-auto md:flex justify-center items-center text-center py-6">
                <div class="left xl:w-1/3 lg:w-1/2 p-5">
                    <h3 class="text-yellow-900 font-black  xsm:text-3xl sm:text-4xl">
                        Cat <br> Transformation<br> Center
                    </h3>

                    <p class="py-4 text-xl">
                        We’re not kitten—transform into a cat-tastic new you!
                    </p>
                    <p>
                        <a href="#" class="xl:text-2xl my-4 inline-block py-2 px-16 bg-red-500 text-white font-black border-transparent border-8 rounded-3xl hover:border-gray-200 hover:bg-white hover:text-black transition duration-200 group">
                            Meow! 
                            <span class="w-4 h-4 inline-block border-yellow-300 border-solid border-t-[5px] border-r-[5px] transition-all transform rotate-45 group-hover:border-red-500 xl:group-hover:ml-4"></span>
                        </a>
                    </p>

                </div>

                <div class="right xl:w-1/3 lg:w-1/2">
                    <img src="img/activity_img3.png" class="md:w-full" alt="">
                </div>
            </div>
        </section>

<?php include("template/pie.php"); ?>