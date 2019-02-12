var Gate = {

	storageGate: window.sessionStorage,
	lifePlayer: document.getElementById("life_players"),
	btnSubmit : document.getElementById("valid_code"),
	nbrOne: document.getElementById("number_1"),
	nbrTwo: document.getElementById("number_2"),
	nbrThree: document.getElementById("number_3"),
	nbrFour: document.getElementById("number_4"),
	nbrFive: document.getElementById("number_5"),
	nbrSix: document.getElementById("number_6"),
	choiseRoadEnd: document.getElementById("choise-road-end"),
	formGate: document.getElementById("form_gate"),
	gateCadre: document.getElementById("gate1"),

	init: function(){

		this.validCode();
	},

	validCode: function(){

		Gate.choiseRoadEnd.style.display = "none";

		Gate.btnSubmit.addEventListener("click", function(e){
			
			Gate.checkNumber();
			e.preventDefault();

		});
	},

	checkNumber: function(){

		if((Gate.nbrOne.value == 5) && (Gate.nbrTwo.value == 8) && (Gate.nbrThree.value == 7) && 
			(Gate.nbrFour.value == 4) && (Gate.nbrFive.value == 1) && (Gate.nbrSix.value == 3)){

			Gate.gateCadre.style.border="2px solid green";

			setTimeout(function(){

					Gate.gateCadre.style.border="inherit";
				}, 2000);

			Gate.formGate.style.display =" none";
			Gate.choiseRoadEnd.style.display = "block";

		}else{

			Gate.gateCadre.style.border="2px solid red";

			setTimeout(function(){

					Gate.gateCadre.style.border="inherit";
				}, 1000);
		}
	}
}

Gate.init();