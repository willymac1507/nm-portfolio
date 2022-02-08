const hamburger = $(".hamburger");
const navLink = $(".navbar__link");

$(document).ready(function () {
	validate();
	$("#fname, #lname, #email, #subject, #message").keyup(validate);
});

$('.success').hide();

hamburger.click(function () {
	$(".navbar").slideToggle(500, function () {
		if ($(".navbar").attr("style") === "display: none;") {
			$(".navbar").removeAttr("style");
		}
	});
	hamburger.toggleClass("hamburger--open");
});

navLink.click(function () {
	if (hamburger.is(":visible")) {
		$(".navbar").slideToggle(500, function () {
			if ($(".navbar").attr("style") === "display: none;") {
				$(".navbar").removeAttr("style");
			}
		});
		hamburger.toggleClass("hamburger--open");
	}
});

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

$(".animsition").animsition({
	inDuration: 200,
	outDuration: 800,
});

$('#contactForm').submit(function () {
	$("#fname, #lname, #email, #subject, #message").val('');
	$('.success').slideDown().delay(2000).slideUp();
	$('#contact__submit').attr('disabled', true).addClass('button--disabled');
});

function validate() {
	const email = $('#email').val();
	const pattern = new RegExp(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i)
	if (
		$("#fname").val().length > 0 &&
		$("#lname").val().length > 0 &&
		$("#email").val().length > 0 &&
		$("#message").val().length > 0 &&
		$("#subject").val().length > 0 &&
		pattern.test(email)
	) {
		$("#contact__submit").attr("disabled", false).removeClass("button--disabled");
	} else {
		$("#contact__submit").attr("disabled", true).addClass("button--disabled");
	}
};

