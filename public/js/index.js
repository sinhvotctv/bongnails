import {InitGoogleMap} from './utils/google-map.js';
import {showBox} from './utils/show-box.js';


document.addEventListener('DOMContentLoaded',()=>{
    InitGoogleMap();
    showBox('button-show-booking-box','booking-box','booking-box-close');
},false);