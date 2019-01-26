var PlayerStorage = {

	storagePlayer: window.sessionStorage,
	deconnexion: document.getElementById("deconnexion"),//Bouton de déconnexion
	newGame: document.getElementById("new-game"),
	lifePlayer: document.getElementById("life_players"),
	damagePlayer: document.getElementById("damages_players"),
	//lifeStorage: null,
	//damageStorage: null,

	all_modal_objects: document.getElementById("all-modal-objects"),
	modal_object: document.getElementsByClassName("modal-object"),
	modal_description: document.getElementsByClassName("modal-object-description"),
	modal_damages: document.getElementsByClassName("modal-object-damages"),
	modal_life: document.getElementsByClassName("modal-object-life"),
	modal_lifetime: document.getElementsByClassName("modal-object-lifetime"),

	all_modal_description: document.getElementById("all-modal-description"),
	btnObject: document.getElementById("btnObject"),
	spanLife: document.getElementById("life"),
	spanDamages: document.getElementById("damages"),

	textDescription: document.createElement("p"),
	textDamages: document.createElement("p"),
	textLife: document.createElement("p"),
	textLifetime: document.createElement("p"),
	

	init: function(){

		PlayerStorage.refresh();
		//Partie vie du joueur
		let playerLife = PlayerStorage.lifePlayer.textContent;
		
		PlayerStorage.storagePlayer.setItem("lifePlayer", playerLife);

		//PlayerStorage.lifeStorage = PlayerStorage.storagePlayer.getItem("lifePlayer");
		//alert("La MEMOIRE VIE est de "+PlayerStorage.lifeStorage);

		//Partie dégâts du joueur
		let damagePlayer = PlayerStorage.damagePlayer.textContent;

		PlayerStorage.storagePlayer.setItem("damagePlayer", damagePlayer);
		//PlayerStorage.damageStorage = PlayerStorage.storagePlayer.getItem("damagePlayer");

		PlayerStorage.btnObject.disabled = true;
		PlayerStorage.all_modal_description.style.display="none";

		this.hidden_all_modal();
		this.show_modal_description();

		PlayerStorage.deconnexion.addEventListener("click", function(){
			PlayerStorage.storagePlayer.clear();
		});

	},

	hidden_all_modal:function(){
		this.hidden_modal_description();
		this.hidden_modal_damages();
		this.hidden_modal_life();
		this.hidden_modal_lifetime();
	},

	hidden_modal_description: function(){

		for(let i = 0; i< PlayerStorage.modal_description.length; i++){
			PlayerStorage.modal_description[i].style.display="none";
		}
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

	hidden_modal_lifetime: function(){

		for(let i = 0; i< PlayerStorage.modal_lifetime.length; i++){
			PlayerStorage.modal_lifetime[i].style.display="none";
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

						PlayerStorage.textDamages.textContent = "Dégâts : "+PlayerStorage.modal_damages[k].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textDamages);

					}
				}

				for(let l =0; l < PlayerStorage.modal_life.length; l++){

					if(i == l){

						PlayerStorage.textLife.textContent = "Regain de vie : "+PlayerStorage.modal_life[l].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textLife);
					}
				}

				for(let m =0; m < PlayerStorage.modal_lifetime.length; m++){

					if(i == m){

						PlayerStorage.textLifetime.textContent = "Nombre d'utilisation : "+PlayerStorage.modal_lifetime[m].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textLifetime);
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
				PlayerStorage.storagePlayer.setItem("test", PlayerStorage.modal_object[i]);
				
				PlayerStorage.storagePlayer.setItem("objectLife", PlayerStorage.storageInfo(PlayerStorage.modal_life[i].textContent));
				PlayerStorage.storagePlayer.setItem("objectDamages", PlayerStorage.storageInfo(PlayerStorage.modal_damages[i].textContent));
				PlayerStorage.storagePlayer.setItem("objectName", PlayerStorage.storageInfo(PlayerStorage.modal_object[i].textContent));
				
				
				PlayerStorage.spanLife.textContent = "";
				PlayerStorage.spanDamages.textContent = "";
				PlayerStorage.spanLife.textContent += " + "+PlayerStorage.storagePlayer.getItem("objectLife");
				PlayerStorage.spanDamages.textContent += " + "+PlayerStorage.storagePlayer.getItem("objectDamages");

				//Quand on clique sur le bouton 'Utilisier'
				PlayerStorage.btnObject.addEventListener("click",function(){

					
					PlayerStorage.spanLife.textContent = "";
					PlayerStorage.spanDamages.textContent = "";

					PlayerStorage.lifePlayer.textContent = Number(PlayerStorage.storagePlayer.getItem("objectLife")) 
															+ Number(PlayerStorage.storagePlayer.getItem('lifePlayer'));
					alert(PlayerStorage.lifePlayer.textContent);

					PlayerStorage.all_modal_objects.removeChild(PlayerStorage.modal_object[i]);
				});
				
			});

		}
	},

	refresh: function(){

		if(PlayerStorage.storagePlayer.length > 0){
			
			PlayerStorage.lifePlayer.textContent = PlayerStorage.storagePlayer.getItem("lifePlayer");
			PlayerStorage.damagePlayer.textContent = PlayerStorage.storagePlayer.getItem("damagePlayer");
		}
	},

	/*playerLifeNum: function(){

		return PlayerStorage.lifeStorage.textContent;
	},

	playerDamageNum: function(){

		return PlayerStorage.damageStorage.textContent;
	},

	/*storageInfo: function(playerInfo){
		return playerInfo;
	}*/

}

PlayerStorage.init();