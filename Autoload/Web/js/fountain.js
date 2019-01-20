var Fountain = {

	storageFountain: window.sessionStorage,
	action_fountain : document.querySelectorAll(".action-fountain"),
	fountain1 : document.getElementById("fountain1"),
	action_fountain1 : document.getElementById("action-fountain1"),
	btnFountain : document.getElementById("active-fountain"),
	lifePlayer: document.getElementById("life_players"),

	init: function(){

		this.heal();
		this.AllhiddenAction();
	},

	hidden_action_fountain: function(){

		for(var i = 0; i < Fountain.action_fountain.length; i++){
			this.action_fountain[i].style.display = "none";
		}
	},

	showActionFountain1: function(){

		this.hidden_action_fountain();

		Fountain.fountain1.addEventListener("mouseover", function(){
				Fountain.action_fountain1.style.display="block";
		});
	},

	hiddenActionFountain1: function(){

		this.showActionFountain1();

		Fountain.fountain1.addEventListener("mouseout", function(){
				Fountain.action_fountain1.style.display="none";
		});
	},

	heal: function(){

		Fountain.btnFountain.addEventListener("click", function(){

			Fountain.lifePlayer.textContent = Number(Fountain.lifePlayer.textContent) + 15;

			alert("Vous récupérez 15 points de vie");

			Fountain.storageFountain.setItem('lifePlayer', Fountain.lifePlayer.textContent);

			alert("Il vous reste "+PlayerStorage.storageInfo(Fountain.storageFountain.getItem('lifePlayer'))+ "points de vie");

			Fountain.btnFountain.style.display = "none";

		});

	},

	AllhiddenAction: function(){

		this.hiddenActionFountain1();
	}
}

Fountain.init();