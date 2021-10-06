
function validateForm() {
  var fname = document.forms["srmForm"]["fname"];
  var lname = document.forms["srmForm"]["lname"];
  var gender = document.forms["srmForm"]["gender"];
  var contact = document.forms["srmForm"]["contact"];
  var email = document.forms["srmForm"]["email"];
  var address = document.forms["srmForm"]["address"];
  var course = document.forms["srmForm"]["course"];
  var flag = 1;

  if(fname.value === ""){
    fname.style.border = "1px solid red";
    flag = 0;  
  }

  if(lname.value === ""){
    lname.style.border = "1px solid red"; 
    flag = 0; 
  }

  if(gender.value === ""){
    document.getElementById('genderError').style.display = "block";
    flag = 0; 
  }

  if(contact.value === "" || !(contact.value.match(/\d/g).length===10)){
    contact.style.border = "1px solid red"; 
    flag = 0; 

  }

  if(email.value === "" || !(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(email.value))){
    email.style.border = "1px solid red";
    flag = 0; 
  }

  if(address.value === ""){
    address.style.border = "1px solid red";
    flag = 0; 
  }

  if(course.value === ""){
    document.getElementById("selectCourse").style.border = "1px solid red";
    document.getElementById("selectCourse").style.borderRadius = "4px";
    flag = 0; 
  }

  if(flag == 1){
    return true;
  }

  else{
    return false;
  }
}

function submitForm(){
  var a = validateForm();

  if(a == true){
    document.forms["srmForm"].submit();
  }
  
  else{
    console.log('Error in form Submition');
  }
}