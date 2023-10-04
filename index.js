(function() {
  $('.gallery-link').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    mainClass: ' mfp-img-mobile',
    image: {
      verticalFit: true,
      titleSrc: function(item) {
        return item.el.find('figcaption').text() || item.el.attr('title');
      }
    },
    zoom: {
      enabled: true
    },
    gallery: {
      enabled: true,
      navigateByImgClick: false,
      tCounter: ''
    }
  });

}).call(this);
