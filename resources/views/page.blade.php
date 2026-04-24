<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite('resources/css/app.css')
</head>

<body id="vanta-animacao" class="bg-[#050407] text-white flex flex-col min-h-screen relative">
    {{-- HEADER --}}
    <x-header />

    {{--  MAIN  --}}
    <x-home />

    {{-- ABOUT --}}
    <x-about />

    {{-- CONTACT --}}
    <x-contact />


    {{-- FOOTER --}}
    <x-footer />

    <!-- Chamada do Motor 3D e da Biblioteca Vanta -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>

    <!-- Configurações Pessoais da Sua Animação -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            VANTA.WAVES({
                el: "#vanta-animacao", // Diz para onde jogar o efeito (no body)
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x050407, // Cor principal das ondas (escuro para casar com seu tema)
                shininess: 30.00, // Brilho das cristas das ondas
                waveHeight: 15.00, // Altura das ondas
                waveSpeed: 0.75, // Velocidade da animação
                zoom: 1.00 // Nível de zoom
            });
        });
    </script>
</body>

</html>
