<div>
    <!-- Barra de progreso -->
    <p class="text-sm font-semibold text-gray-600 mb-1">Paso 2 de 4</p>
    <div class="flex items-center space-x-1 mb-6">
        @for($i = 1; $i <= 4; $i++)
            <span class="w-8 h-1 {{ $i <= 2 ? 'bg-yellow-400' : 'bg-gray-200' }} rounded"></span>
        @endfor
    </div>

    <h3 class="text-3xl text-stone-800 pt-serif-regular mb-6">
        ¿Qué tipo de Plan te interesa contratar?
    </h3>

    <form id="wizardForm" method="POST" action="{{ route('plans.wizard.process') }}">
        @csrf
        <input type="hidden" name="step" value="2">
        
        <div class="space-y-4 mb-8">
            <label class="flex items-center justify-between p-4 border border-stone-300 rounded-lg cursor-pointer hover:bg-gray-50">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('assets/img/plans/user-round-circle.svg') }}" alt="">
                    <span class="text-gray-700">Individual</span>
                </div>
                <input type="radio" name="plan" value="individual" class="h-5 w-5 text-blue-600" required>
            </label>
            
            <label class="flex items-center justify-between p-4 border border-stone-300 rounded-lg cursor-pointer hover:bg-gray-50">
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('assets/img/plans/user-round-square.svg') }}" alt="">
                    <span class="text-gray-700">Familiar</span>
                </div>
                <input type="radio" name="plan" value="familiar" class="h-5 w-5 text-blue-600" required>
            </label>
        </div>

        <div class="flex justify-between">
            <a href="" class="notched-button bg-stone-200 text-stone-800 px-8 py-4 flex items-center gap-4 font-semibold text-lg hover:bg-stone-300 transition-colors duration-300">
                ← Anterior
            </a>
            <button type="submit" class="notched-button bg-[#0F1E6A] text-white px-8 py-4 flex items-center gap-4 font-semibold text-lg hover:bg-[#132368] transition-colors duration-300">
                Siguiente →
            </button>
        </div>
    </form>
</div>