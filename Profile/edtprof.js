let passCheck = document.querySelector("#passcheck");
let passinput = document.querySelector("#password");
let emailCheck = document.querySelector("#emailcheck");
let emailinput =document.querySelector("#email");

function ShowHidePass() {
  passinput.style.display = passCheck.checked ? "block" : "none";
}
function ShowHideEmail() {
  emailinput.style.display = emailCheck.checked ? "block" : "none";
}

(function() {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
