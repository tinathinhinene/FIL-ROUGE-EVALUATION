document.getElementById("orderForm").addEventListener("submit", function(e){
    let valid = true;

    const name = document.getElementById("name").value.trim();
    if(!/^[a-zA-Z\s]+$/.test(name)){
        document.getElementById("nameError").style.display ="block";
        valid = false;
    } else {
document.getElementById("nameError").style.display = "none";
    }

const email = document.getElementById("email").value.trim();
if(!/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
    document.getElementById("emailError").style.display ="block";
    valid= false;
} else {
    document.getElementById("emailError").style.display="none";
}

const phone = document.getElementById("phone").value.trim();
if(!/^\d{10}$/.test(phone)){
    document.getElementById("phoneError").style.display="block";
    valid=false;
    } else {
        document.getElementById("phoneError").style.display = "none";
    }

if (!valid){
    e.preventDefault();
}
});    