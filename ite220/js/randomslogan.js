window.onload = function() {
	var top = [
		"Welcome",
		"Store 404",
		"RELAUCH!",
		"The New Store 404!",
		"Grade A Store",
		"PC Masterrace"
	];

	var bottom = [
		"Release The Kraken!",
		"Your item is not found",
		"Store 404 is RELAUCHED!",
		"Previous store is not found, let forgets that fail attempt",
		"Grade A items, etc. Grade A (wink)",
		"May your framerates be high and your temperatures low"
	];

	function randomslogan(){
		var n = Math.floor(Math.random() * (top.length));
		document.getElementById('topslogan').innerHTML = top[n];
		document.getElementById('bottomslogan').innerHTML = bottom[n];
	}
	randomslogan();
};