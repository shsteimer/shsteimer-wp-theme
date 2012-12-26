//expand the string prototype to add a starts with function
!(function($) {
	if (typeof String.prototype.startsWith != 'function') {
	  // see below for better implementation!
	  String.prototype.startsWith = function (str){
	    return this.indexOf(str) == 0;
	  };
	}
})($);

var shsteimer = shsteimer || {
	blog: {
		//the class of the main content span when the page loads, something like 'span7' or 'span9'
		originalContentSpanClass: null,

		//the class of the main content span at the current time, something like 'span7' or 'span9'
		currentContentSpanClass: null,

		// the class of the main content span when there is only one sidebar visible
		contentSpanClassWide: 'span9',

		//the class of the main content span when there are 2 sidebars visible
		contentSpanClassNarrow: 'span7',

		tabletwWidth: 979,

		init: function() {
			prettyPrint();
			var contentDiv = $('#main-content');
			var classes = contentDiv.attr('class').split(/\s+/);
			
			$.each( classes,$.proxy(function(index, item){
				if (item.startsWith('span')) {
	       			this.originalContentSpanClass=item;
	       			this.currentContentSpanClass=item;
	    		}
			},this));
			
			$(window).resize($.proxy(this.resizeHandler,this));
		},

		resizeHandler: function() {
			var curWidth = $(window).width();
			if(curWidth <= this.tabletwWidth && this.currentContentSpanClass!==this.contentSpanClassWide) {
				//if the width becomes less than the trigger width for a tablet, and is span narrow (span7) make it wide (span9)
				$('#main-content').removeClass(this.currentContentSpanClass);
				$('#main-content').addClass(this.contentSpanClassWide);
				this.currentContentSpanClass=this.contentSpanClassWide;
			} else if(curWidth > this.tabletwWidth && this.currentContentSpanClass!==this.originalContentSpanClass){
				//if the width becomes more than the trigger width for a tablet, and the span was changed earlier, restore to original state
				$('#main-content').removeClass(this.currentContentSpanClass);
				$('#main-content').addClass(this.originalContentSpanClass);
				this.currentContentSpanClass=this.originalContentSpanClass;
			}
		}
	}
};


!(function($) {
	$(document).ready(function(){
		shsteimer.blog.init();	
	});
})($);





