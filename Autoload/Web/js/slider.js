var Slider = {

	sliderItems: document.querySelectorAll(".item_slider"),
	arrowLeft: document. querySelector(".button_left"),
	arrowRight: document.querySelector(".button_right"),
	index: 0,

	init: function(){

		this.startSlide();
		this.nextItem();
		this.prevItem();
	},

	reset: function(){

		for(let i = 0; i < Slider.sliderItems.length; i++){

			Slider.sliderItems[i].style.display = "none";
		}
	},

	startSlide: function(){

		this.reset();
		Slider.sliderItems[0].style.display = "block";
	},

	slideRight: function () {
        this.reset();
        Slider.sliderItems[Slider.index + 1].style.display = "block";
        Slider.index++;

    },

    nextItem: function () {
        this.arrowRight.addEventListener("click", function () {
            if (Slider.index === Slider.sliderItems.length - 1) {
                Slider.index = -1;
            }
            Slider.slideRight();
        });
    },

    slideLeft: function () {
        this.reset();
        Slider.sliderItems[Slider.index - 1].style.display = "block";
        Slider.index--;

    },

    prevItem: function () {
        this.arrowLeft.addEventListener("click", function () {
            if (Slider.index === 0) {
                Slider.index = Slider.sliderItems.length;
            }
            Slider.slideLeft();
        });
    }
}

Slider.init();