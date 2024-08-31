function show() {
    let x = document.getElementById("password");
    let y = document.getElementById("confirmpassword");
    if (x.type === "password" && y.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }

//   function checkpassword()
// {
//     let x = document.getElementById("password").value;
//     let y = document.getElementById("confirmpassword").value;
//     let message = document.getElementById("message");
//     if(x.length != 0 && y.length != 0)
//     {
//         if (x==y)
//         {
//             message.textContent = "Passwords match";
//         }
//         else
//         {
//             alert("Password do not match");
//         }
//     }
//     else
//     {
//         alert("Field cannot be empty");
//     }
// }
// check password function not in working condition because it already done by php