var FightCrow = {

	storageCrow: window.sessionStorage,
	btnAttakCrow : document.getElementById("button-attak-crow"),
	lifeCrow: document.getElementById("life-crow"),
	lifePlayer: document.getElementById("life_players"),
	damageCrow: document.getElementById("damages-crow"),
	cadreCrow : document.getElementById("crow1"),
	choiseRoad: document.getElementById("choise-road"),
	chest : document.getElementById("chest1-fightTwo"),

	init: function(){

		this.hiddeChest();
		this.attakPlayerCrow();
		
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

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let crowLife = FightCrow.lifeCrow.textContent;
			let playerDamage = PlayerStorage.playerDamage();

			//Si le taux de chance est supérieur à 40
			if(chance >= 30){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				let lifeCrow = crowLife - playerDamage;

				FightCrow.lifeCrow.textContent = lifeCrow;

				FightCrow.storageCrow.setItem("lifeCrow", lifeCrow);

				FightCrow.cadreCrow.style.border ="2px solid red";

				setTimeout(function(){

					FightCrow.cadreCrow.style.border ="none";
				}, 1000);


				//Si la vie de l'ennemi est inférieur à 0
				if(FightCrow.lifeCrow.textContent <= 0 ){

					FightCrow.lifeCrow.textContent = 0;

					setTimeout(function(){
						FightCrow.cadreCrow.style.display = "none";

					FightCrow.choiseRoad.style.display="block";
					FightCrow.chest.style.display="block";
					}, 800);
				}

				FightCrow.lifeCrow.textContent = FightCrow.storage.getItem("lifeCrow");

			//Si le taux de chance est inférieur à 35
			}else{

				alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");
			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightCrow.lifeCrow.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightCrow.attakEnemy();

				},1200);

			}else{

				alert("l'ennemi est mort ");

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storageInfo(FightCrow.lifePlayer.textContent);

		alert("Vous avez "+PlayerStorage.storageInfo(playerLife)+" points de vie");
		
		let crowDamage = FightCrow.damageCrow.textContent;

		if(chance >= 30){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			let newLifePlayer = playerLife - crowDamage;

			FightCrow.lifePlayer.style.background="red";

			setTimeout(function(){

				FightCrow.lifePlayer.style.background ="#FFF";
			}, 900);

			FightCrow.lifePlayer.textContent = newLifePlayer;

			FightCrow.storageCrow.setItem('lifePlayer', FightCrow.lifePlayer.textContent);

			alert("Il vous reste "+PlayerStorage.storageInfo(FightCrow.storageCrow.getItem('lifePlayer'))+ "points de vie");

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

			alert("Il vous reste "+PlayerStorage.storageInfo(FightCrow.storageCrow.getItem('lifePlayer'))+ "points de vie");
		}
	}
	
}

FightCrow.init();