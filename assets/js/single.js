
const sectionHeight = [];
const tween = [];
const sections = [];
const createSections = () => {
  for ( let i = 1; i < 31; i++ ) {
    sections.push( '#block-' + i );
  }
}
createSections();

$(function () {
  $.each(sections, function(index, value){
    sectionHeight.push( $(sections[index]).outerHeight(true) );
  });
  const x = sectionHeight.filter(v => v);
  console.log(x)
  for (i = 0; i < x.length; i++) {
    tween[i] = TweenMax.staggerFromTo(sections[i] + " .content__block-text, " + sections[i] +  " .content__block-image", 1, {alpha: 0}, {alpha: 1}, 0.2);
  }
  var controller = new ScrollMagic.Controller();

  for (i = 0; i < x.length; i++) {
    new ScrollMagic.Scene({triggerElement: sections[i], offset: -150, duration: sectionHeight[i] -100, triggerHook: "onCenter"})
            .setTween(tween[i])
            .setClassToggle(sections[i], "active")
            // .addIndicators() // add indicators (requires plugin)
            .addTo(controller);
  }

  new ScrollMagic.Scene({triggerElement: "#block-1", offset: -300, triggerHook: "onLeave"})
          .setClassToggle("#masthead", "hide")
          //.addIndicators() // add indicators (requires plugin)
          .addTo(controller);
})

const x = sectionHeight.filter(v => v);
console.log(x)
// init controller


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
