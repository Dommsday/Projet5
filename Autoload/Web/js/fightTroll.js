var FightTroll = {

	storageTroll: window.sessionStorage,
	btnAttakTroll : document.getElementById("button-attak-troll"),
	lifeTroll: document.getElementById("life-troll"),
	lifePlayer: document.getElementById("life_players"),
	damageTroll: document.getElementById("damages-troll"),
	cadreTroll : document.getElementById("troll"),
	endGame: document.getElementById("endgame"),
	
	init: function(){

		FightTroll.refresh();
		FightTroll.attakPlayerTroll();

	},

	hiddeEnd: function(){

		//Si la vie de l'ennemi est supérieur à 0 le lien de la fin du jeu est invisble
		if(Number(FightTroll.lifeTroll.textContent) > 0){

			FightTroll.endGame.style.display = "none";
		}
	},

	attakPlayerTroll: function(){

		//Quand on attaque l'ennemi
		FightTroll.btnAttakTroll.addEventListener("click", function(){

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let trollLife = FightTroll.lifeTroll.textContent;
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 40
			if(chance >= 10){

				//alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				//FightGolem.text_action_player.textContent = "Votre taux de chance est de "+chance+" vous touchez l'ennemi";

				//FightBat.text_action_player.setAttribute("class", "action_player");

				//FightBat.storageBat.setItem("text_action_player", FightBat.text_action_player.textContent);
					
				//FightBat.info_game.appendChild(FightBat.text_action_player);

				let newLifeTroll = trollLife - playerDamage;

				//alert("la vie de la bat est de "+newLifeBat);

				FightTroll.storageTroll.setItem("newLifeTroll", newLifeTroll);

				//alert("La nouvelle vie de bat est "+FightBat.storageBat.getItem("newLifeBat"));

				FightTroll.lifeTroll.textContent = newLifeTroll;

				//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

				//FightBat.lifeBat.textContent = FightBat.storageBat.getItem("lifeBat");

				FightTroll.cadreTroll.style.border ="2px solid red";

				setTimeout(function(){

					FightTroll.cadreTroll.style.border ="none";
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightTroll.lifeTroll.textContent <= 0 ){

					FightTroll.lifeTroll.textContent = 0;

					let deadTroll = FightTroll.lifeTroll.textContent;

					FightTroll.storageTroll.setItem("deadTroll", deadTroll);

					//alert("La vie de la bat morte est de "+FightBat.storageBat.getItem("deadBat"));

					//FightGolem.text_action_player.textContent = "l'ennemi est mort";

					//FightGolem.text_action_player.setAttribute("class", "action_player");

					//FightGolem.storageGolem.setItem("text_action_player", FightGolem.text_action_player.textContent);
					
					//FightGolem.info_game.appendChild(FightGolem.text_action_player);

					//FightBat.storageBat.setItem("lifeBat", FightBat.lifeBat.textContent);

					FightTroll.lifeTroll.textContent = FightTroll.storageTroll.getItem("deadTroll");

					setTimeout(function(){
						FightTroll.cadreTroll.style.display = "none";

						setTimeout(function(){
							document.location.href="/game/endgame.html";
						},1000);
					
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
			if(FightTroll.lifeTroll.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightTroll.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
		let trollDamage = FightTroll.damageTroll.textContent;

		if(chance >= 60){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			let newLifePlayer = playerLife - trollDamage;

			FightTroll.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightTroll.lifePlayer.textContent = newLifePlayer;

			FightTroll.storageTroll.setItem('lifePlayer', FightTroll.lifePlayer.textContent);

			if(FightTroll.storageTroll.getItem('lifePlayer') <= 0){
				alert("Il vous reste 0 points de vie");
			}else{

				alert("Il vous reste "+FightTroll.storageTroll.getItem('lifePlayer')+ "points de vie");
			}

			//Si le joueur à 0 points de vie
			if(FightTroll.lifePlayer.textContent < 0){

				FightTroll.lifePlayer.textContent = 0;

					setTimeout(function(){
						
					alert("Vous êtes mort");

					FightTroll.storageTroll.clear();
					PlayerStorage.storagePlayer.clear();
				},1000);
					
			}

				
		}else{

			alert("Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas");

			alert("Il vous reste "+FightTroll.storageTroll.getItem('lifePlayer')+ "points de vie");
		}
	},

	refresh: function(){

		if(FightTroll.storageTroll.length > 0){

			FightTroll.storageTroll.setItem("beginTroll", FightTroll.lifeTroll.textContent);

			FightTroll.lifeTroll.textContent = FightTroll.storageTroll.getItem("beginTroll");

			if(FightTroll.storageTroll.getItem("newLifeTroll") !== null){
				FightTroll.lifeTroll.textContent = FightTroll.storageTroll.getItem("newLifeTroll");

				if(FightTroll.storageTroll.getItem("newLifeTroll") <= FightTroll.storageTroll.getItem("deadTroll")){
					FightTroll.lifeTroll.textContent = FightTroll.storageTroll.getItem("deadTroll");
					FightTroll.cadreTroll.style.display = "none";
				}
			}
		}
	}
}

FightTroll.init();