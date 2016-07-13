(function($,core) {
	core.define("ui.Calendar", {
		config : {
			today_class : 'today'
		},
		init : function(obj) {
			this.opts = this.opts || {};
			var _opts = this.opts = $.extend(null, this.config, obj);
			this.$th = this.opts.container.find('th');
			this.$td = this.opts.container.find('td');
			this.$anc = this.opts.container.find('td a');
			this.select_input = null;
			//--------------------------------------------------------------------------------------------------------------------//
			this._bind();
			this._setCurrentData();
			this._display(_opts['year'], _opts['month']);
		},
		_bind : function() {
			var _self = this, _opts = this.opts, _cnt = _opts.container, _b = $('body');
			_cnt.on('click', _opts.openBtn.selector, function(event) {// 달력 Open Layer
				// 달력 open하기전 올해년/월 일로 세팅하여 보여줌
				_opts['year'] = _opts['today-year'];
				_opts['month'] = _opts['today-month'];
				_self._display(_opts['year'], _opts['month']);
				_self._setVisibleLayer(true);
				_self.select_input = $(this).parents('.wrap').find('input');
			});
			_cnt.on('click', this.$anc.selector, function(event) {// 달력 Open Layer
				event.preventDefault();
			});
			_cnt.on('click', _opts.closeBtn.selector, function(event) {// 달력 Close Layer
				_self._setVisibleLayer(false);
			});
			_b.on('mouseenter mouseleave click', this.$td.selector, function(event) {//----------------------------------------------------------- 각td에 대한 event
				if (event.type == 'mouseenter') {
					$(this).addClass('on');
				} else if (event.type == 'mouseleave') {
					$(this).removeClass('on');
				} else if (event.type == 'click') {
					// month 체크 +1
					// month, day  2자리 수로 하여 01 , 03  형태로 해서 callback
					_opts['month'] = _self._setDigit(Number(_opts['month']) + 1);
					_opts['date'] = _self._setDigit(Number($(this).text()));
					_opts['day'] = $(this).index() % 7;
					if (_opts['date'] === null || _opts['date'] === '0' || _opts['date'] === undefined || _opts['date'] === '00') {//---------- 달력이 아닌 td는 return false;
						return false;
					}
					(_opts.callback != undefined) ? _opts.callback.call(this, _opts) : false;
					_self._setVisibleLayer(false);
					//---------------inputbox 입력
					_self.select_input.val(_opts.year + "-" + _opts.month + "-" + _opts.date);
				}
			});
			_cnt.on('click', _opts.today.selector, function(event) {//----------------------------------------------------------------------------- 오늘 버튼
				_opts['year'] = _opts['today-year'];
				_opts['month'] = _opts['today-month'];
				_self._display(_opts['year'], _opts['month']);
			});
			_cnt.on('click', _opts.prev_year.selector, function(event) {//----------------------------------------------------------------------------- 이전년 버튼
				_opts['year'] = _opts['year'] - 1;
				_self._display(_opts['year'], _opts['month']);
			});
			_cnt.on('click', _opts.next_year.selector, function(event) {//----------------------------------------------------------------------------- 다음년 버튼
				_opts['year'] = _opts['year'] + 1;
				_self._display(_opts['year'], _opts['month']);
			});
			_cnt.on('click', _opts.prev_month.selector, function(event) {//----------------------------------------------------------------------------- 이전달 버튼
				_opts['month'] = _opts['month'] - 1;
				if (_opts['month'] < 0) {
					_opts['month'] = 11;
					_opts['year'] = _opts['year'] - 1;
				}
				_self._display(_opts['year'], _opts['month']);
			});
			_cnt.on('click', _opts.next_month.selector, function(event) {//----------------------------------------------------------------------------- 다음달 버튼
				_opts['month'] = _opts['month'] + 1;
				if (_opts['month'] > 11) {
					_opts['month'] = 0;
					_opts['year'] = _opts['year'] + 1;
				}
				_self._display(_opts['year'], _opts['month']);
			});
		},
		/*------------------------------------------------------------------------------------
		 * 	달력 레이어 visible
		 ------------------------------------------------------------------------------------*/
		_setVisibleLayer : function(mode) {
			(mode) ? this.opts.layer.fadeIn('fast') : this.opts.layer.fadeOut('fast');
		},
		/*------------------------------------------------------------------------------------
		 * 	오늘날짜를 구함
		 ------------------------------------------------------------------------------------*/
		_setCurrentData : function() {
			var _opts = this.opts;
			var _dt = new Date();
			_opts['year'] = _opts['today-year'] = _dt.getFullYear();
			_opts['month'] = _opts['today-month'] = _dt.getMonth();
			_opts['date'] = _opts['today-date'] = _dt.getDate();
			_opts['day'] = _dt.getDay();
		},
		/*-------------------------------------------------------------------------------------------------
		 한달에 몇일까지 있는지 구하는 function
		 [날짜의 규칙]
		 매년 2월은 28일이며, 매년 2월중에서 년도수가 4의 배수일 경우(윤달)에는 2월이 29일이다.
		 1월 : 31일, 2월 28일 or 29일, 3월 31일, 4월 30일, 5월 31일,6월 30일, 7월 : 31일, 8월 31일, 9월 30일, 10월 31일, 11월 30일,	12월 31일
		 ------------------------------------------------------------------------------------------------*/
		_getTotalDate : function(year, month) {
			var _year = year || this.opts.year;
			var _month = month || this.opts.month;
			if (_month == 3 || _month == 5 || _month == 8 || _month == 10) {
				return 30;
			} else if (_month == 1) {//2월달 윤년체크
				return (_year % 4 == 0) ? 29 : 28;
			} else {
				return 31;
			}
		},
		/*------------------------------------------------------------------------------------
		 * 	해당년의 월에서 1일의 요일을 구함.
		 ------------------------------------------------------------------------------------*/
		_getStartDay : function(year, month) {
			var _year = year || this.opts.year;
			var _month = month || this.opts.month;
			var _set = new Date();
			_set.setFullYear(_year);
			_set.setMonth(_month);
			_set.setDate(1);
			return _set.getDay();
		},
		/*------------------------------------------------------------------------------------
		 * 	1 -> 01 , 6 -> 06  2자리로 변경
		 ------------------------------------------------------------------------------------*/
		_setDigit : function(num) {
			return (String(num).length == 1) ? "0" + num : num;
		},
		/*------------------------------------------------------------------------------------
		 * 해당년월을 table의 td에 적용함. 1월 -> 0 , 12월 -> 11
		 ------------------------------------------------------------------------------------*/
		_display : function(year, month) {
			this.reset();
			var _opts = this.opts;
			var _year = year || this.opts.year;
			var _month = month || this.opts.month;
			var _startDate = this._getStartDay(_year, _month);
			var _endDate = this._getTotalDate(_year, _month);
			for (var i = 0; i < _endDate; i++) {
				/*	anchor 형태 타입
				 *
				 *	<td><a href="#">날짜</a></td> 형태로 하기위해서는 아래라인형태로 출력
				 *  this.$td.eq(i + _startDate).append('<a href="#">' + Number(i + 1) + '</a>');
				 *
				 * <td>날짜</td> 형태로 하기위해서는 아래라인형태로 출력
				 *  this.$td.eq(i + _startDate).text(i + 1);
				 *
				 */
				this.$td.eq(i + _startDate).append('<a href="#">' + Number(i + 1) + '</a>');
			}
			_opts['view_box'].text(_year + "-" + this._setDigit(_month + 1));
			/*--------------------오늘날짜표시 , 5행 및 6행 체크-----------------------------------------*/
			(_year == _opts['today-year'] && _month == _opts['today-month']) ? this.$td.eq(_startDate + _opts['today-date'] - 1).addClass(_opts['today_class']) : null;
			(_opts['container'].find('tr:last').find('td:eq(0)').text() == "") ? _opts['container'].find('tr:last').hide() : _opts['container'].find('tr:last').show();
		},
		/*------------------------------------------------------------------------------------
		 * 	특정년,월로 display실행
		 * 	ex) _calendar.set(2006,11);
		 ------------------------------------------------------------------------------------*/
		set : function(year, month) {
			var _opts = this.opts;
			_opts['year'] = Number(year);
			_opts['month'] = Number(month) - 1;
			this._display(_opts['year'], _opts['month']);
			return this;
		},
		/*------------------------------------------------------------------------------------
		 * 	table 내의 td 초기화
		 ------------------------------------------------------------------------------------*/
		reset : function() {
			this.$td.removeClass(this.opts['today_class']).text('');
			return this;
		}
	});
})(jQuery, window[CORE]);