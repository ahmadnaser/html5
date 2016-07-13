/*************************************************************************************************
 * @CreateDate : 2015.11.18
 * @FileName   : /src/js/common/common.bind.js
 @ Class

 * @20150703 : 수정내역및 function 이용
 * @20151118 : tabChange event 시작
 *
 *************************************************************************************************/
(function ($, core) {
    core.define("common.Bind", {
        test:function(){
          console.log('excuse')
        },
        init: function (obj) {
            this.config = {
                body: $('body'),
                cnt: $('#contents'),
                //	ui tab
                ui_tab: $('.ui-tab'),
                ui_tabAnc: $('.ui-tab dl>dt>a'),
                //	ui accordion
                ui_accordion: $('.ui-accordion'),
                ui_accordionAnc: $('.ui-accordion>dl>dt>a'),
                // print  실행
                ui_print: $('.ui-print'),
                ui_small_view: $('.ui-small-view-cnt'),
                ui_small_viewBtn: $('.ui-small-view-item>li'),
                // 1일간 열지않음 쿠키
                ui_day: $('.ui-day-close'),
                ui_dayAnc: $('.ui-day-close input , .ui-day-close a'),

                ui_placeHolder: $('.ui-placeholder')
            };
            this.opts = this.opts || {}, this.opts = $.extend(null, this.config, obj);
            this._bind();
            this.resize();
        },
        resize: function () {
            var _self = this, _time, _opts = this.opts, _timer, _id = 0;
            _timer = setInterval(function () {
                ++_id;
                if (_id >= _opts.ui_interval_max) {
                    clearInterval(_timer);
                    _timer = null;
                } else {
                    var _w = parseInt($("html").width());
                    var _h = parseInt($("html").height());
                    var _cntH = parseInt($('div.abs').height()) - 55;
                    $('.ui-setSize-cnt').css('height', _cntH + 'px');
                    $('.ui-setSize-wh').css('width', _w + 'px').css('height', _h + 'px');
                    $('.ui-setSize-w').css('width', _w + 'px');
                    $('.ui-setSize-h').css('height', _h + 'px');
                }
            }, 10);
        },
        _bind: function () {
            var _self = this, _opts = this.opts, _b = _opts.body, _cnt = _opts.cnt;
            /*--------------------------------------------------------------------------------------------------------------------------
             * 	 ui-tab
             -------------------------------------------------------------------------------------------------------------------------*/
            _cnt.on('click', _opts.ui_tabAnc.selector, function (event) {
                event.preventDefault();
                var _dl = $(this).parents('dl'), _idx = _dl.index();
                var _wrap = $(this).closest(_opts.ui_tab.selector), _evt;
                _wrap.triggerHandler(_evt = $.Event('tabChange'), {
                    wrap: _wrap,
                    select: _idx
                });
                if (_evt.isDefaultPrevented()) {
                    return;
                }
                _dl.addClass('on').siblings().removeClass('on');
                _wrap.attr('data-index', _idx);
            });
            /*--------------------------------------------------------------------------------------------------------------------------
             * 	 ui-accordion
             -------------------------------------------------------------------------------------------------------------------------*/
            _cnt.on('click', _opts.ui_accordionAnc.selector, function (event) {
                function transform() {
                    _wrap.find('>dl').each(function (i) {
                        var _val = (i == _idx) ? _max : _min;
                        $(this).stop().animate({
                            'width': _val
                        }, 400, 'easeOutExpo');
                    });
                }

                event.preventDefault();
                var _wrap = $(this).closest(_opts.ui_accordion.selector);
                var _dl = $(this).parents('dl').addClass('on'), _idx = _dl.index();
                var _max = _wrap.attr('data-max'), _min = _wrap.attr('data-min');
                _dl.siblings().removeClass('on');
                _wrap.attr('data-index', _idx);
                // execute function
                transform();
            });
            /*--------------------------------------------------------------------------------------------------------------------------
             * 	print
             -------------------------------------------------------------------------------------------------------------------------*/
            _cnt.on('click', _opts.ui_print.selector, function (event) {
                event.preventDefault();
                window.print();
            });
            /*--------------------------------------------------------------------------------------------------------------------------
             * 	html5 placeholder
             -------------------------------------------------------------------------------------------------------------------------*/
            if (event.type == 'focusin') {
                if ($(this).val().trim() == $(this).attr('data-placeholder').trim()) {
                    $(this).val('');
                }
            } else if (event.type == 'focusout') {
                if ($(this).val().trim() == '') {
                    $(this).val($(this).attr('data-placeholder'));
                }
            }
            _b.on('focusin focusout', _opts.ui_placeHolder.selector, function (event) {
                if ($(this).attr('data-placeholder') == undefined) {
                    $(this).attr('data-placeholder', $(this).val());
                }
            });
            _b.on('click', _opts.ui_dayAnc.selector, function (event) {
                common.util.setCookie("car", "trax", 1);
                //	self.close();
            });
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
        window.ui = new common.Bind();
    });
})($);
