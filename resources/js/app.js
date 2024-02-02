import './bootstrap';
import Alpine from 'alpinejs'
import Tooltip from "@ryangjchandler/alpine-tooltip";
import Tagify from "@yaireo/tagify";
Alpine.plugin(Tooltip)
window.Tagify = Tagify
window.Alpine = Alpine
Alpine.start()



