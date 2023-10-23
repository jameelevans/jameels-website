import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/noframework.waypoints';

class SiteOptions {
  constructor(){
    this.lazyImages = $(".lazyload");
    this.shareModalBtn = $(".share-modal__button");
    this.backTopBtn = $(".back-top__button")
    this.triggerElement = $(".main");
    this.createOptionsWaypoint();
    this.refreshWaypoints();
  }

  refreshWaypoints() {
    this.lazyImages.on('load', function() {
      Waypoint.refreshAll();
    });
  }


  createOptionsWaypoint() {
    var that = this;
    new Waypoint({
      element: this.triggerElement[0],
      handler: function(direction) {
        if (direction == "down"){
          that.shareModalBtn.addClass("share-modal__button--is-visible");
          that.backTopBtn.addClass("back-top__button--is-visible");
        }else{
          that.shareModalBtn.removeClass("share-modal__button--is-visible");
          that.backTopBtn.removeClass("back-top__button--is-visible");
        }
      }
    })
  }
}

export default SiteOptions;
