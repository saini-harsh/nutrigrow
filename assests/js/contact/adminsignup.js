// regex
var namePat = /^[a-zA-Z\s]+$/;
var phonePat = /^[7-9][0-9]{9}$/;
var passPat = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
var emailPat = /^[a-zA-Z0-9]{3,}@[a-z0-9]{2,}\.[a-z\.]{2,9}$/;

// onblur event
function adminforname(ele) {
  if (ele.name === "fname") {
    if (ele.value === "") {
      let mytxt = "First name is left blank*";
      document.querySelector("#sfname").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(namePat)) {
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#sfname").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#sfname").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "lname") {
    if (ele.value === "") {
      let mytxt = "Last name is left blank*";
      document.querySelector("#slname").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(namePat)) {
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#slname").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#slname").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "email") {
    if (ele.value === "") {
      let mytxt = "Email is left blank*";
      document.querySelector("#semail").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(emailPat)) {
      let mytxt = "Email is Required*";
      document.querySelector("#semail").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#semail").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "phone") {
    if (ele.value === "") {
      let mytxt = "phone is left blank*";
      document.querySelector("#sphone").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(phonePat)) {
      let mytxt = "phone is Required*";
      document.querySelector("#sphone").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#sphone").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "pass") {
    if (ele.value === "") {
      let mytxt = "Password is left blank*";
      document.querySelector("#spass").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(passPat)) {
      let mytxt =
        "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character*";
      document.querySelector("#spass").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#spass").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "cfpass") {
    if (ele.value === "") {
      let mytxt = "Password is left blank*";
      document.querySelector("#scfpass").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(passPat)) {
      let mytxt = "";
      document.querySelector("#scfpass").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#scfpass").innerHTML = "";
      ele.className = "validClass";
    }
  }
}

// onsubmit event
function adminsvalidate(myform) {
  var fname = myform.fname.value;
  var lname = myform.lname.value;
  var email = myform.email.value;
  var phone = myform.phone.value;
  var pass = myform.pass.value;

  var error = 0;
  var errors = "Following errors found. \n";

  if (fname === "") {
    error++;
    let mytxt = "First name is left blank*";
    document.querySelector("#sfname").innerHTML = mytxt;
    error;

    myform.fname.className = "invalidClass";
  } else {
    if (!namePat.test(fname)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#sfname").innerHTML = mytxt;
      error;
      myform.fname.className = "invalidClass";
    } else {
      myform.fname.className = "validClass";
    }
  }

  if (lname === "") {
    error++;
    let mytxt = "Last name is left blank*";
    document.querySelector("#slname").innerHTML = mytxt;
    error;

    myform.lname.className = "invalidClass";
  } else {
    if (!namePat.test(lname)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#slname").innerHTML = mytxt;
      error;
      myform.lname.className = "invalidClass";
    } else {
      myform.lname.className = "validClass";
    }
  }

  if (email === "") {
    error++;
    let mytxt = "Email is left blank*";
    document.querySelector("#semail").innerHTML = mytxt;
    error;

    myform.email.className = "invalidClass";
  } else {
    if (!emailPat.test(email)) {
      error++;
      let mytxt = "email is required*";
      document.querySelector("#semail").innerHTML = mytxt;
      error;
      myform.email.className = "invalidClass";
    } else {
      myform.email.className = "validClass";
    }
  }

  if (phone === "") {
    error++;
    let mytxt = "Phone is left blank*";
    document.querySelector("#sphone").innerHTML = mytxt;
    error;

    myform.phone.className = "invalidClass";
  } else {
    if (isNaN(phone)) {
      error++;
      let mytxt = "Phone number is required* ";
      document.querySelector("#sphone").innerHTML = mytxt;
      error;
      myform.phone.className = "invalidClass";
    } else {
      myform.phone.className = "validClass";
    }
  }
  if (pass === "") {
    error++;
    let mytxt = "password is left blank*";
    document.querySelector("#spass").innerHTML = mytxt;
    error;

    myform.pass.className = "invalidClass";
  } else {
    if (!passPat.test(pass)) {
      error++;
      let mytxt =
        "Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special characte**";
      document.querySelector("#spass").innerHTML = mytxt;
      error;
      myform.pass.className = "invalidClass";
    } else {
      myform.pass.className = "validClass";
    }
  }

  if (error > 0) {
    return false;
  }
}
