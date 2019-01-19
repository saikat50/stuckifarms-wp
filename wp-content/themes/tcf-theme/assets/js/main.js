$(function(){
  console.log('ready');

  if( $('#property-slider').length ){
    $('#property-slider').lightSlider({
      gallery:true,
      item:1,
      loop:true,
      thumbItem:6,
      slideMargin:0,
      enableDrag: false,
      currentPagerPosition:'left',
      onSliderLoad: function(el) {
        // el.lightGallery({
        //     selector: '#imageGallery .lslide'
        // });
      }   
    }); 
  }
});
