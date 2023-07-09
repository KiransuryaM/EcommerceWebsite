function email(){
const mail = document.getElementById("INPUT").value;

if(mail.isEmail()){
      alert("You will get updates via your email");
}
else{
    alert("Invalid E-Mail Address");
}
}
function mesfunc(){
      const name = document.getElementById("mesname").value;
      const email = document.getElementById("mesmail").value;
      const sub = document.getElementById("messub").value;
      const mess = document.getElementById("mescom").value;
      if(name==""){
        alert("Enter your name");
      }
      else if(email.isEmail()===false){
        alert("Enter Valid E Mail Address");
  }
  else if(sub.length<3){
        alert("Give proper Subject Line")
  }
  else if(mess.length<2){
       alert("Please express your query more")
  }
  else{
         alert("We will contact you as soon as possible");
  }
}
String.prototype.isEmail = function() {
    return !!this.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
}
