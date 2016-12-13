window.onload=function(){ // on load event
	var task1 = {
		render: function(){
			document.getElementById("screenX").textContent = window.screenX;
			document.getElementById("screenY").textContent = window.screenY;
			document.getElementById("screenWidth").textContent = window.innerWidth;
			document.getElementById("screenHeight").textContent = window.innerHeight;
			document.getElementById("location").textContent = window.location;
		},
		resize: function() {
			window.addEventListener("resize", this.render);
		},
		devInfo: function() {
			var btnDev = document.getElementById("dev-info");
			btnDev.addEventListener("click", function(){
				//add your code here to display developer information in 'p' block
				document.getElementById("dev-info-container").innerHTML = "<p>Rattana Gomez</p><p>IT Student</p><p><a href='https://github.com/rattanab' target='_blank'>https://github.com/rattanab</a></p>"
			});
		}
	}
	task1.render();
	task1.resize();
	task1.devInfo();
}; // end on load event
