function showAlluser()
{
    var users = getAllUsers();
    var list = "";
    for (var i = 0; i < users.length; i++)
    {
        list += '<tr>';
        list += ' <th scope="row">'+(i+1).toString()+'</th>';
        list += '<td>'+users[i]["account"]+'</td>';
        list += '<td>'+users[i]["email"]+'</td>';
        list += '<td><a type="button" href="seeuser.php"class="btn btn-success">查看</a>&nbsp;&nbsp;'+
            '<a type="button" href="changeuser.php" class="btn btn-primary">修改</a>&nbsp;&nbsp;'+
            '<button class="btn btn-default">刪除</button></td>';
        list += '</tr>';
    }
    document.getElementById("userlist").innerHTML = list;
}