var FightGolem = {

	storageGolem: window.sessionStorage,
	btnAttakGolem : document.getElementById("button-attak-golem"),
	lifeGolem: document.getElementById("life-golem"),
	lifePlayer: document.getElementById("life_players"),
	damageGolem: document.getElementById("damages-golem"),
	cadreGolem : document.getElementById("golem1"),
	choiseRoad: document.getElementById("choise-road"),

	messageFail: document.getElementById("message_fail"),
	
	init: function(){

		FightGolem.messageFail.style.display="none";

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
			if(chance >= 25){

				let newLifeGolem = golemLife - playerDamage;

				FightGolem.storageGolem.setItem("newLifeGolem", newLifeGolem);

				FightGolem.lifeGolem.textContent = newLifeGolem;

				FightGolem.cadreGolem.style.border ="2px solid red";
				FightGolem.btnAttakGolem.disabled = true;

				setTimeout(function(){

					FightGolem.cadreGolem.style.border ="none";
					FightGolem.btnAttakGolem.disabled = false;
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightGolem.lifeGolem.textContent <= 0 ){

					FightGolem.lifeGolem.textContent = 0;

					let deadGolem = FightGolem.lifeGolem.textContent;

					FightGolem.storageGolem.setItem("deadGolem", deadGolem);

					FightGolem.lifeGolem.textContent = FightGolem.storageGolem.getItem("deadGolem");

					setTimeout(function(){
						FightGolem.cadreGolem.style.display = "none";

					FightGolem.choiseRoad.style.display="block";
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				FightGolem.cadreGolem.style.marginLeft = "30%";
				FightGolem.btnAttakGolem.disabled = true;

				setTimeout(function(){
					FightGolem.cadreGolem.style.marginLeft = "40%";
					FightGolem.cadreGolem.style.marginTop = "10%";
					FightGolem.btnAttakGolem.disabled = false;
				},600);
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

		if(chance >= 26){

			PlayerStorage.containerDamages.style.border="10px solid red";

			const audioDead = document.getElementById("audio_pain");
			audioDead.play();
			
			FightGolem.btnAttakGolem.disabled = true;

				setTimeout(function(){

					PlayerStorage.containerDamages.style.border ="none";
					FightGolem.btnAttakGolem.disabled = false;
				}, 1000);

			let newLifePlayer = playerLife - golemDamage;

			FightGolem.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightGolem.lifePlayer.textContent = newLifePlayer;

			FightGolem.storageGolem.setItem('lifePlayer', FightGolem.lifePlayer.textContent);

			//Si le joueur à 0 points de vie
			if(FightGolem.lifePlayer.textContent <= 0){

				FightGolem.lifePlayer.textContent = 0;

				FightGolem.btnAttakGolem.disabled = true;

				const audioDead = document.getElementById("audio_dead");
				audioDead.play();

				setTimeout(function(){

				document.location.href="/game/deadgame.html";

				FightGolem.storageGolem.clear();
				PlayerStorage.storagePlayer.clear();
				},2000);
					
			}

				
		}else{

			FightGolem.messageFail.style.display="block";
			FightGolem.btnAttakGolem.disabled = true;

				setTimeout(function(){
					FightCrow.messageFail.style.display="none";
					FightGolem.btnAttakGolem.disabled = false;
				}, 1500);
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