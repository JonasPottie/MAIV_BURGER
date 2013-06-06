/*globals AboutBurger:true*/
/*globals Util:true*/

var Main = (function(){

	var aboutburger;

	function Main($sourceElement){
		_.bindAll(this);
		this.$sourceElement = $sourceElement;
	}

	//2. wordt opgeropen in main.js
	Main.prototype.init = function(){
		var self = this;

		Util.clean();

		aboutburger = new AboutBurger(this.$sourceElement);
		aboutburger.load();

	};

	return Main;
})();