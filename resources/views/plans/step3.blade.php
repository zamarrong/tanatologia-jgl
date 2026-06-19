<div>

     <p class="text-sm font-semibold text-gray-600 mb-1">Paso 3 de 4</p>
    <div class="flex items-center space-x-1 mb-6">
        @for($i = 1; $i <= 4; $i++)
            <span class="w-8 h-1 {{ $i <= 3 ? 'bg-yellow-400' : 'bg-gray-200' }} rounded"></span>
        @endfor
    </div>

    <h3 class="text-3xl text-stone-800 pt-serif-regular mb-6">
      ¿Desde dónde nos contactas?
    </h3>

    <form id="wizardForm" method="POST" action="{{ route('plans.wizard.process') }}">
        @csrf
       <input type="hidden" name="step" value="3">
        <div class="space-y-4 mb-8">
            <select name="state" class="state-select w-full p-3 border border-stone-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                <option value="">Selecciona un estado</option> <!-- Opción vacía para placeholder -->
                <option value="AGU">Aguascalientes</option>
                <option value="BCN">Baja California</option>
                <option value="BCS">Baja California Sur</option>
                <option value="CAM">Campeche</option>
                <option value="CHP">Chiapas</option>
                <option value="CHH">Chihuahua</option>
                <option value="CMX">Ciudad de México</option>
                <option value="COA">Coahuila</option>
                <option value="COL">Colima</option>
                <option value="DUR">Durango</option>
                <option value="GUA">Guanajuato</option>
                <option value="GRO">Guerrero</option>
                <option value="HID">Hidalgo</option>
                <option value="JAL">Jalisco</option>
                <option value="MEX">Estado de México</option>
                <option value="MIC">Michoacán</option>
                <option value="MOR">Morelos</option>
                <option value="NAY">Nayarit</option>
                <option value="NLE">Nuevo León</option>
                <option value="OAX">Oaxaca</option>
                <option value="PUE">Puebla</option>
                <option value="QUE">Querétaro</option>
                <option value="ROO">Quintana Roo</option>
                <option value="SLP">San Luis Potosí</option>
                <option value="SIN">Sinaloa</option>
                <option value="SON">Sonora</option>
                <option value="TAB">Tabasco</option>
                <option value="TAM">Tamaulipas</option>
                <option value="TLA">Tlaxcala</option>
                <option value="VER">Veracruz</option>
                <option value="YUC">Yucatán</option>
                <option value="ZAC">Zacatecas</option>
            </select>
             @error('state')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
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