document.addEventListener("DOMContentLoaded", function () {
  flatpickr("#Expected_Start_Date__c", {
    dateFormat: "Y/m/d",
    allowInput: true,
  });

  function getUTMParams() {
    const params = new URLSearchParams(window.location.search);
    // UTM size
    console.log(params);
    const utmParams = {};
    [
      "utm_source",
      "utm_medium",
      "utm_campaign",
      "utm_term",
      "utm_content",
      "utm_lp",
    ].forEach((param) => {
      if (params.get(param)) {
        utmParams[param] = params.get(param);
        localStorage.setItem(param, params.get(param)); // Lưu vào localStorage
      }
    });
    return utmParams;
  }
  getUTMParams();

  const form = $("#register_form");
  const submitButton = $(".btn-action--submit");
  // console.log(submitButton);

  function validateInput(inputID, errorMessage, validator) {
    let inputElement = $(inputID);
    let errorSpan = inputElement.next(".error-message");

    let checkValidity = () => {
      let inputValue = inputElement.val().trim();
      if (!validator(inputValue)) {
        errorSpan.text(errorMessage);
        inputElement.addClass("is-invalid");
        return false;
      } else {
        errorSpan.text("");
        inputElement.removeClass("is-invalid");
        return true;
      }
    };

    inputElement.on("blur input", () => {
      checkValidity();
      // toggleSubmitButton();
    });

    return checkValidity;
  }

  function validateSelect(selectID, errorMessage) {
    let selectElement = $(selectID);
    let errorSpan = selectElement.next(".error-message");

    let checkValidity = () => {
      let selectedValue = selectElement.val();
      if (!selectedValue || selectedValue === "") {
        errorSpan.text(errorMessage);
        selectElement.addClass("is-invalid");
        return false;
      } else {
        errorSpan.text("");
        selectElement.removeClass("is-invalid");
        return true;
      }
    };

    selectElement.on("blur change", () => {
      checkValidity();
      // toggleSubmitButton();
    });

    return checkValidity;
  }

  let validateParentName = validateInput(
    "#Parent_Name_Text__c",
    "Parent's full name is required",
    (value) => value !== ""
  );

  let validateMobile = validateInput(
    "#Mobile_1__c",
    "Please enter a valid phone number.",
    (value) => /^\d{10,12}$/.test(value)
  );

  let validateEmail = validateInput(
    "#Email",
    "Please enter a valid email.",
    (value) => /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(value)
  );

  let validateChildAge = validateSelect(
    "#Birthdate__c",
    "Children’s age is required."
  );
  let validateEnrollYear = validateSelect(
    "#Enrollment_Year__c",
    "Enrollment year is required."
  );
  let validateExpectedStartDate = validateInput(
    "#Expected_Start_Date__c",
    "Expected start date is required.",
    (value) => value !== ""
  );

  function validateForm() {
    validateParentName();
    validateMobile();
    validateEmail();
    validateChildAge();
    validateEnrollYear();
    validateExpectedStartDate();
  }

  // function toggleSubmitButton() {
  //   if (validateForm()) {
  //     submitButton.prop("disabled", false);
  //   } else {
  //     submitButton.prop("disabled", true);
  //   }
  // }

  form.submit(function (event) {
    event.preventDefault();

    let formData = {
      Parent_Name_Text__c: $("#Parent_Name_Text__c").val().trim(),
      Mobile_1__c: $("#Mobile_1__c").val().trim(),
      Email: $("#Email").val().trim(),
      Birthdate__c: $("#Birthdate__c").val(),
      Enrollment_Year__c: $("#Enrollment_Year__c").val(),
      Expected_Start_Date__c: $("#Expected_Start_Date__c").val().trim(),
      Note__c: $("#Note__c").val().trim(),

      // UTM Value
      UTM_Source__c: localStorage.getItem("utm_source"),
      UTM_Medium__c: localStorage.getItem("utm_medium"),
      UTM_Campaign__c: localStorage.getItem("utm_campaign"),
      UTM_Content__c: localStorage.getItem("utm_content"),
      UTM_Term__c: localStorage.getItem(" utm_term") || "",
      UTM_LP__c: localStorage.getItem("utm_lp") || "",

      // Input hidden
      Site__c: $("#Site__c").val(),
      lead_source: $("#lead_source").val(),
      SNA_default_Status__c: $("#SNA_default_Status__c").val(),
      recordType: $("#recordType").val(),
      Lead_Source_Detail__c: $("#Lead_Source_Detail__c").val(),
      company: $("#company").val(),
    };

    // Button disabled props

    // toggleSubmitButton();

    console.table("formData", formData);

    const formDataJSON = JSON.stringify(formData);
    console.log("formDataJSON", formDataJSON);

    // isValid = false => return

    $.ajax({
      url: "https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8",
      type: "POST",
      data: formData,
      success: function (response) {
        console.log("Submit send data tới Salesforce", response);
        form[0].reset();
      },
      error: function (xhr, thrownError) {
        console.error("Status", xhr.status);
        console.error("", thrownError);
      },
    });
    if (!validateForm()) return;
  });
  // toggleSubmitButton();
});
