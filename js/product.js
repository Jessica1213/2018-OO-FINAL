function searchItemIndex() {
    var key = document.getElementById("search").value;
    if(key.length===0) return false;
    else window.location.href = "main.php?keyword="+key+"&searchby=name";
}

function searchItemMain() {
    var key = document.getElementById("search").value;
    if(key.length===0) return false;
    else {
        var e = document.getElementById("choice");
        var type = e.options[e.selectedIndex].value;
        console.log(type);
        var searchby;
        if (type === '3') searchby = "cate";
        else searchby = "name";
        window.location.href = "main.php?keyword="+key+"&searchby="+searchby;
    }
}

function showProduct(products) {
    var list = "";
    for (var i=0; i<products.length; i++){
        list += '<div class="col-md-4" style="background:#eee; margin-top: 1vh;"><div class="card mb-4 box-shadow">';
        list += '<div class="panal" style="height: 300px; width:300px;">';
        list += '<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="" style="height: 100%; width:100%; display: block;" src="'+products[i]["image"]+'" data-holder-rendered="true"></div>';
        list += '<div class="card-body" align="left"><div class="row"><div class="col">';
        list += '<h4 style="padding-left: 2vw">'+products[i]["name"]+'</h4></div>';
        list += '<div class="col"><h4 style="padding-right:2vw;" color="success" align="right">售價：'+products[i]["price"]+'</h4></div></div>';
        list += '<h6>商品描述</h6>';
        list += '<div class="panal" style="height:80px;width:300px;">';
        list += '<p class="card-text">'+products[i]["description"]+'</p></div>';
        list += '<div class="d-flex justify-content-between align-items-center" align="right">' +
            '<div class="btn-group" >'+
            '<button type="button" class="btn " style="background-color:#CCBBFF" onclick="viewProduct('+products[i]["PID"]+')">瀏覽</button>' +
            '<button type="button" class="btn " style="background-color:#FFD4D4" onclick="addToShoppingCart('+products[i]["PID"]+')">加入購物車</button></div></div></div></div></div>';
    }
    return list;
}

function showItems(keyword, cate) {
    var products = findItem(keyword, cate);
    return showProduct(products);
}

function chooseType()
{
    var type = document.getElementById("choice");
    console.log(type.options[type.selectedIndex].text);
}

function viewProduct(pid)
{
    window.location.href = "caption.php?PID="+pid;
}

function viewProductInfo(pid)
{
    var product = findProduct(pid);
    var list = "";
    list += '<div class="row" style="background:#AEB7CC;height: 350px; width:auto;"><div class="col-md-4 col-xs-4">';
    list += '<img src="'+product["image"]+'" alt="..." class="img-thumbnail" style="height: 100%; width:100%;"></div>';
    list += '<form  action="" name="InfoForm" method="post" onsubmit="return false;">';
    list += '<div class="col-md-8 col-xs-8"><table class="table table-striped" ><tbody><tr><th scope="col">';
    list += '<h4>商品名稱</h4> <label>'+product["name"]+'</label></th></tr>';
    list += '<tr ><th scope="row"><h4>商品介紹</h4><label>'+product["description"]+'</label></th></tr>';
    list += '</tbody></table></div></div>';
    list += '<div class="row" style="width:auto;background:#eee">';
    list += '<div class="col"><table class="table table-striped">';
    list += '<tbody><tr><th scope="row">';
    list += '<h4>價格</h4><label>'+product["price"]+'</label></th></tr><tr ><th scope="row">';
    list += '<h4>剩餘數量</h4><label>'+'剩餘數量'+'</label></th></tr><tr ><th scope="row">';
    list += '<h4>類別</h4><label>'+product["category"]+'</label></th></tr></tbody></table>';
    list += '<button class="btn " style="background-color:#CCBBFF"> 購買 </button><button style="background-color:#FFD4D4" class="btn "> 加入購物車 </button></div></form></div></div>';
    document.getElementById("product").innerHTML+= list;
}



function listAllCategory()
{
    var categories = findAllCategory();
    var list = "";
    for (var i=0; i<categories.length; i++)
    {
        list += '<li><a href="main.php?keyword='+categories[i]["category"]+'&searchby=cate">'+categories[i]["category"]+'</a></li>&nbsp;&nbsp;&nbsp;';
    }
    return list;

}



function showPersonalItems()
{
    var products = findPersonalProduct();
    return showProduct(products);
}


function addToShoppingCart(pid)
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/addToShoppingCart.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
        }
    };
    http.send("PID="+pid+"&amount=1");
}



function showShoppingCart()
{
    var productslist = getPersonalShoppingList(0);
    var list='<tr><td>商品</td><td>單價</td><td>數量</td><td>價格</td><td>取消購買</td></tr>';
    var totalcost = 0;
    for (var i = 0;i < productslist.length; i++) {
        var product = findProduct(productslist[i]["PID"]);
        if (i%2 === 0) {
            list += '<tr style="background-color: #f9f2f4">';
        }
        else list += '<tr style="background-color: #FFE5FF">';

        for(var j = 0; j < 5; j++)
        {
            switch(j){
                case 0:
                    list += '<td class="detail">';
                    list += product["name"];
                    break;
                case 1:
                    list += '<td class="price">';
                    list += product["price"];
                    break;
                case 2:
                    list += '<td class="amount">';
                    list += '<select id="amount" onchange="updateAmount('+product["PID"]+'); window.location.reload();">';
                    list += '<option value=\"0\">'+productslist[i]["amount"]+'</option>' +
                        '<option value=\"1\">1</option>' +
                        '<option value=\"2\">2</option>' +
                        '<option value=\"3\">3</option>' +
                        '<option value=\"4\">4</option>' +
                        '<option value=\"5\">5</option>' +
                        '</select>';
                    break;
                case 3:
                    list += '<td class="smallTotal">';
                    list += (product["price"] * productslist[i]["amount"]).toString();
                    totalcost += product["price"] * productslist[i]["amount"];
                    break;
                case 4:
                    list += '<td class="trash">';
                    list += '<input class="trashButton" type="image" onclick="removeProduct('+product["PID"]+'); window.location.reload();" img src="./resource/trash.png">';
                    break;
                default:
                    break;
            }
            list += '</td>';
        }
        list += '</tr>';
    }
    list += '<tr><td colspan="5" style="text-align:right; padding-right: 2em;"><label>Total Price：</label>'+totalcost.toString()+'</td></tr>';
    list += '<tr id="decisionRow"><td colspan="5" style="background-color: #f9f2f4; align-content: right;">' +
        '<input class="button" type="submit" name=""  onclick="location.href=\'index.php\'" value="繼續購物" >' +
        '<input class="button" type="submit" name="" onclick="location.href=\'#.html\'" value="結帳">' +
        '</td></tr>';
    return list;

}

function updateAmount(pid) {
    var e = document.getElementById("amount");
    var amount = e.options[e.selectedIndex].value;
    e.options[e.options.selectedIndex].selected = true;
    console.log(amount);
    updateShopAmount(pid, amount);
}



function getShoppingCartLength()
{
    var productslist = getPersonalShoppingList(0);
    if(productslist.length>0) {
        document.getElementById("cart").innerHTML += ' ('+productslist.length+')';
    }
}