(function ($, core) {
    "use strict";
    var _opts, _self;
    core.define("ns1.ns2.ns3.ns4.ClassName", {
        config: {
            easing: "default"
        },
        init: function (obj) {
            this.opts = this.opts || {};
            this.opts = $.extend(null, this.config, obj);
            _self = this;
            _opts = this.opts;
            this._bind();

            function privateFunc() {
            }
        },
        _bind: function () {
        },
        display: function () {
            console.log(this);
        }
    });
})(jQuery, window[CORE]);

// 실행

(function ($, core) {
    var _func = function () {
        window.myObj1 = new ns1.ns2.ns3.ns4.ClassName({
            var1: 111,
            var2: "someVars1",
            developer: "FRONT_END"
        });
        //myObj1.display();
        //
        window.myObj2 = new ns1.ns2.ns3.ns4.ClassName({
            var1: 222,
            var2: "someVars2",
            phone: "010-1111-2222"
        });
        //myObj2.display();
    };

    $(document).ready(_func);
})(jQuery, window[CORE]);
