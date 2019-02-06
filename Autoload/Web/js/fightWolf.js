var FightWolf = {

	storageWolf: window.sessionStorage,
	btnAttakWolf : document.getElementById("button-attak-wolf"),
	lifeWolf: document.getElementById("life-wolf"),
	lifePlayer: document.getElementById("life_players"),
	damageWolf: document.getElementById("damages-wolf"),
	cadreWolf : document.getElementById("wolf1"),
	choiseRoad: document.getElementById("choise-road"),
	chest : document.getElementById("chest1"),

	init: function(){

		FightWolf.refresh();
		FightWolf.hiddeChest();
		FightWolf.attakPlayerWolf();
		
	},

	hiddeChest: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightWolf.lifeWolf.textContent) > 0){

			FightWolf.choiseRoad.style.display = "none";
			FightWolf.chest.style.display = "none";

		}
	},

	attakPlayerWolf: function(){

		//Quand on attaque l'ennemi
		FightWolf.btnAttakWolf.addEventListener("click", function(){

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let wolfLife = FightWolf.lifeWolf.textContent;
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 30
			if(chance >= 30){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				let newLifeWolf = wolfLife - playerDamage;

				FightWolf.storageWolf.setItem("newLifeWolf", newLifeWolf);

				FightWolf.lifeWolf.textContent = newLifeWolf;

				FightWolf.cadreWolf.style.border ="2px solid red";

				setTimeout(function(){

					FightWolf.cadreWolf.style.border ="none";
				}, 1000);


			

				//Si la vie de l'ennemi est inférieur à 0
				if(FightWolf.lifeWolf.textContent <= 0 ){

					FightWolf.lifeWolf.textContent = 0;

					let deadWolf= FightWolf.lifeWolf.textContent;

					FightWolf.storageWolf.setItem("deadWolf", deadWolf);

					//alert("La vie de la bat morte est de "+FightBat.storageBat.getItem("deadBat"));

					//FightCrow.text_action_player.textContent = "l'ennemi est mort";

					//FightCrow.text_action_player.setAttribute("class", "action_player");

					//FightCrow.storageCrow.setItem("text_action_player", FightCrow.text_action_player.textContent);
					
					//FightCrow.info_game.appendChild(FightCrow.text_action_player);

					//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

					FightWolf.lifeWolf.textContent = FightWolf.storageWolf.getItem("deadWolf");

					setTimeout(function(){
						FightWolf.cadreWolf.style.display = "none";
						FightWolf.chest.style.display = "block";
						FightWolf.choiseRoad.style.display="block";
					Fight
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");

				//FightCrow.text_action_player.textContent = "Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi";

				//FightCrow.text_action_player.setAttribute("class", "action_player");

				//FightCrow.storageBat.setItem("text_action_player", FightBat.text_action_player.textContent);
					
				//FightCrow.info_game.appendChild(FightCrow.text_action_player);

			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightWolf.lifeWolf.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightWolf.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
		let wolfDamage = FightWolf.damageWolf.textContent;

		if(chance >= 60){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			let newLifePlayer = playerLife - wolfDamage;

			FightWolf.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightWolf.lifePlayer.textContent = newLifePlayer;

			FightWolf.storageWolf.setItem('lifePlayer', FightWolf.lifePlayer.textContent);

			if(FightWolf.storageWolf.getItem('lifePlayer') < 0){
				alert("Il vous reste 0 points de vie");
			}else{
				alert("Il vous reste "+FightWolf.storageWolf.getItem('lifePlayer')+ "points de vie");
			}

			

			//Si le joueur à 0 points de vie
			if(FightWolf.lifePlayer.textContent < 0){

				FightWolf.lifePlayer.textContent = 0;
					setTimeout(function(){
					alert("Vous êtes mort");

					FightWolf.storageWolf.clear();
					PlayerStorage.storagePlayer.clear();
				},1000);
					
			}

				
		}else{

			alert("Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas");

			alert("Il vous reste "+FightWolf.storageWolf.getItem('lifePlayer')+ "points de vie");
		}
	},

	refresh: function(){

		if(FightWolf.storageWolf.length > 0){
	
			FightWolf.storageWolf.setItem("beginLife", FightWolf.lifeWolf.textContent);

			FightWolf.lifeWolf.textContent = FightWolf.storageWolf.getItem("beginLife");

			if(FightWolf.storageWolf.getItem("newLifeWolf") !== null){
				
				FightWolf.lifeWolf.textContent = FightWolf.storageWolf.getItem("newLifeWolf");

				if(FightWolf.storageWolf.getItem("newLifeWolf") <= FightWolf.storageWolf.getItem("deadWolf")){
					FightWolf.lifeWolf.textContent = FightWolf.storageWolf.getItem("deadWolf");
					FightWolf.cadreWolf.style.display = "none";
				}
			}
		}

	}
	
}

FightWolf.init();