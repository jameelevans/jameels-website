import $ from 'jquery';

class Slider {
  constructor() {
    this.els = $(".slider");
    this.initSlider();
  }

  initSlider() {
    this.els.slick({
      dots: true,
      autoplay: true,
      slidesToShow: 1,
      infinite: true,
      arrows: false
    });
  }
}

export default Slider;