<div class="relative max-w-6xl mx-auto p-4">
    <div class="w-full" style="overflow: visible;">
        <object id="mexico-map" type="image/svg+xml" data="{{ asset('assets/img/mx.svg') }}" class="w-full h-auto"></object>
    </div>
    <div id="info-card" class="absolute bg-white bg-opacity-90 backdrop-blur-md shadow-md rounded-xl p-4 transition-all duration-200 opacity-0 pointer-events-none">
        <p id="info-text" class="text-gray-800 font-medium">Pasa el cursor sobre un estado para ver información.</p>
    </div>
</div>

<script>
   const statesData = {
            MXAGU: { name: "Aguascalientes", agencies: 11 },
            MXBCN: { name: "Baja California", agencies: 13 },
            MXBCS: { name: "Baja California Sur", agencies: 11 },
            MXCAM: { name: "Campeche", agencies: 18 },
            MXCHP: { name: "Chiapas", agencies: 67 },
            MXCHH: { name: "Chihuahua", agencies: 48 },
            MXCOA: { name: "Coahuila", agencies: 28 },
            MXCOL: { name: "Colima", agencies: 25 },
            MXCDMX: { name: "Ciudad de México", agencies: 8 },
            MXDUR: { name: "Durango", agencies: 13 },
            MXGUA: { name: "Guanajuato", agencies: 34 },
            MXGRO: { name: "Guerrero", agencies: 0 },
            MXHGO: { name: "Hidalgo", agencies: 38 },
            MXJAL: { name: "Jalisco", agencies: 30 },
            MXMEX: { name: "México", agencies: 99 },
            MXMIC: { name: "Michoacán", agencies: 19 },
            MXMOR: { name: "Morelos", agencies: 7 },
            MXNAY: { name: "Nayarit", agencies: 16 },
            MXNLE: { name: "Nuevo León", agencies: 16 },
            MXOAX: { name: "Oaxaca", agencies: 80 },
            MXPUE: { name: "Puebla", agencies: 45 },
            MXQUE: { name: "Querétaro", agencies: 18 },
            MXROO: { name: "Quintana Roo", agencies: 13 },
            MXSLP: { name: "San Luis Potosí", agencies: 15 },
            MXSIN: { name: "Sinaloa", agencies: 8 },
            MXSON: { name: "Sonora", agencies:  18},
            MXTAB: { name: "Tabasco", agencies: 15 },
            MXTAM: { name: "Tamaulipas", agencies: 11 },
            MXTLA: { name: "Tlaxcala", agencies: 5 },
            MXVER: { name: "Veracruz", agencies: 69 },
            MXYUC: { name: "Yucatán", agencies: 17 },
            MXZAC: { name: "Zacatecas", agencies: 8 },
            };


    const infoCard = document.getElementById('info-card');
    const infoText = document.getElementById('info-text');

    document.getElementById('mexico-map').addEventListener('load', () => {
        const svgDoc = document.getElementById('mexico-map').contentDocument;
        const states = svgDoc.querySelectorAll('path');

        states.forEach(state => {
            const id = state.getAttribute('id');
            state.style.transition = 'fill 0.2s';

            state.addEventListener('mouseenter', (e) => {
                state.style.fill = '#F7BE00'; 

                if (statesData[id]) {
                    infoText.innerText = `${statesData[id].name}: ${statesData[id].agencies} agencias`;
                } else {
                    infoText.innerText = 'Información no disponible';
                }

                const bbox = state.getBBox();
                const svg = svgDoc.querySelector('svg');
                const svgRect = svg.getBoundingClientRect();
                const mapContainer = document.getElementById('mexico-map').getBoundingClientRect();

                const stateCenterY = mapContainer.top + bbox.y + bbox.height / 2;
                const stateCenterX = mapContainer.left + bbox.x + bbox.width / 2;

                if (stateCenterY < mapContainer.top + mapContainer.height / 2) {
                    infoCard.style.top = (stateCenterY - infoCard.offsetHeight - 10) + 'px';
                } else {
                    infoCard.style.top = (stateCenterY + 10) + 'px';
                }

                infoCard.style.left = (stateCenterX - infoCard.offsetWidth / 2) + 'px';
                infoCard.style.opacity = '1';
                infoCard.style.pointerEvents = 'auto';
            });

            state.addEventListener('mouseleave', () => {
                state.style.fill = '';
                infoCard.style.opacity = '0';
                infoCard.style.pointerEvents = 'none';
            });
        });
    });
</script>
