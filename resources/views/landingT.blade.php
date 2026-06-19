@extends('layout.app')
@section('title', 'Landing Tanatológico | J. García López')

@section('content')
@include('widgets.header-white')
<div id="header-spacer"></div>

<main class="tanatologia-offset">

<section class="relative bg-stone-200 overflow-visible md:overflow-hidden">
  <div class="container mx-auto px-6 pt-12 pb-16 md:py-24">
    <div class="flex flex-col md:flex-row items-center gap-12">

      <div class="p-3 md:w-1/2">
        <span class="block text-[#3B4C92] text-2xl pt-serif-regular mb-4">
          Tanatología
        </span>

        <h1 class="text-stone-800 text-4xl md:text-6xl pt-serif-regular mt-2">
          El amor de papá permanece en la memoria
        </h1>

        <p class="mt-6 text-stone-700 text-lg leading-relaxed">
          Hay recuerdos, enseñanzas y momentos compartidos con papá que permanecen
          contigo a lo largo del tiempo. Aunque su ausencia pueda sentirse de distintas
          maneras, el vínculo que construiste con él continúa formando parte de tu historia.
        </p>

        <p class="mt-4 text-stone-700 text-lg leading-relaxed">
          Con el deseo de acompañarte en esta fecha, compartimos contigo un ebook
          dedicado a la pérdida de papá, una lectura que invita a reflexionar sobre
          el amor, los recuerdos y las diferentes formas en que su presencia puede
          seguir acompañándote a través del tiempo.
        </p>

        <p class="mt-4 text-stone-700 text-lg leading-relaxed">
          Esperamos que encuentres en estas páginas un espacio para recordar con
          cariño, conectar con tus emociones y honrar aquello que sigue teniendo
          un lugar especial en tu vida.
        </p>

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

<section class="bg-white py-16">
  <div class="container mx-auto px-6 max-w-4xl">

    <div class="text-center mb-10">
      <h2 class="text-5xl pt-serif-regular text-stone-800">
        Regístrate
      </h2>
      <p class="mt-4 text-stone-600 text-lg">
        Haz clic en el siguiente botón para descargar el ebook.
      </p>
    </div>

    <div class="flex justify-center">
      <form  method="POST"  action="{{ route('tanatologia.store') }}"  class="md:w-3/5 w-full space-y-6">
        @csrf
        <div>
          <label class="block text-sm text-stone-800 pt-serif-regular mb-2">
            Nombre completo
          </label>
          <div class="border-b border-stone-400 w-full">
            <input
              type="text"
              name="name"
              required
              class="w-full bg-transparent py-2 text-sm text-stone-600 Gotham placeholder-stone-500 focus:outline-none"
              placeholder="Juan Pérez López"
            >
          </div>
        </div>
        <div>
          <label class="block text-sm text-stone-800 pt-serif-regular mb-2">
            Correo electrónico
          </label>
          <div class="border-b border-stone-400 w-full">
            <input
              type="email"
              name="email"
              required
              class="w-full bg-transparent py-2 text-sm text-stone-600 Gotham placeholder-stone-500 focus:outline-none"
              placeholder="tu@email.com"
            >
          </div>
        </div>
        <div>
          <label class="block text-sm text-stone-800 pt-serif-regular mb-2">
            Teléfono
          </label>
          <div class="border-b border-stone-400 w-full">
            <input
              type="text"
              name="phone"
              required
              class="w-full bg-transparent py-2 text-sm text-stone-600 Gotham placeholder-stone-500 focus:outline-none"
              placeholder="000 000 0000"
            >
          </div>
        </div>
        <button  type="submit"  class="mt-6 notched-button bg-[#0F1E6A] text-white px-8 py-4 w-full inline-flex items-center justify-center gap-4 font-semibold text-lg">
          Descargar ebook
          <img  src="{{ asset('assets/img/arrow_custom.svg') }}"  class="hover:-translate-x-1 transition-transform duration-300"  alt=""  >
        </button>
        <p class="text-stone-600 text-base leading-relaxed text-center">
          Deseamos que estas páginas te brinden un momento de reflexión y cercanía,
          y que encuentres en ellas palabras que acompañen aquello que hoy ocupa
          un lugar importante en tu corazón.
        </p>
      </form>
    </div>
  </div>
</section>
</main>
@endsection
