<header class="relative z-50 flex justify-between items-center px-10 py-6">

    {{-- logo --}}
    <div class="flex justify-between items-center gap-1">
        <img class=" h-10 w-auto" src="{{ asset('images/logo-dev.png') }}" alt="Logo">
        <h1 class="font-bold text-xl">João Dev</h1>
    </div>

    {{-- menu de navegaçao --}}
    <nav class=" flex gap-8 text-white/60">
        <a href="#home" class=" p-2 rounded hover:text-white hover:bg-gray-800 transition-colors">Home</a>
        <a href="#about" class=" p-2 rounded hover:text-white hover:bg-gray-800">Sobre</a>
        <a href="#contact" class=" p-2 rounded hover:text-white hover:bg-gray-800">Contato</a>
    </nav>

    {{-- redes sociais --}}
    <div class="flex items-center gap-4">
        <!-- LinkedIn -->
        <a href="https://www.linkedin.com/in/joao-fernandes-da-silva-neto/" target="_blank"
            class="p-3 rounded  hover:bg-gray-800 transition-colors">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/linkedin-logo.png') }}" alt="LinkedIn logo">
        </a>

        <!-- GitHub -->
        <a href="https://github.com/ja1rocambole" target="_blank"
            class="p-3 rounded  hover:bg-gray-800 transition-colors">
            <img class="w-5 h-5 object-contain" src="{{ asset('images/github-logo.png') }}" alt="GitHub logo">
        </a>
    </div>
</header>
