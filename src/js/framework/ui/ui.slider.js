(function ($, core) {
    "use strict";
    var _opts, _vars, _self, _data;
    core.define("ui.Slider", {
        config: {
            speed: 600,
            easing: "easeInOutQuint"
        },
        init: function (obj) {
            _self = this;
            this.opts = this.opts || {};
            _opts = this.opts = _opts = $.extend(null, this.config, obj);
            this.data = {};

            _opts['wrap'] = _opts['wrap'] || $('.ui-slider');
            _opts['view'] = _opts['view'] || $('.ui-slider-view li');
            _opts['prev'] = _opts['prev'] || $('.ui-slider-prev');
            _opts['next'] = _opts['next'] || $('.ui-slider-next');
            _opts['pager'] = _opts['pager'] || $('.ui-slider-pager');
            //--------- setting
            _data = this.data;
            this.data["total"] = _opts["view"].length;
            this.data["select"] = 0;
            //---------
            this._bind();
            this._setup();
            this.setPager();
            this.setDisplay();
        },
        _bind: function () {
            var _w = _opts['wrap'];

            _w.on('click ', _opts['prev'].selector, function (event) {
                event.preventDefault();
                _self.setPager("prev");
            });
            _w.on('click ', _opts['next'].selector, function (event) {
                event.preventDefault();
                _self.setPager("next");
            });
            _w.on('click ', _opts['pager'].find('li a').selector, function (event) {
                event.preventDefault();
                var _li = $(this).parents('li');
                _data.select = _li.index();
                _self.setDisplay();
            });
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: pager 하단에 생성
         *
         ------------------------------------------------------------------------------------*/
        _setup: function () {
            var _ele = '<ul>';
            for (var i = 0; i < _data.total; i++) {
                _ele += '<li class=""><a href="#">●</a></li>';
            }
            _ele += '</ul>';
            _opts['pager'].append(_ele);
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: 이전/다음 선택시 전체 및 현재 선택된후 계산
         *
         ------------------------------------------------------------------------------------*/
        setPager: function (mode) {
            if (mode == "prev") {// prev calculator
                _data.select = (_data.select <= 0) ? 0 : --_data.select;
            } else if (mode == "next") {// next calculator
                _data.select = (_data.select >= _data.total - 1) ? _data.total - 1 : ++_data.select;
            }
            if (_data.select == 0) {
                _opts['prev'].addClass('disable');
                _opts['next'].removeClass('disable');
            } else if (_data.select == _data.total - 1) {
                _opts['prev'].removeClass('disable');
                _opts['next'].addClass('disable');
            } else {
                _opts['prev'].removeClass('disable');
                _opts['next'].removeClass('disable');
            }
            this.setDisplay();
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: 선택된 index에 모션 및 on 클래스 적용
         *
         ------------------------------------------------------------------------------------*/
        setDisplay: function () {
            var _pager = _opts ['pager'].find('li').removeClass('on').eq(_data.select).addClass('on');
            var _now = _opts['view'].removeClass('on').eq(_data.select).hide().addClass('on');
            _now.animate({
                'opacity': 'show'
            }, 400, 'easeOutExpo');
            (_opts.callback != undefined) ? _opts.callback.call(this, _data) : false;
        }
    });
})(jQuery, window[CORE]);