(function ($, core) {
    "use strict";
    var _opts, _self;
    //확장클래스
    var _class;
    core.define("ui.Search", {
        config: {
            easing: "default"
        },
        init: function (obj) {
            this.opts = this.opts || {};
            this.opts = $.extend(null, this.config, obj);
            _self = this;
            _opts = this.opts;
            _class = _opts._class || 'on';
            this._bind();
        },
        _bind: function () {
            _opts.button.bind('click', function (event) {
                event.preventDefault();

            });
            _opts.input.bind('keyup', function (event) {
                event.preventDefault();
                var _value = $(this).val();
                var _keyword = _value ? _value.replace(/^\s+|\s+$/g, "") : _value; // 공백으로 시작된 부분만 제거
                _self._search(_keyword);
            });
        },
        /**
         * inputBox의 keyword로 구분하여 class "on" 처리
         */
        _search: function (keyword) {
            var _count = 0;
            _opts.item.each(function (idx) {
                var _txt = $(this).text();
                _txt = _txt.replace(/<[^>]+>/g, '');
                if (_txt) {
                    if (_txt.indexOf(keyword) != -1) {
                        _txt = _txt.replace(keyword, '<span class=' + _class + '>' + keyword + '</span>');
                        $(this).html(_txt);
                        _count = _count + 1;
                    } else {
                        $(this).find('.' + _class + '').removeClass(_class);
                    }
                }
            });
            if (keyword === "" || keyword === ' ' || keyword === null) {
                _self.reset();
                return false;
            }
            _opts['target'].triggerHandler($.Event('search-item'), {
                count: _count,
                keyword: keyword
            });
        },
        /**
         * keyword 값이 "" 공란일경우 초기화
         */
        reset: function () {
            _opts.item.find('.on').removeClass('on');
        },
        /*
         end function
         */
        end: function () {
        }
    });
})(jQuery, window[CORE]);