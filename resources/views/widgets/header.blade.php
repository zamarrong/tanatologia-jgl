<nav id="main-nav" class="fixed top-0 left-0 right-0 z-[10050] w-full transition-all duration-500 bg-transparent backdrop-blur-[4px]">    
    <div class="mx-auto max-w-none px-6 py-4">
        <div class="flex flex-wrap justify-between items-center">
            <!-- Logo y menú hamburguesa -->
             <div class="flex items-center w-full md:w-auto justify-between md:justify-start">
                <a href="/" class="flex items-center z-[1001]">
                    <img src="{{ asset('assets/img/logo_blanco.svg') }}" class="h-15 nav-logo-white" alt="Logo">
                    <img src="{{ asset('assets/img/logo_negro.svg') }}" class="h-15 nav-logo-dark hidden" alt="Logo">
                </a>
                
                <!-- Botón menú hamburguesa CORREGIDO -->
                <button id="mobile-menu-button" class="md:hidden text-white nav-icon focus:outline-none z-[1001] mr-4">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Botón amarillo - Se muestra debajo en móvil -->
            <div class="w-full md:w-auto mt-4 md:mt-0 order-3 md:order-2 md:mr-6">
                <a href="tel:+525557056000"class="transition-colors bg-[#F7BE00] text-[#132368] pad-button rounded-sm inline-flex items-center gap-2 px-4 py-2 w-full md:w-auto justify-center">
                    <img src="{{ asset('assets/img/phone-blue.svg') }}" alt="Teléfono" class="h-6 w-auto">
                    <span class="font-bold text-lg">
                        <span class="hidden md:inline">Líneas de atención inmediata: </span>
                        <span class="md:hidden">Líneas de atención:</span>
                        <span class="md:inline-block">*2412 / 800-FUNERAL / 55 5705 6000</span>
                    </span>
                </a>
            </div>

            <!-- Espaciador para desktop -->
            <div class="hidden md:block md:invisible md:w-6 order-2 md:order-3"></div>
        </div>

            <!-- Menú móvil (oculto por defecto) -->
        <div id="mobile-menu" class="hidden md:hidden absolute left-0 right-0 top-full bg-[#132368] shadow-lg z-[1000] pt-4 pb-6 px-6">
            <ul class="space-y-4">
                <li>
                    <button class="mobile-nav-link flex items-center justify-between w-full text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">
                        Servicios 
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 10 6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    
                    <div class="pl-4 hidden mt-2 mb-4 mobile-submenu">
                        <ul class="text-white space-y-3">
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Necesidad Inmediata</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Planes Funerarios a Futuro</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Florería</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Santuario Funerario para Mascotas</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Servicios Funerarios Corporativos</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Recordari (nichos y urnas)</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Petfriendly</a>
                            </li>
                            <li class="p-2 transition-colors">
                                <a href="" class="block">Soporte Funerario Inmediato (SOFI)</a>
                            </li>
                        </ul>
                    </div>
                </li>
                
                <!-- Elementos de menú simples para móvil -->
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Planes</a></li>
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Obituarios</a></li>
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Sucursales</a></li>
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Florería</a></li>
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Innovación</a></li>
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Nosotros</a></li>
                <li><a href="" class="mobile-nav-link block text-white hover:text-amber-400 py-3 transition-colors border-b border-white/20">Contacto</a></li>
                
                <!-- Iconos de redes sociales para móvil -->
                <li class="flex space-x-6 pt-4">
                    <a href="https://www.facebook.com/funerariasjgarcialopez/?locale=es_LA">
                        <img src="{{ asset('assets/img/facebook.svg') }}" class="h-8 w-8" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/funerariasjgl/?hl=en">
                        <img src="{{ asset('assets/img/instagram.svg') }}" class="h-8 w-8" alt="Instagram">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5215581055707">
                        <img src="{{ asset('assets/img/wpp.svg') }}" class="h-8 w-8" alt="WhatsApp">
                    </a>
                </li>
            </ul>
        </div>

        <div id="mega-menu-full" class="items-center justify-between font-medium hidden w-full md:flex md:w-auto md:order-1 pt-4">
            <ul class="flex flex-col p-4 md:p-0 mt-4 md:space-x-8 md:flex-row md:mt-0">
                <li>
                    <button class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Servicios 
                        <svg class="w-2.5 h-2.5 ms-2.5" fill="none" stroke="currentColor" viewBox="0 0 10 6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    
                    <div class="absolute left-0 right-0 bg-[#132368] shadow-lg hidden mt-0 py-2 z-[1001] submenu">
                        <div class="container mx-auto flex">
                            <div class="w-1/5 flex items-center text-nav">
                                <span class="text-white py-7 px-7 text-3xl pt-serif-regular">Servicios</span>
                            </div>
                            
                            <div class="w-2/5 py-7 px-7 mt-8">
                                <ul class="text-white text-lg font-normal pt-serif-regular">
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu1.jpg') }}">
                                        <a href="">
                                             <span>Necesidad Inmediata</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu2.jpg') }}">
                                        <a href="">
                                            <span>Planes Funerarios a Futuro</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu3.jpg') }}">
                                        <a href="">
                                            <span>Florería</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu4.jpg') }}">
                                        <a href="">
                                            <span>Santuario Funerario para Mascotas</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu5.jpg') }}">
                                        <a href="">
                                            <span>Servicios Funerarios Corporativos</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu6.jpg') }}">
                                        <a href="">
                                            <span>Recordari (nichos y urnas)</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item border-b border-stone-100/20"
                                        data-image="{{ asset('assets/img/menu/menu9.jpg') }}">
                                        <a href="">
                                            <span>Petfriendly</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                    <li class="p-2 transition-colors relative service-item"
                                        data-image="{{ asset('assets/img/menu/menu8.png') }}">
                                        <a href="">
                                            <span>Soporte Funerario Inmediato (SOFI)</span>
                                        </a>
                                        <div class="absolute right-2 top-1/2 transform -translate-y-1/2 hidden arrow-icon">
                                            <img src="{{ asset('assets/img/menu/arrow-left.svg') }}" class="w-4 h-4 " alt=">">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Imagen del servicio seleccionado -->
                            <div class="w-2/5 flex items-center justify-center p-2">
                                <img id="service-image" src="{{ asset('assets/img/menu/menu1.jpg') }}" 
                                    alt="Imagen de servicios" 
                                    class="w-80 h-80 object-cover shadow-md transition-all duration-300 opacity-100">
                            </div>
                        </div>
                    </div>
                </li>
                
                <!-- Elementos de menú simples -->
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Planes
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Obituarios
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Sucursales
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Florería
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Innovación
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Nosotros
                    </a>
                </li>
                <li>
                    <a href="" class="nav-link flex items-center text-white hover:text-amber-400 py-2 px-3 transition-colors">
                        Contacto
                    </a>
                </li>
                
                <!-- Iconos de redes sociales -->
                <li class="flex space-x-4">
                    <a href="https://www.facebook.com/funerariasjgarcialopez/?locale=es_LA">
                        <img src="{{ asset('assets/img/facebook.svg') }}" class="nav-logo-white" alt="Facebook">
                        <img src="{{ asset('assets/img/face-blue.svg') }}" class="nav-logo-dark hidden" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/funerariasjgl/?hl=en">
                        <img src="{{ asset('assets/img/instagram.svg') }}" class="nav-logo-white" alt="Instagram">
                         <img src="{{ asset('assets/img/insta-blue.svg') }}" class="nav-logo-dark hidden" alt="Instagram">
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=5215581055707">
                        <img src="{{ asset('assets/img/wpp.svg') }}" class="nav-logo-white" alt="WhatsApp">
                        <img src="{{ asset('assets/img/wpp-blue.svg') }}" class="nav-logo-dark hidden" alt="WhatsApp">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Función para manejar los submenús
    const navLinks = document.querySelectorAll('.nav-link');
    const submenus = document.querySelectorAll('.submenu');
    
    // Mostrar/ocultar submenú al hacer click
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.stopPropagation();
            const submenu = this.nextElementSibling;
            
            // Cerrar todos los submenús primero
            submenus.forEach(sm => {
                if (sm !== submenu) {
                    sm.classList.add('hidden');
                }
            });
            
            // Alternar el submenú actual
            if (submenu) {
                submenu.classList.toggle('hidden');
            }
        });
    });
    
    // Mostrar submenú al pasar el mouse (hover)
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            const submenu = this.nextElementSibling;
            if (submenu) {
                submenu.classList.remove('hidden');
            }
        });
    });
    
    // Mantener submenú visible mientras el mouse está en él
    submenus.forEach(submenu => {
        submenu.addEventListener('mouseenter', function() {
            this.classList.remove('hidden');
        });
        
        submenu.addEventListener('mouseleave', function() {
            this.classList.add('hidden');
            // Ocultar todas las flechas al salir del submenú
            document.querySelectorAll('.arrow-icon').forEach(icon => {
                icon.classList.add('hidden');
            });
        });
    });
    
    // Cerrar todos los submenús al hacer click fuera
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.nav-link') && !e.target.closest('.submenu')) {
            submenus.forEach(submenu => {
                submenu.classList.add('hidden');
            });
        }
    });
    
    // Cambio de imagen en el submenú de servicios con flecha
    const serviceItems = document.querySelectorAll('.service-item');
    const serviceImage = document.getElementById('service-image');
    const defaultImage = "{{ asset('assets/img/menu/menu1.jpg') }}";
    
    serviceItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            // Oculta todas las flechas
            document.querySelectorAll('.arrow-icon').forEach(icon => {
                icon.classList.add('hidden');
            });
            
            // Muestra la flecha del item actual
            const arrow = this.querySelector('.arrow-icon');
            arrow.classList.remove('hidden');
            
            // Cambia la imagen con efecto de transición
            const newImage = this.getAttribute('data-image');
            if (newImage) {
                serviceImage.classList.add('opacity-0');
                
                setTimeout(() => {
                    serviceImage.src = newImage;
                    serviceImage.alt = this.textContent.trim() + ' - Imagen descriptiva';
                    serviceImage.classList.remove('opacity-0');
                }, 150);
            }
        });
    });
    
    // Efecto de scroll en la navegación
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('main-nav');
        if (window.scrollY > 200) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
});

 // JavaScript para el menú hamburguesa (debe agregarse en tu archivo JS principal)
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        // Alternar menú móvil
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                const isExpanded = mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
                
                // Prevenir scroll del body cuando el menú está abierto
                document.body.style.overflow = isExpanded ? '' : 'hidden';
            });
        }
        
        // Alternar submenús en móvil
        const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                if (this.nextElementSibling && this.nextElementSibling.classList.contains('mobile-submenu')) {
                    e.preventDefault();
                    this.nextElementSibling.classList.toggle('hidden');
                    
                    // Rotar flecha (si existe)
                    const arrow = this.querySelector('svg');
                    if (arrow) {
                        arrow.classList.toggle('rotate-180');
                    }
                }
            });
        });
        
        // Cerrar menú al hacer clic fuera de él
        document.addEventListener('click', function(e) {
            if (mobileMenu && !mobileMenu.contains(e.target) && 
                mobileMenuButton && !mobileMenuButton.contains(e.target) && 
                !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            }
        });
        
        // Prevenir que el menú se cierre al hacer clic dentro de él
        if (mobileMenu) {
            mobileMenu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }
    });
</script>