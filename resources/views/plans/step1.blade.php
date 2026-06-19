<div>
    <!-- Barra de progreso -->
    <p class="text-sm font-semibold text-gray-600 mb-1">Paso 1 de 4</p>
    <div class="flex items-center space-x-1 mb-6">
        @for($i = 1; $i <= 4; $i++)
            <span class="w-8 h-1 {{ $i == 1 ? 'bg-yellow-400' : 'bg-gray-200' }} rounded"></span>
        @endfor
    </div>

    <h3 class="text-3xl text-stone-800 pt-serif-regular mb-6">
        ¿Para quién quieres contratarlo?
    </h3>

    <form id="wizardForm" method="POST" action="{{ route('plans.wizard.process') }}">
        @csrf
        <input type="hidden" name="step" value="1">
        
        <div class="space-y-4 mb-8"> <!-- Paso actual fijo a 1 -->
        
        <div class="space-y-4 mb-8">
            <label class="flex items-center justify-between p-4 border border-stone-300 rounded-lg cursor-pointer hover:bg-gray-50">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('assets/img/plans/user-round-circle.svg') }}" alt="">
                    <span class="text-gray-700">Para mi</span>
                </div>
                <input type="radio" name="for_who" value="me" class="h-5 w-5 text-blue-600" required>
            </label>
            
            <label class="flex items-center justify-between p-4 border border-stone-300 rounded-lg cursor-pointer hover:bg-gray-50">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('assets/img/plans/user-round-square.svg') }}" alt="">
                    <span class="text-gray-700">Para un familiar o amigo</span>
                </div>
                <input type="radio" name="for_who" value="other" class="h-5 w-5 text-blue-600" required>
            </label>
        </div>

        <div class="flex justify-end">
            <button type="submit" class="notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg hover:bg-[#132368] transition-colors duration-300">
                Siguiente
                <img src="{{ asset('assets/img/arrow_custom.svg') }}" class="hover:-translate-x-1 transition-transform duration-300" alt="">
            </button>
        </div>
    </form>
</div>
