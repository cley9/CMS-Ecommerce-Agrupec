function mostrar(){
  let passLogin=document.getElementById("passwordLoginUser");
  let imgpassLogin=document.getElementById("imgPassLoginUser");
  let passLoginB=document.getElementById("passwordLoginUserB");
  let imgpassLoginB=document.getElementById("imgPassLoginUserB");
if (passLogin.type=="password") {
  passLogin.type="text";
  imgpassLogin.src="/storage/img/icons/eye-fill.svg";
}
else {
  passLogin.type="password";
  imgpassLogin.src="/storage/img/icons/eye-slash-fill.svg";
}
}

 function mostrarB(){
  let passLoginB=document.getElementById("passwordLoginUserB");
  let imgpassLoginB=document.getElementById("imgPassLoginUserB");
if (passLoginB.type=="password") {
  passLoginB.type="text";
  imgpassLoginB.src="/storage/img/icons/eye-fill.svg";
}
else {
  passLoginB.type="password";
  imgpassLoginB.src="/storage/img/icons/eye-slash-fill.svg";
}
 }

 function mostrarA(){
  let passLoginA=document.getElementById("passwordLoginUserA");
  let imgpassLoginA=document.getElementById("imgPassLoginUserA");
if (passLoginA.type=="password") {
  passLoginA.type="text";
  imgpassLoginA.src="/storage/img/icons/eye-fill.svg";
}
else {
  passLoginA.type="password";
  imgpassLoginA.src="/storage/img/icons/eye-slash-fill.svg";
}
 }

 function mostrarC(){
  let passLoginC=document.getElementById("passwordLoginAdmin");
  let imgpassLoginC=document.getElementById("imgPassLoginAdmin");
if (passLoginC.type=="password") {
  passLoginC.type="text";
  imgpassLoginC.src="/storage/img/icons/eye-fill.svg";
}
else {
  passLoginC.type="password";
  imgpassLoginC.src="/storage/img/icons/eye-slash-fill.svg";
}
 }