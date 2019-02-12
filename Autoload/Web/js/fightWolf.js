var FightWolf = {

	storageWolf: window.sessionStorage,
	btnAttakWolf : document.getElementById("button-attak-wolf"),
	lifeWolf: document.getElementById("life-wolf"),
	lifePlayer: document.getElementById("life_players"),
	damageWolf: document.getElementById("damages-wolf"),
	cadreWolf : document.getElementById("wolf1"),
	choiseRoad: document.getElementById("choise-road"),
	chest : document.getElementById("chest1"),

	messageFail: document.getElementById("message_fail"),

	init: function(){

		FightWolf.messageFail.style.display="none";

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
			if(chance >= 25){

				let newLifeWolf = wolfLife - playerDamage;

				FightWolf.storageWolf.setItem("newLifeWolf", newLifeWolf);

				FightWolf.lifeWolf.textContent = newLifeWolf;

				FightWolf.cadreWolf.style.border ="2px solid red";
				FightWolf.btnAttakWolf.disabled = true;

				setTimeout(function(){

					FightWolf.cadreWolf.style.border ="none";
					FightWolf.btnAttakWolf.disabled = false;
				}, 1000);


			

				//Si la vie de l'ennemi est inférieur à 0
				if(FightWolf.lifeWolf.textContent <= 0 ){

					FightWolf.lifeWolf.textContent = 0;

					let deadWolf= FightWolf.lifeWolf.textContent;

					FightWolf.storageWolf.setItem("deadWolf", deadWolf);

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

				FightWolf.cadreWolf.style.marginLeft = "30%";
				FightWolf.btnAttakWolf.disabled = true;

				setTimeout(function(){
					FightWolf.cadreWolf.style.marginLeft = "42%";
					FightWolf.cadreWolf.style.marginTop = "14%";
					FightWolf.btnAttakWolf.disabled = false;
				},600);

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

		if(chance >= 38){

			PlayerStorage.containerDamages.style.border="10px solid red";

			const audioDead = document.getElementById("audio_pain");
			audioDead.play();

			FightWolf.btnAttakWolf.disabled = true;

				setTimeout(function(){

					PlayerStorage.containerDamages.style.border ="none";
					FightWolf.btnAttakWolf.disabled = false;
				}, 1000);

			let newLifePlayer = playerLife - wolfDamage;

			FightWolf.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightWolf.lifePlayer.textContent = newLifePlayer;

			FightWolf.storageWolf.setItem('lifePlayer', FightWolf.lifePlayer.textContent);

			//Si le joueur à 0 points de vie
			if(FightWolf.lifePlayer.textContent < 0){

				FightWolf.lifePlayer.textContent = 0;

				FightWolf.btnAttakWolf.disabled = true;

				const audioDead = document.getElementById("audio_dead");
				audioDead.play();


				setTimeout(function(){

				document.location.href="/game/deadgame.html";

				FightWolf.storageWolf.clear();
				PlayerStorage.storagePlayer.clear();
				},2000);
					
			}

				
		}else{

			FightWolf.messageFail.style.display="block";
			FightWolf.btnAttakWolf.disabled = true;

				setTimeout(function(){
					FightWolf.messageFail.style.display="none";
					FightWolf.btnAttakWolf.disabled = false;
				}, 1500);
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