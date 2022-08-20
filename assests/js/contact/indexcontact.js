// regex
var namePat = /^[a-zA-Z\s]+$/;
var phonePat = /^[7-9][0-9]{9}$/;
var msgPat = /^[a-zA-Z\s]+$/;
var emailPat = /^[a-zA-Z0-9]{3,}@[a-z0-9]{2,}\.[a-z\.]{2,9}$/;

// onblur event
function forname(ele) {
  console.log(ele.name);

  if (ele.name === "name") {
    if (ele.value === "") {
      let mytxt = "First name is left blank*";
      document.querySelector("#student-name").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(namePat)) {
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#student-name").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#student-name").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "email") {
    if (ele.value === "") {
      let mytxt = "Email is left blank*";
      document.querySelector("#student-email").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(emailPat)) {
      let mytxt = "Email is Required*";
      document.querySelector("#student-email").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#student-email").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "phone") {
    if (ele.value === "") {
      let mytxt = "phone is left blank*";
      document.querySelector("#student-phone").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(phonePat)) {
      let mytxt = "phone is Required*";
      document.querySelector("#student-phone").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#student-phone").innerHTML = "";
      ele.className = "validClass";
    }
  } else if (ele.name === "msg") {
    if (ele.value === "") {
      let mytxt = "Message is left blank*";
      document.querySelector("#student-msg").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else if (!ele.value.match(msgPat)) {
      let mytxt = "Message is Required*";
      document.querySelector("#student-msg").innerHTML = mytxt;
      ele.className = "invalidClass";
    } else {
      document.querySelector("#student-msg").innerHTML = "";
      ele.className = "validClass";
    }
  }
}

// onsubmit event
function validate(myform) {
  var name = myform.name.value;
  var email = myform.email.value;
  var phone = myform.phone.value;
  var msg = myform.msg.value;

  var error = 0;
  var errors = "Following errors found. \n";

  if (name === "") {
    error++;
    let mytxt = "First name is left blank*";
    document.querySelector("#student-name").innerHTML = mytxt;
    error;

    myform.name.className = "invalidClass";
  } else {
    if (!namePat.test(name)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#student-name").innerHTML = mytxt;
      error;
      myform.name.className = "invalidClass";
    } else {
      myform.name.className = "validClass";
    }
  }

  if (email === "") {
    error++;
    let mytxt = "Email is left blank*";
    document.querySelector("#student-email").innerHTML = mytxt;
    error;

    myform.email.className = "invalidClass";
  } else {
    if (!emailPat.test(email)) {
      error++;
      let mytxt = "email is required*";
      document.querySelector("#student-email").innerHTML = mytxt;
      error;
      myform.email.className = "invalidClass";
    } else {
      myform.email.className = "validClass";
    }
  }

  if (phone === "") {
    error++;
    let mytxt = "Phone is left blank*";
    document.querySelector("#student-phone").innerHTML = mytxt;
    error;

    myform.phone.className = "invalidClass";
  } else {
    if (isNaN(phone)) {
      error++;
      let mytxt = "Phone number is required* ";
      document.querySelector("#student-phone").innerHTML = mytxt;
      error;
      myform.phone.className = "invalidClass";
    } else {
      myform.phone.className = "validClass";
    }
  }
  if (msg === "") {
    error++;
    let mytxt = "Message is left blank*";
    document.querySelector("#student-msg").innerHTML = mytxt;
    error;

    myform.msg.className = "invalidClass";
  } else {
    if (!msgPat.test(msg)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in Message*";
      document.querySelector("#student-msg").innerHTML = mytxt;
      error;
      myform.msg.className = "invalidClass";
    } else {
      myform.msg.className = "validClass";
    }
  }

  if (error > 0) {
    return false;
  } else {
    console.log(
      "name:" + name,
      "email:" + email,
      "phone:" + phone,
      "msg:" + msg
    );
  }
}
