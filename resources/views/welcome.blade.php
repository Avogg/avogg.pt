<x-guest-layout>
    <div class="bg-avogg-dark min-h-screen min-w-screen text-white">
        <x-navbar />
        <section class="h-screen">
            <div class="h-4/5 flex flex-col justify-center px-10 shadow-md" style="background-image: url('jumbotron-min.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <p class="text-3xl font-bold">Precisa de um software? Temos a solução.</p>
                <p class="text-lg font-semibold md:mt-3">Precisa de hosting? Nós também temos a solução!</p>
                <div class="mt-10 flex gap-x-10">
                    <a href="mailto:geral@avogg.pt" class="mt-5 px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80 text-sm md:text-lg">
                        Enviar e-mail
                    </a>
                    <a href="#" class="mt-5 px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80 text-sm md:text-lg">
                        Sobre a empresa
                    </a>
                </div>
            </div>
            <div class="mt-5 flex flex-col items-center text-center">
                <p class="text-center text-sm mt-5">(Pssstt, faça scroll para saber mais)</p>
                <p class="mt-5 animate-bounce"><i data-feather="arrow-down"></i></p>
            </div>
        </section>
        <section class="pb-5 text-center">
            <div>
                <p class="text-3xl font-semibold px-10">As partes constintuintes da <span class="text-avogg">Avogg</span></p>
            </div>
            <div class="grid md:grid-cols-3 gap-x-10 justify-center items-center min-h-full md:px-10 md:py-5">
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 md:p-5 rounded bg-white bg-opacity-10 mt-10">
                    <img src="rocket-hosting-dark.svg" class="w-3/4" />
                    <p class="text-sm md:text-lg md:mt-5 font-semibold px-10 md:px-0">A melhor solução de <span class="text-avogg"><i>hosting</i></span> para a sua empresa!</p>
                    <a class="mt-5 mb-5 px-10 py-2 bg-gray-500 font-semibold rounded-md cursor-not-allowed">
                        Coming soon
                    </a>
                </div>
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 md:p-5 rounded bg-white bg-opacity-10 mt-10">
                    <img src="avogg.svg" class="w-3/4" />
                    <p class="text-sm md:text-lg md:mt-5 font-semibold px-10 md:px-0">Os melhores softwares para melhorar a <span class="text-avogg">sua</span> vida!</p>
                    <a class="mt-5 mb-5 px-10 py-2 bg-gray-500 font-semibold rounded-md cursor-not-allowed">
                        Coming soon
                    </a>
                </div>
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 md:p-5 rounded bg-white bg-opacity-10 mt-10">
                    <img src="avogg-software.svg" class="w-3/4" />
                    <p class="text-sm md:text-lg md:mt-5 font-semibold px-10 md:px-0">Precisa de um software para a sua <span class="text-avogg">empresa</span>? Estamos aqui!</p>
                    <a href="/avogg-software" class="mt-5 mb-5 px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80">
                        Visitar
                    </a>
                </div>
            </div>
        </section>
        <section class="pb-5 text-center mt-10">
            <div>
                <p class="text-3xl font-semibold px-10">A nossa <span class="text-avogg">equipa</span></p>
            </div>
            <div class="grid md:grid-cols-3 gap-x-10 justify-center items-center min-h-full md:px-10 md:py-5">
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 p-5 rounded bg-white bg-opacity-10 mt-10">
                    <img src="miguelll.jpg" class="w-40 h-40 rounded-full" />
                    <p class="text-sm md:text-lg mt-5 font-semibold px-10 md:px-0">O nosso <span class="text-avogg">CEO</span> e aquele que tem as ideias malucas! É com ele que tem de falar.</p>
                </div>
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 p-5 rounded bg-white bg-opacity-10 mt-10">
                    <img src="rodrigooo.jpg" class="w-40 h-40 rounded-full" />
                    <p class="text-sm md:text-lg mt-5 font-semibold px-10 md:px-0">Aquele que gere as nossas <span class="text-avogg">redes</span> e o "eterno estagiário".</p>
                </div>
                <div class="flex flex-col items-center justify-items-center mx-10 md:mx-0 p-5 rounded bg-white bg-opacity-10 mt-10">
                    <img src="vascooo.jpg" class="w-40 h-40 rounded-full" />
                    <p class="text-sm md:text-lg mt-5 font-semibold px-10 md:px-0">O nosso <span class="text-avogg">CTO</span> e multifacetado. Para além de programador, estuda filosofia e é vegan.</p>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
