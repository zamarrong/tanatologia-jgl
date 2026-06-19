<nav id="main-nav" class="fixed top-0 left-0 right-0 z-[10050] w-full transition-all duration-500 bg-transparent backdrop-blur-[2px]">    
    <div class="mx-auto max-w-none px-6 py-4">
        <div class="flex flex-wrap justify-between items-center">

            <!-- Logo y menú hamburguesa -->
            <div class="flex items-center w-full md:w-auto justify-between md:justify-start">
                <a href="https://jgarcialopez.com.mx" class="flex items-center z-[1001]">
                    <img src="{{ asset('assets/img/logo_negro.svg') }}" class="h-15 nav-logo-white" alt="Logo">
                    <img src="{{ asset('assets/img/logo_negro.svg') }}" class="h-15 nav-logo-dark hidden" alt="Logo">
                </a>
                
                <!-- Botón hamburguesa (se conserva estructura) -->
                <button id="mobile-menu-button" class="md:hidden text-black nav-icon focus:outline-none z-[1001] mr-4">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Botón amarillo -->
            <div class="w-full md:w-auto mt-4 md:mt-0 order-3 md:order-2 md:mr-6">
                <a href="tel:+525557056000" class="transition-colors bg-[#F7BE00] text-[#132368] pad-button rounded-sm inline-flex items-center gap-2 px-4 py-2 w-full md:w-auto justify-center">
                    <img src="{{ asset('assets/img/phone-blue.svg') }}" alt="Teléfono" class="h-6 w-auto">
                    <span class="font-bold text-lg">
                        <span class="hidden md:inline">Líneas de atención inmediata: </span>
                        <span class="md:hidden">Líneas de atención:</span>
                        <span class="md:inline-block">*2412 / 800-FUNERAL / 55 5705 6000</span>
                    </span>
                </a>
            </div>

            <!-- Espaciador desktop -->
            <div class="hidden md:block md:invisible md:w-6 order-2 md:order-3"></div>
        </div>

        <!-- MENÚ MÓVIL (VACÍO, PERO EXISTE) -->
        <div id="mobile-menu" class="hidden md:hidden absolute left-0 right-0 top-full bg-[#132368] shadow-lg z-[1000] pt-4 pb-6 px-6">
            <ul class="space-y-4">
                <!-- Menú vacío intencionalmente -->
            </ul>
        </div>

        <!-- MENÚ ESCRITORIO (VACÍO, PERO EXISTE) -->
        <div id="mega-menu-full" class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1 pt-4">
            <ul class="flex flex-col p-4 md:p-0 mt-4 md:flex-row md:mt-0">
                <!-- Menú vacío intencionalmente -->
            </ul>
        </div>

    </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // Scroll effect
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('main-nav');
        if (nav) {
            if (window.scrollY > 200) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        }
    });

    // Menú hamburguesa
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            const isExpanded = mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            document.body.style.overflow = isExpanded ? '' : 'hidden';
        });
    }

    document.addEventListener('click', function(e) {
        if (
            mobileMenu &&
            mobileMenuButton &&
            !mobileMenu.contains(e.target) &&
            !mobileMenuButton.contains(e.target) &&
            !mobileMenu.classList.contains('hidden')
        ) {
            mobileMenu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            document.body.style.overflow = '';
        }
    });

    if (mobileMenu) {
        mobileMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
});
</script>
