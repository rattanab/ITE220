var customerName = "Rattana";
// var price = 10;
// var quantity = 2;
// variables are not in use
var totalPrice = 0;
var products = [
	"Brooklyn T-Shirt White",
	"Brooklyn T-Shirt Black",
	"Apple Watch",
	"Android Phone"
];
var prices = [
	10,
	10,
	199,
	159,
];
var productsText = "";
var productsElement = document.getElementById("product-list");
for (var i = 0; i < products.length; i++){
	productsText += "<li class='list-group-item'><span class='badge'>$" + prices[i] + "</span>" + products[i] + "</li>";
	productsElement.innerHTML = productsText;
}

// Time dependent Greeting
// document.getElementById("time-greeting").innerHTML = new Date().getHours();
// use to check hours value

if (new Date().getHours() < 12) {
	document.getElementById("time-greeting").innerHTML = "Good Morning";
} else if (new Date().getHours() < 18) {
	document.getElementById("time-greeting").innerHTML = "Good Afternoon";
} else {
	document.getElementById("time-greeting").innerHTML = "Good Evening";
}

var customerElement = document.getElementById("customer-name");
customerElement.textContent = customerName;

// Pricing

var isDiscount = 1;
var discountRate = 0.25;

if (isDiscount == 1) {
	totalPrice = prices[0] + prices[1] + prices[2] + prices[3];
	totalPrice -= totalPrice*discountRate;
	document.getElementById("discount-rate").innerHTML = "25% off";
} else {
	totalPrice = prices[0] + prices[1] + prices[2] + prices[3];
}

var totalPriceElement = document.getElementById("total-price");
totalPriceElement.textContent = totalPrice;