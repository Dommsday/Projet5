var FightDemon = {

	storageDemon: window.sessionStorage,
	btnAttakDemon : document.getElementById("button-attak-demon"),
	lifeDemon: document.getElementById("life-demon"),
	lifePlayer: document.getElementById("life_players"),
	damageDemon: document.getElementById("damages-demon"),
	cadreDemon : document.getElementById("demon1"),
	choiseRoad: document.getElementById("choise-road"),

	messageFail: document.getElementById("message_fail"),
	
	init: function(){

		FightDemon.messageFail.style.display="none";

		FightDemon.refresh();
		FightDemon.hiddenRoad();
		FightDemon.attakPlayerDemon();

	},

	hiddenRoad: function(){

		//Si la vie de l'ennemi est supérieur à 0 le changement de route est invisible
		if(Number(FightDemon.lifeDemon.textContent) > 0){

			FightDemon.choiseRoad.style.display="none";
		}

	},

	attakPlayerDemon: function(){

		//Quand on attaque l'ennemi
		FightDemon.btnAttakDemon.addEventListener("click", function(){

			let chance = Math.floor(Math.random() * 50) + 1;//Taux de chance

			let demonLife = FightDemon.lifeDemon.textContent;
			let playerDamage = PlayerStorage.storagePlayer.getItem("damagePlayer");

			//Si le taux de chance est supérieur à 35
			if(chance >= 25){

				let newLifeDemon = demonLife - playerDamage;

				FightDemon.storageDemon.setItem("newLifeDemon", newLifeDemon);

				FightDemon.lifeDemon.textContent = newLifeDemon;

				FightDemon.cadreDemon.style.border ="2px solid red";
				FightDemon.btnAttakDemon.disabled = true;

				setTimeout(function(){
					FightDemon.cadreDemon.style.border ="none";
					FightDemon.btnAttakDemon.disabled = false;
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightDemon.lifeDemon.textContent <= 0 ){

					FightDemon.lifeDemon.textContent = 0;

					let deadDemon = FightDemon.lifeDemon.textContent;

					FightDemon.storageDemon.setItem("deadDemon", deadDemon);

					FightDemon.lifeDemon.textContent = FightDemon.storageDemon.getItem("deadDemon");

					setTimeout(function(){
						FightDemon.cadreDemon.style.display = "none";

					FightDemon.choiseRoad.style.display="block";
					}, 800);
				}

			//Si le taux de chance est inférieur à 35
			}else{

				FightDemon.cadreDemon.style.marginLeft = "30%";
				FightDemon.btnAttakDemon.disabled = true;

				setTimeout(function(){
					FightDemon.cadreDemon.style.marginLeft = "40%";
					FightDemon.cadreDemon.style.marginTop = "10%";
					FightDemon.btnAttakDemon.disabled = false;
				},600);

			}

			//Si la vie de l'ennemi est séupérieur à 0
			if(FightDemon.lifeDemon.textContent > 0){

				//Au bout de 1.2s l'ennemi attaque
				setTimeout(function(){
				FightDemon.attakEnemy();

				},1200);

			}

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

		let playerLife = PlayerStorage.storagePlayer.getItem("lifePlayer");
		
		let demonDamage = FightDemon.damageDemon.textContent;

		if(chance >= 36){

			alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

			PlayerStorage.containerDamages.style.border="10px solid red";

			const audioDead = document.getElementById("audio_pain");
			audioDead.play();

			FightDemon.btnAttakDemon.disabled = true;

				setTimeout(function(){

					PlayerStorage.containerDamages.style.border ="none";
					FightDemon.btnAttakDemon.disabled = false;
				}, 1000);

			let newLifePlayer = playerLife - demonDamage;

			FightDemon.lifePlayer.style.background="red";

			setTimeout(function(){

				FightDemon.lifePlayer.style.background ="inherit";
			}, 900);

			FightDemon.lifePlayer.textContent = newLifePlayer;

			FightDemon.storageDemon.setItem('lifePlayer', FightDemon.lifePlayer.textContent);

			//Si le joueur à 0 points de vie
			if(FightDemon.lifePlayer.textContent <= 0){

				FightDemon.lifePlayer.textContent = 0;

				FightDemon.btnAttakDemon.disabled = true;

				const audioDead = document.getElementById("audio_dead");
				audioDead.play();

				setTimeout(function(){

				document.location.href="/game/deadgame.html";

				FightDemon.storageDemon.clear();
				PlayerStorage.storagePlayer.clear();
				},2000);
					
			}

				
		}else{

			FightDemon.messageFail.style.display="block";
			FightDemon.btnAttakDemon.disabled = true;

				setTimeout(function(){
					FightBat.messageFail.style.display="none";
					FightDemon.btnAttakDemon.disabled = false;
				}, 1500);
		}
	},

	refresh: function(){

		if(FightDemon.storageDemon.length > 0){

			FightDemon.storageDemon.setItem("beginDemon", FightDemon.lifeDemon.textContent);

			FightDemon.lifeDemon.textContent = FightDemon.storageDemon.getItem("beginDemon");

			if(FightDemon.storageDemon.getItem("newLifeDemon") !== null){
				FightDemon.lifeDemon.textContent = FightDemon.storageDemon.getItem("newLifeDemon");

				if(FightDemon.storageDemon.getItem("newLifeDemon") <= FightDemon.storageDemon.getItem("deadDemon")){
					FightDemon.lifeDemon.textContent = FightDemon.storageDemon.getItem("deadDemon");
					FightDemon.cadreDemon.style.display = "none";
				}
			}
		}
	}
	
}

FightDemon.init();