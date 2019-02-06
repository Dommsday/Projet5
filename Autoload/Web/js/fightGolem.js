var FightGolem = {

	storageGolem: window.sessionStorage,
	btnAttakGolem : document.getElementById("button-attak-golem"),
	lifeGolem: document.getElementById("life-golem"),
	lifePlayer: document.getElementById("life_players"),
	damageGolem: document.getElementById("damages-golem"),
	cadreGolem : document.getElementById("golem1"),
	choiseRoad: document.getElementById("choise-road"),
	
	init: function(){

		FightGolem.refresh();
		FightGolem.hiddenRoad();
		FightGolem.attakPlayerGolem();
		
	},

	hiddenRoad: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightGolem.lifeGolem.textContent) > 0){

			FightGolem.choiseRoad.style.display="none";
		}

	},

	attakPlayerGolem: function(){

		//Quand on attaque l'ennemi
		FightGolem.btnAttakGolem.addEventListener("click", function(){

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let golemLife = FightGolem.lifeGolem.textContent;
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 35
			if(chance >= 35){

				//alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				//FightGolem.text_action_player.textContent = "Votre taux de chance est de "+chance+" vous touchez l'ennemi";

				//FightBat.text_action_player.setAttribute("class", "action_player");

				//FightBat.storageBat.setItem("text_action_player", FightBat.text_action_player.textContent);
					
				//FightBat.info_game.appendChild(FightBat.text_action_player);

				let newLifeGolem = golemLife - playerDamage;

				//alert("la vie de la bat est de "+newLifeBat);

				FightGolem.storageGolem.setItem("newLifeGolem", newLifeGolem);

				//alert("La nouvelle vie de bat est "+FightBat.storageBat.getItem("newLifeBat"));

				FightGolem.lifeGolem.textContent = newLifeGolem;

				//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

				//FightBat.lifeBat.textContent = FightBat.storageBat.getItem("lifeBat");

				FightGolem.cadreGolem.style.border ="2px solid red";

				setTimeout(function(){

					FightGolem.cadreGolem.style.border ="none";
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightGolem.lifeGolem.textContent <= 0 ){

					FightGolem.lifeGolem.textContent = 0;

					let deadGolem = FightGolem.lifeGolem.textContent;

					FightGolem.storageGolem.setItem("deadGolem", deadGolem);

					//alert("La vie de la bat morte est de "+FightBat.storageBat.getItem("deadBat"));

					//FightGolem.text_action_player.textContent = "l'ennemi est mort";

					//FightGolem.text_action_player.setAttribute("class", "action_player");

					//FightGolem.storageGolem.setItem("text_action_player", FightGolem.text_action_player.textContent);
					
					//FightGolem.info_game.appendChild(FightGolem.text_action_player);

					//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

					FightGolem.lifeGolem.textContent = FightGolem.storageGolem.getItem("deadGolem");

					setTimeout(function(){
						FightGolem.cadreGolem.style.display = "none";

					FightGolem.choiseRoad.style.display="block";
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				//alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");

				//FightGolem.text_action_player.textContent = "Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi";

				//FightGolem.text_action_player.setAttribute("class", "action_player");

				//FightGolem.storageBat.setItem("text_action_player", FightGolem.text_action_player.textContent);
					
				//FightGolem.info_game.appendChild(FightGolem.text_action_player);

			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightGolem.lifeGolem.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightGolem.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
		let golemDamage = FightGolem.damageGolem.textContent;

		if(chance >= 60){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			let newLifePlayer = playerLife - golemDamage;

			FightGolem.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightGolem.lifePlayer.textContent = newLifePlayer;

			FightGolem.storageGolem.setItem('lifePlayer', FightGolem.lifePlayer.textContent);

			if(FightGolem.storageGolem.getItem('lifePlayer') < 0){
				alert("Il vous reste 0 points de vie");
			}else{
				alert("Il vous reste "+FightGolem.storageGolem.getItem('lifePlayer')+ "points de vie");
			}

			

			//Si le joueur à 0 points de vie
			if(FightGolem.lifePlayer.textContent <= 0){

				FightGolem.lifePlayer.textContent = 0;
					setTimeout(function(){
					alert("Vous êtes mort");

					FightGolem.storageGolem.clear();
					PlayerStorage.storagePlayer.clear();
				},1000);
					
			}

				
		}else{

			alert("Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas");

			alert("Il vous reste "+FightGolem.storageGolem.getItem('lifePlayer')+ "points de vie");
		}
	},

	refresh: function(){

		if(FightGolem.storageGolem.length > 0){

			FightGolem.storageGolem.setItem("beginGolem", FightGolem.lifeGolem.textContent);

			FightGolem.lifeGolem.textContent = FightGolem.storageGolem.getItem("beginGolem");

			if(FightGolem.storageGolem.getItem("newLifeGolem") !== null){
				FightGolem.lifeGolem.textContent = FightGolem.storageGolem.getItem("newLifeGolem");

				if(FightGolem.storageGolem.getItem("newLifeGolem") <= FightGolem.storageGolem.getItem("deadGolem")){
					FightGolem.lifeGolem.textContent = FightGolem.storageGolem.getItem("deadGolem");
					FightGolem.cadreGolem.style.display = "none";
				}
			}
		}
	}
	
}

FightGolem.init();