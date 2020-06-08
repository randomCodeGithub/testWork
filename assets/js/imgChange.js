"use sctrict";

function labelFocus(labelId) {
  let label = document.getElementById(labelId);
  label.style.fontWeight = "bold";  
  label.style.textTransform = "uppercase";  
}

function labelNotFocused(labelId) {
  let label = document.getElementById(labelId);
  label.style.fontWeight = "normal";  
  label.style.textTransform = "capitalize";  
}

document
  .getElementById("inputLoginEmail")
  .addEventListener("focus", function () {
    let img = (document.getElementById("loginMail").src =
      "./assets/img/icons/icon_mail_active.png"); 

      labelFocus("loginLabelEmail");

  });

document
  .getElementById("inputLoginEmail")
  .addEventListener("blur", function () {
    let img = (document.getElementById("loginMail").src =
      "./assets/img/icons/icon_mail.png");

      labelNotFocused("loginLabelEmail");

  });

document
  .getElementById("inputLoginPassword")
  .addEventListener("focus", function () {
    let img = (document.getElementById("loginLock").src =
      "./assets/img/icons/icon_lock_active.png");

      labelFocus("loginLabelPassword");

  });

document
  .getElementById("inputLoginPassword")
  .addEventListener("blur", function () {
    let img = (document.getElementById("loginLock").src =
      "./assets/img/icons/icon_lock.png");

      labelNotFocused("loginLabelPassword");

  });

document
  .getElementById("inputSignupName")
  .addEventListener("focus", function () {
    let img = (document.getElementById("signUpUser").src =
      "./assets/img/icons/icon_user_active.png");

      labelFocus("signUpName");

  });

document
  .getElementById("inputSignupName")
  .addEventListener("blur", function () {
    let img = (document.getElementById("signUpUser").src =
      "./assets/img/icons/icon_user.png");

      labelNotFocused("signUpName");

  });

document
  .getElementById("inputSignupEmail")
  .addEventListener("focus", function () {
    let img = (document.getElementById("signUpmail").src =
      "./assets/img/icons/icon_mail_active.png");

      labelFocus("signUpLabelEmail");

  });

document
  .getElementById("inputSignupEmail")
  .addEventListener("blur", function () {
    let img = (document.getElementById("signUpmail").src =
      "./assets/img/icons/icon_mail.png");

      labelNotFocused("signUpLabelEmail");

  });

document
  .getElementById("inputSignUpPassword")
  .addEventListener("focus", function () {
    let img = (document.getElementById("signUpLock").src =
      "./assets/img/icons/icon_lock_active.png");

      labelFocus("signUpLabelPassword");

  });

document
  .getElementById("inputSignUpPassword")
  .addEventListener("blur", function () {
    let img = (document.getElementById("signUpLock").src =
      "./assets/img/icons/icon_lock.png");

      labelNotFocused("signUpLabelPassword");

  });
