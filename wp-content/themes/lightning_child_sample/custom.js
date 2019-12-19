
// init controller
var controller = new ScrollMagic.Controller();


// build scenes
var revealElements = document.getElementsByClassName("prBlock");
for (var i=0; i<revealElements.length; i++) { // create a scene for each element
  new ScrollMagic.Scene({
            triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
            offset: 50,												 // start a little later
            triggerHook: 0.9,
          })
          .setClassToggle(revealElements[i], "widgetup") // add class toggle
           //.addIndicators({name: "prBlock" + (i+1) }) // add indicators (requires plugin)
          .addTo(controller);
}
/*
// build scene
var animateElem = document.getElementById("textcss");
var scene = new ScrollMagic.Scene({triggerElement: "#textcss", duration: 300})
        .on("enter", function () {
          // trigger animation by changing inline style.
          animateElem.style.backgroundColor = "grey";
          animateElem.style.filter= "none";
        })
        .on("leave", function () {
          // reset style
          animateElem.style.backgroundColor = "";
          animateElem.style.filter= "blur(6px)";
        })
        // .addIndicators({name: "2 - change inline style"}) // add indicators (requires plugin)
        .addTo(controller);
*/

console.log(document.getElementsByClassName("slide-text-title"));
console.log(document.getElementsByClassName("slide-text-caption").textContent);
