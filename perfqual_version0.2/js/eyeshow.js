const passwordInput = document.getElementById("passwordInput");
const togglePasswordButton = document.getElementById("togglePassword");

togglePasswordButton.addEventListener("click", function() {
if (passwordInput.type === "password") {
passwordInput.type = "text";
togglePasswordButton.innerHTML = '<iconify-icon icon="typcn:eye"></iconify-icon>';
} else {
passwordInput.type = "password";
togglePasswordButton.innerHTML = '<iconify-icon icon="basil:eye-closed-solid"></iconify-icon>';
}
});