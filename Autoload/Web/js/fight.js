var Fight = {

	storage: window.sessionStorage,
	btnAttak : document.getElementById("button-attak"),
	lifeEnemy: document.getElementById("life-enemy"),
	lifePlayer: document.getElementById("life_players"),
	damagePlayer: document.getElementById("damages_players"),
	damageEnemy: document.getElementById("damages-enemy"),
	cadreBat : document.getElementById("bat1"),
	choiseRoad: document.getElementById("choise-road"),

	init: function(){
	
		this.attakPlayer();
			
	},

	refreshPage: function(){

		if(Fight.storage.length > 0){

			Fight.lifePlayer.textContent = Fight.storage.getItem("life");	

		}
	},

	attakPlayer: function(){

		this.refreshPage();

		if(Fight.lifeEnemy.textContent > 0){

			Fight.choiseRoad.style.display="none";
		}
				

		Fight.btnAttak.addEventListener("click", function(){

			let chance = Math.floor(Math.random() * 50) + 1;

			let enemyLife = Fight.lifeEnemy.textContent;
			let playerDamage = Fight.damagePlayer.textContent;

			let lifeEnemy = enemyLife - playerDamage;


			

			if(chance >= 35){

				alert("Votre taux de chance est de "+chance+" vous touchez l'ennemi");

				Fight.lifeEnemy.textContent = lifeEnemy;

				Fight.cadreBat.style.border ="2px solid red";

				if(Fight.lifeEnemy.textContent <= 0 ){

					Fight.cadreBat.style.display = "none";

					Fight.choiseRoad.style.display="block";

				}

				setTimeout(function(){

					Fight.cadreBat.style.border ="none";
				}, 1000);
			}else{

				alert("Votre taux de chance est de "+chance+" vous ne touchez pas l'ennemi");
			}

			//Au bout de 1.5s l'ennemi attaque
			setTimeout(function(){
				Fight.attakEnemy();

			},1500);

		});
	},

	attakEnemy: function(){

		let chance = Math.floor(Math.random() * 50) + 1;

			let playerLife = Fight.lifePlayer.textContent;
		
			let enemyDamage = Fight.damageEnemy.textContent;

			let lifePlayer = playerLife - enemyDamage;
			Fight.storage.setItem("life", lifePlayer);

			if(chance >= 40){

				alert("le taux de chance de l'ennemi est de "+chance+" il vous touche");

				Fight.lifePlayer.style.background="red";

				setTimeout(function(){

					Fight.lifePlayer.style.background ="#FFF";
				}, 900);

				if(Fight.lifePlayer.textContent <= 0){

					setTimeout(function(){
						alert("Vous êtes mort");
						Fight.storage.clear();
					},1000);
					
				}

				Fight.lifePlayer.textContent = Fight.storage.getItem("life");
				
			}else{

				alert("Le taux de chance de l'ennemi est de "+chance+" il ne vous touche pas");
			}
	}
}

Fight.init();