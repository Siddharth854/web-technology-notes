<!DOCTYPE html>
<html>
<head>
  <title>Dynamic Form Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
    }
    form {
      display: flex;
      flex-direction: column;
      width: 300px;
      align-items: center;
      box-sizing: border-box  ;
    }
    label {
      margin-top: 10px;
    }
    input, button {
      padding: 8px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div id="form-container"></div>
  <script>
    const form = document.createElement("form");
    form.id = "userForm";

    const nameLabel = document.createElement("label");
    nameLabel.textContent = "Name:";
    const nameInput = document.createElement("input");
    nameInput.type = "text";
    nameInput.name = "name";
    nameInput.required = true;

    const emailLabel = document.createElement("label");
    emailLabel.textContent = "Email:";
    const emailInput = document.createElement("input");
    emailInput.type = "email";
    emailInput.name = "email";
    emailInput.required = true;

    const passwordLabel = document.createElement("label");
    passwordLabel.textContent = "Password:";
    const passwordInput = document.createElement("input");
    passwordInput.type = "password";
    passwordInput.name = "password";
    passwordInput.required = true;

    const submitBtn = document.createElement("button");
    submitBtn.type = "submit";
    submitBtn.textContent = "Submit";

    form.appendChild(nameLabel);
    form.appendChild(nameInput);
    form.appendChild(emailLabel);
    form.appendChild(emailInput);
    form.appendChild(passwordLabel);
    form.appendChild(passwordInput);
    form.appendChild(submitBtn);

    document.getElementById("form-container").appendChild(form);

    form.addEventListener("submit", function(event) {
      event.preventDefault(); 

      const name = nameInput.value.trim();
      const email = emailInput.value.trim();

      if (name && email && password) {
        alert(`Form submitted!\nName: ${name}\nEmail: ${email}\nPassword: ${password}`);
        form.reset();
      } else {
        alert("Please fill out all fields.");
      }
    });
  </script>
</body>
</html>
