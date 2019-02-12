var TakeChest = {

	action_chest : document.getElementById("action-open-chest"),

	chest1 : document.getElementById("chest1"),

	action_chest1 : document.getElementById("action-chest1"),
	btnChest : document.getElementById("action-open-chest"),

	
	init: function(){

		TakeChest.AllhiddenAction();
		TakeChest.endStorageApple();
	},

	hidden_action_chest: function(){

		this.action_chest.style.display = "none";
	},

	showActionChest1: function(){

		this.hidden_action_chest();

		TakeChest.chest1.addEventListener("mouseover", function(){

				TakeChest.action_chest.style.display="block";
		});
	},

	hiddenActionChest1: function(){

		this.showActionChest1();

		TakeChest.chest1.addEventListener("mouseout", function(){
				TakeChest.action_chest.style.display="none";
		});
	},

	endStorageApple: function(){

		TakeChest.btnChest.addEventListener("click", function(){

			TakeApple.display = 1;

			const audioChest = document.getElementById("audio_chest");
			audioChest.play();

			TakeApple.storageApple.setItem("displayApple", TakeApple.display);
			
		});
	},

	AllhiddenAction: function(){

		this.hiddenActionChest1();
	}
}

TakeChest.init();