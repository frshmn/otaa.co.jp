
var oneHeight = $("#test1").height();
var section = ['#test1', '#test2', '#test3', '#test4', '#test5'];
var sectionHeight = [];


$.each(section, function(index, value){
  sectionHeight.push( $(section[index]).outerHeight(true) );
  //console.log(section[index]);
});
console.log(sectionHeight);
// init controller
var controller = new ScrollMagic.Controller();

// build tween
//var tween = TweenMax.from("#test1", 0.5, {autoAlpha: 0, scale: 0.7});

//var tween1 = TweenMax.staggerFromTo("#test1 .contents__text, #test1 .contents__image", 1, {alpha: 0}, {alpha: 1}, 0.2);
//var tween2 = TweenMax.staggerFromTo("#test2 .contents__text, #test2 .contents__image", 1, {top: 150, alpha: 0.5}, {top: -100, alpha: 1}, 0.2);
//var tween3 = TweenMax.staggerFromTo("#test3 .contents__text, #test3 .contents__image", 1, {top: 150, alpha: 0.7}, {top: -100, alpha: 1}, 0.2);

var tween1 = TweenMax.staggerFromTo("#test1 .contents__text, #test1 .contents__image", 1, {alpha: 0}, {alpha: 1}, 0.2);
var tween2 = TweenMax.staggerFromTo("#test2 .contents__text, #test2 .contents__image", 1, {alpha: 0}, {alpha: 1}, 0.2);
var tween3 = TweenMax.staggerFromTo("#test3 .contents__text, #test3 .contents__image", 1, {alpha: 0}, {alpha: 1}, 0.2);

// build scene
var scene = new ScrollMagic.Scene({triggerElement: "#test1", offset: -100, duration: sectionHeight[0], triggerHook: "onCenter"})
				.setTween(tween1)
				.setClassToggle("#test1, #one", "active")
				.addIndicators() // add indicators (requires plugin)
				.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#test2", offset: -100, duration: sectionHeight[1], triggerHook: "onCenter"})
				.setTween(tween2)
				.setClassToggle("#test2, #two", "active")
				.addIndicators() // add indicators (requires plugin)
				.addTo(controller);

new ScrollMagic.Scene({triggerElement: "#test3", offset: -100, duration: sectionHeight[1], triggerHook: "onCenter"})
				.setTween(tween3)
				.setClassToggle("#test3, #three", "active")
				.addIndicators() // add indicators (requires plugin)
				.addTo(controller);

// change behaviour of controller to animate scroll instead of jump
controller.scrollTo(function (newpos) {
	TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
});

//  bind scroll to anchor links
$(document).on("click", "a[href^='#']", function (e) {
	var id = $(this).attr("href");
	if ($(id).length > 0) {
		e.preventDefault();

		// trigger scroll
		controller.scrollTo(id);

			// if supported by the browser we can even update the URL.
		if (window.history && window.history.pushState) {
			history.pushState("", document.title, id);
		}
	}
});
