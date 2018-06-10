function showAlluser()
{
    var users = getAllUsers();
    var list = "";
    for (var i = 0; i < users.length; i++)
    {
        list += '<tr>';
        list += ' <th scope="row">'+(i+1).toString()+'</th>';
        list += '<td>'+users[i]["account"]+'</td>';
        list += '<td>'+users[i]["userlevel"]+'</td>';
        list += '<td><a type="button" href="seeuser.php?UID='+users[i]["UID"]+'" class="btn btn-success">查看</a>&nbsp;&nbsp;'+
            '<button class="btn btn-default" onclick="resetPassword('+users[i]["UID"]+')">密碼重設</button>&nbsp;&nbsp;'+
            '<button class="btn btn-default" onclick="promotUserlevel('+users[i]["UID"]+')">設為管理員</button>&nbsp;&nbsp;'+
            '<button class="btn btn-default" onclick="setToMember('+users[i]["UID"]+')">設為會員</button>&nbsp;&nbsp;'+
            '<button class="btn btn-default" onclick="removeUser('+users[i]["UID"]+')">刪除</button></td>';
        list += '</tr>';
    }
    document.getElementById("userlist").innerHTML = list;
}

function viewUserInfo(uid)
{
    var user = getUserInfo(uid);
    console.log(user);
    var list = '<div class="col-md-10 col-xs-10">' +
        '<div class="row"><div class="col" style="width:auto;background:#eee">' +
        '<section class=" text-left " ><div class="container"> ' +
        '<h2 align="top">'+user["name"]+'的檔案</h2>' +
        '</div></section><HR style="width:auto;" size="10"></div></div> ' +
        '<div class="row" style="width:auto;background:#eee"><div class="col-md-8">' +
        '<table class="table table-striped">' +
        '<thead><tr><th scope="col">使用者資料</th></tr></thead>' +
        '<tbody>' +
        '<tr><th scope="row"><label >帳號:</label> <label>'+user["account"]+'</label></th></tr>' +
        '<tr><th scope="row"><label >email:</label> <label>'+user["email"]+'</label></th></tr>' +
        '<tr><th scope="row"><label >匿名:</label> <label>'+user["name"]+'</label></th></tr>' +
        '<tr><th scope="row"><label >錢包餘額:</label> <label>'+user["wallet"]+'</label></th></tr>' +
        '</tbody></table> ' +
        '<a href="User.php" class="btn btn-default" type="button" style="background-color:#CCBBFF" >返回</a>' +
        '</div><div class="col-md-4"><img src="'+user["profile"]+'" class="img-fluid" alt="Responsive image" width="250" height="250"></div></div></div>';

    document.getElementById("userInfo").innerHTML += list;
}

function removeUser(uid)
{
    if(confirm("確定要刪除這個使用者嗎？")){
        deleteUser(uid);
        window.location.reload();
    }
    else
    {
        return false;
    }
}

function resetPassword(uid) {
    if(confirm("確定要將此使用者重設密碼為0000嗎？")){
        resetDefaultPassword(uid);
        window.location.reload();
    }
    else
    {
        return false;
    }
}

function promotUserlevel(uid) {
    if(confirm("確定要將此使用者設為管理員嗎？")){
        changeUserlevel(uid, "admin");
        window.location.reload();
    }
    else
    {
        return false;
    }
}

function setToMember(uid) {
    if(confirm("確定要將此使用者設為普通使用者嗎？")){
        changeUserlevel(uid, "member");
        window.location.reload();
    }
    else
    {
        return false;
    }
}
