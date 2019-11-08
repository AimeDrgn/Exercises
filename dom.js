function myFunction2() {
    let ex2 = document.getElementById("ex2");
    //form
    let form = document.createElement("form");

    //First Name
    let firstNameLabel = document.createElement("label");
    let firstNameLabelText = document.createTextNode("Name");
    firstNameLabel.setAttribute("for", "firstName");
    firstNameLabel.appendChild(firstNameLabelText);

    firstNameLabel.style.color = "blue";

    let firstNameImput = document.createElement("input");
    firstNameImput.setAttribute("id", "firstName");
    firstNameImput.setAttribute("type" , "text");

    form.appendChild(firstNameLabel);
    form.appendChild(document.createElement(br));
    form.appendChild(firstNameImput);

    //br

    form.appendChild(document.createElement(br));
    form.appendChild(document.createElement(br));

    //Email

    let emailLabel = document.createElement("label");
    let emailLabelText = document.createTextNode("Email");
    emailLabel.setAttribute("for", "Email");
    emailLabel.appendChild(emailLabelText);

}


