var StickForm = {

	storageFormStick: window.sessionStorage,

	btnStickUnder : document.getElementById("btnStick2"),
	
	stickUnder : document.querySelector(".stick-underOne"),
	
	saveNum: 1,

	init: function(){

		this.refresh();
		this.hiddenStickUnder();

	},

	hiddenStickUnder: function(){

		let saveHidden = StickForm.saveNum;

		StickForm.storageFormStick.setItem("saveStick", saveHidden);

		StickForm.btnStickUnder.addEventListener("click", function(){

			StickForm.saveHidden = 99;

			StickForm.storageFormStick.setItem("saveStick", StickForm.saveHidden);

			StickForm.stickUnder.style.display = "none";

		});

		if(StickForm.storageFormStick.getItem("saveStick2") == 99){

			StickForm.stickUnder.style.display="none";
		}else{

			StickForm.stickUnder.style.display="block";
		}

	},

	refresh: function(){

		if(StickForm.storageFormStick.length > 0){

			StickForm.saveNum = StickForm.storageFormStick.getItem("saveStick");
		}

	}

}

StickForm.init();