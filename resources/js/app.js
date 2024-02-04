import './bootstrap';
import Alpine from 'alpinejs'
import Tooltip from "@ryangjchandler/alpine-tooltip";
import Tagify from "@yaireo/tagify";
import WOW from "wow.js";
Alpine.plugin(Tooltip)
window.Tagify = Tagify
window.Alpine = Alpine
window.WOW = new WOW
window.WOW.init()
Alpine.start()



