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

		if((Gate.nbrOne.value == 9) && (Gate.nbrTwo.value == 9) && (Gate.nbrThree.value == 9) && 
			(Gate.nbrFour.value == 9) && (Gate.nbrFive.value == 9) && (Gate.nbrSix.value == 9)){

			alert("Code bon");

			Gate.formGate.style.display =" none";
			Gate.choiseRoadEnd.style.display = "block";
		}else{

			alert("Mauvais code");
		}
	}
}

Gate.init();