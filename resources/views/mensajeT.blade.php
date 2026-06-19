@extends('layout.app')
@section('title', 'Gracias | J. García López')

@section('content')
@include('widgets.header-white')
<div id="header-spacer"></div>

<main class="tanatologia-offset">

<section class="relative bg-stone-200 overflow-visible md:overflow-hidden">
  <div class="container mx-auto px-6 pt-12 pb-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">

      <div class="p-3 md:w-1/2">
        <h1 class="text-stone-800 text-4xl md:text-5xl pt-serif-regular mt-2">
          Gracias por registrarte.
        </h1>

        <p class="mt-6 text-stone-700 text-lg leading-relaxed">
          Tu ebook se está descargando automáticamente.<br>
          Deseamos que estas páginas te brinden un momento de reflexión y cercanía,
          y que encuentres en ellas palabras que acompañen aquello que hoy ocupa
          un lugar importante en tu corazón.
        </p>


        <p class="mt-6 text-sm text-stone-600">
          ¿No se descargó?
          <a
            href="{{ route('tanatologia.download') }}"
            class="text-[#0F1E6A] underline font-semibold"
          >
            Volver a descargar
          </a>
        </p>

        <div class="mt-10">
          <a
            href="https://jgarcialopez.com.mx/planes"
            class="inline-block text-sm text-white bg-[#0F1E6A] border border-[#0F1E6A] rounded-lg px-6 py-3 hover:bg-[#132368] transition">
            Conoce más
          </a>
        </div>

        <p class="mt-6 text-[#0F1E6A] font-semibold italic">
          La vida merece un Homenaje®️
        </p>
      </div>

      <div class="md:w-1/2">
        <img
          src="{{ asset('assets/img/padre-manos.jpg') }}"
          class="w-full h-auto mask-b-from-65% mask-b-to-100%"
          alt="Acompañamiento tanatológico"
        >
      </div>

    </div>
  </div>
</section>

<script>
  window.onload = function () {
    window.location.href = "{{ route('tanatologia.download') }}";
  };
</script>

<script>
  const header = document.getElementById('main-nav');
  const spacer = document.getElementById('header-spacer');

  if (header && spacer) {
    const setSpacerHeight = () => {
      spacer.style.height = header.offsetHeight + 'px';
    };

    setSpacerHeight();
    window.addEventListener('resize', setSpacerHeight);
  }
</script>

</main>
@endsection
