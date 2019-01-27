var PlayerStorage = {

	storagePlayer: window.sessionStorage,
	deconnexion: document.getElementById("deconnexion"),//Bouton de déconnexion
	newGame: document.getElementById("new-game"),
	lifePlayer: document.getElementById("life_players"),
	damagePlayer: document.getElementById("damages_players"),
	btnInventory : document.getElementById("button_inventory"),
	//btnObject: document.getElementById("btnObject"),

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

	textDescription: document.createElement("p"),
	textDamages: document.createElement("p"),
	textLife: document.createElement("p"),
	textLifetime: document.createElement("p"),
	btnObject: document.createElement("button"),
	

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

		//PlayerStorage.btnObject.disabled = true;
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

		PlayerStorage.statLife.textContent = PlayerStorage.storagePlayer.getItem("lifePlayer");
		PlayerStorage.statDamage.textContent = PlayerStorage.storagePlayer.getItem("damagePlayer");

		for(let i = 0; i< PlayerStorage.modal_object.length; i++){




			//QUAND ON SURVOLE LES DIFFERENTS OBJETS DE L'INVENTAIRE
			PlayerStorage.modal_object[i].addEventListener("mouseover",function(){

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
				
				PlayerStorage.storagePlayer.setItem("objectLife", PlayerStorage.modal_life[i].textContent);
				PlayerStorage.storagePlayer.setItem("objectDamages", PlayerStorage.modal_damages[i].textContent);
				PlayerStorage.storagePlayer.setItem("objectName", PlayerStorage.modal_object[i].textContent);
				
				
				PlayerStorage.spanLife.textContent = "";
				PlayerStorage.spanDamages.textContent = "";
				PlayerStorage.spanLife.textContent += " + "+PlayerStorage.storagePlayer.getItem("objectLife");
				PlayerStorage.spanDamages.textContent += " + "+PlayerStorage.storagePlayer.getItem("objectDamages");

			});
		}

		//SI L'INVENTAIRE EST PLEIN
		if(PlayerStorage.modal_object.length === 9){
			PlayerStorage.btnInventory.classList.add("full_inventory");
			PlayerStorage.btnInput.disabled = true;
		}

		//QUAND ON CLIQUE SUR 'Utiliser'
		PlayerStorage.btnObject.addEventListener("click",function(){
					
			PlayerStorage.spanLife.textContent = "";
			PlayerStorage.spanDamages.textContent = "";

			let newStatLife = Number(PlayerStorage.storagePlayer.getItem("objectLife")) + Number(PlayerStorage.storagePlayer.getItem('lifePlayer'));
			let newStatDamage = Number(PlayerStorage.storagePlayer.getItem("objectDamages")) + Number(PlayerStorage.storagePlayer.getItem('damagePlayer'));

			PlayerStorage.lifePlayer.textContent = newStatLife;
			PlayerStorage.damagePlayer.textContent = newStatDamage;
			PlayerStorage.statLife.textContent = newStatLife;
			PlayerStorage.statDamage.textContent = newStatDamage;


			PlayerStorage.storagePlayer.setItem("lifePlayer", PlayerStorage.lifePlayer.textContent);
			PlayerStorage.storagePlayer.setItem("damagePlayer", PlayerStorage.damagePlayer.textContent);
					
		});
	},

	refresh: function(){

		if(PlayerStorage.storagePlayer.length > 0){
			
			PlayerStorage.lifePlayer.textContent = PlayerStorage.storagePlayer.getItem("lifePlayer");
			PlayerStorage.damagePlayer.textContent = PlayerStorage.storagePlayer.getItem("damagePlayer");
		}
	}
}

PlayerStorage.init();