var TakeStick = {

	action_stick : document.querySelectorAll(".action-stick"),
	stick1 : document.getElementById("stick1"),
	action_stick1 : document.getElementById("action-stick1"),

	init: function(){
	
			this.AllhiddenAction();
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
	}
}

TakeStick.init();