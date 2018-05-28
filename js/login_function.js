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
                  window.location.href = "selectLogin.php";
              }
              else {
                  alert("帳號或密碼錯誤");
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
  if(checkRegisterUsername() && checkRegisterPassword()){  
    return true;  
  }          
  return false;  
} 

//簡查帳號輸入
function checkRegisterUsername(){  
  var username = document.loginForm.username.value;
  if(username.length!==0){
    return true;  
  }else{  
      alert("請輸入帳號");  
      return false;  
      }  
}  
//檢查密碼輸入  
function checkRegisterPassword(){  
  var password = document.loginForm.password.value;
  var password2 = document.loginForm.password2.value;
  if(password.length!==0 && password===password2){
    return true;  
  }else if(password!==password2){
    alert("請確認密碼");  
    return false;  
  }  
  else{
    alert("請輸入密碼");  
    return false;  
  }
}