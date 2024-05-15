
    // Take all input value
    var confirmPassword = document.getElementById('confirmPassword');

    // Take all the error message container
    var confirmPasswordError = document.getElementById('confirmPasswordError');

    var regisBtn = document.getElementById("registerBtn");

    function validateConfirmPassword(){
        if (confirmPassword.value == "" ){
            confirmPassword.style.borderColor = "red"
            confirmPasswordError.innerHTML = "Password cannot be empty"
            return false
        } else if(confirmPassword.value != password.value){
            confirmPassword.style.borderColor = "red"
            confirmPasswordError.innerHTML = "Confirm password must be the same as password"
            return false
        } else {
            confirmPassword.style.borderColor = ""
            confirmPasswordError.innerHTML = ""
            return true
        }
    }
    
    regisBtn.addEventListener('click', function(e){
        validateConfirmPassword()

        if (validateConfirmPassword()){
            alert('Registration Sucessful')
        } else {
            e.preventDefault()
        }

    })
    

