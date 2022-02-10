const hamburger = $(".hamburger");
const navLink = $(".navbar__link");

// When document ready
$(document).ready(function () {
	// Start form validation listener
	if ($("#contactForm").length) {
		validate();
		$("#fname, #lname, #email, #subject, #message").keyup(validate);
	}

	// Hide success message - to be revealed on form submission
	$(".success").hide();

	// Add click listener  and functionality to hamburger
	hamburger.click(function () {
		toggleNav();
	});

	// Add click listener and functionality to nav links
	navLink.click(function () {
		if (hamburger.is(":visible")) {
			toggleNav();
		}
	});

	// Add click listener and functionality to coding scroller
	const scroller = $(".coding__example");
	scroller.click(function (event) {
		console.log(event.target.parentNode.nodeName);
		if (event.target.nodeName === "A" || event.target.parentNode.nodeName === "A") {
			let example;
			if (event.target.nodeName === "A") {
				example = event.target.getAttribute("href");
			} else {
				example = event.target.parentNode.getAttribute("href");
			}
			const frame = $(`${example} .coding__code`);
			const scroller = $(`${example} a`);
			const icon = $(`${example} a div`);
			scroller.toggleClass("scroller--expanded scroller--collapsed");
			frame.toggleClass("code--expanded");
			icon.toggleClass("icon--arrow-down icon--arrow-up");
		}
	});

	// Hide main headline and sub headline until animation complete
	$(".hero__headline").hide({ queue: true }).delay(2000).show({ queue: true });

	$(".hero__subtitle")
		.hide({ queue: true })
		.delay(5000)
		.show({
			queue: true,
			complete: function () {
				$(".animate-typing").delay(500).hide({ queue: true });
			},
		});

	// Set up animsition plugin
	// $(".animsition").animsition({
	// 	inDuration: 400,
	// 	outDuration: 0,
	// });
});

// Form validation function
function validate() {
	const email = $("#email").val();
	const pattern = new RegExp(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i);
	if (
		$("#fname").val().length > 0 &&
		$("#lname").val().length > 0 &&
		$("#email").val().length > 0
	) {
		if (pattern.test(email)) {
			$(".contact__required").text("").removeAttr("style");
			$("#contact__submit")
				.attr("disabled", false)
				.removeClass("button--disabled");
		} else {
			$(".contact__required")
				.text("You must enter a valid email address.")
				.css("color", "red");
		}
	} else {
		$("#contact__submit").attr("disabled", true).addClass("button--disabled");
	}
}

// Navbar and hamburger toggle function
function toggleNav() {
	$(".navbar").slideToggle(500, function () {
		if ($(".navbar").attr("style") === "display: none;") {
			$(".navbar").removeAttr("style");
			$("body").off("click");
		} else if ($(".navbar").attr("style") === "display: block;") {
			// Add click listener to page overlay to allow click anywhere to close
			$(".page--overlay").click(function (e) {
				e.stopImmediatePropagation();
				toggleNav();
				return;
			});
		}
	});
	hamburger.toggleClass("hamburger--open");
	$(".page--overlay").toggleClass("overlay--dark");
}

// Script to run on form submission - will be removed when real functionality added to script
$("#contactForm").submit(function () {
	$("#fname, #lname, #email, #subject, #message").val("");
	$(".success").slideDown().delay(2000).slideUp();
	$("#contact__submit").attr("disabled", true).addClass("button--disabled");
	$(".contact__required").text(
		"Please complete all fields marked * before submitting."
	);
});

// Script to add smooth scrolling effect to # links.
// Select all links with hashes
$('a[href*="#"]')
	// Remove links that don't actually link to anything
	.not('[href="#"]')
	.not('[href="#0"]')
	.click(function (event) {
		// On-page links
		if (
			location.pathname.replace(/^\//, "") ==
				this.pathname.replace(/^\//, "") &&
			location.hostname == this.hostname
		) {
			// Figure out element to scroll to
			var target = $(this.hash);
			target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
			// Does a scroll target exist?
			if (target.length) {
				// Only prevent default if animation is actually gonna happen
				event.preventDefault();
				$("html, body").animate(
					{
						scrollTop: target.offset().top,
					},
					1000,
					function () {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) {
							// Checking if the target was focused
							return false;
						} else {
							$target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						}
					}
				);
			}
		}
	});
