/*Check if form is empty*/
function isValidEmail(){
    var email = document.forms["myForm"]["email"].value;

    if(email== ""){
        alert("Email must be filled out");
    }else{
        alert(email+" has been received by UCDFC");
    }
}