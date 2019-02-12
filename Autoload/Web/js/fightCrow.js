var FightCrow = {

	storageCrow: window.sessionStorage,
	btnAttakCrow : document.getElementById("button-attak-crow"),
	lifeCrow: document.getElementById("life-crow"),
	lifePlayer: document.getElementById("life_players"),
	damageCrow: document.getElementById("damages-crow"),
	cadreCrow : document.getElementById("crow1"),
	choiseRoad: document.getElementById("choise-road"),
	chest : document.getElementById("chest1"),

	messageFail: document.getElementById("message_fail"),

	init: function(){

		FightCrow.messageFail.style.display="none";

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
			if(chance >= 25){

				let newLifeCrow = crowLife - playerDamage;

				FightCrow.storageCrow.setItem("newLifeCrow", newLifeCrow);

				FightCrow.lifeCrow.textContent = newLifeCrow;

				FightCrow.cadreCrow.style.border ="2px solid red";
				FightCrow.btnAttakCrow.disabled = true;

				setTimeout(function(){
					FightCrow.cadreCrow.style.border ="none";
					FightCrow.btnAttakCrow.disabled = false;
				}, 1000);


			

				//Si la vie de l'ennemi est inférieur à 0
				if(FightCrow.lifeCrow.textContent <= 0 ){

					FightCrow.lifeCrow.textContent = 0;

					let deadCrow = FightCrow.lifeCrow.textContent;

					FightCrow.storageCrow.setItem("deadCrow", deadCrow);

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

				FightCrow.cadreCrow.style.marginLeft = "30%";
				FightCrow.btnAttakCrow.disabled = true;

				setTimeout(function(){
					FightCrow.cadreCrow.style.marginLeft = "40%";
					FightCrow.cadreCrow.style.marginTop = "10%";
					FightCrow.btnAttakCrow.disabled = false;
				},600);


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

		if(chance >= 35){

				PlayerStorage.containerDamages.style.border="10px solid red";

				const audioDead = document.getElementById("audio_pain");
				audioDead.play();
				
				FightCrow.btnAttakCrow.disabled = true;

				setTimeout(function(){

					PlayerStorage.containerDamages.style.border ="none";
					FightCrow.btnAttakCrow.disabled = false;

				}, 1000);

			let newLifePlayer = playerLife - crowDamage;

			FightCrow.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightCrow.lifePlayer.textContent = newLifePlayer;

			FightCrow.storageCrow.setItem('lifePlayer', FightCrow.lifePlayer.textContent);

			//Si le joueur à 0 points de vie
			if(FightCrow.lifePlayer.textContent <= 0){

				FightCrow.lifePlayer.textContent = 0;

					FightCrow.btnAttakCrow.disabled = true;

					const audioDead = document.getElementById("audio_dead");
					audioDead.play();

					setTimeout(function(){
						
					document.location.href="/game/deadgame.html";

					FightCrow.storageCrow.clear();
					PlayerStorage.storagePlayer.clear();
				},2000);
					
			}

				
		}else{

			FightCrow.messageFail.style.display="block";
			FightCrow.btnAttakCrow.disabled = true;

				setTimeout(function(){
					FightCrow.messageFail.style.display="none";
					FightCrow.btnAttakCrow.disabled = false;
				}, 1500);
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