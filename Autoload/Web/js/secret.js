var Secret = {

	stone: document.querySelector(".stone_img"),

	init: function(){
		Secret.move();
	},

	move: function(){

		Secret.stone.addEventListener("click", function(){

			Secret.stone.style.left="10%";
			Secret.stone.style.transition="2s";
		});
	}


}

Secret.init();