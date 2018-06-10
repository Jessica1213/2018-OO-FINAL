//檢查輸入  
function checkLogin(){
    var username = document.loginForm.username.value;
    var password = document.loginForm.password.value;
    if(checkUsername(username) && checkPassword(password)){
      var http = new XMLHttpRequest();
      var login = "";
      http.open("POST", "./dbrequest/checkLogin.php", false);
      http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      http.onreadystatechange=function() {
          if(this.readyState === 4 && this.status === 200) {
              login = http.responseText;
              console.log(login);
              if(login==="true") {
                  window.location.href = "index.php";
              }
          }
      };

      http.send("account="+username+"&password="+password);

    }
}  
//檢查帳號輸入
function checkUsername(username){
  if(username.length!==0){
    return true;  
  }
  else{
      alert("請輸入帳號");  
      return false;
  }
}  
//檢查密碼輸入  
function checkPassword(password){
  if(password.length!==0){
    return true;  
  }else{  
    alert("請輸入密碼");  
    return false;  
  }  
}
/*********************************************************/
//檢查輸入  
function checkRegister(){
    var account = document.registerForm.account.value;
    var name = document.registerForm.username.value;
    var email = document.registerForm.email.value;
    var password = document.registerForm.password.value;
    var pwd2 = document.registerForm.password2.value;
    if(checkRegisterUsername(account) && checkRegisterPassword(password, pwd2) && checkRegisterName(name) && checkRegisterEmail(email)){
            var http = new XMLHttpRequest();
            var register = "";
            http.open("POST", "./dbrequest/register.php", false);
            http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            http.onreadystatechange=function() {
                if(this.readyState === 4 && this.status === 200) {
                    register = http.responseText;
                    console.log(register);
                    if(register==="true") {
                        window.location.href = "login.php";
                    }
                    else {
                        alert("這個帳號已經註冊過，請使用新的帳號");
                    }
                }
            };

        http.send("account="+account+"&password="+password+"&name="+name+"&email="+email);
    }
} 

//簡查帳號輸入
function checkRegisterUsername(account){
  if(account.length!==0){
    return true;  
  }else{  
      alert("請輸入帳號");  
      return false;  
      }  
}  
//檢查密碼輸入  
function checkRegisterPassword(pwd, pwd2){
  if(pwd.length!==0 && pwd===pwd2){
    return true;  
  }else if(pwd!==pwd2){
    alert("請確認密碼");  
    return false;  
  }  
  else{
    alert("請輸入密碼");  
    return false;  
  }
}

//檢查email輸入
function checkRegisterEmail(email) {
    if(email.length!==0){
        return true;
    }else{
        alert("請輸入Email");
        return false;
    }
}

//檢查姓名輸入
function checkRegisterName(name) {
    if(name.length!==0){
        return true;
    }else{
        alert("請輸入name");
        return false;
    }
}

//update user state
function changeUserState(state) {
    var http = new XMLHttpRequest();
    http.open("POST", "./dbrequest/changeUserState.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            if (state ==='B') {
                window.location.href='index.php';
            }
            else if(state==='S') {
                window.location.href='Introduction.php';
            }
        }
    };

    http.send("userstate="+state);
}

function UpdatePersonalInfo() {
    var name = document.InfoForm.name.value;
    var email = document.InfoForm.email.value;
    var pwd = document.InfoForm.pwd.value;
    var pwd2 = document.InfoForm.check.value;
    if(pwd.length!==0 && pwd2.length!==0 && pwd===pwd2) {
        var http = new XMLHttpRequest();
        var update = "";
        http.open("POST", "./dbrequest/updateInfo.php", false);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.onreadystatechange=function() {
            if(this.readyState === 4 && this.status === 200) {
                update = http.responseText;
                window.location.href = 'Introduce.php';
            }
        };

        http.send("password="+pwd+"&email="+email+"&name="+name);
    }
}

function getUserID() {
    var http = new XMLHttpRequest();
    var id = "";
    http.open("POST", "./dbrequest/getUserID.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            id = http.responseText;
        }
    };

    http.send();
    return id;
}