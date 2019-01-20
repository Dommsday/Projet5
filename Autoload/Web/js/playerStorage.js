var PlayerStorage = {

	storagePlayer: window.sessionStorage,
	deconnexion: document.getElementById("deconnexion"),//Bouton de déconnexion
	newGame: document.getElementById("new-game"),
	lifePlayer: document.getElementById("life_players"),
	damagePlayer: document.getElementById("damages_players"),
	lifeStorage: null,
	damageStorage: null,
	modal_description: document.getElementsByClassName("modal-object-description"),
	modal_damages: document.getElementsByClassName("modal-object-damages"),
	modal_life: document.getElementsByClassName("modal-object-life"),
	modal_object: document.getElementsByClassName("modal-object"),
	all_modal_description: document.getElementById("all-modal-description"),
	btnObject: document.getElementById('btnObject'),

	textDescription: document.createElement("p"),
	textDamages: document.createElement("p"),
	textLife: document.createElement("p"),

	init: function(){

		PlayerStorage.refresh();
		PlayerStorage.btnObject.disabled = true;

		this.hidden_all_modal();
		this.show_modal_description();

		PlayerStorage.deconnexion.addEventListener("click", function(){
			PlayerStorage.storagePlayer.clear();
		});

		//Partie vie du joueur
		let playerLife = PlayerStorage.lifePlayer.textContent;
		PlayerStorage.storagePlayer.setItem("lifePlayer", PlayerStorage.storageInfo(playerLife));
		PlayerStorage.lifeStorage = PlayerStorage.storagePlayer.getItem("lifePlayer");

		//Partie dégâts du joueur
		let damagePlayer = PlayerStorage.damagePlayer.textContent;
		PlayerStorage.storagePlayer.setItem("damagePlayer", PlayerStorage.storageInfo(damagePlayer));
		PlayerStorage.damageStorage = PlayerStorage.storagePlayer.getItem("damagePlayer");


	},

	hidden_all_modal:function(){
		this.hidden_modal_description();
		this.hidden_modal_damages();
		this.hidden_modal_life();
	},

	hidden_modal_description: function(){

		for(let i = 0; i< PlayerStorage.modal_description.length; i++){
			PlayerStorage.modal_description[i].style.display="none";
		}

		PlayerStorage.all_modal_description.style.display="none";
	},

	hidden_modal_damages: function(){

		for(let i = 0; i< PlayerStorage.modal_damages.length; i++){
			PlayerStorage.modal_damages[i].style.display="none";
		}

	},

	hidden_modal_life: function(){

		for(let i = 0; i< PlayerStorage.modal_life.length; i++){
			PlayerStorage.modal_life[i].style.display="none";
		}
	},

	show_modal_description: function(){

		for(let i = 0; i< PlayerStorage.modal_object.length; i++){
			
			PlayerStorage.modal_object[i].addEventListener("mouseover",function(){

				for(let j = 0; j < PlayerStorage.modal_description.length; j++){

					if(i == j){
						
						PlayerStorage.textDescription.textContent = PlayerStorage.modal_description[j].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textDescription);
						PlayerStorage.all_modal_description.style.display="block";

					}
				}

				for(let k =0; k < PlayerStorage.modal_damages.length; k++){

					if(i == k){

						PlayerStorage.textDamages.textContent = PlayerStorage.modal_damages[k].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textDamages);

					}
				}

				for(let l =0; l < PlayerStorage.modal_life.length; l++){

					if(i == l){

						PlayerStorage.textLife.textContent = PlayerStorage.modal_life[l].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textLife);
					}
				}
				
			});

			PlayerStorage.modal_object[i].addEventListener("mouseout",function(){

				for(let j = 0; j < PlayerStorage.modal_description.length; j++){

					if(i == j){

						PlayerStorage.all_modal_description.style.display="none";
						PlayerStorage.textDescription.textContent = " ";
					}
				}
				
			});

			PlayerStorage.modal_object[i].addEventListener("click",function(){

				PlayerStorage.btnObject.disabled = false;
				PlayerStorage.storagePlayer.setItem("test", PlayerStorage.storageInfo(PlayerStorage.modal_object[i].textContent));
				
			});

			PlayerStorage.btnObject.addEventListener("click",function(){
				alert(PlayerStorage.storagePlayer.getItem("test"));
			});
		}

	},

	refresh: function(){

		if(PlayerStorage.storagePlayer.length > 0){

			PlayerStorage.lifePlayer.textContent = PlayerStorage.storagePlayer.getItem('lifePlayer');
			PlayerStorage.damagePlayer.textContent = PlayerStorage.storagePlayer.getItem('damagePlayer');

		}
	},

	playerLife: function(){

		return PlayerStorage.lifeStorage;
	},

	playerDamage: function(){

		return PlayerStorage.damageStorage;
	},

	storageInfo: function(playerInfo){
		return playerInfo;
	}

}

PlayerStorage.init();