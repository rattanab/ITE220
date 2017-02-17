// cpu_list
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

// mb_list
var mbname = [
	"MSI H110M Gaming",
	"MSI Z170A Gaming M3",
	"MSI X99A Godlike Gaming Carbon"
];
var mbimg = [
	"img/product/mb/H110M_GAMING.jpg",
	"img/product/mb/z170a-gaming-m3.jpg",
	"img/product/mb/X99A_GODLIKE_GAMING_CARBON.jpg"
];
var mbprice = [
	2750,
	5200,
	19900
];
var mblink = [
	"product/mb/MSI-H110M-Gaming.php",
	"product/mb/MSI-Z170A-Gaming-M3.php",
	"product/mb/MSI-X99A-Godlike-Gaming-Carbon.php"
];
var mbid = [
	"msih110m",
	"msiz170am3",
	"msix99a"
];
function listmbitem(){
	text= "";
	for (i=0;i<mbname.length;i++){
		text += "<div class='col-sm-4 col-lg-4 col-md-4'><div class'thumbnail'><img class='img-responsive' src='"+mbimg[i]+"' alt="+mbname[i]+"><div class='container-fluid'><h4><a href="+mblink[i]+">"+mbname[i]+"</a></h4></div><div class='container-fluid'><h4 class='pull-right' style='color: green'>฿"+mbprice[i]+"</h4></div></div></div></div>";
	};
	itemlocation.innerHTML = text;
};

//sdlist
var sdname = [
	"Samsung 950 Pro M.2 256GB"
];
var sdimg = [
	"img/product/sd/950-PRO-M2-256GB-256GB.jpg"
];
var sdprice = [
	7690
];
var sdlink = [
	"product/sd/Samsung-950-Pro-M2-256GB.php"
];
var sdid = [
	"sam950m2256"
];
function listsditem(){
	text= "";
	for (i=0;i<sdname.length;i++){
		text += "<div class='col-sm-4 col-lg-4 col-md-4'><div class'thumbnail'><img class='img-responsive' src='"+sdimg[i]+"' alt="+sdname[i]+"><div class='container-fluid'><h4><a href="+sdlink[i]+">"+sdname[i]+"</a></h4></div><div class='container-fluid'><h4 class='pull-right' style='color: green'>฿"+sdprice[i]+"</h4></div></div></div></div>";
	};
	itemlocation.innerHTML = text;
};