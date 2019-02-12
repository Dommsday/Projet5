var FightTroll = {

	storageTroll: window.sessionStorage,
	btnAttakTroll : document.getElementById("button-attak-troll"),
	lifeTroll: document.getElementById("life-troll"),
	lifePlayer: document.getElementById("life_players"),
	damageTroll: document.getElementById("damages-troll"),
	cadreTroll : document.getElementById("troll"),
	endGame: document.getElementById("endgame"),

	messageFail: document.getElementById("message_fail"),
	
	init: function(){

		FightTroll.messageFail.style.display="none";

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
			if(chance >= 25){

				let newLifeTroll = trollLife - playerDamage;

				FightTroll.storageTroll.setItem("newLifeTroll", newLifeTroll);

				FightTroll.lifeTroll.textContent = newLifeTroll;

				FightTroll.cadreTroll.style.border ="2px solid red";
				FightTroll.btnAttakTroll.disabled = true;

				setTimeout(function(){

					FightTroll.cadreTroll.style.border ="none";
					FightTroll.btnAttakTroll.disabled = true;
				}, 1000);

				//Si la vie de l'ennemi est inférieur à 0
				if(FightTroll.lifeTroll.textContent <= 0 ){

					FightTroll.lifeTroll.textContent = 0;

					let deadTroll = FightTroll.lifeTroll.textContent;

					FightTroll.storageTroll.setItem("deadTroll", deadTroll);

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

				FightTroll.cadreTroll.style.marginLeft = "360px";
				FightTroll.btnAttakTroll.disabled = true;

				setTimeout(function(){
					FightTroll.cadreTroll.style.margin = "auto";
					FightTroll.btnAttakTroll.disabled = false;
				},600);

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

		if(chance >= 38){

			PlayerStorage.containerDamages.style.border="10px solid red";

			const audioDead = document.getElementById("audio_pain");
			audioDead.play();

			FightTroll.btnAttakTroll.disabled = true;


				setTimeout(function(){
					PlayerStorage.containerDamages.style.border ="none";
					FightTroll.btnAttakTroll.disabled = false;
				}, 1000);

			let newLifePlayer = playerLife - trollDamage;

			FightTroll.lifePlayer.style.background="red";

			setTimeout(function(){

				FightBat.lifePlayer.style.background ="inherit";
			}, 900);

			FightTroll.lifePlayer.textContent = newLifePlayer;

			FightTroll.storageTroll.setItem('lifePlayer', FightTroll.lifePlayer.textContent);

			//Si le joueur à 0 points de vie
			if(FightTroll.lifePlayer.textContent < 0){

				FightTroll.lifePlayer.textContent = 0;

				FightTroll.btnAttakTroll.disabled = true;

				const audioDead = document.getElementById("audio_dead");
				audioDead.play();

				setTimeout(function(){
						
				document.location.href="/game/deadgame.html";

				FightTroll.storageTroll.clear();
				PlayerStorage.storagePlayer.clear();
				},2000);
					
			}

				
		}else{

			FightTroll.messageFail.style.display="block";
			FightTroll.btnAttakTroll.disabled = true;

				setTimeout(function(){
					FightBat.messageFail.style.display="none";
					FightTroll.btnAttakTroll.disabled = false;
				}, 1500);
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