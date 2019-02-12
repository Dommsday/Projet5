var FightBat = {
	storageBat : window.sessionStorage,
	btnAttakBat : document.getElementById("button-attak-bat"),//Bouton "Attaquer"
	lifeBat: document.getElementById("life-bat"),//Vie de la chauves-souris
	damageBat: document.getElementById("damages-bat"),//Dégâts de l'ennemi
	cadreBat : document.getElementById("bat1"),//Div entière contenant la chauve-souris
	choiseRoad: document.getElementById("choise-road"),//Div du lien pour les
	lifePlayer : document.getElementById("life_players"),

	messageFail: document.getElementById("message_fail"),



	init: function(){

		FightBat.messageFail.style.display="none";

		FightBat.refresh();
		FightBat.hiddenRoad();
		FightBat.attakPlayerBat();

	},

	hiddenRoad: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightBat.lifeBat.textContent) > 0){

			FightBat.choiseRoad.style.display="none";
		}

	},

	attakPlayerBat: function(){

		//Quand on attaque l'ennemi
		FightBat.btnAttakBat.addEventListener("click", function(){

			FightBat.endStorageAcorn();

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let batLife = FightBat.storageBat.getItem("beginLife");
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 25
			if(chance >= 30){

				let newLifeBat = batLife - playerDamage;

				FightBat.storageBat.setItem("newLifeBat", newLifeBat);

				FightBat.lifeBat.textContent = newLifeBat;

				FightBat.cadreBat.style.border ="2px solid red";
				FightBat.btnAttakBat.disabled = true;

				setTimeout(function(){

					FightBat.cadreBat.style.border ="none";
					FightBat.btnAttakBat.disabled = false;
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightBat.lifeBat.textContent < 0 ){

					FightBat.lifeBat.textContent = 0;

					let deadBat = FightBat.lifeBat.textContent;

					FightBat.storageBat.setItem("deadBat", deadBat);

					FightBat.lifeBat.textContent = FightBat.storageBat.getItem("deadBat");

					setTimeout(function(){
						FightBat.cadreBat.style.display = "none";

					FightBat.choiseRoad.style.display="block";
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				FightBat.cadreBat.style.marginLeft = "360px";
				FightBat.btnAttakBat.disabled = true;

				setTimeout(function(){
					FightBat.cadreBat.style.margin = "auto";
					FightBat.btnAttakBat.disabled = false;
				},600);
			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightBat.lifeBat.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightBat.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

			let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
			let batDamage = FightBat.damageBat.textContent;

			if(chance >= 30){

				PlayerStorage.containerDamages.style.border="10px solid red";

				const audioDead = document.getElementById("audio_pain");
				audioDead.play();

				FightBat.btnAttakBat.disabled = true;

				setTimeout(function(){

					PlayerStorage.containerDamages.style.border ="none";
					FightBat.btnAttakBat.disabled = false;
				}, 1000);

				let newLifePlayer = playerLife - batDamage;

				FightBat.lifePlayer.style.background="#DB2B30";

				setTimeout(function(){

					FightBat.lifePlayer.style.background ="inherit";
				}, 900);

				FightBat.lifePlayer.textContent = newLifePlayer;

				FightBat.storageBat.setItem('lifePlayer', FightBat.lifePlayer.textContent);

				//Si le joueur à 0 points de vie
				if(FightBat.lifePlayer.textContent <= 0){

					FightBat.lifePlayer.textContent = 0;

					FightBat.btnAttakBat.disabled = true;

					const audioDead = document.getElementById("audio_dead");
					audioDead.play();

					setTimeout(function(){

						document.location.href="/game/deadgame.html";

						FightBat.storageBat.clear();
						PlayerStorage.storagePlayer.clear();
					},2500);
					
				}

				
			}else{

				FightBat.messageFail.style.display="block";
				FightBat.btnAttakBat.disabled = true;

				setTimeout(function(){
					FightBat.messageFail.style.display="none";
					FightBat.btnAttakBat.disabled = false;
				}, 1500);
			}
	},

	endStorageAcorn: function(){

			TakeAcorn.display = 1;

			TakeAcorn.storageAcorn.setItem("displayAcorn", TakeAcorn.display);
			
	},

	refresh: function(){

		if(FightBat.storageBat.length > 0){

			FightBat.storageBat.setItem("beginLife", FightBat.lifeBat.textContent);

			FightBat.lifeBat.textContent = FightBat.storageBat.getItem("beginLife");

			if(FightBat.storageBat.getItem("newLifeBat") !== null){
				FightBat.lifeBat.textContent = FightBat.storageBat.getItem("newLifeBat");

				if(FightBat.storageBat.getItem("newLifeBat") <= FightBat.storageBat.getItem("deadBat")){
					FightBat.lifeBat.textContent = FightBat.storageBat.getItem("deadBat");
					FightBat.cadreBat.style.display = "none";
				}
			}
		}
	}
	
}

FightBat.init();