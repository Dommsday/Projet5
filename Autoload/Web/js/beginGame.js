var BeginGame = {

	newGame : document.getElementById("new-game"),

	init: function(){

		BeginGame.newGame.addEventListener("click", function(){

			PlayerStorage.allEndStorage();
		});
	}
}

BeginGame.init();