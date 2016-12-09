// var customerName = "Rattana";
// // var price = 10;
// // var quantity = 2;
// // variables are not in use
// var totalPrice = 0;
// var products = [
// 	"Brooklyn T-Shirt White",
// 	"Brooklyn T-Shirt Black",
// 	"Apple Watch",
// 	"Android Phone"
// ];
// var prices = [
// 	10,
// 	10,
// 	199,
// 	159,
// ];
// var productsText = "";
// var productsElement = document.getElementById("product-list");
// for (var i = 0; i < products.length; i++){
// 	productsText += "<li class='list-group-item'><span class='badge'>$" + prices[i] + "</span>" + products[i] + "</li>";
// 	productsElement.innerHTML = productsText;
// }

// // Time dependent Greeting
// // document.getElementById("time-greeting").innerHTML = new Date().getHours();
// // use to check hours value

// if (new Date().getHours() < 12) {
// 	document.getElementById("time-greeting").innerHTML = "Good Morning";
// } else if (new Date().getHours() < 18) {
// 	document.getElementById("time-greeting").innerHTML = "Good Afternoon";
// } else {
// 	document.getElementById("time-greeting").innerHTML = "Good Evening";
// }

// var customerElement = document.getElementById("customer-name");
// customerElement.textContent = customerName;

// // Pricing

// var isDiscount = 1;
// var discountRate = 0.25;

// if (isDiscount == 1) {
// 	totalPrice = prices[0] + prices[1] + prices[2] + prices[3];
// 	totalPrice -= totalPrice*discountRate;
// 	document.getElementById("discount-rate").innerHTML = "25% off";
// } else {
// 	totalPrice = prices[0] + prices[1] + prices[2] + prices[3];
// }

// var totalPriceElement = document.getElementById("total-price");
// totalPriceElement.textContent = totalPrice;

var shop = {
	customerName: "Rattana Gomez",
	totalPrice: 0,
	products: [
		"Brooklyn T-Shirt White",
		"Brooklyn T-Shirt Black",
		"Apple Watch",
		"Android Phone"],
	prices: [
		10,
		10,
		199,
		159],
	
	displayCustomerName: function() {
		var customerElement = document.getElementById("customer-name");
		customerElement.textContent = this.customerName;
	},
	
	displayProductList: function() {
		var productText = "";
		var productsElement = document.getElementById("product-list");
		
		productText += "<li class='list-group-item'><span class='badge'>$" + this.prices[0] + "</span>" + this.products[0] + "</li>";
		productText += "<li class='list-group-item'><span class='badge'>$" + this.prices[1] + "</span>" + this.products[1] + "</li>";
		productText += "<li class='list-group-item'><span class='badge'>$" + this.prices[2] + "</span>" + this.products[2] + "</li>";
		productText += "<li class='list-group-item'><span class='badge'>$" + this.prices[3] + "</span>" + this.products[3] + "</li>";
		
		productsElement.innerHTML = productText;
	},
	
	calculateTotalPrice: function() {
		return (this.prices[0] + this.prices[1] + this.prices[2] + this.prices[3]) * 0.75;
	},
	
	displayTotalPrice: function() {
		this.totalPrice = this.calculateTotalPrice();
		var totalPriceElement = document.getElementById("total-price");
		totalPriceElement.textContent = this.totalPrice;
	},
	
	timeDependentGreeting: function() {
		var time = new Date().getHours();
		if (time < 12) {
			document.getElementById("time-greeting").innerHTML = "Good Morning";
		} else if (time < 18) {
			document.getElementById("time-greeting").innerHTML = "Good Afternoon";
		} else {
			document.getElementById("time-greeting").innerHTML = "Good Evening";
		}
	}
};

shop.displayCustomerName();
shop.displayProductList();
shop.displayTotalPrice();
shop.timeDependentGreeting();
