
function validateAdminForm(){
  var flag = 1;

  var username = document.getElementById("username").value;
  if (username == "") {
    document.getElementById("username").style.border = "1px solid red";
    flag = 0;
  }

  var pass = document.getElementById("password").value;
  if (pass == "") {
    document.getElementById("password").style.border = "1px solid red";
    flag = 0;
  }

  if(flag == 1){
    return true;
  }

  else{
    return false;
  }

}

function submitAdminForm(){
  var a = validateAdminForm();

  if(a == true){
    document.forms["adminForm"].submit();
  }
  
  else{
    console.log('Error in form Submition');
  }
}




