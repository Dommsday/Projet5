var PlayerStorage = {

	storagePlayer: window.sessionStorage,
	deconnexion: document.getElementById("deconnexion"),//Bouton de déconnexion
	newGame: document.getElementById("new-game"),
	lifePlayer: document.getElementById("life_players"),
	damagePlayer: document.getElementById("damages_players"),
	weaponPlayer: document.getElementById("weapon_players"),
	btnInventory : document.getElementById("button_inventory"),
	btnAttakEnemy: document.getElementsByClassName("button-attak-enemy"),//Bouton d'attaque

	btnInput : document.querySelector('input[type="submit"]'),

	all_modal_objects: document.getElementById("all-modal-objects"),
	modal_object: document.getElementsByClassName("modal-object"),
	modal_description: document.getElementsByClassName("modal-object-description"),
	modal_damages: document.getElementsByClassName("modal-object-damages"),
	modal_life: document.getElementsByClassName("modal-object-life"),
	modal_lifetime: document.getElementsByClassName("modal-object-lifetime"),
	modal_href: document.getElementsByClassName("modal-object-href"),

	all_modal_description: document.getElementById("all-modal-description"),
	
	spanLife: document.getElementById("life"),
	spanDamages: document.getElementById("damages"),

	statLife: document.getElementById("statLife"),
	statDamage: document.getElementById("statDamage"),
	nameWeapon: document.getElementById("nameWeapon"),
	statLifetime: document.getElementById("statLifetime"),

	textName: document.createElement("p"),
	textDescription: document.createElement("p"),
	textDamages: document.createElement("p"),
	textLife: document.createElement("p"),
	textLifetime: document.createElement("p"),
	btnObject: document.createElement("button"),

	//Valeur des dégâts par défault
	defaultDamages: 4,
	

	init: function(){

		PlayerStorage.refresh();
		
		PlayerStorage.hidden_all_modal();
		PlayerStorage.show_modal_description();
		PlayerStorage.attakEnemy();

		//Partie vie du joueur
		let playerLife = PlayerStorage.lifePlayer.textContent;
		PlayerStorage.storagePlayer.setItem("lifePlayer", playerLife);

		//Partie dégâts du joueur
		let damagePlayer = PlayerStorage.damagePlayer.textContent;
		PlayerStorage.storagePlayer.setItem("damagePlayer", damagePlayer);

		//On enregistre la valeur de dégâts par default
		PlayerStorage.storagePlayer.setItem("defaultDamages", PlayerStorage.defaultDamages);

		//Arme du joueur
		let weaponPlayer = PlayerStorage.weaponPlayer.textContent;
		PlayerStorage.storagePlayer.setItem("weaponPlayer", weaponPlayer);

		PlayerStorage.all_modal_description.style.display="none";

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

		PlayerStorage.statLife.textContent = PlayerStorage.lifePlayer.textContent;

		PlayerStorage.statDamage.textContent = PlayerStorage.damagePlayer.textContent;

		for(let i = 0; i< PlayerStorage.modal_object.length; i++){

			//QUAND ON SURVOLE LES DIFFERENTS OBJETS DE L'INVENTAIRE
			PlayerStorage.modal_object[i].addEventListener("mouseover",function(){

				for(let h = 0; h < PlayerStorage.modal_object.length; h++){

					if(i == h){
						
						//AFFICHE LE NOM 
						PlayerStorage.textName.textContent = "Nom : "+PlayerStorage.modal_object[h].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textName);
						PlayerStorage.all_modal_description.style.display="block";

					}
				}

				for(let j = 0; j < PlayerStorage.modal_description.length; j++){

					if(i == j){
						
						//AFFICHE LA DESCRIPTION
						PlayerStorage.textDescription.textContent = PlayerStorage.modal_description[j].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textDescription);
						PlayerStorage.all_modal_description.style.display="block";

					}
				}

				for(let k =0; k < PlayerStorage.modal_damages.length; k++){

					if(i == k){

						//AFFICHE LES DEGATS
						PlayerStorage.textDamages.textContent = "Dégâts : "+PlayerStorage.modal_damages[k].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textDamages);

					}
				}

				for(let l =0; l < PlayerStorage.modal_life.length; l++){

					if(i == l){

						//AFFICHE LE REGAIN DE VIE
						PlayerStorage.textLife.textContent = "Regain de vie : "+PlayerStorage.modal_life[l].textContent;

						PlayerStorage.all_modal_description.appendChild(PlayerStorage.textLife);
					}
				}

				for(let m =0; m < PlayerStorage.modal_lifetime.length; m++){

					if(i == m){

						//AFFICHE LE NBR D'UTILISATION
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

			//QUAND ON CLIQUE SUR L'UN DES OBJET DE L'INVENTAIRE
			PlayerStorage.modal_object[i].addEventListener("click",function(){

				for(let n = 0; n < PlayerStorage.modal_href.length; n++){

					if(i == n){

						PlayerStorage.modal_href[i].textContent = "Utiliser";

						PlayerStorage.btnObject.setAttribute("type", "button");
						PlayerStorage.btnObject.setAttribute("class", "btnModal");
						PlayerStorage.btnObject.appendChild(PlayerStorage.modal_href[i]);

						//AFFICHE LE BOUTON D'UTILISATION
						PlayerStorage.all_modal_objects.appendChild(PlayerStorage.btnObject);
						PlayerStorage.btnObject.style.display="block";
					}
				}

				PlayerStorage.all_modal_description.style.display="none";
				
				PlayerStorage.spanLife.textContent = "";
				PlayerStorage.spanDamages.textContent = "";

				/*if(!(PlayerStorage.modal_lifetime[i].textContent == 1)){
					//PlayerStorage.statLifetime.textContent = "";
				}*/	

				//PlayerStorage.statDamage = PlayerStorage.modal_damages[i].textContent;
				let valueSpanDamage = PlayerStorage.modal_damages[i].textContent;
				PlayerStorage.spanDamages.textContent = valueSpanDamage;
				

				//Si le nombre "Utilisation" n'a pas la valeur 1
				if(!(PlayerStorage.modal_lifetime[i].textContent == 1)){

					PlayerStorage.nameWeapon.textContent = PlayerStorage.modal_object[i].textContent;
					PlayerStorage.statLifetime.textContent = PlayerStorage.modal_lifetime[i].textContent;
					PlayerStorage.statDamage.textContent = PlayerStorage.storagePlayer.getItem("defaultDamages");
				}

				
				let valueSpanLife = PlayerStorage.modal_life[i].textContent; 
				PlayerStorage.spanLife.textContent = valueSpanLife;

			});
		}

		//QUAND ON CLIQUE SUR 'Utiliser'
		PlayerStorage.btnObject.addEventListener("click",function(){

			let newNameWeapon = PlayerStorage.nameWeapon.textContent;
			PlayerStorage.storagePlayer.setItem("objectName", newNameWeapon);

			let newStatLife = Number(PlayerStorage.spanLife.textContent) + Number(PlayerStorage.statLife.textContent);
			PlayerStorage.storagePlayer.setItem("objectLife", newStatLife);

			let newStatDamage = Number(PlayerStorage.spanDamages.textContent) + Number(PlayerStorage.statDamage.textContent);
			PlayerStorage.storagePlayer.setItem("objectDamages", newStatDamage);

			/*let newStatLife = Number(PlayerStorage.spanLife.textContent) + Number(PlayerStorage.statLife.textContent);
			PlayerStorage.storagePlayer.setItem("objectLife", newStatLife);

			let newStatDamage = Number(PlayerStorage.spanDamage.textContent) + Number(PlayerStorage.storagePlayer.getItem('damagePlayer'));
			PlayerStorage.storagePlayer.setItem("objectDamages", newStatDamage);*/

			let newStatLifetime = PlayerStorage.statLifetime.textContent;
			PlayerStorage.storagePlayer.setItem("objectLifetime", newStatLifetime);

			PlayerStorage.spanLife.textContent = "";
			PlayerStorage.spanDamages.textContent = "";

			//VALEUR DANS LA BARRE DU JEU
			PlayerStorage.lifePlayer.textContent = PlayerStorage.storagePlayer.getItem("objectLife");
			PlayerStorage.damagePlayer.textContent = PlayerStorage.storagePlayer.getItem("objectDamages");
			

			//VALEUR DANS L'INVENTAIRE
			PlayerStorage.spanDamages.textContent = PlayerStorage.storagePlayer.getItem("objectDamages");

			//Si le nombre "Utilisation" n'a pas la valeur 1
			if(!(PlayerStorage.storagePlayer.getItem("objectLifetime") == 1)){

				//DANS LA BARRE DU JEU
				PlayerStorage.weaponPlayer.textContent = PlayerStorage.storagePlayer.getItem("objectName");

				//VALEUR DE L'INVENTAIRE
				PlayerStorage.nameWeapon.textContent = PlayerStorage.storagePlayer.getItem("objectName");
				PlayerStorage.spanLife.textContent = PlayerStorage.storagePlayer.getItem("objectLife");
				//PlayerStorage.statLifetime.textContent = newStatLifetime;
			}

			PlayerStorage.storagePlayer.setItem("objectName", PlayerStorage.weaponPlayer.textContent);
			PlayerStorage.storagePlayer.setItem("lifePlayer", PlayerStorage.lifePlayer.textContent);
			PlayerStorage.storagePlayer.setItem("damagePlayer", PlayerStorage.damagePlayer.textContent);
			PlayerStorage.storagePlayer.setItem("objectLifetime", PlayerStorage.statLifetime.textContent);

		});

		//SI L'INVENTAIRE EST PLEIN
		if(PlayerStorage.modal_object.length === 9){
			PlayerStorage.btnInventory.classList.add("full_inventory");
			PlayerStorage.btnInput.disabled = true;
		}
	},

	refresh: function(){

		if(PlayerStorage.storagePlayer.length > 0){

			PlayerStorage.lifePlayer.textContent = PlayerStorage.storagePlayer.getItem("lifePlayer");
			PlayerStorage.damagePlayer.textContent = PlayerStorage.storagePlayer.getItem("damagePlayer");

			if(PlayerStorage.storagePlayer.getItem("objectLifetime") >= 1){
			PlayerStorage.statLifetime.textContent = PlayerStorage.storagePlayer.getItem("objectLifetime");

			//BARRE DU JEU
			PlayerStorage.weaponPlayer.textContent = PlayerStorage.storagePlayer.getItem("objectName");
			//DANS L'INVENTAIRE
			PlayerStorage.nameWeapon.textContent = PlayerStorage.storagePlayer.getItem("objectName");
			}
		}
	},

	attakEnemy: function(){

		for(let i = 0; i < PlayerStorage.btnAttakEnemy.length; i++){

			PlayerStorage.btnAttakEnemy[i].addEventListener("click", function(){

				if(PlayerStorage.statLifetime.textContent !== "/"){

				let newStatLifetime = Number(PlayerStorage.storagePlayer.getItem("objectLifetime")) - 1;

				//VALEUR DANS L'INVENTAIRE
				PlayerStorage.statLifetime.textContent = newStatLifetime;

				PlayerStorage.storagePlayer.setItem("objectLifetime", PlayerStorage.statLifetime.textContent);

				if(PlayerStorage.statLifetime.textContent <= 0){

					alert("!!! Arme brisée !!!!!")

					PlayerStorage.statLifetime.textContent = "/";
					PlayerStorage.weaponPlayer.textContent = "Mains nues";
					PlayerStorage.nameWeapon.textContent = "Mains nues";

					//On remet la force initiale
					let restartDamages = PlayerStorage.storagePlayer.getItem('defaultDamages');


					PlayerStorage.damagePlayer.textContent = restartDamages;
					PlayerStorage.statDamage.textContent = restartDamages;

					PlayerStorage.storagePlayer.setItem('damagePlayer', PlayerStorage.damagePlayer.textContent)
					PlayerStorage.storagePlayer.setItem("objectDamages", PlayerStorage.statDamage.textContent);
				}

			}

			});
		}
	}
}

PlayerStorage.init();