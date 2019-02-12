var TakeSword = {

	storageSword: window.sessionStorage,
	action_sword : document.querySelectorAll(".action-sword"),
	btnSword1: document.getElementById("btnSword1"),
	btnSword: document.getElementsByClassName("btnSword"),
	sword1 : document.getElementById("sword1"),

	allSword : document.getElementsByClassName("sword"),

	action_sword1 : document.getElementById("action_sword1"),

	display : 1,

	init: function(){

		TakeSword.refresh();
		TakeSword.AllhiddenAction();
		TakeSword.displaySword();

		for(let i = 0; i < TakeSword.allSword.length; i++){

			if((TakeSword.display.textContent || TakeSword.storageSword.getItem("displaySword")) == 1){

				TakeSword.allSword[i].style.display="block";

			}else{
				TakeSword.allSword[i].style.display="none";
			}
		}

		
	},

	hidden_action_sword: function(){

		for(let i = 0; i < TakeSword.action_sword.length; i++){
			this.action_sword[i].style.display = "none";
		}
	},

	showActionSword1: function(){

		this.hidden_action_sword();

		TakeSword.sword1.addEventListener("mouseover", function(){
				TakeSword.action_sword1.style.display="block";
		});
	},


	hiddenActionSword1: function(){

		this.showActionSword1();

		TakeSword.sword1.addEventListener("mouseout", function(){
				TakeSword.action_sword1.style.display="none";
		});
	},


	AllhiddenAction: function(){

		this.hiddenActionSword1();
	},

	displaySword: function(){

		
		for(let i = 0; i < TakeSword.btnSword.length; i++){


			for(let j = 0; j < TakeSword.allSword.length; j++){

				TakeSword.btnSword[i].addEventListener("click", function(){

					if(i == j){

						TakeSword.display = 2;

						const newDisplay = TakeSword.display

						TakeSword.storageSword.setItem("displaySword", newDisplay);
					}

				});
			}
		}
	},

	refresh: function(){

		if(TakeSword.storageSword.length > 0){

			TakeSword.display = TakeSword.storageSword.getItem("displaySword");
		}
	}
}

TakeSword.init();