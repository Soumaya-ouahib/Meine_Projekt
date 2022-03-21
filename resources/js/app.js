require('./bootstrap');

import Alpine from 'alpinejs';
import $ from 'jquery';
import 'jquery-ui/ui/widgets/datepicker.js';

window.$ = window.jQuery = $;

window.Alpine = Alpine;

Alpine.start();


$('#datepicker').datepicker();

