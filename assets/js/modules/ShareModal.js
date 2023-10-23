import $ from 'jquery';

class ShareModal {
  constructor() {
    this.openShareModalButton = $(".open-share-modal");
    this.shareModal = $(".share-modal");
    this.closeShareModalButton = $(".share-modal__close");
    this.events();
  }

  events() {
    // clicking the open modal button
    this.openShareModalButton.click(this.openShareModal.bind(this));

    // clicking the x close modal button
    this.closeShareModalButton.click(this.closeShareModal.bind(this));

    // pushes any key
    $(document).keyup(this.keyPressHandler.bind(this));
  }

  keyPressHandler(e){
    if (e.keyCode == 27) {
      this.closeShareModal();
    }
  }

  openShareModal() {
    this.shareModal.addClass("share-modal--is-visible");
    return false;
  }

  closeShareModal() {
    this.shareModal.removeClass("share-modal--is-visible");
  }
}

export default ShareModal;