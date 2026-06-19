<div>

    <p class="text-sm font-semibold text-gray-600 mb-1">Paso 4 de 4</p>
    <div class="flex items-center space-x-1 mb-6">
        @for($i = 1; $i <= 4; $i++)
            <span class="w-8 h-1 {{ $i <= 4 ? 'bg-yellow-400' : 'bg-gray-200' }} rounded"></span>
        @endfor
    </div>

    <h3 class="text-3xl text-stone-800 pt-serif-regular mb-6">
      Bríndanos un número de teléfono para que un asesor se contacte contigo.
    </h3>

    <form id="wizardForm" method="POST" action="{{ route('plans.wizard.process') }}">
        @csrf
<input type="hidden" name="step" value="4">        
        <div class="space-y-4 mb-8">
    <label class="flex items-center justify-between p-4 border border-stone-300 rounded-lg hover:bg-gray-50">
        <div class="flex items-center space-x-3 w-full">
           <input 
                    type="tel" 
                    name="contact_phone" 
                    placeholder="Ej. 5551234567" 
                    class="w-full p-3 border-none bg-transparent focus:ring-0 focus:border-transparent focus:outline-none"
                    required
                    pattern="[0-9]{10}"
                    title="Ingresa un número de 10 dígitos"
                >
                @error('contact_phone')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
        </div>
    </label>
</div>

        <div class="flex flex-col sm:flex-row justify-end space-y-4 sm:space-y-0 sm:space-x-4">
    <button class="w-full sm:w-auto notched-button bg-stone-200 text-stone-800 px-8 py-4 flex items-center justify-center gap-4 font-semibold text-lg hover:bg-stone-300 transition-colors duration-300">
        Anterior
    </button>
    
    <button type="submit" class="w-full sm:w-auto notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center justify-center gap-4 font-semibold text-lg hover:bg-[#132368] transition-colors duration-300">
        Siguiente
        <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
    </button>
</div>
    </form>
</div>