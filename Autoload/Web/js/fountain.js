var Fountain = {

	storageFountain: window.sessionStorage,
	action_fountain : document.querySelectorAll(".action-fountain"),
	fountain1 : document.getElementById("fountain1"),
	action_fountain1 : document.getElementById("action-fountain1"),
	btnFountain : document.getElementById("active-fountain"),
	lifePlayer: document.getElementById("life_players"),

	display: 1,

	init: function(){

		this.refresh();
		this.heal();
		this.AllhiddenAction();

		if(Fountain.display == 1){
			Fountain.btnFountain.style.display = "block";

			Fountain.storageFountain.setItem("display", Fountain.display);
			alert("DISPLAY "+Fountain.storageFountain.getItem("display"));
		}
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

			Fountain.endAllStorage();

			Fountain.lifePlayer.textContent = Number(Fountain.lifePlayer.textContent) + 15;

			alert("Vous récupérez 15 points de vie");

			Fountain.storageFountain.setItem('lifePlayer', Fountain.lifePlayer.textContent);

			Fountain.btnFountain.style.display = "none";

			Fountain.display = 2;

			Fountain.storageFountain.setItem("display", Fountain.display);
			alert("DISPLA NEW" +Fountain.storageFountain.getItem("display"));

		});

	},

	AllhiddenAction: function(){

		this.hiddenActionFountain1();
	},

	endAllStorage: function(){

			TakeApple.display = 1;
			TakeApple.storageApple.setItem("displayApple", TakeApple.display);

			TakeStick.display = 1;
			TakeStick.storageStick.setItem("displayStick", TakeStick.display);

			TakeAcorn.display = 1;
			TakeAcorn.storageAcorn.setItem("displayAcorn", TakeAcorn.display);
	},

	refresh: function(){

		if(Fountain.storageFountain.length > 0){

			Fountain.display = Fountain.storageFountain.getItem("display");
		}
	}
}

Fountain.init();