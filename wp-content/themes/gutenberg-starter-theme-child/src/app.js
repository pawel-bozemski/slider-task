import components from '../blocks/components.js';

document.addEventListener('DOMContentLoaded', () => {

    for (let key of Object.keys(components)) {

        const module = components[key];

        module.init();

    }

});
