
    function error(message) {

                       $('#error').show(500, function() {
                       $('#error').html(message);

                   })
            }
    function HideError(){
            $('#error').hide(500, function() {});
    }
    
    function Validate(){
                if(document.Myform.fname.value ==""){
                  error("Enter First name");
                  document.Myform.fname.focus()
                  return false;
                }
                if(document.Myform.lname.value ==""){
                  error("Enter Last name");
                  document.Myform.lname.focus();
                  return false;
                }
                if(document.Myform.mobile.value ==""){
                  error("Enter Phone number");
                  document.Myform.mobile.focus();
                  return false;
                }
                if(isNaN(document.Myform.mobile.value) || (document.Myform.mobile.value.legth > 11) ){
                  error("Enter valid phone number");
                  document.Myform.mobile.focus();
                  return false;
                }
                if(document.Myform.email.value == ""){
                  error("Enter enter email address");
                  document.Myform.email.focus();
                  return false;
                }
                if(document.Myform.password.value >= 4){
                  error("Password should be greater than 4 characters");
                  document.Myform.password.focus();
                  return false;
                }
                if (atpos < 1 || ( dotpos - atpos < 2 )) 
                {
                    error("Please enter correct email ID")
                    document.myform.email.focus() ;
                    return false;
                }
                if(document.Myform.usertype.value =="Select User type"){
                  error("Please select privilege of user");
                  
                  return false;
                }
                return true;
}
    