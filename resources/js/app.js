require('./bootstrap');
const feather = require('feather-icons');

import Alpine from 'alpinejs';

window.Alpine = Alpine;
feather.replace();

Alpine.start();
