var Testing = {

	testStorage: window.sessionStorage,
	btnTest : document.getElementById("btnTest"),
	btnDelete : document.getElementById("btnTestDelete"),
	divDemo: document.getElementById("demo"),
	sauvNumber: 91,


	sauv: function(){

		Testing.refresh();

		Testing.init();
		

		/*Testing.btnDelete.addEventListener("click", function(){
			Testing.testStorage.clear();

			//alert ("La mémoire vaut à nouveau "+Testing.testStorage.getItem("t"));
			//alert ("La mémoire nombre vaut à nouveau "+Testing.testStorage.getItem("letNumber"));

			Testing.divDemo.style.display="block";
		});*/

	},


	init: function(){

		
		let sauvNumberLet = Testing.sauvNumber;

		
		alert("Le nombre de sauvNumberLet vaut "+sauvNumberLet+" et il est de type "+typeof(sauvNumberLet));

		Testing.testStorage.setItem("letNumber", sauvNumberLet);

		alert("La mémoire de sauvNumberLetest de "+ Testing.testStorage.getItem("letNumber")+" et c'est toujours un type "+typeof(Number(Testing.testStorage.getItem("letNumber"))));

		Testing.btnTest.addEventListener("click", function(){
	
			Testing.sauvNumberLet = 2;

			alert("Le nombre de sauvNumberLet vaut maintenant "+Testing.sauvNumberLet+" et il est de type "+typeof(Testing.sauvNumberLet));

			Testing.testStorage.setItem("letNumber", Testing.sauvNumberLet);

			alert("Ma NOUVELLE mémoire de nombre vaut "+Testing.testStorage.getItem("letNumber")+" et il est toujours de type "+typeof(Testing.testStorage.getItem("letNumber")));

			Testing.divDemo.style.display="none";

			

		});

		if(Testing.testStorage.getItem("letNumber") == 2){

			alert("NOW 2" );

			Testing.divDemo.style.display="none";
		}else{
			alert("NOW 1");
			Testing.divDemo.style.display="block";
		}

	},

	refresh: function(){

		if(Testing.testStorage.length > 0){

	
			Testing.sauvNumber = Testing.testStorage.getItem("letNumber");

			alert('refresh vaut '+Testing.sauvNumber);

		}else{
			alert("MEMOIRE VIDE");
		}
	}
}

Testing.sauv();