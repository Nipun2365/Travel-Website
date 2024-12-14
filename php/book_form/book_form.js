/*--------------------------book form start------------------------- */
//............... JavaScript code to validate form submission...................//
document.getElementById('bookform').addEventListener('submit', function(event) {
    //............... Prevent default form submission....................//
    event.preventDefault();
  
    //................... Check if all form fields are filled out.................//
    var formFields = document.querySelectorAll('#bookform input[type="text"], #bookform input[type="email"], #bookform input[type="number"]');
    var allFieldsFilled = true;
    for (var i = 0; i < formFields.length; i++) {
        if (formFields[i].value.trim() === '') {
            allFieldsFilled = false;
            break;
        }
    }
  
    //....................... Display alert if any field is empty.....................//
    if (!allFieldsFilled) {
        alert('Please fill out all the form fields.');
    } else {
        //........................ Submit the form if all fields are filled...................//
        this.submit();
    }
  });
  /*--------------------------book form end------------------------- */