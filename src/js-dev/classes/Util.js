var Util = (function(){


	function Util(){

	}

	Util.api = "http://localhost:8888/RMDII/a_OPDRACHTEN/RMDII_EINDOPDRACHT/api";
	//Util.api = "http://student.howest.be/jonas.pottie/20122013/RMD2/TRIPIT/api";

	Util.clean = function(){
		$("#container").empty();
		$(".overview").remove();
	};

	return Util;

})();

