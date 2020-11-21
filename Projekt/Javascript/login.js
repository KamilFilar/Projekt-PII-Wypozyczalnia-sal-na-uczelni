//Tutaj są loginy i hasła użytkowników
var objPeople = [
	{ // Object @ 0 index
		login: "admin",
		password: "admin"
	},
	{ // Object @ 1 index
		login: "student123",
		password: "12345"
	}

]

function getInfo() {
	var login = document.getElementById('login').value
	var password = document.getElementById('password').value

	for(var i = 0; i < objPeople.length; i++) {
		// pętla sprawdzająca czy login i hasło należą do objPeople
		if(login == objPeople[i].login && password == objPeople[i].password) {
			localStorage.setItem('loginuzytkownika',login);
			var cokolwiek;
			if(login=='admin'){
				cokolwiek=1;
			}else{
				cokolwiek=0;
			}
			// jeśli znaleziono - stop
			return
		}
	}
	alert("Nieprawidłowy login lub hasło.")
}

