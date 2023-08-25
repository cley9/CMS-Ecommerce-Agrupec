// ----- passwordLoginUserView
let passwordView=document.querySelector('.passwordLoginUserViewU');
passwordView.addEventListener("click",(e)=>{
  let passLoginA=document.getElementById("passwordLoginUserU");
  let imgpassLoginA=document.getElementById("imgPassLoginUserU");
if (passLoginA.type=="password") {
  passLoginA.type="text";
  imgpassLoginA.src="/storage/img/icons/eye-fill.svg";
}
else {
  passLoginA.type="password";
  imgpassLoginA.src="/storage/img/icons/eye-slash-fill.svg";
}
});

let passwordViewAdmin=document.querySelector('.passwordLoginUserViewA');
passwordViewAdmin.addEventListener("click",(e)=>{
  let passLoginA=document.getElementById("passwordLoginAdmin");
  let imgpassLoginA=document.getElementById("imgPassLoginAdmin");
if (passLoginA.type=="password") {
  passLoginA.type="text";
  imgpassLoginA.src="/storage/img/icons/eye-fill.svg";
}
else {
  passLoginA.type="password";
  imgpassLoginA.src="/storage/img/icons/eye-slash-fill.svg";
}
});