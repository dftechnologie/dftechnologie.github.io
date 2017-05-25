//default settings:
AutoHeight.Defaults = {
    autoHeight: false,
    autoHeightClass: 'owl-height'
};

//.Setup
$('.owl-carousel').owlCarousel({
    items:1,
    margin:10,
    autoHeight:true
});