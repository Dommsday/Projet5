var FightGolem = {

	storageGolem: window.sessionStorage,
	btnAttakGolem : document.getElementById("button-attak-golem"),
	lifeGolem: document.getElementById("life-golem"),
	lifePlayer: document.getElementById("life_players"),
	damageGolem: document.getElementById("damages-golem"),
	cadreGolem : document.getElementById("golem1"),
	choiseRoad: document.getElementById("choise-road"),
	
	init: function(){

		this.hiddenRoad();
		this.attakPlayerGolem();
		
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

			//Si le taux de chance est supérieur à 30
			if(chance >= 30){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				let lifeGolem = golemLife - playerDamage;

				FightGolem.lifeGolem.textContent = lifeGolem;

				FightGolem.storageGolem.setItem("lifeGolem", lifeGolem);

				FightGolem.cadreGolem.style.border ="2px solid red";

				setTimeout(function(){

					FightGolem.cadreGolem.style.border ="none";
				}, 1000);

				if(FightGolem.lifeGolem.textContent <= 0){

					FightGolem.lifeGolem.textContent = 0;
				
					setTimeout(function(){
						FightGolem.cadreGolem.style.display = "none";

						FightGolem.choiseRoad.style.display="block";
					}, 800);

				}

				FightGolem.lifeGolem.textContent = FightGolem.storageGolem.getItem("lifeGolem");

			//Si le taux de chance est inférieur à 35
			}else{

				alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");
			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightGolem.lifeGolem.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightGolem.attakEnemy();

				},1200);

			}else{

				alert("l'ennemi est mort ");

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

				FightGolem.lifePlayer.style.background ="#FFF";
			}, 900);

			FightGolem.lifePlayer.textContent = newLifePlayer;

			FightGolem.storageGolem.setItem('lifePlayer', FightGolem.lifePlayer.textContent);

			if(FightGolem.storageGolem.getItem('lifePlayer') < 0){
				alert("Il vous reste 0 points de vie");
			}else{
				alert("Il vous reste "+FightGolem.storageGolem.getItem('lifePlayer')+ "points de vie");
			}

			

			//Si le joueur à 0 points de vie
			if(FightGolem.lifePlayer.textContent < 0){

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
	}
	
}

FightGolem.init();