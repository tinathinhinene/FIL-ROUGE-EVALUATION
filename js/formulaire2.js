document.getElementById("orderForm2").addEventListener("submit", function (e) {
    let valid2 = true;

    const name = document.getElementById("name");
    const nameValue = name.value.trim();
    if (!/^[a-zA-Z\s]+$/.test(nameValue)) {
        document.getElementById("nameError").textContent = "Ce champ est obligatoire et doit contenir uniquement des lettres.";
        document.getElementById("nameError").style.display = "block";
        valid2 = false;
    } else {
        document.getElementById("nameError").style.display = "none";
        name.classList.remove("error-input");
    }

    const firstname = document.getElementById("firstname");
    const firstnamevalue = firstname.value.trim();
    if (!/^[a-zA-Z\s]+$/.test(firstnameValue)) {
        document.getElementById("firstnameError").textContent = "Ce champ est obligatoire et doit contenir uniquement des lettres.";
        document.getElementById("firstnameError").style.display = "block";
        valid2 = false;
    } else {
        document.getElementById("firstnameError").style.display = "none";
        firstname.classList.remove("error-input");
    }

    const email = document.getElementById("email").value.trim();
    if (!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        document.getElementById("emailError").style.display = "block";
        valid2 = false;
    } else {
        document.getElementById("emailError").style.display = "none";
    }

    const phone = document.getElementById("phone").value.trim();
    if (!/^\d{10}$/.test(phone)) {
        document.getElementById("phoneError").style.display = "block";
        valid2 = false;
    } else {
        document.getElementById("phoneError").style.display = "none";
    }

    const demande = document.getElementById("demande").value.trim();
    if (demande === "") {
        document.getElementById("demandeError").style.display = "block";
        valid2 = false;
    } else {
        document.getElementById("demandeError").style.display = "none";
    }
    if (!valid2) {
        e.preventDefault();
    }
});    
