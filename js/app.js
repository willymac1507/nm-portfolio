const hamburger = $(".hamburger");
const navLink = $(".navbar__link");

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

$(document).ready(function () {
	validate();
	$("#fname, #lname, #email, #subject, #message").change(validate);
});

function validate() {
	if (
		$("#fname").val().length > 0 &&
		$("#lname").val().length > 0 &&
		$("#email").val().length > 0 &&
		$("#message").val().length > 0 &&
		$("#subject").val().length > 0
	) {
		$("#contact__submit").attr("disabled", false);
	} else {
		$("#contact__submit").attr("disabled", true);
	}
}
