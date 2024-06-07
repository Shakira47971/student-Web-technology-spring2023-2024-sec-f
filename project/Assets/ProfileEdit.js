function nameValidate() {
    let name = document.getElementById('name').value;
    let obj = document.getElementsByTagName('p')[0];
    obj.innerHTML = "";

    if (name === "") {
      obj.innerHTML = "*Name cannot be empty";
      obj.style.color = 'red';
      return false;
    }

    const words = name.split(/\s+/);
    if (words.length < 2) {
      obj.innerHTML = "*Name must contain at least two words";
      obj.style.color = 'red';
      return false;
    }

    for (const word of words) {
      const charCode = word[0].charCodeAt(0);
      if (charCode < 65 || charCode > 90 && charCode < 97 || charCode > 122) {
        obj.innerHTML = "*All words must start with a letter.";
        obj.style.color = 'red';
        return false;
      }
    }
    const allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.- ';
    if (!name.split('').every(char => allowedChars.includes(char))) {
      obj.innerHTML = "*Input can only contain letters (a-z, A-Z), periods (.), dashes (-), and spaces.";
      obj.style.color = 'red';
      return false;
    }
    obj.innerHTML = "Valid name";
    obj.style.color = 'green';
    return true;
  }

  function emailValidate() {
    let email = document.getElementById('email').value;
    let obj = document.getElementsByTagName('p')[0];
    obj.innerHTML = "";

    if (email === "") {
      obj.innerHTML = "*Email Address Cannot be Empty";
      obj.style.color = 'red';
      return false;
    }

    const atPos = email.indexOf("@");
    if (atPos === -1 || atPos === 0 || atPos === email.length - 1) {
      obj.innerHTML = "*Email must contain '@' symbol not at the beginning or end.";
      obj.style.color = 'red';
      return false;
    }

    const username = email.substring(0, atPos);
    const domain = email.toLowerCase().substring(atPos + 1);

    if (username.length === 0 || !isUsernameValid(username)) {
      obj.innerHTML = "*Username can only contain letters, numbers, and must start with a letter.";
      obj.style.color = 'red';
      return false;
    }

    function isUsernameValid(username) {
      const firstChar = username.charAt(0);
      if (isNaN(firstChar * 1)) {
        const validChars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        for (let i = 1; i < username.length; i++) {
          const char = username.charAt(i);
          if (!validChars.includes(char)) {
            return false;
          }
        }
        return true;
      }
      return false;
    }

    if (domain !== "gmail.com" && domain !== "yahoo.com") {
      obj.innerHTML = "Only Gmail and Yahoo email addresses are allowed.";
      obj.style.color = 'red';
      return false;
    }

    obj.innerHTML = "Valid Email Address";
    return true;
  }
  function genderValidate() {
    let male = document.getElementById('male');
    let female = document.getElementById('female');
    let other = document.getElementById('other');
    let obj = document.getElementsByTagName('p')[0];
    obj.innerHTML = "";

    if (!male.checked && !female.checked && !other.checked) {
      obj.innerHTML = "Please select a gender.";
      obj.style.color = 'red';
      return false;
    } else {
      obj.innerHTML = "gender selected";
      obj.style.color = 'green';
      return true;
    }
  }

  function dob() {
    let dd = document.getElementById('dd').value;
    let mm = document.getElementById('mm').value;
    let yyyy = document.getElementById('yyyy').value;
    let obj = document.getElementsByTagName('p')[0];
    obj.innerHTML = "";

    if (dd === "" || mm === "" || yyyy === "") {
      obj.innerHTML = "*Date is invalid: Please fill in all fields.";
      obj.style.color = 'red';
      return false;
    }

    if (isNaN(dd) || isNaN(mm) || isNaN(yyyy)) {
      obj.innerHTML = "*Date is invalid: Please enter numbers for day, month, and year.";
      obj.style.color = 'red';
      return false;
    }

    dd = parseInt(dd);
    mm = parseInt(mm);
    yyyy = parseInt(yyyy);

    if (dd < 1 || dd > 31 || mm < 1 || mm > 12 || yyyy < 1953 || yyyy > 2004) {
      obj.innerHTML = "*Date is invalid: Values are outside the allowed ranges.";
      obj.style.color = 'red';
      return false;
    }

    let maxDays = 31;
    if (mm == 4 || mm == 6 || mm == 9 || mm == 11) {
      maxDays = 30;
    } else if (mm == 2) {
      maxDays = 28;
      if (yyyy % 4 == 0 && (yyyy % 100 != 0 || yyyy % 400 == 0)) {
        maxDays = 29;
      }
    }

    if (dd > maxDays) {
      obj.innerHTML = "*Date is invalid: Day is not valid for the selected month.";
      obj.style.color = 'red';
      return false;
    }
    obj.innerHTML = "Date Valid";
    obj.style.color = 'green';
    return true;
  }
  function validatePic() {
    let obj = document.getElementsByTagName('p')[0];
    obj.innerHTML = "";
    obj.style.color = '';

    let fileInput = document.getElementById('profilePic');
    let file = fileInput.files[0];
    let fileSize = file ? file.size : 0;
    let fileType = file ? file.type : '';

    let validExtensions = ['image/jpeg', 'image/png', 'image/gif'];
    let maxFileSize = 500000; 
    if (!file) {
      obj.innerHTML = "*Picture cannot be empty";
      obj.style.color = 'red';
      return false;
    }
    if (fileSize > maxFileSize) {
      obj.innerHTML = "Sorry, your file is too large. Maximum size allowed is 500KB.";
      obj.style.color = 'red';
      return false;
    }
    if (validExtensions.indexOf(fileType) === -1) {
      obj.innerHTML = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      obj.style.color = 'red';
      return false;
    }
    obj.innerHTML = "Valid Picture";
    obj.style.color = 'green';
    return true; 
  }