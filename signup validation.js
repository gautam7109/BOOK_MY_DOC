function checkform(form)
  {
    if(form.fname.value == "") {
      alert("Error: username cannot be blank!");
      form.fname.focus();
      return false;
    }
    if(form.lname.value == "") {
      alert("Error: lastname cannot be blank!");
      form.lname.focus();
      return false;
    }
    if(form.email.value == "") {
      alert("Error: email cannot be blank!");
      form.email.focus();
      return false;
    }
if((form.gender[0].checked==false) && (form.gender[1].checked==false) && (form.gender[2].checked==false))
{
  alert("please choose your gender");
  form.gender.focus();
return false;
}
if(form.contact.value == "") {
      alert("Error: contact cannot be blank!");
      form.contact.focus();
      return false;
    }
    if(form.pass.value=""){
      alert("Error: password cannot be blank");
      form.pass.focus();
      return false;
    }
  }
