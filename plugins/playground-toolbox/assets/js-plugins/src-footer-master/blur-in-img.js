function ProgressiveMedia(){

		// The amount we want to blur the canvas
		const CANVAS_BLUR_RADIUS = 60;

		// Grab the array elements we want to modify
		var component = document.querySelectorAll('.ProgressiveMedia');
		var image     = document.querySelectorAll('.ProgressiveMedia-image');
		var canvas    = document.querySelectorAll('.ProgressiveMedia-canvas');
		var thumbnail = document.querySelectorAll('.ProgressiveMedia-thumbnail');
		var i;

		// Loop through all elements with the specified selectors
		// @ref https://css-tricks.com/snippets/javascript/loop-queryselectorall-matches/
		// ===========================================

		for (i = 0; i < thumbnail.length; ++i) {

			// Wait for the thumbnail to load if it hasn't
			if ( ! thumbnail[i].complete || thumbnail[i].naturalWidth === 0) {

				thumbnail[i].addEventListener('load', function onImageLoaded() {

					// It's good practice to remove unecessary listeners
					thumbnail[i].removeEventListener('load', onThumbnailLoad);

					// Draw the canvas using the thumbnail
					drawCanvasWithBlur(canvas[i], thumbnail[i], CANVAS_BLUR_RADIUS);

				});

			} else {

				// The thumbnail is already loaded, draw it onto the canvas
				drawCanvasWithBlur(canvas[i], thumbnail[i], CANVAS_BLUR_RADIUS);

			}

		}

		/**
		 * Draws an image into the canvas. The image can be optionally blurred
		 * @param  {Element} canvas     The canvas to draw the image onto
		 * @param  {Element} thumbnail  The image used to draw onto the canvas
		 * @param  {Number}  blurRadius The amount to blur the canvas
		 * @return {void}
		 */

		function drawCanvasWithBlur(canvas, thumbnail, blurRadius) {

			var context = canvas.getContext('2d');

			// Draw the thumbnail onto the canvas
			context.drawImage(thumbnail, 0, 0,

			// These two arguments allow the canvas image to scale
			thumbnail.naturalWidth, thumbnail.naturalHeight,

			0, 0, canvas.width, canvas.height);

			// Blur the canvas
			StackBlur.canvasRGBA(canvas, 0, 0, canvas.width, canvas.height, blurRadius);

		}
			/*
			 * Loop through all elements and
			 * Set the src for each and then wait till page loads
			 */
			for (i = 0; i < image.length; ++i) {

				// Set the src for each image to the real image instead of the transparent thumbnail
				image[i].src = image[i].dataset.src;

				//Wait until the image is laoded
				image[i].addEventListener('load', function onImageLoaded() {


					// When the image loads, remove the event listener for each
					// image and then add the isLoaded class for animation

					for (i = 0; i < image.length; ++i) {

						image[i].removeEventListener('load', onImageLoaded);
						image[i].classList.add('isLoaded');

					}

				});

			}

	}


// Set a timeout so we make sure StackBlur is defined
setTimeout(ProgressiveMedia, 0);