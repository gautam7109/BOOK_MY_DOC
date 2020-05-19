function checkForm(form)
  {
    if(form.email.value == "") {
      alert("Error: username cannot be blank!");
      form.email.focus();
      return false;
    }

   if(form.pass.value == "")
   {
     alert("Error: Password cannot be blank!");
     form.pass.focus();
     return false;
   }

    alert("You entered a valid password: " + form.pass.value);
    return true;
  }
