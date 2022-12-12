const glideOptions = {
  type: "slider",
  startAt: 0,
  gap: 20,
  perView: 3,
  rewind: false,
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
