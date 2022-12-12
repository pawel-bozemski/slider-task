import components from '../blocks/components.js';

document.addEventListener('DOMContentLoaded', () => {

    for (let key of Object.keys(components)) {
        const module = components[key];
        module.init();
    }

    const sliderBlocks = document.querySelectorAll('.glide.slider');  
    sliderBlocks[sliderBlocks.length-1].classList.add('last');
});
