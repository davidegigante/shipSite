let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");
let isCompanyCheckbox = document.querySelector(".company-checkbox");
let vatNumberInput = document.querySelector(".vat-number");
let companyNameInput = document.querySelector(".company-name");

// Seleziona le due box
let loginBox = document.querySelector(".login-box");
let signupBox = document.querySelector(".signup-box");

signup.addEventListener("click", () => {
    slider.classList.add("moveslider");
    // Quando si fa clic su "Signup", nascondi la loginBox e mostra la signupBox
    loginBox.style.display = "none";
    signupBox.style.display = "flex";
});

login.addEventListener("click", () => {
    slider.classList.remove("moveslider");
    // Quando si fa clic su "Login", nascondi la signupBox e mostra la loginBox
    signupBox.style.display = "none";
    loginBox.style.display = "flex";
});

isCompanyCheckbox.addEventListener("change", () => {
    if(isCompanyCheckbox.checked) {
        vatNumberInput.style.display = "block";
        companyNameInput.style.display = "block";
    } else {
        vatNumberInput.style.display = "none";
        companyNameInput.style.display = "none";
    }
});
