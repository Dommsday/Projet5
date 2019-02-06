var FightBat = {
	storageBat : window.sessionStorage,
	btnAttakBat : document.getElementById("button-attak-bat"),//Bouton "Attaquer"
	lifeBat: document.getElementById("life-bat"),//Vie de la chauves-souris
	damageBat: document.getElementById("damages-bat"),//Dégâts de l'ennemi
	cadreBat : document.getElementById("bat1"),//Div entière contenant la chauve-souris
	choiseRoad: document.getElementById("choise-road"),//Div du lien pour les
	lifePlayer : document.getElementById("life_players"),

	info_game: document.getElementById("info-game"),

	text_action_bat: document.createElement("p"),
	text_action_player: document.createElement("p"),

	init: function(){

		FightBat.refresh();
		FightBat.hiddenRoad();
		FightBat.attakPlayerBat();
		
	},

	hiddenRoad: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightBat.lifeBat.textContent) > 0){

			FightBat.choiseRoad.style.display="none";
		}

	},


	attakPlayerBat: function(){

		//Quand on attaque l'ennemi
		FightBat.btnAttakBat.addEventListener("click", function(){

			FightBat.endStorageAcorn();

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let batLife = FightBat.storageBat.getItem("beginLife");
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 35
			if(chance >= 35){

				//alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				FightBat.text_action_player.textContent = "Votre taux de chance est de "+chance+" vous touchez l'ennemi";

				FightBat.text_action_player.setAttribute("class", "action_player");

				FightBat.storageBat.setItem("text_action_player", FightBat.text_action_player.textContent);
					
				FightBat.info_game.appendChild(FightBat.text_action_player);

				let newLifeBat = batLife - playerDamage;

				//alert("la vie de la bat est de "+newLifeBat);

				FightBat.storageBat.setItem("newLifeBat", newLifeBat);

				//alert("La nouvelle vie de bat est "+FightBat.storageBat.getItem("newLifeBat"));

				FightBat.lifeBat.textContent = newLifeBat;

				//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

				//FightBat.lifeBat.textContent = FightBat.storageBat.getItem("lifeBat");

				FightBat.cadreBat.style.border ="2px solid red";

				setTimeout(function(){

					FightBat.cadreBat.style.border ="none";
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightBat.lifeBat.textContent < 0 ){

					FightBat.lifeBat.textContent = 0;

					let deadBat = FightBat.lifeBat.textContent;

					FightBat.storageBat.setItem("deadBat", deadBat);

					//alert("La vie de la bat morte est de "+FightBat.storageBat.getItem("deadBat"));

					FightBat.text_action_player.textContent = "l'ennemi est mort";

					FightBat.text_action_player.setAttribute("class", "action_player");

					FightBat.storageBat.setItem("text_action_player", FightBat.text_action_player.textContent);
					
					FightBat.info_game.appendChild(FightBat.text_action_player);

					//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

					FightBat.lifeBat.textContent = FightBat.storageBat.getItem("deadBat");

					setTimeout(function(){
						FightBat.cadreBat.style.display = "none";

					FightBat.choiseRoad.style.display="block";
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				//alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");

				FightBat.text_action_player.textContent = "Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi";

				FightBat.text_action_player.setAttribute("class", "action_player");

				FightBat.storageBat.setItem("text_action_player", FightBat.text_action_player.textContent);
					
				FightBat.info_game.appendChild(FightBat.text_action_player);

			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightBat.lifeBat.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightBat.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

			let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
			let batDamage = FightBat.damageBat.textContent;

			if(chance >= 20){

				FightBat.text_action_bat.textContent = "le taux de chance de l'ennemi est de "+chance+" il vous touche";

				FightBat.storageBat.setItem("text_action_bat", FightBat.text_action_bat.textContent);

				FightBat.text_action_bat.setAttribute("class", "action_enemy");
					
				FightBat.info_game.appendChild(FightBat.text_action_bat);

				let newLifePlayer = playerLife - batDamage;

				FightBat.lifePlayer.style.background="#DB2B30";

				setTimeout(function(){

					FightBat.lifePlayer.style.background ="inherit";
				}, 900);

				FightBat.lifePlayer.textContent = newLifePlayer;

				FightBat.storageBat.setItem('lifePlayer', FightBat.lifePlayer.textContent);

				//Si le joueur à 0 points de vie
				if(FightBat.lifePlayer.textContent <= 0){

					FightBat.lifePlayer.textContent = 0;

					setTimeout(function(){

						alert("Vous êtes mort");
						//document.location.href="/";

						FightBat.storageBat.clear();
						PlayerStorage.storagePlayer.clear();
					},1000);
					
				}

				
			}else{

				FightBat.text_action_bat.textContent = "Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas";

				FightBat.text_action_bat.setAttribute("class", "action_enemy");

				FightBat.storageBat.setItem("text_action_bat", FightBat.text_action_bat.textContent);
					
				FightBat.info_game.appendChild(FightBat.text_action_bat);
			}
	},

	endStorageAcorn: function(){

			TakeAcorn.display = 1;

			TakeAcorn.storageAcorn.setItem("displayAcorn", TakeAcorn.display);
			
	},

	refresh: function(){

		if(FightBat.storageBat.length > 0){

			FightBat.storageBat.setItem("beginLife", FightBat.lifeBat.textContent);

			FightBat.lifeBat.textContent = FightBat.storageBat.getItem("beginLife");

			if(FightBat.storageBat.getItem("newLifeBat") !== null){
				FightBat.lifeBat.textContent = FightBat.storageBat.getItem("newLifeBat");

				if(FightBat.storageBat.getItem("newLifeBat") <= FightBat.storageBat.getItem("deadBat")){
					FightBat.lifeBat.textContent = FightBat.storageBat.getItem("deadBat");
					FightBat.cadreBat.style.display = "none";
				}
			}
		}
	}
	
}

FightBat.init();