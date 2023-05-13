
function validateForm() {
 
     var username = document.getElementById("username").value;
     var email = document.getElementById("email").value;
     var password = document.getElementById("password").value;
     var confirmPassword = document.getElementById("confirm_password").value;
     var dateOfBirth = document.getElementById("dob").value;
    //  Regular expression patterns
     var usernameRegex = /^[a-zA-Z0-9_-]{3,20}$/;
     var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
     var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
  
    //  Validation messages
     var usernameError = "Username must be between 3 and 20 characters and can only contain letters, numbers, underscores, and hyphens";
     var emailError = "Please enter a valid email address";
     var passwordError = "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one number";
     var confirmPasswordError = "Passwords do not match";
     var dateOfBirthError = "Please select a valid date of birth";
     var test=true ; 
    
    //  Validate username
     if (!username.match(usernameRegex)) {
       document.getElementById("username-error").innerHTML = usernameError;
       document.getElementById("username-error").style.color = "red";
       test=false;
     }else {
      document.getElementById("username-error").innerHTML = "";
     } 
  
    //  Validate email
     if (!email.match(emailRegex)) {
       document.getElementById("email-error").innerHTML = emailError;
       document.getElementById("email-error").style.color = "red";
       test=false;
     }else {
      document.getElementById("email-error").innerHTML = "";
     } 
   //   Validate password
     if (!password.match(passwordRegex)) {
       document.getElementById("password-error").innerHTML = passwordError;
       document.getElementById("password-error").style.color = "red";
       test=false;
     } else {
      document.getElementById("password-error").innerHTML = "";
     } 
     // Validate confirm password
     if (password !== confirmPassword) {
       document.getElementById("confirm-password-error").innerHTML = confirmPasswordError;
       document.getElementById("confirm-password-error").style.color = "red";
       test=false;
     } else {
      document.getElementById("confirm-password-error").innerHTML = "";
     } 
    // Validate date of birth
     if (!dateOfBirth) {
      document.getElementById("dob-error").innerHTML = dateOfBirthError;
      document.getElementById("dob-error").style.color = "red";
       test=false;
     }else {
      document.getElementById("dob-error").innerHTML = "";
     } 
     alert(test) ;
     return test ;
    
};


function validatelogin(){
  alert("1");
  var test=true ; 
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var emailError = "Please enter a valid email address";
  var passwordError = "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one number";
//email
  if (!email.match(emailRegex)) {
    document.getElementById("email-error").innerHTML = emailError;
    document.getElementById("email-error").style.color = "red";
    test=false;
  }else {
   document.getElementById("email-error").innerHTML = "";
  } 
  //password 
  
return test ; 
}