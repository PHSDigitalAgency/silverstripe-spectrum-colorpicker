(function($) {
	$.entwine('ss', function($) {
		$('input.spectrum-colorpickerfield').entwine({
			onmatch: function(e) {
				var self = $(this);

				if(self.attr('type') !== 'color') {
					var options = $.extend(self.data('spectrum-options'), {change: function(c) {
						if(c === null || c._a === 0) {
							self.val('transparent');
						} else if(c._a === 1) {
							self.val(c.toHexString());
						}
          }});
	        self.spectrum(options);
				}
			}
		});
	});
})(jQuery);
