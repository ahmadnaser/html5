(function ($) {
    var _main = {
        init: function () {
            var elem = '#isotope';
            var _iso = new Isotope(elem, {
                // options
                itemSelector: 'dl',
                columnWidth: 0,
                layoutMode: 'fitRows',
                masonry: {

                    isFitWidth: true
                }
            });

            setTimeout(function () {
                _iso.layout();
            }, 500);
        }
    };
    $(document).ready(function () {
        _main.init();
    });
})($);
