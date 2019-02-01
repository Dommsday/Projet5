var TakeAcorn = {

	storageAcorn: window.sessionStorage,
	action_acorn : document.querySelectorAll(".action-acorn"),
	btnAcorn1: document.getElementById("btnAcorn1"),
	btnAcorn: document.getElementsByClassName("btnAcorn"),
	acorn1 : document.getElementById("acorn1"),

	allAcorn: document.getElementsByClassName("acorn"),

	action_acorn1 : document.getElementById("action-acorn1"),
	
	display: 1,

	init: function(){

		TakeAcorn.refresh();
		TakeAcorn.displayAcorn();
		TakeAcorn.AllhiddenAction();
		TakeAcorn.endStorageStick();

		for(let i = 0; i < TakeAcorn.allAcorn.length; i++){

			if((TakeAcorn.display.textContent || TakeAcorn.storageAcorn.getItem("displayAcorn")) == 1){

				TakeAcorn.allAcorn[i].style.display="block";

			}else{
				TakeAcorn.allAcorn[i].style.display="none";
			}
		}
	},

	hidden_action_acorn: function(){

		for(let i = 0; i < TakeAcorn.action_acorn.length; i++){
			this.action_acorn[i].style.display = "none";
		}
	},

	showActionAcorn1: function(){

		this.hidden_action_acorn();

		TakeAcorn.acorn1.addEventListener("mouseover", function(){
				TakeAcorn.action_acorn1.style.display="block";
		});
	},


	hiddenActionAcorn1: function(){

		this.showActionAcorn1();

		TakeAcorn.acorn1.addEventListener("mouseout", function(){
				TakeAcorn.action_acorn1.style.display="none";
		});
	},


	AllhiddenAction: function(){

		this.hiddenActionAcorn1();
	},

	displayAcorn: function(){

		
		for(let i = 0; i < TakeAcorn.btnAcorn.length; i++){


			for(let j = 0; j < TakeAcorn.allAcorn.length; j++){

				TakeAcorn.btnAcorn[i].addEventListener("click", function(){

					if(i == j){

						TakeAcorn.display = 2;

						const newDisplay = TakeAcorn.display;

						TakeAcorn.storageAcorn.setItem("displayAcorn", newDisplay);

					}
					
				});
			}
		}
	},

	endStorageStick: function(){

		TakeAcorn.btnAcorn1.addEventListener("click", function(){

			TakeStick.display = 1;

			TakeStick.storageStick.setItem("displayStick", TakeStick.display);
		});
	},

	refresh: function(){

		if(TakeAcorn.storageAcorn.length > 0){

			TakeAcorn.display = TakeAcorn.storageAcorn.getItem("displayAcorn");

		}
	}
}

TakeAcorn.init();