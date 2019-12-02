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
							.addIndicators({name: "prBlock" + (i+1) }) // add indicators (requires plugin)
							.addTo(controller);
		}