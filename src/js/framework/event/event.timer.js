(function($,core) {
	core.define("evt.Timer", {
		config : {
			container : "",
			timerId : 0,
			repeat : 0,
			interval : 1000,
			//		limit : 10,
			enable : true,
			index : 1
		},
		init : function(obj) {
			this.opts = this.opts || {};
			this.opts = $.extend(null, this.config, obj);
			this._bind();
		},
		_bind : function() {

		},
		/*------------------------------------------------------------------------------------
		 * 	반복 REPEAT
		 ------------------------------------------------------------------------------------*/
		_repeat : function() {
			var _self = this;
			var _opts = this.opts;
			(_opts["timerId"] != undefined) ? clearInterval(_opts["timerId"]) : false;
			_opts["timerId"] = setInterval(function() {
				_opts["repeat"] = _opts["repeat"] + 1;
				(_opts["callback"] != undefined) ? _opts["callback"].call(_self, _opts["repeat"]) : false;
				//	Limit 처리 되면 timer 종료
				if (_opts["repeat"] >= _opts.limit) {
					this.stop();
				}
			}, _opts.interval);
		},
		/**
		 *	timer Pause and Resume
		 * @param {object} target
		 * target : jQuery 형태
		 */
		setTarget : function(target) {
			var _self = this;
			var _opts = this.opts;
			target.bind('mouseenter mouseleave', function(event) {
				if (event.type == 'mouseenter') {
					_self.pause();
					_opts.isOver = true;
				} else if (event.type == 'mouseleave') {
					_self.resume();
				}
			});
		},
		/*------------------------------------------------------------------------------------
		 * 	타이머 실행
		 ------------------------------------------------------------------------------------*/
		start : function() {
			this.opts["enable"] = true;
			this.stop();
			this._repeat();
		},
		/*------------------------------------------------------------------------------------
		 * 	타이머 정지
		 ------------------------------------------------------------------------------------*/
		stop : function() {
			this.opts["repeat"] = 0;
			this.opts["enable"] = false;
			clearInterval(this.opts["timerId"]);
		},
		/*------------------------------------------------------------------------------------
		 * 	타이머 초기화
		 ------------------------------------------------------------------------------------*/
		reset : function() {
			this.opts["repeat"] = 0;
		},
		/*------------------------------------------------------------------------------------
		 * 	타이머 일시정지
		 ------------------------------------------------------------------------------------*/
		pause : function() {
			this.opts["enable"] = false;
			clearInterval(this.opts["timerId"]);
		},
		/*------------------------------------------------------------------------------------
		 * 	타이머 일시정지 복귀
		 ------------------------------------------------------------------------------------*/
		resume : function() {
			this.opts["enable"] = true;
			this._repeat();
		}
	});
})(jQuery, window[CORE]);
