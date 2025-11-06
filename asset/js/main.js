
function login(){
    let emailInput = document.getElementById("loginEmail");
    let passwordInput = document.getElementById("loginPassword");

    const email = emailInput.value;
    const password = passwordInput.value;

    if(email == 'admin' && password == 'admin'){
        window.location.href = 'section/home.php';
    } else {
        alert("Wrong password or email");
    }
}