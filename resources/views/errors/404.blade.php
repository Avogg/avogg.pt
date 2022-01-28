<x-guest-layout>
    <div class="flex flex-col bg-avogg-dark min-h-screen min-w-screen text-white items-center justify-center">
        <div class="animate-pulse">
            <x-application-logo />
        </div>
        <p class="mt-10 text-2xl"><span class="font-semibold">404</span> | not found</p>
        <p class="mt-2">{{ \App\Models\NotFoundMessage::all()->random(1)->first()['message']  }}</p>
        <a href="/" class="mt-20 px-10 py-2 bg-avogg font-semibold rounded-md hover:bg-opacity-80 text-sm md:text-lg">
            Voltar
        </a>
    </div>
</x-guest-layout>
