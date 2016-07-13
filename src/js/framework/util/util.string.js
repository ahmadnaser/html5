/**
 * @name common.util
 * @class 각종 유틸 함수
 *
 */
window[CORE].namespace("util.string");
/*-------------------------------------------------------------------------------------------------
 * 세자리마다 , 를 삽입
 *  util.string.addComma(4200000)  => 4,200,000
 ------------------------------------------------------------------------------------------------*/
util.string.addComma = function (str) {
    return str.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};
/*-------------------------------------------------------------------------------------------------
 * txt 글자갯수구하며, 특정갯수넘어갈경우 텍스트입력안됨
 ------------------------------------------------------------------------------------------------*/
util.string.getCount = function (obj) {
    var _target = obj.target || $('#string-getcount');
    var _result = obj.result || _target.find('ui-result');
    var _limit = obj.limit || 200;
    _target.bind('focusin focusout keydown keyup', function (event) {
        var _count = $(this).val().length;
        if (_count > _limit) {// check-limit-text-length
            $(this).val($(this).val().substr(0, _limit));
        } else {
            _result.text(_count + "/자");
        }
    }).trigger('keyup');
};
