let signup = document.querySelector(".signup");
let login = document.querySelector(".login");
let slider = document.querySelector(".slider");
let formSection = document.querySelector(".form-section");
let isCompanyCheckbox = document.querySelector(".company-checkbox");
let vatNumberInput = document.querySelector(".vat-number");
let companyNameInput = document.querySelector(".company-name");

signup.addEventListener("click", () => {
    slider.classList.add("moveslider");
    formSection.classList.add("form-section-move");
});

login.addEventListener("click", () => {
    slider.classList.remove("moveslider");
    formSection.classList.remove("form-section-move");
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
