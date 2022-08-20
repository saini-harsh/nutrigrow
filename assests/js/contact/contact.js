// regex
var namePat = /^[a-zA-Z\s]+$/;
var phonePat = /^[7-9][0-9]{9}$/;
var msgPat = /^[a-zA-Z\s]+$/;
var emailPat = /^[a-zA-Z0-9]{3,}@[a-z0-9]{2,}\.[a-z\.]{2,9}$/;

// onblur event
function fornamem(ele) {
  console.log(ele.name);

  if (ele.name === "name") {
    if (ele.value === "") {
      let mytxt = "First name is left blank*";
      document.querySelector("#student-namem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else if (!ele.value.match(namePat)) {
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#student-namem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else {
      document.querySelector("#student-namem").innerHTML = "";
      ele.className = "validClassb";
    }
  } else if (ele.name === "lname") {
    if (ele.value === "") {
      let mytxt = "Last name is left blank*";
      document.querySelector("#student-lnamem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else if (!ele.value.match(namePat)) {
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#student-lnamem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else {
      document.querySelector("#student-lnamem").innerHTML = "";
      ele.className = "validClassb";
    }
  } else if (ele.name === "email") {
    if (ele.value === "") {
      let mytxt = "Email is left blank*";
      document.querySelector("#student-emailm").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else if (!ele.value.match(emailPat)) {
      let mytxt = "Email is Required*";
      document.querySelector("#student-emailm").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else {
      document.querySelector("#student-emailm").innerHTML = "";
      ele.className = "validClassb";
    }
  } else if (ele.name === "pphone") {
    if (ele.value === "") {
      let mytxt = "phone is left blank*";
      document.querySelector("#student-pphonem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else if (!ele.value.match(phonePat)) {
      let mytxt = "phone is Required*";
      document.querySelector("#student-pphonem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else {
      document.querySelector("#student-pphonem").innerHTML = "";
      ele.className = "validClassb";
    }
  } else if (ele.name === "ophone") {
    if (ele.value === "") {
      let mytxt = "phone is left blank*";
      document.querySelector("#student-ophonem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else if (!ele.value.match(phonePat)) {
      let mytxt = "phone is Required*";
      document.querySelector("#student-ophonem").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else {
      document.querySelector("#student-ophonem").innerHTML = "";
      ele.className = "validClassb";
    }
  } else if (ele.name === "msg") {
    if (ele.value === "") {
      let mytxt = "Message is left blank*";
      document.querySelector("#student-msg").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else if (!ele.value.match(msgPat)) {
      let mytxt = "Message is Required*";
      document.querySelector("#student-msg").innerHTML = mytxt;
      ele.className = "invalidClassb";
    } else {
      document.querySelector("#student-msg").innerHTML = "";
      ele.className = "validClassb";
    }
  }
}

// onsubmit event
function validate2(myform) {
  var name = myform.name.value;
  var lname = myform.lname.value;
  var email = myform.email.value;
  var pphone = myform.pphone.value;
  var ophone = myform.ophone.value;
  var msg = myform.msg.value;

  var error = 0;
  var errors = "Following errors found. \n";

  if (name === "") {
    error++;
    let mytxt = "First name is left blank*";
    document.querySelector("#student-namem").innerHTML = mytxt;
    error;

    myform.name.className = "invalidClassb";
  } else {
    if (!namePat.test(name)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#student-namem").innerHTML = mytxt;
      error;
      myform.name.className = "invalidClassb";
    } else {
      myform.name.className = "validClassb";
    }
  }

  if (lname === "") {
    error++;
    let mytxt = "Last name is left blank*";
    document.querySelector("#student-lnamem").innerHTML = mytxt;
    error;

    myform.lname.className = "invalidClassb";
  } else {
    if (!namePat.test(lname)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in name*";
      document.querySelector("#student-lnamem").innerHTML = mytxt;
      error;
      myform.lname.className = "invalidClassb";
    } else {
      myform.lname.className = "validClassb";
    }
  }

  if (email === "") {
    error++;
    let mytxt = "Email is left blank*";
    document.querySelector("#student-emailm").innerHTML = mytxt;
    error;

    myform.email.className = "invalidClassb";
  } else {
    if (!emailPat.test(email)) {
      error++;
      let mytxt = "email is required*";
      document.querySelector("#student-emailm").innerHTML = mytxt;
      error;
      myform.email.className = "invalidClassb";
    } else {
      myform.email.className = "validClassb";
    }
  }

  if (pphone === "") {
    error++;
    let mytxt = "Phone is left blank*";
    document.querySelector("#student-phonem").innerHTML = mytxt;
    error;

    myform.pphone.className = "invalidClassb";
  } else {
    if (isNaN(pphone)) {
      error++;
      let mytxt = "Phone number is required.*";
      document.querySelector("#student-phonem").innerHTML = mytxt;
      error;
      myform.pphone.className = "invalidClassb";
    } else {
      myform.pphone.className = "validClassb";
    }
  }
  if (ophone === "") {
    error++;
    let mytxt = "Order Number is left blank*";
    document.querySelector("#student-ophonem").innerHTML = mytxt;
    error;

    myform.ophone.className = "invalidClassb";
  } else {
    if (isNaN(ophone)) {
      error++;
      let mytxt = "Order number is required.*";
      document.querySelector("#student-ophonem").innerHTML = mytxt;
      error;
      myform.ophone.className = "invalidClassb";
    } else {
      myform.ophone.className = "validClassb";
    }
  }
  if (msg === "") {
    error++;
    let mytxt = "Your Issue is Required*";
    document.querySelector("#student-msgm").innerHTML = mytxt;
    error;

    myform.msg.className = "invalidClassb";
  } else {
    if (!msgPat.test(msg)) {
      error++;
      let mytxt = "only (a-z) Characters are allowed in Message*";
      document.querySelector("#student-msgm").innerHTML = mytxt;
      error;
      myform.msg.className = "invalidClassb";
    } else {
      myform.msg.className = "validClassb";
    }
  }

  if (error > 0) {
    return false;
  } else {
    console.log(
      "name:" + name,
      "lname:" + lname,
      "email:" + email,
      "pphone:" + pphone,
      "ophone:" + ophone,
      "msg:" + msg
    );
  }
}
