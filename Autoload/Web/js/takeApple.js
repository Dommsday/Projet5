var TakeApple = {

	storageApple: window.sessionStorage,
	btnApple1: document.getElementById("btnApple1"),
	btnApple: document.getElementsByClassName("btnApple"),
	action_element : document.querySelectorAll(".action"),
	
	allApple: document.getElementsByClassName("apple"),
	
	apple1 : document.getElementById("apple1"),

	action1 : document.getElementById("action1"),

	display : 1,

	init: function(){

		TakeApple.refresh();
		TakeApple.displayApple();
		TakeApple.AllhiddenAction();

		for(let i = 0; i < TakeApple.allApple.length; i++){

			if((TakeApple.display.textContent || TakeApple.storageApple.getItem("displayApple")) == 1){

				TakeApple.allApple[i].style.display="block";

			}else{
				TakeApple.allApple[i].style.display="none";
			}
		}
		
	},

	hidden_action: function(){

		for(var i = 0; i < TakeApple.action_element.length; i++){
			this.action_element[i].style.display = "none";
		}
	},

	showActionApple1: function(){

		this.hidden_action();

		TakeApple.apple1.addEventListener("mouseover", function(){
				TakeApple.action1.style.display="block";
		});
	},

	hiddenActionApple1: function(){

		this.showActionApple1();

		TakeApple.apple1.addEventListener("mouseout", function(){
				TakeApple.action1.style.display="none";
		});
	},

	AllhiddenAction: function(){

		this.hiddenActionApple1();
	},

	displayApple: function(){

		
		for(let i = 0; i < TakeApple.btnApple.length; i++){


			for(let j = 0; j < TakeApple.allApple.length; j++){

				TakeApple.btnApple[i].addEventListener("click", function(){

					if(i == j){

						TakeApple.display = 2;

						const newDisplay = TakeApple.display

						TakeApple.storageApple.setItem("displayApple", newDisplay);

					}
				});
			}
		}
	},

	refresh: function(){

		if(TakeApple.storageApple.length > 0){

			TakeApple.display = TakeApple.storageApple.getItem("displayApple");
		}
	}

}

TakeApple.init();