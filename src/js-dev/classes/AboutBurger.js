var AboutBurger = (function(){


	function AboutBurger($sourceElement){
		this.$sourceElement = $sourceElement;
		this.template = tpl.aboutBurger;
	}

	AboutBurger.prototype.load = function() {
		// body...
	};

	AboutBurger.prototype.init = function(data){
		this.data = data;
		this.init();
		//,this.render,this.bind);
	};

	AboutBurger.prototype.render = function(){
		this.$el = $(this.template({vervoer: this.data})).appendTo(this.$sourceElement);
	};

	AboutBurger.prototype.bind = function(){
		var self = this;
	};

	return AboutBurger;

})();

