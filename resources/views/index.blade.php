@extends('layout.app')
@include('widgets.header')
@section('title', 'Inicio | J. García López')
@section('content')

<section class="relative h-screen -mt-[header_height] pt-[header_height]">
  <div class="absolute inset-0 w-full h-full overflow-hidden">
    <video autoplay muted loop playsinline class="w-full h-full object-cover">
      <source src="{{ asset('assets/img/video.mp4') }}" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-gradient-to-b from-[#070C22]/80 to-transparent"></div>
  </div>
  <div class="relative z-10 h-full flex items-center justify-center text-white">
    <h2 class="text-6xl pt-serif-regular text-[#F6EEE1] p-4 text-center md:p-0">
      La Vida Merece un Homenaje®
    </h2>
  </div>
</section>

<section>
    <p>banner de bienvenidos</p>
</section>

<section class="relative overflow-hidden group bg-stone-50 pl-15 pr-15 pt-10 pb-10">
  <h2 class="text-4xl md:text-5xl pt-serif-regular text-center text-stone-800 opacity-0 animate-on-scroll slide-in-left">
    Contratar un Plan Funerario es una forma de proteger el futuro de quienes amas.
  </h2>
</section>

<section class="relative overflow-hidden group bg-stone-50">
  <div class="container mx-auto px-6 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-3/5 space-y-6">
        <h2 class="text-4xl md:text-5xl text-stone-800 pt-serif-regular">Planes Funerarios a Futuro</h2>
        <div class="linea"></div>
      </div>
      
      <div class="relative overflow-hidden p-2.5 border border-stone-200  hover:shadow-md transition-shadow duration-300 slide-in-bottom">
        <img src="{{ asset('assets/img/pareja2.jpg') }}" alt="Familia feliz" class="w-200 h-130 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105">
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-500"></div>
      </div>
      <div class="md:w-3/5">
        <div class="hidden md:block">
          <img src="{{ asset('assets/img/icono_plan_futuro.png') }}" class="w-20 h-20 p-2" alt="Icono Plan Futuro">
        </div>
        
        <p class="mt-2 text-2xl font-semibold text-gray-700 slide-in-right Gotham">Prevenir es cuidar</p>
        <span class="text-lg text-gray-600 Gotham">Sabemos que nunca es fácil hablar sobre la partida de un ser querido. Sin embargo, aunque no podamos evitar que suceda, sí podemos estar preparados. Pensamos que la mejor forma de cuidar a quienes amamos es a través de la prevención, para que cuando llegue el momento, solo te ocupes de honrar su recuerdo con tranquilidad.</p>
        
        <button class=" mt-3 notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg slide-in-right">
          Contratar plan
          <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
        </button>
      </div>
    </div>
  </div>
</section>

<section class="relative overflow-hidden group bg-stone-50">
  <div class="container mx-auto px-6 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-4/5 space-y-6">
        <h2 class="text-4xl md:text-5xl text-stone-800 pt-serif-regular">Necesidad inmediata</h2>
        <div class="linea"></div>
      </div>
      
      <div class="relative overflow-hidden p-2.5 border border-stone-200  hover:shadow-md transition-shadow duration-300 slide-in-bottom">
        <img 
          src="{{ asset('assets/img/necesidadInmediata.jpg') }}" 
          alt="Familia feliz" 
          class="w-280 h-130 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
        >
        
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-500"></div>
      </div>
      <div class="md:w-4/5">
        <div class="hidden md:block">
          <img src="{{ asset('assets/img/icono_necesidad_inmediata.png') }}" class="w-20 h-20 p-2" alt="">
        </div>
        <p class="mt-2 text-2xl font-semibold text-gray-700 slide-in-right Gotham">Permítenos ser tu soporte</p>
        <p class="text-lg text-gray-600 Gotham">En momentos difíciles, no estás solo. Nuestro equipo está disponible 24/7 para apoyarte con todo lo necesario y brindarte un servicio digno, respetuoso y humano.</p>
        
        <button class=" mt-3 notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg slide-in-right">
          Solicitar asistencia
         <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
        </button>

      </div>
    </div>
  </div>
</section>

<section class="relative overflow-hidden group bg-stone-100">
  <div class="container mx-auto px-6 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="p-3">
        <span class="text-[#3B4C92] text-2xl pt-serif-regular">Acompaña el Homenaje®</span>
        <p class="text-stone/800 text-4xl pt-serif-regular mt-3 slide-in-left">Envía condolencias a tus seres queridos con flores</p>
          <a href="https://blancfloreriajgl.com.mx/" target="_blank" rel="noopener noreferrer">
            <button class="mt-3 notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg mx-auto md:mx-0">
              Enviar Flores
              <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
            </button>
          </a>
      </div>
      <div class="slide-in-right"> 
        <img src="{{ asset('assets/img/flores.webp') }}"  class="w-140 h-full" alt="">
      </div>
    </div>
    
  </div>
</section>

<section class="relative overflow-hidden bg-stone-50">
  <div class="absolute bottom-0 left-0 right-0 h-[-360px] z-0">
    <img src="{{ asset('assets/img/ilustracion_banner.png') }}" 
         class="w-full h-full object-cover opacity-20" 
         alt="Fondo decorativo">
  </div>
  
  <div class="container mx-auto px-6 py-16 md:py-24 relative z-10">
    <div class="flex flex-col items-center text-center mb-16">
      <p class="text-stone-800 text-2xl Gotham mb-4 slide-in-top">Sucursales</p>
      <h2 class="text-stone-800 text-4xl md:text-5xl pt-serif-regular leading-tight max-w-3xl mb-8 slide-in-top">
        Ponemos a su disposición 10 Casas en la Ciudad de México y Área Metropolitana.
      </h2>
     
    </div>

    <div class="hidden md:grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto slide-in-top-2">
      <div class="relative overflow-hidden p-2.5 border border-stone-200 hover:shadow-md transition-all duration-300 h-64 md:h-auto">
          <img src="{{ asset('assets/img/pedregal.jpg') }}" 
              alt="Sucursal Pedregal" 
              class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105">
          <div class="absolute inset-0 bg-black/0 hover:bg-black/10 transition-all duration-500"></div>
      </div>

      <div class="relative overflow-hidden p-2.5 border border-stone-200 hover:shadow-md transition-all duration-300 row-span-1 md:row-span-2 h-96 md:h-auto">
          <img src="{{ asset('assets/img/prim.jpg') }}" 
              alt="Sucursal Prim" 
              class="w-full h-100 object-cover transition-transform duration-500 ease-in-out hover:scale-105">
          <div class="absolute inset-0 bg-black/0 hover:bg-black/10 transition-all duration-500"></div>
      </div>

      <div class="relative overflow-hidden p-2.5 border border-stone-200 hover:shadow-md transition-all duration-300 h-64 md:h-auto">
          <img src="{{ asset('assets/img/linda_vista.jpg') }}" 
              alt="Sucursal Linda Vista" 
              class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105">
          <div class="absolute inset-0 bg-black/0 hover:bg-black/10 transition-all duration-500"></div>
      </div> 
    </div>
     <a href="">
      <button class="slide-in-top mx-auto mt-4 notched-button bg-[#0F1E6A] hover:bg-[#1a2e8a] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg transition-colors duration-300 group">
        Ver sucursales
        <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" alt="→">
      </button>
    </a>
    <div class="block md:hidden relative w-full overflow-hidden  shadow-lg">
            <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
                <!-- Slide 1 -->
                <div class="min-w-full">
                    <div class="relative overflow-hidden p-2 border border-stone-200 hover:shadow-md transition-all duration-300 h-80">
                        <div class="w-full h-full flex items-center justify-center bg-gray-100 ">
                            <img src="{{ asset('assets/img/pedregal.jpg') }}" 
                                alt="Sucursal Pedregal" 
                                class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105">
                        </div>
                        <div class="absolute inset-0 bg-black/0 hover:bg-black/10 transition-all duration-500 "></div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="min-w-full">
                    <div class="relative overflow-hidden p-2 border border-stone-200 hover:shadow-md transition-all duration-300 h-80">
                        <div class="w-full h-full flex items-center justify-center bg-gray-100 ">
                            <img src="{{ asset('assets/img/prim.jpg') }}" 
                                alt="Sucursal Prim" 
                                class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 ">
                        </div>
                        <div class="absolute inset-0 bg-black/0 hover:bg-black/10 transition-all duration-500 "></div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="min-w-full">
                    <div class="relative overflow-hidden p-2 border border-stone-200 hover:shadow-md transition-all duration-300 h-80">
                        <div class="w-full h-full flex items-center justify-center bg-gray-100 g">
                            <img src="{{ asset('assets/img/linda_vista.jpg') }}" 
                                alt="Sucursal Linda Vista" 
                                class="w-full h-full object-cover transition-transform duration-500 ease-in-out hover:scale-105 ">
                        </div>
                        <div class="absolute inset-0 bg-black/0 hover:bg-black/10 transition-all duration-500 "></div>
                    </div>
                </div>
            </div>
            
            <!-- Botones de navegación -->
           <!--  <button id="prev" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/80 rounded-full p-2 shadow-md hover:bg-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="next" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/80 rounded-full p-2 shadow-md hover:bg-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button> -->
        </div>
        
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.getElementById('carousel');
            const slides = document.querySelectorAll('.min-w-full');
            const indicators = document.querySelectorAll('.indicator');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            
            let currentIndex = 0;
            const totalSlides = slides.length;
            
            // Función para actualizar el carrusel
            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
                
                // Actualizar indicadores
                indicators.forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.remove('bg-gray-300');
                        indicator.classList.add('bg-blue-500');
                    } else {
                        indicator.classList.remove('bg-blue-500');
                        indicator.classList.add('bg-gray-300');
                    }
                });
            }
            
            // Event listeners para los botones
            nextButton.addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            });
            
            prevButton.addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                updateCarousel();
            });
            
            // Event listeners para los indicadores
            indicators.forEach(indicator => {
                indicator.addEventListener('click', function() {
                    currentIndex = parseInt(this.getAttribute('data-index'));
                    updateCarousel();
                });
            });
            
            // Auto-avance cada 5 segundos
            setInterval(function() {
                currentIndex = (currentIndex + 1) % totalSlides;
                updateCarousel();
            }, 5000);
        });
    </script>
</div>



  
</section>

<section class="relative overflow-hidden bg-stone-50">
  <div class="center-normal">
      <h2 class="text-stone-800 text-2xl md:text-2xl pt-serif-regular leading-tight max-w-2xl mb-8">
        *Todas las salas incluyen cafetería.
      </h2>
  </div>
</section>
<section class="relative overflow-hidden bg-stone-50">
   <div class="absolute bottom-3 left-0 right-0 h-full z-0">
    <img src="{{ asset('assets/img/ilustracion_banner_2.jpg') }}" 
         class="w-full h-full object-cover object-center opacity-20" 
         alt="Fondo decorativo">
  </div>
  
  <div class="container mx-auto">
    <div class="md:grid-cols-3 gap-8 mx-auto">
      <div class="relative max-full mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl md:text-5xl pt-serif-regular text-center text-gray-900 mb-12 slide-in-top">Consulta la información del Homenaje® de tu ser amado</h2>
  
        <div class="relative overflow-hidden fade-in">
          <div id="testimonial-slider" class="flex transition-transform duration-500 ease-in-out">
            
            <div class="w-full min-w-[calc(100%/1)] md:min-w-[calc(100%/3)] md:w-auto px-2 md:px-4">
              <div class="bg-white p-6 rounded-lg shadow-md h-full">
                <div class="">
                  <img class="rounded-full p-5 py-4 bg-stone-100 w-07 h-auto" src="{{ asset('assets/img/vela-comentarios.svg') }}" alt="image description">
                </div>
                <div class="text-2xl pt-serif-regular text-stone-800 mt-3">Eleazar</div>
                <div class="font-semibold text-2xl pt-serif-regular text-stone-800">Cardenas Cardenas</div>
                <div class="linea-2"></div>
                <!-- Contenedor para icono y fecha -->
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                    <path d="M3 10h18"/>
                  </svg>
                  <span class="text-md mt-0 text-stone-800">20/febrero/2025</span>
                </div>
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                  <span class="text-md mt-0 text-stone-800">Ciudad de México</span>
                </div>
                <div>
                  <button class="btn-details mt-3">Ver Detalles</button>
                </div>
              </div>
            </div>
            
          
            <div class="w-full min-w-[calc(100%/1)] md:min-w-[calc(100%/3)] md:w-auto px-2 md:px-4">
              <div class="bg-white p-6 rounded-lg shadow-md h-full">
                <div class="">
                  <img class="rounded-full p-5 py-4 bg-stone-100 w-07 h-auto" src="{{ asset('assets/img/vela-comentarios.svg') }}" alt="image description">
                </div>
                <div class="text-2xl pt-serif-regular text-stone-800 mt-3">Eleazar</div>
                <div class="font-semibold text-2xl pt-serif-regular text-stone-800">Cardenas Cardenas</div>
                <div class="linea-2"></div>
                <!-- Contenedor para icono y fecha -->
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                    <path d="M3 10h18"/>
                  </svg>
                  <span class="text-md mt-0 text-stone-800">20/febrero/2025</span>
                </div>
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                  <span class="text-md mt-0 text-stone-800">Ciudad de México</span>
                </div>
                <div>
                  <button class="btn-details mt-3">Ver Detalles</button>
                </div>
              </div>
            </div>
            
          
            <div class="w-full min-w-[calc(100%/1)] md:min-w-[calc(100%/3)] md:w-auto px-2 md:px-4">
              <div class="bg-white p-6 rounded-lg shadow-md h-full">
                <div class="">
                  <img class="rounded-full p-5 py-4 bg-stone-100 w-07 h-auto" src="{{ asset('assets/img/vela-comentarios.svg') }}" alt="image description">
                </div>
                <div class="text-2xl pt-serif-regular text-stone-800 mt-3">Eleazar</div>
                <div class="font-semibold text-2xl pt-serif-regular text-stone-800">Cardenas Cardenas</div>
                <div class="linea-2"></div>
                <!-- Contenedor para icono y fecha -->
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height-24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                    <path d="M3 10h18"/>
                  </svg>
                  <span class="text-md mt-0 text-stone-800">20/febrero/2025</span>
                </div>
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                  <span class="text-md mt-0 text-stone-800">Ciudad de México</span>
                </div>
                <div>
                  <button class="btn-details mt-3">Ver Detalles</button>
                </div>
              </div>
            </div>
            
            
            <div class="w-full min-w-[calc(100%/1)] md:min-w-[calc(100%/3)] md:w-auto px-2 md:px-4">
              <div class="bg-white p-6 rounded-lg shadow-md h-full">
                <div class="">
                  <img class="rounded-full p-5 py-4 bg-stone-100 w-07 h-auto" src="{{ asset('assets/img/vela-comentarios.svg') }}" alt="image description">
                </div>
                <div class="text-2xl pt-serif-regular text-stone-800 mt-3">Eleazar</div>
                <div class="font-semibold text-2xl pt-serif-regular text-stone-800">Cardenas Cardenas</div>
                <div class="linea-2"></div>
                <!-- Contenedor para icono y fecha -->
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar">
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                    <path d="M3 10h18"/>
                  </svg>
                  <span class="text-md mt-0 text-stone-800">20/febrero/2025</span>
                </div>
                <div class="flex items-center gap-2 mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#b0842a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin-icon lucide-map-pin"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>
                  <span class="text-md mt-0 text-stone-800">Ciudad de México</span>
                </div>
                <div>
                  <button class="btn-details mt-3">Ver Detalles</button>
                </div>
              </div>
            </div>
          </div>
          
        
          <button id="prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white p-3 rounded-full shadow-lg hover:bg-amber-50 transition-colors duration-300 z-10 hidden md:block">
            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
          </button>
          
          <button id="next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white p-3 rounded-full shadow-lg hover:bg-amber-50 transition-colors duration-300 z-10 hidden md:block">
            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
          </button>
        </div>
    </div>
  </div>
   <a href="">
      <button class="mx-auto notched-button bg-[#0F1E6A] hover:bg-[#1a2e8a] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg transition-colors duration-300 group">
        Ver Obituarios
        <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" alt="→">
      </button>
    </a>
</section>

<section class="relative overflow-hidden group bg-stone-50">
  <div class="container mx-auto px-6 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">
      <div class="md:w-3/5 space-y-6">
        <h2 class="text-4xl md:text-5xl text-stone-800 pt-serif-regular slide-in-top">Más de 40 años innovando</h2>
        <div class="linea"></div>
      </div>
      
      <div class="relative overflow-hidden p-2.5 border border-stone-200  hover:shadow-md transition-shadow duration-300 slide-in-bottom">
        <img 
          src="{{ asset('assets/img/experiencias.jpg') }}" 
          alt="Familia feliz" 
          class="w-200 h-130 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105 "
        >
        
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-500"></div>
      </div>
      <div>
        <p class="text-lg text-gray-600 slide-in-top">Somos una empresa que siempre busca innovar para ofrecerte la mejor atención y servicio. Descubre todas las innovaciones que hemos desarrollado para personalizar el Homenaje® de tu ser amado.</p>
        
        <div class="relative overflow-hidden p-2.5 border border-stone-200  hover:shadow-md transition-shadow mt-5 duration-300">
          <img 
            src="{{ asset('assets/img/carro.jpg') }}" 
            alt="Familia feliz" 
            class="w-137 h-70 object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
          >
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-500"></div>
      </div>
      <a href="">
        <button class="mt-3 notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg">
          Ver innovaciones
          <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
        </button>
      </a>
      </div>
    </div>
  </div>
</section>
<section class="relative overflow-hidden group bg-stone-50">
  <div class="container mx-auto px-6 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12 ">
      <div class="md:w-2/5 space-y-6 slide-in-left">
        <h2 class="text-4xl md:text-5xl text-stone-800 pt-serif-regular">Guía tanatológica</h2>
        <p class="text-lg text-gray-600">Sabemos que nadie está preparado para una pérdida, por eso te tenemos estos 
          <span class="font-semibold">consejos que podrán ayudarte</span> en ese momento tan vulnerable.</p>
      </div>
      
     <div class="cmd:w-3/5 position-absolute top-50 start-50 translate-middle-y pe-5  d-none d-md-block slide-in-bottom">
        <div class="linea-faq"></div>
            <div class="space-y-4 mt-6">
                <!-- Item 1 -->
                <div class="group flex items-start gap-4 cursor-pointer transition-all hover:translate-x-2">
                    <div class="">
                        <img src="{{ asset('assets/img/faq1.jpg') }}" class="img-faq" alt="">
                    </div>
                    <div>
                        <h3 class="text-lg font-medium mb-1 text-stone-800 pt-serif-regular">¿Qué hacer en un caso de necesidad inmediata?</h3>
                        <a href="#" class="flex items-center gap-1 text-sm transition-all text-stone-800 pt-serif-regular">
                            Leer más
                            <img src="{{ asset('assets/img/flecha.svg') }}" style="width: 16px;" alt="">
                        </a>
                    </div>
                </div>
                
                <!-- Item 2 -->
                 <div class="linea-faq"></div>
                <div class="group flex items-start gap-4 cursor-pointer transition-all hover:translate-x-2">
                     <div class="">
                        <img src="{{ asset('assets/img/faq2.jpg') }}" class="img-faq" alt="">
                    </div>
                    <div>
                        <h3 class="text-lg font-medium mb-1 text-stone-800 pt-serif-regular">¿Cómo manejar el dolor de una pérdida familiar?</h3>
                        <a href="#" class="/80 hover: flex items-center gap-1 text-sm transition-all text-stone-800 pt-serif-regular">
                            Leer más
                            <img src="{{ asset('assets/img/flecha.svg') }}" style="width: 16px;" alt="">
                        </a>
                    </div>
                </div>
                
                <!-- Item 3 -->
                 <div class="linea-faq"></div>
                <div class="group flex items-start gap-4 cursor-pointer transition-all hover:translate-x-2">
                     <div class="">
                        <img src="{{ asset('assets/img/faq3.jpg') }}" class="img-faq" alt="">
                    </div>
                    <div>
                        <h3 class="text-lg font-medium mb-1 text-stone-800 pt-serif-regular">¿Cómo puedo registrar a mi mascota para el funeral?</h3>
                        <a href="#" class="/80 hover: flex items-center gap-1 text-sm transition-all text-stone-800 pt-serif-regular">
                            Leer más
                            <img src="{{ asset('assets/img/flecha.svg') }}" style="width: 16px;" alt="">
                        </a>
                    </div>
                </div>
                <div class="linea-faq"></div>
            </div>
        </div>
      
      </div>
    </div>
  </div>
</section>

<section class="relative overflow-hidden bg-stone-100 slide-in-fwd-center">
  <div class="container mx-auto px-6 py-16 md:py-24 relative z-20">
    <div class="flex flex-col justify-center items-center mb-12 md:mb-16">
      <h2 class="text-4xl md:text-4xl text-center text-stone-800 pt-serif-regular mb-6">Somos una empresa con certificaciones</h2>
    </div>

    <div class="relative max-w-full mx-auto">
      <div class="relative overflow-hidden">
        <div id="certifications-slider" class="flex transition-transform duration-500 ease-in-out">
          <!-- Certificación 1 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c1.png') }}" alt="Certificación 1" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <!-- Certificación 2 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c2.png') }}" alt="Certificación 2" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <!-- Certificación 3 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c3.png') }}" alt="Certificación 3" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <!-- Certificación 4 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c4.png') }}" alt="Certificación 4" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <!-- Certificación 5 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c5.png') }}" alt="Certificación 5" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <!-- Certificación 6 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c6.png') }}" alt="Certificación 6" class="h-full object-contain">
              </div>
            </div>
          </div>

          <!-- Certificación 7 -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c7.png') }}" alt="Certificación 6" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <!-- Clones para efecto infinito -->
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c1.png') }}" alt="Certificación 1" class="h-full object-contain">
              </div>
            </div>
          </div>
          
          <div class="min-w-[calc(100%/3)] md:min-w-[calc(100%/6)] px-2">
            <div class="flex flex-col items-center p-6">
              <div class="h-24 mb-4 flex items-center">
                <img src="{{ asset('assets/img/c2.png') }}" alt="Certificación 2" class="h-full object-contain">
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Botones de navegación -->
      <button id="cert-prev-btn" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white p-2 rounded-full shadow-lg hover:bg-amber-50 transition-colors duration-300 z-10">
        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>
      
      <button id="cert-next-btn" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white p-2 rounded-full shadow-lg hover:bg-amber-50 transition-colors duration-300 z-10">
        <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
    </div>
  </div>
</section>
@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.getElementById('testimonial-slider');
      const prevBtn = document.getElementById('prev-btn');
      const nextBtn = document.getElementById('next-btn');
      const slides = document.querySelectorAll('#testimonial-slider > div');
      
      let currentIndex = 0;
      let visibleSlides = 3; // Valor por defecto para desktop

      function getVisibleSlides() {
        // Detectar si estamos en móvil (ancho menor a 768px)
        return window.innerWidth < 768 ? 1 : 3;
      }

      function updateSlider() {
        visibleSlides = getVisibleSlides();
        const slideWidth = 100 / visibleSlides; // Porcentaje del ancho
        slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
        slider.style.transition = 'transform 0.5s ease-in-out';
        
        // Efecto infinito
        const totalSlides = slides.length;
        
        if (currentIndex >= totalSlides) {
          setTimeout(() => {
            slider.style.transition = 'none';
            currentIndex = 0;
            slider.style.transform = `translateX(0)`;
          }, 500);
        }
        
        if (currentIndex < 0) {
          setTimeout(() => {
            slider.style.transition = 'none';
            currentIndex = totalSlides - visibleSlides;
            slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
          }, 500);
        }
      }

      nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        visibleSlides = getVisibleSlides();
        currentIndex += visibleSlides;
        updateSlider();
      });

      prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        visibleSlides = getVisibleSlides();
        currentIndex -= visibleSlides;
        updateSlider();
      });

      // Auto-avance cada 5 segundos (opcional)
      let autoplay = setInterval(() => {
        visibleSlides = getVisibleSlides();
        currentIndex += visibleSlides;
        updateSlider();
      }, 5000);

      // Pausar autoplay al interactuar
      slider.addEventListener('mouseenter', () => clearInterval(autoplay));
      slider.addEventListener('mouseleave', () => {
        autoplay = setInterval(() => {
          visibleSlides = getVisibleSlides();
          currentIndex += visibleSlides;
          updateSlider();
        }, 5000);
      });

      // Inicializa el slider
      updateSlider();
      
      // Redimensionamiento de ventana
      window.addEventListener('resize', updateSlider);
    });
  </script>

 <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slider = document.getElementById('certifications-slider');
      const prevBtn = document.getElementById('cert-prev-btn');
      const nextBtn = document.getElementById('cert-next-btn');
      const slides = document.querySelectorAll('#certifications-slider > div');
      
      // Configuración responsive: número de slides visibles
      let visibleSlides = window.innerWidth < 768 ? 3 : 6;
      
      // Actualizar visibleSlides cuando cambia el tamaño de la ventana
      window.addEventListener('resize', function() {
        visibleSlides = window.innerWidth < 768 ? 3 : 6;
      });
      
      let currentIndex = 0;
      const totalOriginalSlides = 6; // Solo las originales, no los clones

      function updateSlider() {
        const slideWidth = 100 / visibleSlides;
        slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
        slider.style.transition = 'transform 0.5s ease-in-out';
        
        // Efecto infinito: si llega al final, vuelve al inicio sin animación
        if (currentIndex >= totalOriginalSlides) {
          setTimeout(() => {
            slider.style.transition = 'none';
            currentIndex = 0;
            slider.style.transform = `translateX(0)`;
          }, 500);
        }
        
        // Efecto infinito: si va al inicio, salta al final sin animación
        if (currentIndex < 0) {
          setTimeout(() => {
            slider.style.transition = 'none';
            currentIndex = totalOriginalSlides - 1;
            slider.style.transform = `translateX(-${currentIndex * (100 / visibleSlides)}%)`;
          }, 500);
        }
      }

      nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        currentIndex++;
        updateSlider();
      });

      prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        currentIndex--;
        updateSlider();
      });

      // Auto-avance cada 5 segundos (opcional)
      let autoplay = setInterval(() => {
        currentIndex++;
        updateSlider();
      }, 5000);

      // Pausar autoplay al interactuar
      slider.addEventListener('mouseenter', () => clearInterval(autoplay));
      slider.addEventListener('mouseleave', () => {
        autoplay = setInterval(() => {
          currentIndex++;
          updateSlider();
        }, 5000);
      });

      // Inicializa el slider
      updateSlider();
    });
  </script>
  <script>
document.addEventListener('DOMContentLoaded', () => {
  // Clases de animación que ya usas en tu HTML
  const ANIM_CLASSES = [
    'slide-in-left',
    'slide-in-right',
    'slide-in-top',
    'slide-in-top-2',
    'slide-in-bottom',
    'fade-in',
    'slide-in-fwd-center'
  ];

  // Selecciona todos los elementos que tengan alguna de esas clases
  const selector = ANIM_CLASSES.map(c => `.${c}`).join(',');
  const elements = Array.from(document.querySelectorAll(selector));

  // Si el navegador no soporta IO, aplica todo de golpe y listo
  if (!('IntersectionObserver' in window)) {
    elements.forEach(el => el.style.opacity = '');
    return;
  }

  // Respeta usuarios con "reduce motion"
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Preparar: guardar qué animación tenía, quitarla y ocultar el elemento
  elements.forEach(el => {
    const animClass = ANIM_CLASSES.find(c => el.classList.contains(c));
    if (!animClass) return;
    el.dataset.animate = animClass;
    el.classList.remove(animClass);
    // oculto inicial (puedes cambiar a clase Tailwind si prefieres)
    el.style.opacity = '0';
    el.style.willChange = 'transform, opacity';
  });

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      const el = entry.target;
      const animClass = el.dataset.animate;

      // Mostrar y animar
      el.style.opacity = '';
      el.style.willChange = '';
      if (!reduce && animClass) {
        // Reinicio de reflow para asegurar que la animación dispare
        void el.offsetWidth;
        el.classList.add(animClass);
      }

      // Solo una vez
      obs.unobserve(el);
    });
  }, {
    root: null,
    rootMargin: '0px 0px -10% 0px', // dispara un poco antes del final de viewport
    threshold: 0.2
  });

  elements.forEach(el => observer.observe(el));
});
</script>

@endsection

@endsection