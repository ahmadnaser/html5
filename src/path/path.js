/*************************************************************************************************
 * @CreateDate : 2015.05.13
 * @ModifyDate : 2015.10.12
 * @FileName   : /src/path/path.js
 @ Class

 * @20150703 : 수정내역및 function 이용
 * @20151012 : image -> awesome font 로 변경.
 *
 *************************************************************************************************/
(function ($) {
    "use strict";
    var _self, _opts;
    var _path = {
        config: {
            _className: '.path',
            _frameTarget: "contents",

            container: $('body'),
            allShowAnc: $('#all_showAnc'),
            allHideAnc: $('#all_hideAnc'),
            //Awesome Font
            icon_open: '<i class="fa fa-chevron-right"></i>',
            icon_close: '<i class="fa fa-chevron-down"></i>',
            icon_sub: '<i class="fa fa-angle-right"></i>'
        },
        init: function () {
            this.opts = this.opts || {};
            _opts = this.opts = $.extend(null, this.config);
            /*
             @frameset 구조로 되어있는것을 anchor target값을 설정.
             */
            $(_opts._className + ' a').each(function (idx) {
                var _url = $(this).attr('href');
                if (_url !== "#") {
                    $(this).attr('target', _opts._frameTarget);
                }
                if ($(this).children().length == 0) {
                    $(this).prepend('<i class="fa fa-angle-right"></i>');
                }
            });
            this._bind();
        },
        _bind: function () {
            var _cnt = $(_opts.container.selector);
            var _clsName = this.opts._className;

            $(_clsName + ' li').each(function () {
                if ($(this).children('ul').length > 0) {// <li> 2depth가 있을경우
                    $(this).addClass('parent');

                    //Awesome Font
                    if ($(this).find('.fa').length == 0) {
                        $(this).find('a').prepend('<i class="fa fa-angle-right"></i>');
                    } else {
                        //console.log($(this).find('a').children().length)
                    }
                } else {// <li> 1depth가 있을경우
                    if ($(this).find('.fa').length == 0) {
                        // $(this).find('a').prepend(_opts.icon_defualt);
                    }
                }
            });
            //Awesome Font
            $(_clsName + ' li > a').each(function () {
                //      var _i = $(this).find('.fa').remove();
                //     $(this).prepend(_opts.icon_close);
            });
            //## Navigation

            $(_clsName + ' li > a').click(function () {
                var _href = $(this).attr('href');
                if (_href === "#") {
                    event.preventDefault ? event.preventDefault() : (event.returnValue = false);
                } else {
                    event.stopPropagation();
                }
                var _sub = $(this).siblings('ul');
                if (_sub.length > 0) {// 서브메뉴그룹들
                    var _isV = _sub.is(':visible');
                    $(this).parent().toggleClass('on');
                    var _icon = $(this).find('span.expand > i');
                    (_isV) ? _sub.hide() : _sub.show();
                    (_isV) ? _icon.removeClass('fa-chevron-down').addClass('fa-chevron-right') : _icon.removeClass('fa-chevron-right').addClass('fa-chevron-down');
                }

                //var _parent = $(this).parent();
                //_parent.toggleClass('on');
                //var _isOn = _parent.hasClass('on');
                //(_isOn) ? _parent.children('ul').show() : _parent.children('ul').hide();
                ////Awesome Font
                //var _i = $(this).find('.fa');
                //if (_i.length > 0) {
                //    _i.remove();
                //    //  (_isOn) ? $(this).prepend(_opts.icon_open) : $(this).prepend(_opts.icon_close);
                //}
            });
            //전체 메뉴열기
            _cnt.on('click', _opts.allShowAnc.selector, function (event) {
                $(_clsName + ' li.parent').each(function () {
                    $(this).addClass('on');
                    $(this).children('ul').show();
                    var _icon = $(this).find('>a .expand i');
                    _icon.removeClass('fa-chevron-right').addClass('fa-chevron-down');
                });
            });
            //전체 메뉴닫기
            _cnt.on('click', _opts.allHideAnc.selector, function (event) {
                $(_clsName + ' li.parent').each(function () {
                    $(this).removeClass('on');
                    $(this).children('ul').hide();
                    var _icon = $(this).find('>a .expand i');
                    _icon.removeClass('fa-chevron-down').addClass('fa-chevron-right')

                });
            });
        },
        toggleIcon: function (target) {
            var _isV = _sub.is(':visible');
            // _icon.removeClass('fa-chevron-down').addClass('fa-chevron-right') : _icon.removeClass('fa-chevron-right').addClass('fa-chevron-down');
        },
        end: function () {

        }

    };
    $(document).ready(function () {
        _path.init();
    });
})($);