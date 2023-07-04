let phone_number = document.getElementById("phone_no");
let sub_id1 = document.getElementById("sub_id1");
let sub_id2 = document.getElementById("sub_id2");
let zipcode = document.getElementById("zipcode");

phone_number.addEventListener("input", function () {
  if (phone_number.value.length > 10) {
    alert("phone number will 10 character long");
    phone_number.value = "";
  }
});

sub_id1.addEventListener("input", function () {
  if (sub_id1.value.length > 75) {
    alert("maximum 75 character allowed");
    sub_id1.value = "";
  }
});

sub_id2.addEventListener("input", function () {
  if (sub_id2.value.length > 75) {
    alert("maximum 75 character allowed");
    sub_id2.value = "";
  }
});

zipcode.addEventListener("input", function () {
  if (zipcode.value.length > 5) {
    alert("maximum 5 character allowed");
    zipcode.value = "";
  }
});

// Get references to the checkbox and text field
let checkbox = document.getElementById("flexCheckIndeterminate");
let textField = document.getElementById("tcpa_text_id");

// Add event listener to the checkbox
checkbox.addEventListener("change", function () {
  if (checkbox.checked) {
    textField.value = "Yes";
  } else {
    textField.value = "No";
  }
});

