var TakeApple = {

	storageApple: window.sessionStorage,
	btnApple1: document.getElementById("btnApple1"),
	action_element : document.querySelectorAll(".action"),
	test: document.querySelector(".test"),

	allApple: document.getElementsByClassName("apple"),
	
	apple1 : document.getElementById("apple1"),
	apple2 : document.getElementById("apple2"),
	apple3 : document.getElementById("apple3"),
	apple4 : document.getElementById("apple4"),

	action1 : document.getElementById("action1"),
	action2 : document.getElementById("action2"),
	action3 : document.getElementById("action3"),
	action4 : document.getElementById("action4"),




	init: function(){
	
		this.AllhiddenAction();
	},

	hidden_action: function(){

		for(var i = 0; i < TakeApple.action_element.length; i++){
			this.action_element[i].style.display = "none";
		}
	},

	showActionApple1: function(){

		this.hidden_action();

		TakeApple.apple1.addEventListener("mouseover", function(){
				TakeApple.action1.style.display="block";
		});
	},

	showActionApple2: function(){

		this.hidden_action();

		TakeApple.apple2.addEventListener("mouseover", function(){
				TakeApple.action2.style.display="block";
		});
	},

	showActionApple3: function(){

		this.hidden_action();

		TakeApple.apple3.addEventListener("mouseover", function(){
				TakeApple.action3.style.display="block";
		});
	},

	showActionApple4: function(){

		this.hidden_action();
		
		TakeApple.apple4.addEventListener("mouseover", function(){
				TakeApple.action4.style.display="block";
		});
	},

	hiddenActionApple1: function(){

		this.showActionApple1();

		TakeApple.apple1.addEventListener("mouseout", function(){
				TakeApple.action1.style.display="none";
		});
	},

	hiddenActionApple2: function(){

		this.showActionApple2();

		TakeApple.apple2.addEventListener("mouseout", function(){
				TakeApple.action2.style.display="none";
		});
	},

	hiddenActionApple3: function(){

		this.showActionApple3();

		TakeApple.apple3.addEventListener("mouseout", function(){
				TakeApple.action3.style.display="none";
		});
	},

	hiddenActionApple4: function(){

		this.showActionApple4();

		TakeApple.apple4.addEventListener("mouseout", function(){
				TakeApple.action4.style.display="none";
		});
	},

	AllhiddenAction: function(){

		this.hiddenActionApple1();
		this.hiddenActionApple2();
		this.hiddenActionApple3();
		this.hiddenActionApple4();
	}
}

TakeApple.init();