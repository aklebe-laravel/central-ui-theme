import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

import './redirect-overlay.js';

import * as centralUi from '../../../../../Modules/CentralUi/resources/assets/tailwind/js/centralUi';
window.centralUi = centralUi;

import popoverHandler from '../../../../../Modules/WebsiteBase/resources/assets/tailwind/js/popover-handler';
// Registriere die Komponente global
Alpine.data('popoverHandler', popoverHandler);
