const glideOptions = {
  type: "carousel",
  startAt: 0,
  perView: 3,
  breakpoints: {
    900: {
      perView: 2,
    },
    600: {
      perView: 1,
    },
  },
};
let sliders = [];

export const init = () => {
  [].forEach.call(
    document.querySelectorAll(".glide"),

    (el) => {
      const slider = new Glide(el, glideOptions).mount();

      sliders.push(slider);
    }
  );
};

export default {
  init,
};
