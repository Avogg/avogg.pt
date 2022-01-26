<x-guest-layout>
    <div class="bg-avogg-dark min-h-screen min-w-screen text-white">
        <x-navbar />
        <section class="min-h-screen">
            <div class="flex flex-col md:grid md:grid-cols-2 items-center justify-between gap-x-10 min-h-screen">
                <div class="md:px-10 md:col-span-1 my-auto">
                    <p class="text-3xl md:text-5xl font-semibold px-10 md:px-0 text-center md:text-left">Faça o <span class="text-avogg">seu</span> sonho tornar-se realidade</p>
                    <p class="text-xl px-10 md:px-0 mt-5 text-center md:text-left">Se tem uma ideia nós somos a equipa ideal para a concretizar!</p>
                    <div class="flex flex-col md:flex-row px-10 text-center md:px-0 mt-10 space-y-5 md:space-y-0 md:space-x-10">
                        <a href="#projects" class="px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                            Os nossos projetos
                        </a>
                        <a href="#services" class="px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                            Os nossos serviços
                        </a>
                    </div>
                    <p class="absolute bottom-10 left-10 animate-bounce"><i data-feather="arrow-down"></i></p>
                </div>
                <div class="md:px-10 col-span-1 hidden md:block">
                    <img src="rocket-image.svg" />
                </div>
            </div>
        </section>
        <section class="min-h-screen pt-32" id="services">
            <p class="text-3xl font-semibold px-10 text-center md:text-left">Os nossos serviços</p>
            <div class="grid md:grid-cols-3 mt-10 h-full gap-y-5">
                <div class="flex flex-col items-center justify-items-center text-center mx-10 p-5 rounded bg-white bg-opacity-10">
                    <div class="grid bg-avogg w-20 h-20 rounded-full justify-items-center items-center">
                        <p class="hover:animate-pulse"><i data-feather="smartphone"></i></p>
                    </div>
                    <p class="text-sm md:text-lg md:mt-5 font-semibold px-10 md:px-0">Aplicações mobile</p>
                    <p class="text-sm md:mt-5 px-10 md:px-0">Desenvolvemos qualquer tipo de aplicação mobile para android e iOS</p>
                    <a href="/avogg-software/services#mobile" class="mt-5 mb-5 px-10 py-2  bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                        Saber mais
                    </a>
                </div>
                <div class="flex flex-col items-center justify-items-center text-center mx-10 p-5 rounded bg-white bg-opacity-10">
                    <div class="grid bg-avogg w-20 h-20 rounded-full justify-items-center items-center">
                        <p class="hover:animate-pulse"><i data-feather="globe"></i></p>
                    </div>
                    <p class="text-sm md:text-lg md:mt-5 font-semibold px-10 md:px-0">Aplicações web</p>
                    <p class="text-sm md:mt-5 px-10 md:px-0">Precisa de uma solução web? Estamos cá para isso!</p>
                    <a href="/avogg-software/services#website" class="mt-5 mb-5 px-10 py-2  bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                        Saber mais
                    </a>
                </div>
                <div class="flex flex-col items-center justify-items-center text-center mx-10 p-5 rounded bg-white bg-opacity-10">
                    <div class="grid bg-avogg w-20 h-20 rounded-full justify-items-center items-center">
                        <p class="hover:animate-pulse"><i data-feather="monitor"></i></p>
                    </div>
                    <p class="text-sm md:text-lg md:mt-5 font-semibold px-10 md:px-0">Aplicações desktop</p>
                    <p class="text-sm md:mt-5 px-10 md:px-0">Windows, MacOS, Linux... é só pedir, e terá a sua aplicação desenvolvida!</p>
                    <a href="/avogg-software/services#desktop" class="mt-5 mb-5 px-10 py-2  bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                        Saber mais
                    </a>
                </div>
            </div>
        </section>
        <section class="min-h-screen pt-32" id="projects">
            <p class="text-3xl font-semibold px-10 text-center md:text-left">O nosso portfolio</p>
            <div class="grid md:grid-cols-3 mt-10 px-10 h-full">
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 p-5 rounded bg-white bg-opacity-10 mt-10 text-center">
                    <div class="flex bg-[#093595] w-40 h-40 rounded-full items-center justify-center">
                        <img src="/projects/necho.png" class="w-3/4" />
                    </div>
                    <p class="text-sm md:text-lg mt-5 font-semibold px-10 md:px-0">Necho Compliance Manager</p>
                    <a href="https://necho.pt" target="_blank" class="text-sm mt-2 px-10 md:px-0 hover:animate-pulse">Necho Techlaw</a>
                    <a href="#" class="mt-5 mb-5 px-10 py-2 bg-gray-500 font-semibold rounded-md cursor-not-allowed">
                        Saber mais
                    </a>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
