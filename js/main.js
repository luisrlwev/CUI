/* Layer Slider */
$(document).ready(function() {

    $("#slider").on('sliderDidLoad', function(event, slider) {

        jQuery(this).on('click', '[data-share]', function(e) {

            var url = jQuery(this).data('share');
            url += url.indexOf('facebook.com/') !== -1 ? '&p[url]=' : '&url=';
            url += encodeURI(location.href);

            window.open(url, 'ls-share', 'width=500,height=500');
        });

    });


    $('#slider').layerSlider({
        sliderVersion: '6.6.4',
        type: 'popup',
        skin: 'noskin',
        globalBGSize: 'cover',
        navPrevNext: false,
        hoverPrevNext: false,
        navStartStop: false,
        navButtons: false,
        showCircleTimer: false,
        popupShowOnTimeout: 1,
        popupShowOnce: false,
        popupDisableOverlay: true,
        popupShowCloseButton: false,
        popupOverlayClickToClose: false,
        popupStartSliderImmediately: true,
        popupPositionHorizontal: 'left',
        popupDistanceLeft: 0,
        popupDistanceRight: 0,
        popupDistanceTop: 0,
        popupDistanceBottom: 0,
        popupDelayIn: 0,
        popupTransitionIn: 'slidefromleft',
        popupTransitionOut: 'slidetoleft',
        skinsPath: 'skins/',
        plugins: ["popup"]
    });

    $('#slider-inicio').layerSlider({
        sliderVersion: '6.0.0',
        type: 'fullwidth',
        responsiveUnder: 1280,
        layersContainer: 1280,
        maxRatio: 1,
        hideUnder: 0,
        hideOver: 100000,
        skin: 'v5',
        thumbnailNavigation: 'disabled',
        skinsPath: 'skins/'
    });

    $('#slider-coronavirus').layerSlider({
        createdWith: '1.6.7',
        sliderVersion: '6.11.1',
        type: 'popup',
        skin: 'noskin',
        sliderFadeInDuration: 0,
        globalBGSize: 'cover',
        showCircleTimer: false,
        popupShowOnTimeout: 1,
        popupDisableOverlay: true,
        popupShowCloseButton: false,
        popupStartSliderImmediately: true,
        popupPositionVertical: 'bottom',
        popupDistanceBottom: 20,
        popupTransitionIn: 'slidefrombottom',
        popupTransitionOut: 'slidetobottom',
        useSrcset: false,
        skinsPath: 'skins/',
        plugins: ["popup"]
    });
});
/* /Layer Slider */