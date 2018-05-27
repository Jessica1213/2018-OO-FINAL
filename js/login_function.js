//檢查輸入  
function checkLogin(){  
  if(checkUsername() && checkPassword()){  
    return true;  
  }          
  return false;  
}  
//簡查帳號輸入
function checkUsername(){  
  var username = document.loginForm.username;  
  if(username.value.length!=0){  
    return true;  
  }else{  
      alert("請輸入帳號");  
      return false;  
      }  
}  
//檢查密碼輸入  
function checkPassword(){  
  var password = document.loginForm.password;  
  if(password.value.length!=0){  
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
  var username = document.loginForm.username;  
  if(username.value.length!=0){  
    return true;  
  }else{  
      alert("請輸入帳號");  
      return false;  
      }  
}  
//檢查密碼輸入  
function checkRegisterPassword(){  
  var password = document.loginForm.password;  
  var password2 = document.loginForm.password2; 
  if(password.value.length!=0 && password.value==password2.value){  
    return true;  
  }else if(password.value!=password2.value){  
    alert("請確認密碼");  
    return false;  
  }  
  else{
    alert("請輸入密碼");  
    return false;  
  }
}