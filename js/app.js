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

$(".hero__subtitle").hide({ queue: true }).delay(5000).show({ queue: true, complete: function () {
    $('.animate-typing').delay(500).hide({queue: true});
} });

$(".animsition").animsition({
	inDuration: 200,
	outDuration: 800,
});
