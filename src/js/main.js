(function(){

this["tpl"] = this["tpl"] || {};

this["tpl"]["allTrips"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Handlebars.helpers; data = data || {};
  


  return "<div class=\"kolomI\">\n	<p>Zoek een trip</p><br>\n\n	<div class=\"fillIn\">\n	<input type=\"text\" name=\"autoFillTitle\" id=\"autoFillTitle\" placeholder=\"typ een titel\" >\n	</div>\n\n	<div id=\"title\">\n	</div><br>\n	<img src=\"images/logo.png\" width=\"146\" height=\"139\"  />\n\n</div>\n\n<div class=\"kolomII\">\n\n	<p>Zoek jou trip en krijg</p><p> een klein overzicht terug</p>\n	<img src=\"images/logo.png\" width=\"146\" height=\"139\"  />\n</div>";
  });

this["tpl"]["beheerTrips"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Handlebars.helpers; data = data || {};
  


  return "<div class=\"kolomI\">\n	<p>Beheer je Trip</p><br>\n\n	<div class=\"fillIn\">\n		<input type=\"text\" name=\"autoFillTitle\" id=\"autoFillTitle\" placeholder=\"Zoek op naam van de trip\" >\n	</div>\n\n	<div id=\"title\">\n	</div><br>\n\n	<p>kies je vervoersmiddel</p><br>\n	\n	<div id=\"vervoer\">\n	<div class=\"vervoer\"><img src=\"images/vv_auto.png\" id=\"vervoerAuto\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"vervoer\"><img src=\"images/vv_fiets.png\" id=\"vervoerFiets\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"vervoer\"><img src=\"images/vv_vlieg.png\" id=\"vervoerVlieg\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"vervoer\"><img src=\"images/vv_trein.png\" id=\"vervoerTreintje\" width=\"47px\" height=\"60px\"  /></div><br>\n	</div>\n\n\n	<label for=\"slaapplaats\"><p>kies je slaapplaats</p></label><br><br>\n	<div id=\"slaap\">\n	<div class=\"slaap\"><img src=\"images/slaap_huis.png\" id=\"slaapHuis\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"slaap\"><img src=\"images/slaap_caravan.png\" id=\"slaapCaravan\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"slaap\"><img src=\"images/slaap_hotel.png\" id=\"slaapHotel\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"slaap\"><img src=\"images/slaap_tent.png\" id=\"slaapTent\" width=\"47px\" height=\"60px\"  /></div><br><br>\n	</div>\n\n	<label for=\"eet\"><p>Aantal Personen</p></label><br>\n			<div class=\"AddPersons\">\n				<input type=\"number\" name=\"AddPerson\" id=\"AddPerson\" value=\"2\">\n	</div>\n\n</div>\n\n<div class=\"kolomII\">\n\n		<div class=\"kolomDeel\">\n			<label for=\"eet\"><p>Eetgelegenheid</p></label><br>\n			<div class=\"eetgelegenheden\">\n			</div>\n			<div class=\"AddEetgelegenheden\">\n				<input type=\"text\" name=\"addEetgelegenheid\" id=\"addEetgelegenheid\" >\n				<button id=\"addEet\" class=\"button\" disabled>nieuwe Eetgelegenheid</button>\n			</div>\n		</div>\n\n	<div class=\"kolomDeel\">\n		<label for=\"eet\"><p>Activiteit</p></label><br>\n		<div class=\"bezigheden\">\n		</div>\n		<div class=\"Addbezighouden\">\n				<input type=\"text\" name=\"Addbezighoud\" id=\"Addbezighoud\" >\n				<button id=\"addBh\" class=\"button\" disabled>nieuwe bezighoudingen</button>\n		</div>\n	</div>\n\n</div>\n\n<div class=\"kolomIII\">\n\n	<div class=\"kolomDeel\">\n		<div class=\"kalender\">\n			<label for=\"meeting\"><p>Vertrek Datum</p></label><br><input id=\"meetingStart\" type=\"date\" value=\"2013-05-26\"/>\n		</div>\n	</div>\n\n\n	<div class=\"kolomDeel\">\n		<div class=\"kalender\">\n		<label for=\"meeting\"><p>Eind Datum</p></label><br><input id=\"meetingEnd\" type=\"date\" value=\"2013-05-26\"/>\n		</div>\n	</div>\n\n	<label for=\"eet\"><p>Titel voor je reis</p></label><br>\n		<div class=\"titel\">\n			<div class=\"AddTitle\">\n				<input type=\"text\" name=\"addTitle\" id=\"addTitle\" placeholder=\"typ een titel voor je Trip\">\n			</div><br>\n	</div>\n\n	<label for=\"eet\"><p>Typ hier je code van de trip</p></label><br>\n		<div class=\"titel\">\n			<div class=\"AddTitle\">\n				<input type=\"text\" name=\"addCode\" id=\"addCode\" placeholder=\"typ hier de code voor je Trip\">\n			</div>\n	</div><br>\n	 	<button id=\"updateTrip\" class=\"button\">Update je Trip</button>\n\n\n</div>\n\n		\n";
  });

this["tpl"]["maaktrips"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [2,'>= 1.0.0-rc.3'];
helpers = helpers || Handlebars.helpers; data = data || {};
  


  return "<div class=\"kolomI\">\n	<p>Kies een Stad</p><br>\n\n	<div class=\"fillIn\">\n		<input type=\"text\" name=\"autoFillCountry\" id=\"autoFillCountry\" placeholder=\"typ een stad\" >\n	</div>\n\n	<div id=\"land\">\n	</div><br>\n\n	<p>kies je vervoersmiddel</p><br>\n	\n	<div id=\"vervoer\">\n	<div class=\"vervoer\"><img src=\"images/vv_auto.png\" id=\"vervoerAuto\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"vervoer\"><img src=\"images/vv_fiets.png\" id=\"vervoerFiets\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"vervoer\"><img src=\"images/vv_vlieg.png\" id=\"vervoerVlieg\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"vervoer\"><img src=\"images/vv_trein.png\" id=\"vervoerTreintje\" width=\"47px\" height=\"60px\"  /></div>\n	</div>\n\n\n	<label for=\"slaapplaats\"><p>kies je slaapplaats</p></label><br><br>\n	<div id=\"slaap\">\n	<div class=\"slaap\"><img src=\"images/slaap_huis.png\" id=\"slaapHuis\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"slaap\"><img src=\"images/slaap_caravan.png\" id=\"slaapCaravan\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"slaap\"><img src=\"images/slaap_hotel.png\" id=\"slaapHotel\" width=\"47px\" height=\"60px\"  /></div>\n	<div class=\"slaap\"><img src=\"images/slaap_tent.png\" id=\"slaapTent\" width=\"47px\" height=\"60px\"  /></div><br><br>\n	</div>\n\n	<label for=\"eet\"><p>Aantal Personen</p></label><br>\n			<div class=\"AddPersons\">\n				<input type=\"number\" name=\"AddPerson\" id=\"AddPerson\" value=\"2\">\n	</div>\n\n\n</div>\n\n<div class=\"kolomII\">\n\n		<div class=\"kolomDeel\">\n			<label for=\"eet\"><p>Eetgelegenheid</p></label><br>\n			<div class=\"eetgelegenheden\">\n			</div>\n			<div class=\"AddEetgelegenheden\">\n				<input type=\"text\" name=\"addEetgelegenheid\" id=\"addEetgelegenheid\" >\n				<button id=\"addEet\" class=\"button\" disabled>nieuwe Eetgelegenheid</button>\n			</div>\n		</div>\n\n	<div class=\"kolomDeel\">\n		<label for=\"eet\"><p>Activiteit</p></label><br>\n		<div class=\"bezigheden\">\n		</div>\n		<div class=\"Addbezighouden\">\n				<input type=\"text\" name=\"Addbezighoud\" id=\"Addbezighoud\" >\n				<button id=\"addBh\" class=\"button\" disabled>nieuwe bezighoudingen</button>\n		</div>\n	</div>\n\n</div>\n\n<div class=\"kolomIII\">\n\n	<div class=\"kolomDeel\">\n		<div class=\"kalender\"><br>\n			<label for=\"meeting\"><p>Vertrek Datum</p></label><input id=\"meetingStart\" type=\"date\" value=\"2013-05-26\"/>\n		</div>\n	</div>\n\n\n	<div class=\"kolomDeel\">\n		<div class=\"kalender\"><br>\n		<label for=\"meeting\"><p>Eind Datum</p></label><input id=\"meetingEnd\" type=\"date\" value=\"2013-05-26\"/>\n		</div>\n	</div>\n\n	<label for=\"eet\"><p>Geef je reis een titel</p></label>\n		<div class=\"titel\">\n			<div class=\"AddTitle\">\n				<input type=\"text\" name=\"addTitle\" id=\"addTitle\" placeholder=\"typ een titel voor je Trip\">\n			</div>\n	</div>\n\n\n	<label for=\"eet\"><p>Typ hier je Emailadres</p></label>\n		<div class=\"titel\">\n			<div class=\"AddTitle\">\n				<input type=\"text\" name=\"addEmail\" id=\"addEmail\" placeholder=\"typ hier je emailadres\">\n			</div><br>\n	</div>\n\n	<button id=\"save\" class=\"button\">Sla je trip op</button>\n \n\n</div>\n\n		\n";
  });

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



/*globals Main:true*/

var main = new Main($("#container"));
main.init();

})();