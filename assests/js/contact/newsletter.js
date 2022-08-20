// regex
var emailPat = /^[a-zA-Z0-9]{3,}@[a-z0-9]{2,}\.[a-z\.]{2,9}$/;

// onblur event
function fornamenews(ele) {
  if (ele.name === "nemail") {
    if (ele.value === "") {
      let mytxt = "Email is left blank*";
      document.querySelector("#student-newsemail").innerHTML = mytxt;
      ele.className = "invalidClassn";
    } else if (!ele.value.match(emailPat)) {
      let mytxt = "Email is Required*";
      document.querySelector("#student-newsemail").innerHTML = mytxt;
      ele.className = "invalidClassn";
    } else {
      document.querySelector("#student-newsemail").innerHTML = "";
      ele.className = "validClassn";
    }
  }
}

// onsubmit event
function validatenews(myform) {
  var nemail = myform.nemail.value;

  var error = 0;
  var errors = "Following errors found. \n";

  if (nemail === "") {
    error++;
    let mytxt = "Email is left blank*";
    document.querySelector("#student-newsemail").innerHTML = mytxt;
    error;

    myform.nemail.className = "invalidClassn";
  } else {
    if (!emailPat.test(nemail)) {
      error++;
      let mytxt = "Email is required*";
      document.querySelector("#student-newsemail").innerHTML = mytxt;
      error;
      myform.nemail.className = "invalidClassn";
    } else {
      myform.nemail.className = "validClassn";
    }
  }

  if (error > 0) {
    return false;
  } else {
    console.log("email:" + email);
  }
}
