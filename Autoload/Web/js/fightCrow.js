var FightCrow = {

	storageCrow: window.sessionStorage,
	btnAttakCrow : document.getElementById("button-attak-crow"),
	lifeCrow: document.getElementById("life-crow"),
	lifePlayer: document.getElementById("life_players"),
	damageCrow: document.getElementById("damages-crow"),
	cadreCrow : document.getElementById("crow1"),
	choiseRoad: document.getElementById("choise-road"),
	chest : document.getElementById("chest1"),

	init: function(){

		FightCrow.refresh();
		FightCrow.hiddeChest();
		FightCrow.attakPlayerCrow();
	
		
	},

	hiddeChest: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightCrow.lifeCrow.textContent) > 0){

			FightCrow.choiseRoad.style.display = "none";
			FightCrow.chest.style.display = "none";

		}
	},

	attakPlayerCrow: function(){

		//Quand on attaque l'ennemi
		FightCrow.btnAttakCrow.addEventListener("click", function(){

			FightCrow.endStorageAcorn();

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let crowLife = FightCrow.storageCrow.getItem("beginLife");
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 40
			if(chance >= 30){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				let newLifeCrow = crowLife - playerDamage;

				FightCrow.storageCrow.setItem("newLifeCrow", newLifeCrow);

				FightCrow.lifeCrow.textContent = newLifeCrow;

				FightCrow.cadreCrow.style.border ="2px solid red";

				setTimeout(function(){

					FightCrow.cadreCrow.style.border ="none";
				}, 1000);


			

				//Si la vie de l'ennemi est inférieur à 0
				if(FightCrow.lifeCrow.textContent <= 0 ){

					FightCrow.lifeCrow.textContent = 0;

					let deadCrow = FightCrow.lifeCrow.textContent;

					FightCrow.storageCrow.setItem("deadCrow", deadCrow);

					//alert("La vie de la bat morte est de "+FightBat.storageBat.getItem("deadBat"));

					//FightCrow.text_action_player.textContent = "l'ennemi est mort";

					//FightCrow.text_action_player.setAttribute("class", "action_player");

					//FightCrow.storageCrow.setItem("text_action_player", FightCrow.text_action_player.textContent);
					
					//FightCrow.info_game.appendChild(FightCrow.text_action_player);

					//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

					FightCrow.lifeCrow.textContent = FightCrow.storageCrow.getItem("deadCrow");

					setTimeout(function(){
						FightCrow.cadreCrow.style.display = "none";
						FightCrow.chest.style.display = "block";
						FightCrow.choiseRoad.style.display="block";
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
			if(FightCrow.lifeCrow.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightCrow.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
		let crowDamage = FightCrow.damageCrow.textContent;

		if(chance >= 30){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			let newLifePlayer = playerLife - crowDamage;

			FightCrow.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightCrow.lifePlayer.textContent = newLifePlayer;

			FightCrow.storageCrow.setItem('lifePlayer', FightCrow.lifePlayer.textContent);

			if(FightCrow.storageCrow.getItem('lifePlayer') < 0){
				alert("Il vous reste 0 points de vie");
			}else{

				alert("Il vous reste "+FightCrow.storageCrow.getItem('lifePlayer')+ "points de vie");
			}

			//Si le joueur à 0 points de vie
			if(FightCrow.lifePlayer.textContent <= 0){

				FightCrow.lifePlayer.textContent = 0;

					setTimeout(function(){
						
					alert("Vous êtes mort");

					FightCrow.storageCrow.clear();
					PlayerStorage.storagePlayer.clear();
				},1000);
					
			}

				
		}else{

			alert("Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas");

			alert("Il vous reste "+FightCrow.storageCrow.getItem('lifePlayer')+ "points de vie");
		}
	},

	endStorageAcorn: function(){

			TakeAcorn.display = 1;

			TakeAcorn.storageAcorn.setItem("displayAcorn", TakeAcorn.display);
			
	},

	refresh: function(){

		if(FightCrow.storageCrow.length > 0){
	
			FightCrow.storageCrow.setItem("beginLife", FightCrow.lifeCrow.textContent);

			FightCrow.lifeCrow.textContent = FightCrow.storageCrow.getItem("beginLife");

			if(FightCrow.storageCrow.getItem("newLifeCrow") !== null){
				FightCrow.lifeCrow.textContent = FightCrow.storageCrow.getItem("newLifeCrow");

				if(FightCrow.storageCrow.getItem("newLifeCrow") <= FightCrow.storageCrow.getItem("deadCrow")){
					FightCrow.lifeCrow.textContent = FightCrow.storageCrow.getItem("deadCrow");
					FightCrow.cadreCrow.style.display = "none";
				}
			}
		}

	}
	
}

FightCrow.init();