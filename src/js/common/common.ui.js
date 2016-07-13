/*************************************************************************************************
 * @fileName : /src/js/common/common.ui.js
 * @Class : common.Ui
 * @Class : ui.Slider
 * @Class : ui.Tab
 * @Class : ui.ItemSlider
 *
 *
 *
 *************************************************************************************************/
(function ($, core) {
    "use strict";
    var _self, _opts, _w, _h, _top, _ylist;
    core.define("common.Ui", {
        init: function (obj) {
            this.config = {
                isRsz: true,
                isScr: true,
                body: $('body'),
                cnt: $('#contents')
            };
            this.opts = this.opts || {}, this.opts = $.extend(null, this.config, obj);
            this._bind();
        },
        _bind: function () {
            var _self = this, _opts = this.opts, _b = _opts.body;
            $(window).bind('resize scroll', function (event) {// delay time
                if (event.type === 'resize') {
                    _w = parseInt($(this).width());
                    _h = parseInt($(this).height());
                    if (_opts.isRsz) {
                        _opts.isRsz = false;
                        setTimeout(function () {
                            _opts.isRsz = true;
                            _self.resizeHdr();
                        }, 300);
                    }
                } else if (event.type === 'scroll') {
                    _top = parseInt($(window).scrollTop());
                    if (_opts.isScr) {
                        _opts.isScr = false;
                        setTimeout(function () {
                            _opts.isScr = true;
                            _self.scrollHdr();
                        }, 300);
                    }
                }
            }).trigger('resize');
        },
        /*-----------------------------------------------------------------------------------------------------------------------------
         resize event Handler
         -----------------------------------------------------------------------------------------------------------------------------*/
        resizeHdr: function () {
            if ($('.ui-set-width').length > 0) {
                $('.ui-set-width').each(function () {
                    $(this).css('width', _h);
                });
            }
            if ($('.ui-set-height').length > 0) {
                $('.ui-set-height').each(function () {
                    $(this).css('height', _h);
                });
            }
            //console.log(_w);
        },
        /*-----------------------------------------------------------------------------------------------------------------------------
         scroll event Handler
         -----------------------------------------------------------------------------------------------------------------------------*/
        scrollHdr: function () {
            //console.log(_top);
        },
        /*-----------------------------------------------------------------------------------------------------------------------------
         id 값을 받아서 id의 팝업 레이어를 show() 실행.
         외부에서 실행.
         window.common_ui.showLayerPopup("popup_login");
         -----------------------------------------------------------------------------------------------------------------------------*/
        showLayerPopup: function (id, y) {
            var _id = String(id).replace("#", '').trim();
            var _self = this, _opts = this.opts, _b = _opts.body;
            _opts.popupCnt.show();
            _opts.popupDim.css('height', $(document).height());
            _opts.popupLayer.hide();
            var _y = y || $(window).scrollTop();
            $('#' + _id + '').css('top', _y).fadeIn('fast');
        },
        /*-----------------------------------------------------------------------------------------------------------------------------
         팝업 레이어를 hide() 실행.
         외부에서 실행.
         window.common_ui.hideLayerPopup();
         -----------------------------------------------------------------------------------------------------------------------------*/
        hideLayerPopup: function () {
            this.opts.popupCnt.fadeOut('fast');
        },
        /*-----------------------------------------------------------------------------------------------------------------------------
         function
         -----------------------------------------------------------------------------------------------------------------------------*/
        func: function (target) {

        }
    });
})(jQuery, window[CORE]);
(function ($) {
    $(document).ready(function () {
        window.common_ui = new common.Ui();
    });
})($);
/*************************************************************************************************
 * @Class : ui.Slider
 * @Demo : /pages/00.guide/layout.html
 *
 *************************************************************************************************/
(function ($, core) {
    "use strict";
    var _opts, _self;
    core.define("ui.Slider", {
        config: {
            speed: 600,
            easing: "easeInOutQuint"
        },
        init: function (obj) {
            _self = this;
            this.opts = this.opts || {};
            _opts = this.opts = _opts = $.extend(null, this.config, obj);
            var _data = {};
            _opts['wrap'] = _opts['wrap'] || $('.ui-slider');
            _opts['view'] = _opts['view'] || $('.ui-slider-view li');
            _opts['prev'] = _opts['prev'] || $('.ui-slider-prev');
            _opts['next'] = _opts['next'] || $('.ui-slider-next');
            _opts['pager'] = _opts['pager'] || $('.ui-slider-pager');
            //--------- setting
            _data["class"] = "ui.Slider";
            _data["total"] = _opts["view"].length;
            _data["select"] = 0;
            //---------
            this._bind(_data);
            this._setup(_data);
            this.setPager("prev", _data);
            this.setDisplay(_data);
        },
        _bind: function (data) {
            var _data = data;
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
                _self.setDisplay(_data);
            });
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: pager 하단에 생성
         *
         ------------------------------------------------------------------------------------*/
        _setup: function (data) {
            var _data = data;
            var _ele = '<ul>';
            for (var i = 0; i < _data.total; i++) {
                _ele += '<li class=""><a href="#"></a></li>';
            }
            _ele += '</ul>';
            _opts['pager'].append(_ele);
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: 이전/다음 선택시 전체 및 현재 선택된후 계산
         *
         ------------------------------------------------------------------------------------*/
        setPager: function (mode, data) {
            var _data = data;
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
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: 선택된 index에 모션 및 on 클래스 적용
         *
         ------------------------------------------------------------------------------------*/
        setDisplay: function (data) {
            var _data = data;
            var _pager = _opts ['pager'].find('li').removeClass('on').eq(_data.select).addClass('on');
            var _now = _opts['view'].removeClass('on').eq(_data.select).hide().addClass('on');
            _now.animate({
                'opacity': 'show'
            }, 800, 'easeOutExpo');
            (_opts.callback != undefined) ? _opts.callback.call(this, _data) : false;
        }
    });
})(jQuery, window[CORE]);
/*************************************************************************************************
 * @Class : ui.Tab
 * @Demo : /pages/00.guide/layout.html
 *************************************************************************************************/
(function ($, core) {
    "use strict";
    var _opts, _self;
    core.define("ui.Tab", {
        config: {
            //speed: 600,
            //easing: "easeInOutQuint"
        },
        init: function (obj) {
            _self = this;
            this.opts = this.opts || {};
            _opts = this.opts = _opts = $.extend(null, this.config, obj);
            var _data = {};
            _opts['wrap'] = _opts['wrap'] || $('.ui-tab');
            _opts['view'] = _opts['view'] || $('.ui-tab dd');
            _opts['anchor'] = _opts['anchor'] || $('.ui-tab dt a');
            //--------- setting
            _data["class"] = "ui.Tab";
            _data["key"] = _opts["key"];
            _data["total"] = _opts["view"].length;
            _data["select"] = 0;
            //---------
            this._bind(_data);
        },
        _bind: function (data) {
            var _data = data;
            var _w = _opts['wrap'];
            _w.on('click', _opts['anchor'].selector, function (event) {
                event.preventDefault();
                var _dl = $(this).parents('dl');
                _data.select = _dl.index();
                _dl.addClass('on').siblings('dl').removeClass('on');
                (_opts.callback != undefined) ? _opts.callback.call(this, _data) : false;
            });
        },
        end: function () {
        }
    });
})(jQuery, window[CORE]);
/*************************************************************************************************
 * @Class : ui.ItemSlider
 * @Demo : /pages/00.guide/layout.html
 *************************************************************************************************/
(function ($, core) {
    "use strict";
    var _opts, _self;
    core.define("ui.ItemSlider", {
        config: {
            //speed: 600,
            //easing: "easeInOutQuint"
        },
        init: function (obj) {
            _self = this;
            this.opts = this.opts || {};
            _opts = this.opts = _opts = $.extend(null, this.config, obj);
            var _data = {};
            _opts['wrap'] = _opts['wrap'] || $('.ui-item-slider');
            _opts['view'] = _opts['view'] || $('.ui-item-slider .view li');
            _opts['item'] = _opts['item'] || $('.ui-item-slider .item li a');
            _opts['prev'] = _opts['prev'] || $('.ui-item-slider .prev a');
            _opts['next'] = _opts['next'] || $('.ui-item-slider .next a');
            //--------- setting
            _data["class"] = "ui.ItemSlider";
            _data["total"] = _opts["view"].length;
            _data["divide"] = _opts["divide"];
            _data["group_total"] = Math.ceil(_data["total"] / _data["divide"]);
            _data["group"] = 0;
            _data["select"] = 0;
            //---------
            this._bind(_data);
            this.setDisplay(_data);
        },
        _bind: function (data) {
            var _data = data;
            var _w = _opts['wrap'];
            _w.on('click', _opts['item'].selector, function (event) {
                event.preventDefault();
                var _li = $(this).parents('li');
                _data.select = _li.index();
                _self.setDisplay(_data);
            });
            _w.on('click', _opts['prev'].selector, function (event) {
                event.preventDefault();
                //_data["group"] = (_data["group"] <= 0) ? 0 : --_data["group"];
                _data["group"] = _data["group"] - 1;
                _self.setPager(_data);
            });
            _w.on('click', _opts['next'].selector, function (event) {
                event.preventDefault();
                //_data["group"] = (_data["group"] >= _data["group_total"] - 1) ? _data["group_total"] - 1 : ++_data["group"];
                _data["group"] = _data["group"] + 1;
                _self.setPager(_data);
            });
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: 이전/다음 페이저설정
         *
         ------------------------------------------------------------------------------------*/
        setPager: function (data) {
            var _data = data;
            if (_data["group"] <= 0) {// 첫페이지
                _data["group"] = 0;
            } else if (_data["group"] >= _data["group_total"] - 1) {// 마지막페이지
                _data["group"] = _data["group_total"] - 1;
            }
            _opts['item'].each(function (idx) {
                var _li = $(this).closest('li');
                if (idx >= _data["group"] * _data["divide"] && idx < Number(_data["group"] + 1) * _data["divide"]) {
                    _li.show();
                } else {
                    _li.hide();
                }
            });
            _data.select = _data["group"] * _data["divide"];
            _self.setDisplay(_data);
        },
        /*------------------------------------------------------------------------------------
         * 	@function	: 선택했을경우 화면갱신/ callBack처리
         *
         ------------------------------------------------------------------------------------*/
        setDisplay: function (data) {
            var _data = data;
            var _select = Number(_data.select);
            _opts['item'].each(function (idx) {
                var _li = $(this).closest('li');
                (idx == _select) ? _li.addClass('on') : _li.removeClass('on');
            });
            _opts['view'].removeClass('on').eq(_data.select).addClass('on');
            (_opts.callback != undefined) ? _opts.callback.call(this, _data) : false;
        },
        end: function () {
        }
    });
})(jQuery, window[CORE]);