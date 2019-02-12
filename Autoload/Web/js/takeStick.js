var TakeStick = {

	storageStick: window.sessionStorage,
	action_stick : document.querySelectorAll(".action-stick"),
	btnStick1: document.getElementById("btnStick1"),
	btnStick: document.getElementsByClassName("btnStick"),
	stick1 : document.getElementById("stick1"),

	allStick : document.getElementsByClassName("stick"),

	action_stick1 : document.getElementById("action-stick1"),

	display : 1,


	init: function(){

		TakeStick.refresh();
		TakeStick.displayStick();
		TakeStick.AllhiddenAction();

		for(let i = 0; i < TakeStick.allStick.length; i++){

			if((TakeStick.display.textContent || TakeStick.storageStick.getItem("displayStick")) == 1){

				TakeStick.allStick[i].style.display="block";

			}else{
				TakeStick.allStick[i].style.display="none";
			}
		}

	},

	hidden_action_stick: function(){

		for(var i = 0; i < TakeStick.action_stick.length; i++){
			this.action_stick[i].style.display = "none";
		}
	},

	showActionStick1: function(){

		this.hidden_action_stick();

		TakeStick.stick1.addEventListener("mouseover", function(){
				TakeStick.action_stick1.style.display="block";
		});
	},


	hiddenActionStick1: function(){

		this.showActionStick1();

		TakeStick.stick1.addEventListener("mouseout", function(){
				TakeStick.action_stick1.style.display="none";
		});
	},


	AllhiddenAction: function(){

		this.hiddenActionStick1();
	},

	displayStick: function(){

		
		for(let i = 0; i < TakeStick.btnStick.length; i++){


			for(let j = 0; j < TakeStick.allStick.length; j++){

				TakeStick.btnStick[i].addEventListener("click", function(){

					if(i == j){

						TakeStick.display = 2;

						const newDisplay = TakeStick.display

						TakeStick.storageStick.setItem("displayStick", newDisplay);
					}

				});
			}
		}
	},

	refresh: function(){

		if(TakeStick.storageStick.length > 0){

			TakeStick.display = TakeStick.storageStick.getItem("displayStick");

		}
	}
}

TakeStick.init();