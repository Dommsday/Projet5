var AppleForm = {

	storageFormFruit: window.sessionStorage,
	btnApple1Index : document.getElementById("btnApple1"),
	apple1Index : document.querySelector(".apple1-index"),
	saveNum: 71,

	init: function(){

		AppleForm.refresh();
		AppleForm.hiddenApple();

	},

	hiddenApple: function(){

		let saveHidden = AppleForm.saveNum;

		alert("Le nombre de saveHidden vaut "+saveHidden+" et il est de type "+typeof(saveHidden));

		AppleForm.storageFormFruit.setItem("letFruit", saveHidden);

		alert("La mémoire de saveHidden de "+ AppleForm.storageFormFruit.getItem("letFruit")+" et c'est toujours un type "+typeof(Number(AppleForm.storageFormFruit.getItem("letFruit"))));

		AppleForm.btnApple1Index.addEventListener("click", function(){

			AppleForm.saveHidden = 2;

			alert("LE NOUVEAU saveHidden vaut "+ AppleForm.saveHidden);

			AppleForm.storageFormFruit.setItem("saveHidden", AppleForm.saveHidden);

			alert("La NOUVELLE mémoire de saveHidden vaut MAINTENANT "+AppleForm.storageFormFruit.getItem("saveHidden")+" et il est de type "+typeof(AppleForm.storageFormFruit.getItem("saveHidden")));

			AppleForm.apple1Index.style.display = "none";

		});

		if(AppleForm.storageFormFruit.getItem("saveHidden") == 2){

			alert('NOW 2');

			AppleForm.apple1Index.style.display="none";
		}else{

			alert("NOW 1");

			AppleForm.apple1Index.style.display="block";
		}

	},

	refresh: function(){

		if(AppleForm.storageFormFruit.length > 0){

			AppleForm.saveNum = AppleForm.storageFormFruit.getItem("saveHidden");
			alert('refresh vaut '+ AppleForm.saveNum);
		}else{

			alert("PAS DE MEMOIRE");
		}

	}

	
}

AppleForm.init();