// var userName;
// var firstName;
// var lastName;

// userName = "janeromero";
// firstName = "Jane";
// lastName = "Romero";

// /*console.log(userName);
// console.log(firstName);
// console.log(lastName);*/

// var message = "Your name is " + firstName + " " + lastName + " " + " and your username is " + " " + userName + ".";

// // console.log(message);

// document.getElementById("yourMessage").innerHTML = message;

/*IF STATEMENTS*/

// var userName;
// var passWord;

// userName = "janeromero";
// passWord = "abc123";

// if (userName == "janeromero") {
// 	console.log("Your username is correct.");
// } else {
// 	console.log("Username entered is incorrect.");
// }

// if (passWord == "abc123") {
// 	console.log("Your password is correct.")
// } else {
// 	console.log("Password entered is incorrect.")
// }

/*LOOPS (WHILE, DO... WHILE, FOR*/

// var counter = 0;
// while (counter <= 10) {
// 	console.log(counter);
// 	counter = counter +2;
// }

// var counter = 0;
// while (counter <= 100) {
// 	/*print all odd numbers only*/
// 	if (counter % 2 != 0) {
// 		console.log(counter);
// 	}
// 	counter = counter +1;

// }

var yourName = "Juan Dela Cruz";
var counter = 0;
while (counter < 10) {
	// console.log(yourName);
	document.getElementById("yourMessage").innerHTML = yourName;
	counter = counter + 1;
}