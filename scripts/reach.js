function validateForm() {
    var x = document.forms["contact"]["contact_name"].value;
    if (x == null || x == "") {
        alert("Please enter your name");
        return false;
    }
    var x = document.forms["contact"]["contact_email"].value;
    if (x == null || x == "") {
        alert("Please enter your e-mail");
        return false;   
    }
    var x = document.forms["contact"]["contact_comments"].value;
    if (x == null || x == "") {
        alert("Please enter your Message");
        return false;
    }
}