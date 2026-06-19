@extends('layout.app')
@include('widgets.header-white')
@section('title', 'Planes | J. García López')
@section('content')
<!-- @include('widgets.button-yellow') -->
<section class="relative overflow-hidden group bg-stone-50 pt-40">
  <div class="container mx-auto px-6 py-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">
        <!-- Columna de imagen (50%) -->
        <div class="w-full md:w-1/2 relative overflow-hidden p-2.5 border border-stone-200 hover:shadow-md transition-shadow duration-300">
            <img 
                src="{{ asset('assets/img/pareja2.jpg') }}" 
                alt="Familia feliz" 
                class="w-full h-auto object-cover transition-transform duration-500 ease-in-out group-hover:scale-105"
            >
            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-all duration-500"></div>
        </div>
        
        <!-- Columna de texto (50%) -->
        <div class="w-full md:w-1/2">
            <h2 class="text-4xl md:text-5xl text-stone-800 pt-serif-regular">Planes Funerarios a Futuro</h2>
            
            <div class="text-lg text-gray-600 space-y-4 pt-3">
                <p>Sabemos que nunca es un buen momento para conversar sobre el deceso de un ser amado, 
                pero eso no evitará que las cosas sucedan. Por eso, pensamos que la mejor alternativa es la prevención; así, en caso 
                de que alguien parta, tendrás todo resuelto.</p>
                
                <p>Contamos con diversos Planes Funerarios a Futuro que se pueden adaptar a tus necesidades. Comienza tu cotización ahora y 
                uno de nuestros asesores te ofrecerá la alternativa adecuada para ti.</p>
            </div>
            
            <a href="{{ route('contact') }}">
                <button class="mt-8 notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg hover:bg-[#132368] transition-colors duration-300">
                    Contratar plan
                    <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
                </button>
            </a>
        </div>
    </div>
    <div class="linea2 pt-10 pb-10"></div>
    </div>
</section>


@endsection