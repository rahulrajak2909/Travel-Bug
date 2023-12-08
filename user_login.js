var adminBtn = document.getElementById("admin-btn");
var userBtn = document.getElementById("user-btn");
var adminLogin = document.getElementById("registration");
var userLogin = document.getElementById("user");

adminBtn.addEventListener("click", function() {
  adminLogin.style.display = "block";
  userLogin.style.display = "none";
});

userBtn.addEventListener("click", function() {
  userLogin.style.display = "block";
  adminLogin.style.display = "none";
});
