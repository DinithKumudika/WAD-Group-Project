const showPwd = document.getElementById("show-pwd");
        const password = document.getElementById("pwd");
        const rememberMe = document.getElementById("rememberChkBox");
        const username = document.getElementById("username");
        showPwd.addEventListener('click',function(){
            if(password.type==="password"){
                password.type = "text";
            }
            else{
                password.type = "password";
            }
        });