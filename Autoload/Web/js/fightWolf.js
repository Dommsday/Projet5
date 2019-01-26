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

		this.hiddeChest();
		this.attakPlayerWolf();
		
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

			alert("attaque de loup");

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let wolfLife = FightWolf.lifeWolf.textContent;
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 40
			if(chance >= 30){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				let lifeWolf = wolfLife - playerDamage;

				FightWolf.lifeWolf.textContent = lifeWolf;

				FightWolf.storageWolf.setItem("lifeWolf", lifeWolf);

				FightWolf.cadreWolf.style.border ="2px solid red";

				setTimeout(function(){

					FightWolf.cadreWolf.style.border ="none";
				}, 1000);


				//Si la vie de l'ennemi est inférieur à 0
				if(FightWolf.lifeWolf.textContent <= 0 ){

					FightWolf.lifeWolf.textContent = 0;

					setTimeout(function(){
						FightWolf.cadreWolf.style.display = "none";

					FightWolf.choiseRoad.style.display="block";
					FightWolf.chest.style.display="block";
					}, 800);
				}

				FightWolf.lifeWolf.textContent = FightWolf.storageWolf.getItem("lifeWolf");

			//Si le taux de chance est inférieur à 35
			}else{

				alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");
			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightWolf.lifeWolf.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightWolf.attakEnemy();

				},1200);

			}else{

				alert("l'ennemi est mort ");

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
		let wolfDamage = FightWolf.damageWolf.textContent;

		if(chance >= 35){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			let newLifePlayer = playerLife - wolfDamage;

			FightWolf.lifePlayer.style.background="red";

			setTimeout(function(){

				FightWolf.lifePlayer.style.background ="#FFF";
			}, 900);

			FightWolf.lifePlayer.textContent = newLifePlayer;

			FightWolf.storageWolf.setItem('lifePlayer', FightWolf.lifePlayer.textContent);

			if(FightWolf.storageWolf.setItem('lifePlayer') < 0){
				alert("Il vous reste 0 points de vie");
			}else{
				alert("Il vous reste "+FightWolf.storageWolf.getItem('lifePlayer')+ "points de vie");
			}

			

			//Si le joueur à 0 points de vie
			if(FightWolf.lifePlayer.textContent <= 0){

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
	}
	
}

FightWolf.init();