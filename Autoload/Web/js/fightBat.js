var FightBat = {
	storageBat : window.sessionStorage,
	btnAttakBat : document.getElementById("button-attak-bat"),//Bouton "Attaquer"
	lifeBat: document.getElementById("life-bat"),//Vie de la chauves-souris
	damageBat: document.getElementById("damages-bat"),//Dégâts de l'ennemi
	cadreBat : document.getElementById("bat1"),//Div entière contenant la chauve-souris
	choiseRoad: document.getElementById("choise-road"),//Div du lien pour les
	lifePlayer : document.getElementById("life_players"),

	init: function(){

		this.attakPlayerBat();
	},


	attakPlayerBat: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightBat.lifeBat.textContent) > 0){

			FightBat.choiseRoad.style.display="none";
		}
		
		//Quand on attaque l'ennemi
		FightBat.btnAttakBat.addEventListener("click", function(){

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let batLife = FightBat.lifeBat.textContent;
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 35
			if(chance >= 35){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				let newLifeBat = batLife - playerDamage;

				FightBat.lifeBat.textContent = newLifeBat;

				FightBat.storageBat.setItem('newLifeBat', newLifeBat);

				FightBat.cadreBat.style.border ="2px solid red";

				setTimeout(function(){

					FightBat.cadreBat.style.border ="none";
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightBat.lifeBat.textContent <= 0 ){

					FightBat.lifeBat.textContent = 0;

					setTimeout(function(){
						FightBat.cadreBat.style.display = "none";

					FightBat.choiseRoad.style.display="block";
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");

			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightBat.lifeBat.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightBat.attakEnemy();

				},1200);

			}else{

				alert("l'ennemi est mort");

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

			let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
			let batDamage = FightBat.damageBat.textContent;

			if(chance >= 20){

				alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

				let newLifePlayer = playerLife - batDamage;

				FightBat.lifePlayer.style.background="red";

				setTimeout(function(){

					FightBat.lifePlayer.style.background ="#FFF";
				}, 900);

				FightBat.lifePlayer.textContent = newLifePlayer;

				FightBat.storageBat.setItem('lifePlayer', FightBat.lifePlayer.textContent);

				if(FightBat.storageBat.getItem('lifePlayer') < 0){

					alert("Il vous reste 0 points de vie");
				}else{
					alert("Il vous reste "+FightBat.storageBat.getItem('lifePlayer')+ "points de vie");
				}

				//Si le joueur à 0 points de vie
				if(FightBat.lifePlayer.textContent <= 0){

					FightBat.lifePlayer.textContent = 0;

					setTimeout(function(){

						alert("Vous êtes mort");

						FightBat.storageBat.clear();
						PlayerStorage.storagePlayer.clear();
					},1000);
					
				}

				
			}else{

				alert("Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas");

				alert("Il vous reste "+FightBat.storageBat.getItem('lifePlayer')+ "points de vie");
			}
	}
	
}

FightBat.init();