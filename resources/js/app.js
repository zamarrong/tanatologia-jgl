import './bootstrap';
import $ from 'jquery';
import 'select2';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import { initScrollAnimations } from './animations';

// Inicializar animaciones
document.addEventListener('DOMContentLoaded', () => {
    initScrollAnimations();
});

// Inicializar Alpine.js
Alpine.plugin(intersect);
Alpine.start();

// Inicializar Select2
$(document).ready(function() {
    $('.state-select').select2({
        placeholder: "Selecciona un estado",
        allowClear: true
    });
});
