function sendEmail() {
    console.log("Adesina");
    var dropdown = document.getElementById("form_category");
    var selectedValue = dropdown.options[dropdown.selectedIndex].value;
    let params = {
        name : document.getElementById("form_name").value,
        email : document.getElementById("form_email").value,
        category : selectedValue,
        message : document.getElementById("form_message").value
    }
    emailjs.send("service_g7k5kd4","template_jhgkpcj",params);
}