(function() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      if (!form.checkValidity()

      ) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

$(document).ready(function() {


  $('#myform').bootstrapValidator({
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok valid-tooltip',
      invalid: 'glyphicon glyphicon-remove invalid-tooltip',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      name: {
        validators: {
          callback: {
            message: 'The name is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              const letters = /^[A-Za-z]+$/;
              const valuenew = value.replace(/\s+/g, '')
              if (!valuenew.match(letters)) {
                return {
                  valid: false,
                  message: 'Name cannot be digits!'
                };
              }
              return true;
            }
          }
        }
      },
      email: {
        validators: {
          callback: {
            message: 'The email is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              const emv = value.replace(/\s+/g, '')
              let ef = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

              if (!emv.match(ef)) {
                return {
                  valid: false,
                  message: 'Invalid Email!!!'
                };
              }
              return true;
            }
          }
        }
      },
      emailconf: {
        validators: {
          callback: {
            message: 'The email is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              let ef = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

              if (!value.match(ef)) {
                return {
                  valid: false,
                  message: 'Invalid Email!!!'
                };
              }
              if (value != email.value) {
                return {
                  valid: false,
                  message: 'emails does not match!!'
                }
              }
              return true;
            }
          }
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: 'The password is required and cannot be empty'
          },
          callback: {
            message: 'The password is not valid',
            callback: function(value, validator, $field) {
              if (value === '') {
                return true;
              }

              // Check the password strength
              if (value.length < 8) {
                return {
                  valid: false,
                  message: 'It must be more than 8 characters long'
                };
              }

              // The password doesn't contain any uppercase character
              if (value === value.toLowerCase()) {
                return {
                  valid: false,
                  message: 'It must contain at least one upper case character'
                }
              }

              // The password doesn't contain any uppercase character
              if (value === value.toUpperCase()) {
                return {
                  valid: false,
                  message: 'It must contain at least one lower case character'
                }
              }

              // The password doesn't contain any digit
              if (value.search(/[0-9]/) < 0) {
                return {
                  valid: false,
                  message: 'It must contain at least one digit'
                }
              }

              return true;
            }
          }
        }
      },
      passconf: {
        validators: {
          callback: {
            message: 'The password is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              if (value != password.value) {
                return {
                  valid: false,
                  message: 'password does not match!!'
                }
              }
              return true;
            }
          }
        }
      },
      mobnum: {
        validators: {
          callback: {
            message: 'The mobile number is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              const letters = /^[A-Za-z]+$/;
              const valuenew = value.replace(/\s+/g, '')
              if (valuenew.match(letters)) {
                return {
                  valid: false,
                  message: 'Mobile number cannot be letters!'
                }
              }
              if (valuenew.length < 10 || valuenew.length > 10) {
                return {
                  valid: false,
                  message: 'Mobile number must be atleast 10 digits'
                }
              }
              return true;
            }
          }
        }
      },
      phnum: {
        validators: {
          callback: {
            message: 'The name is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              const letters = /^[A-Za-z]+$/;
              const valuenew = value.replace(/\s+/g, '')
              if (valuenew.match(letters)) {
                return {
                  valid: false,
                  message: 'Phone number cannot be letters!'
                };
              }
              if (valuenew.length < 10 || valuenew.length > 10) {
                return {
                  valid: false,
                  message: 'Phone number must be atleast 10 digits'
                }
              }

              return true;
            }
          }
        }
      },
      pcode: {
        validators: {
          callback: {
            message: 'The name is not valid',
            callback: function(value, validator, $field) {

              if (value === '') {
                return true;
              }

              const letters = /^[A-Za-z]+$/;
              const valuenew = value.replace(/\s+/g, '')
              if (valuenew.match(letters)) {
                return {
                  valid: false,
                  message: 'Postal code cannot be letters!'
                };
              }
              if (valuenew.length < 6 || valuenew.length > 6) {
                return {
                  valid: false,
                  message: 'Postal code must be atleast 6 digits!'
                }
              }
              return true;
            }
          }
        }
      }
   }
  });
});

