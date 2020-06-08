"use sctrict";

let formDiv = document.getElementById("formDiv");
let loginForm = document.getElementById("login");
let signUpForm = document.getElementById("signUp");

document.getElementById("signUpBtn").addEventListener("click", function () {
  let loginBtn = document.getElementById("loginBtn");
  loginBtn.disabled = true;

  loginForm.classList.add("fade-out-left");

  formDiv.classList.add("slide-left");
  formDiv.classList.remove("slide-right");

  loginForm.classList.add("hide");

  signUpForm.classList.remove("d-none");

  setTimeout(function () {
    loginForm.classList.add("d-none");
    loginForm.classList.remove("fade-out-left");
    loginBtn.disabled = false;
  }, 1000);

  setTimeout(function () {
    signUpForm.classList.remove("hide");
    signUpForm.classList.add("fade-in-right");
  }, 500);

  signUpForm.classList.remove("fade-in-right");
});

document.getElementById("loginBtn").addEventListener("click", function () {
  let signUpBtn = document.getElementById("signUpBtn");
  signUpBtn.disabled = true;

  signUpForm.classList.add("fade-out-right");

  formDiv.classList.add("slide-right");
  formDiv.classList.remove("slide-left");

  loginForm.classList.remove("d-none");

  signUpForm.classList.add("hide");

  setTimeout(function () {
    signUpForm.classList.add("d-none");
    signUpForm.classList.remove("fade-out-right");
    signUpBtn.disabled = false;
  }, 1000);

  setTimeout(function () {
    loginForm.classList.remove("hide");
    loginForm.classList.add("fade-in-left");
  }, 500);

  loginForm.classList.remove("fade-in-left");
});
