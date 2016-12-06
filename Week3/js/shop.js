var customerName = "Rattana";
var price = 10;
var quantity = 2;
var totalPrice = price * quantity;

var customerElement = document.getElementById("customer-name");
customerElement.textContent = customerName;

var totalPriceElement = document.getElementById("total-price");
totalPriceElement.textContent = totalPrice;