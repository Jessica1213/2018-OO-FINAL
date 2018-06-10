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
              if(login==="true") {
                  checkUserLevel();
              }
              else
              {
                  alert("密碼錯誤！");
                  return false;
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
                        window.location.href='index.php';
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

//check user level
function checkUserLevel() {
    var http = new XMLHttpRequest();
    var state = "";
    http.open("POST", "./checkUserLevel.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            state = http.responseText;
            console.log(state);
            if (state ==='member') {
                window.location.href='index.php';
            }
            else if(state ==='admin') {
                window.location.href='adminChoice.php';
            }
        }
    };

    http.send();
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

function getWallet()
{
    var http = new XMLHttpRequest();
    var money = "";
    http.open("POST", "./dbrequest/getWallet.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            money = http.responseText;
        }
    };

    http.send();
    return money;
}

function updateWallet(money)
{
    var http = new XMLHttpRequest();

    http.open("POST", "./dbrequest/updateWallet.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            money = http.responseText;
        }
    };

    http.send("money="+money);
}

function topUpWallet()
{
    var money = 10000;
    var cashCode1 = document.topUpForm.cashCode1.value;
    var cashCode2 = document.topUpForm.cashCode2.value;
    if(cashCode1.length===0 || cashCode2.length===0)
    {
        alert("請完整輸入兩行序號");
        return false;
    }
    else
    {
        updateWallet(money);
        alert("加值成功");
        history.back();
    }


}

function updateUserImage()
{
    var image = document.getElementById("profile").value;
    var http = new XMLHttpRequest();

    http.open("POST", "./dbrequest/updateProfileImage.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            http.responseText;
            window.location.href = 'Introduce.php';
        }
    };

    http.send("image="+image);
}

function getUserByID(id)
{
    var http = new XMLHttpRequest();
    var user = "";
    http.open("POST", "./dbrequest/getUser.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            user = http.responseText;
            user = JSON.parse(user);
        }
    };

    http.send("UID="+id);
    return user;
}

function getAllUsers()
{
    var http = new XMLHttpRequest();
    var users = "";
    http.open("POST", "./dbrequest/getAllUsers.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            users = http.responseText;
            users = JSON.parse(users);
        }
    };

    http.send();
    return users;
}

function getUserInfo(uid)
{
    var http = new XMLHttpRequest();
    var user = "";
    http.open("POST", "./dbrequest/getUser.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            user = http.responseText;
            user = JSON.parse(user);
        }
    };

    http.send("UID="+uid);
    return user;
}

function deleteUser(uid)
{
    var http = new XMLHttpRequest();
    var user = "";
    http.open("POST", "./dbrequest/removeUser.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            user = http.responseText;
        }
    };

    http.send("UID="+uid);
}

function resetDefaultPassword(uid) {
    var http = new XMLHttpRequest();
    var user = "";
    http.open("POST", "./dbrequest/resetDefaultPwd.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            user = http.responseText;
        }
    };

    http.send("UID="+uid);
}

function changeUserlevel(uid, level) {
    var http = new XMLHttpRequest();
    var user = "";
    http.open("POST", "./dbrequest/updateUserlevel.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            user = http.responseText;
        }
    };

    http.send("UID="+uid+"&level="+level);
}
