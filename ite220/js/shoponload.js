window.onload = function() {
		var cpuname = [
		"Intel Core i3-7100",
		"Intel Core i3-7350K",
		"Intel Core i5-7400",
		"Intel Core i5-7500",
		"Intel Core i5-7600"
	];
	var cpuimg = [
		"img/product/cpu/intel_i3.jpg",
		"img/product/cpu/intel_i3k.png",
		"img/product/cpu/intel_i5.jpg",
		"img/product/cpu/intel_i5.jpg",
		"img/product/cpu/intel_i5.jpg"
	];
	var cpuprice = [
		4550,
		6900,
		7250,
		7850,
		8750
	];
	var cpulink = [
		"product/cpu/i3-7100.php",
		"product/cpu/i3-7350k.php",
		"product/cpu/i5-7400.php",
		"product/cpu/i5-7500.php",
		"product/cpu/i5-7600.php"
	];
	var cpuid = [
		"37100",
		"37350k",
		"57400",
		"57500",
		"57600",
	];
	var itemlocation = document.getElementById("itemlist");
	var text= "";
	function listcpuitem(){
		text= "";
		for (i=0;i<cpuname.length;i++){
			text += "<div class='col-sm-4 col-lg-4 col-md-4'><div class'thumbnail'><img class='img-responsive' src='"+cpuimg[i]+"' alt="+cpuname[i]+"><div class='container-fluid'><h4><a href="+cpulink[i]+">"+cpuname[i]+"</a></h4></div><div class='container-fluid'><h4 class='pull-right' style='color: green'>฿"+cpuprice[i]+"</h4></div></div></div></div>";
		};
		itemlocation.innerHTML = text;
	};
	listcpuitem();
};