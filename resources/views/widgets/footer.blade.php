<footer class="bg-[#132368] text-white py-12 px-4 md:px-8">
    <div class="container mx-auto">
        <!-- Encabezado -->
        
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <div class="md:col-span-3">
                <div class="mb-8 flex justify-center">
            <a href="https://jgarcialopez.com.mx" class="w-2/5 md:w-1/5">
                <img src="{{ asset('assets/img/logo_blanco.png') }}" class="w-full" alt="Logo">
            </a>
        </div>
                <h4 class="text-lg text-stone-300 mb-4 center-normal">Oficinas de atención a cliente</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Sucursal 1 -->
                    <div class="box-footer">
                        <p class="text-stone-50 text-sm">General Prim 77.</p>
                        <p class="text-stone-50 text-sm">Col. Juárez Cuauhtémoc.</p>
                        <p class="text-stone-50 text-sm">Cuauhtémoc.</p>
                        <p class="text-stone-50 text-sm">CP 06600, Ciudad de México.</p>
                        <p class="text-stone-50 text-sm">Teléfono: 55 5985 9600</p>
                    </div>

                    <!-- Sucursal 2 -->
                    <div class="box-footer">
                        <p class="text-stone-50 text-sm">Félix Parra. 192.</p>
                        <p class="text-stone-50 text-sm">San José Insurgentes.</p>
                        <p class="text-stone-50 text-sm">Benito Juárez.</p>
                        <p class="text-stone-50 text-sm">CP 03900, Ciudad de México.</p>
                        <p class="text-stone-50 text-sm">Teléfono: 55 5481 9400</p>
                    </div>

                    <!-- Sucursal 3 -->
                    <div class="box-footer">
                        <p class="text-stone-50 text-sm">Nicolás San Juan 452 F8.</p>
                        <p class="text-stone-50 text-sm">Benito Juárez.</p>
                        <p class="text-stone-50 text-sm">Col. del Valle.</p>
                        <p class="text-stone-50 text-sm">CP 03100, Ciudad de México.</p>
                        <p class="text-stone-50 text-sm">Teléfono: 55 5539 7181</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="center-normal">
           <span class="text-stone-50 text-sm">
                SERVICIOS A FUTURO COMERCIALIZADOS POR PREVISION FINAL S.A. DE C.V., 
                SANTUARIO PARA MASCOTAS OPERADO POR BYE BYE FRIEND, SERVICIO DE FLORERÍA 
                OPERADO POR BLANC FLORERÍA, SERVICIOS FUNERARIOS OPERADOS POR SANTA GLORIA VELATORIOS.
            </span>  
        </div>
       
        <div class="border-t border-[#F7BE00] my-8"></div>

        <div class="text-stone-500 text-xs md:text-sm center-normal">
            
            <p class="mb-2 text-stone-50 text-sm text-center">
                J. García López Casas Funerarias. Todos los derechos reservados.<br>
                La vida merece un homenaje®. <a href="https://jgarcialopez.com.mx/politica-de-privacidad" class="text-[#F7BE00]">Ver política de privacidad</a>
            </p>
        </div>
    </div>

</footer>



<script>
    // Cambio de color al hacer scroll
    window.addEventListener('scroll', function() {
        const nav = document.getElementById('main-nav');
        if (window.scrollY > 670) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });
</script>
