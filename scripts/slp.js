function validateForm() {
    var x = document.forms["contact"]["contact_name"].value;
    if (x == null || x == "") {
        alert("Please enter your name");
        return false;
    }
    var x = document.forms["contact"]["contact_email"].value;
    if (x == null || x == "") {
        alert("Please enter your E-mail");
        return false;	
    }
    var x = document.forms["contact"]["college_name"].value;
    if (x == null || x == "") {
        alert("Please enter your College name");
        return false;
    }
    var x = document.forms["contact"]["course_name"].value;
    if (x == null || x == "") {
        alert("Please enter your Course name");
        return false;
    }
    var x = document.forms["contact"]["year"].value;
    if (x == null || x == "") {
        alert("Please enter your year of study");
        return false;
    }
    var x = document.forms["contact"]["contact_no"].value;
    if (x == null || x == "") {
        alert("Please enter your Contact No");
        return false;
    }
}