function register(){

	var firstName = document.getElementById('firstname').value;
	var lastName = document.getElementById('lastname').value;
	var userName = document.getElementById('username').value;
	//var email = document.getElementById('email').value;
	var password = document.getElementById('password').value;
	var email = 'cpn9025@rit.edu';

	window.alert(firstname +  lastname + userName + password);

	var hash = CryptoJS.MD5(password);

	var url = 'http://dj.normtronics.com/Registration.php?firstname=' + 
		firstName + '&lastname=' + lastName + '&username=' + userName + '&password=' + hash + '&email=' + email;

	window.alert(url);

	/*var client = new XMLHttpRequest();
	client.open("GET", url, false);
	client.send(); 
	var response = JSON.parse(client.responseText);*/
	//console.log(response);

	window.location ='http://localhost/RIT48/index.php';

}
