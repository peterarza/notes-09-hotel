function validation()	{
// The variables below reach into our index.php file and fills the 'firstname' and 'lastname' variables with the vakues that the user provides.

	var firstName = document.forms["hotelForm"]["firstname"].value;
	var lastName = document.forms["hotelForm"]["lastname"].value;


// This if statement will check our variables to make sure that they are not empty or null.

if (firstName == null || firstName == '' || lastName == null || lastName =='') {
	document.querySelector('.notify').textContent = "Don't forget to fill in the required fields!";
	return false;
	}
}