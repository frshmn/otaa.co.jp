//luxy.init({
//	wrapper: '#frontpage',
//	wrapperSpeed: '0.3'
//});

var frontSection = ['#frontpage #hero', '#frontpage #project-1', '#frontpage #project-2', '#frontpage #project-3'];
var frontSectionWidth = [];

const frontSections = ['hero', 'project_1', 'project_2', 'project_3'];
const sectionsHeight = [];
const sectionsWidth = [];
const ids = [];

//IDを取得して配列へ格納
const getId = (page) => {
  frontSections.forEach(function(frontSection){
    ids.push( document.getElementById(page).getElementsByClassName(frontSection) )
  })
}
//取得したIDに対して高さを取得する
const getHeight = () => {
	for ( let i = 0; i < ids.length; i++ ) {
		sectionsHeight.push( ids[i][0].clientHeight )
	}
}
// 取得したIDに対して幅を取得する
const getWidth = () => {
	for ( let i = 0; i < ids.length; i++ ) {
		sectionsWidth.push( ids[i][0].clientWidth )
	}
}
getId('frontpage');
getHeight();
getWidth();



const frontScrollMagic = () => {

  if ( window.matchMedia("(min-width: 599px)").matches ) {
    console.log('its pc view')
    // build tween
    let frontTween = [];
    for (i = 0; i < frontSection.length; i++) {
      frontTween[i] = TweenMax.staggerFromTo(frontSection[i] + " .move", 1, {left: 0}, {left: 120}, 0.2);
    }
    // init controller
    var controllerV = new ScrollMagic.Controller({vertical: false});
    // Build Scene
    for (i = 0; i < frontSection.length; i++) {
      new ScrollMagic.Scene({triggerElement: frontSection[i], offset: 200, duration: sectionsWidth[i] -200, triggerHook: ""})
        .setTween(frontTween[i])
        .setClassToggle(frontSection[i], "active")
        // .addIndicators() // add indicators (requires plugin)
        .addTo(controllerV);
    }
  } else {
    console.log('its sp view')
    //Build Tween
    let frontTween = [];
    for (i = 0; i < frontSection.length; i++) {
      frontTween[i] = TweenMax.staggerFromTo(frontSection[i] + " .move", 1, {top: 60}, {top: 120}, 0.2);
    }
    // init controller
    var controllerH = new ScrollMagic.Controller({vertical: true});
    // Build Scene
    for (i = 0; i < frontSection.length; i++) {
      new ScrollMagic.Scene({triggerElement: frontSection[i], offset: 80, duration: sectionsHeight[i] -80, triggerHook: ""})
        // .setTween(frontTween[i])
        .setClassToggle(frontSection[i], "active")
        // .addIndicators() // add indicators (requires plugin)
        .addTo(controllerH);
    }
  }

}
frontScrollMagic();
