function sortIncreased(array, key) {
    return array.sort(function(a, b) {
        var x = parseInt(a[key]); var y = parseInt(b[key]);
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });
}

function sortDecreased(array, key) {
    return array.sort(function(a, b) {
        var x = parseInt(a[key]); var y = parseInt(b[key]);
        return ((x > y) ? -1 : ((x < y) ? 1 : 0));
    });
}

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

function showProduct(products, index) {
    if (index === '1') products = sortIncreased(products, 'price');
    else products = sortDecreased(products, 'price');
    var list = "";
    for (var i=0; i<products.length; i++){
        list += '<div class="col-md-4" style="background:#eee; "><div class="row"><div class="col-md-6 col-xs-6" >';
         list += '<img  style="height: 100%; width:100%;" src="'+products[i]["image"]+'" ></div>';        
         list += '<div class="col-md-6 col-xs-6"align="left" >';   
         list += '<div class="row" style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis; " ><lable>'+products[i]["name"]+'</lable></div>';
         list += '<div class="row" style="height: 100%; width:100%;"><lable>商品描述 : </lable>'+products[i]["description"]+'</div>';
         list += '<div class="row" > <h4>售價<lable>'+products[i]["price"]+'</lable></h4></div>';        
         list += '<div class="row" align="bottom"> ' +
            '<div class="btn-group" >'+
            '<button type="button" class="btn " style="background-color:#CCBBFF" onclick="viewProduct('+products[i]["PID"]+')">瀏覽</button>' +
            '<button type="button" class="btn " style="background-color:#FFD4D4" onclick="addToShoppingCart('+products[i]["PID"]+','+products[i]["UID"]+')">加入購物車</button>';
         list += '</div> </div> </div></div></div></div>';
    }
    document.getElementById("itemlist").innerHTML = list;
}


function showItems(keyword, cate) {
    var products = findItem(keyword, cate);
    var e = document.getElementById("sort");
    var index = e.options[e.selectedIndex].value;
    e.options[e.options.selectedIndex].selected = true;
    return showProduct(products, index);
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
    list += '<div class="row" style="background:#eee; width:auto;"><div class="col-md-4 col-xs-4">';
    list += '<img src="'+product["image"]+'" alt="..." class="img-thumbnail" style="height: 100%; width:100%;"></div>';
    list += '<form  action="" name="InfoForm" method="post" onsubmit="return false;">';
    list += '<div class="col-md-8 col-xs-8"> <div class="row-md-3 row-xs-3" >';
    list += '<h4>商品名稱'+product["name"]+'</h4></div>';
    list += '<div class="row-md-8 row-xs-8" >';
    list += '<h4 >商品介紹'+product["description"]+'</h4>';  
    list += '</div></div></div>';
    list += '<div class="row" style="width:auto;background:#eee">';
    list += '<div class="col-md-4 col-xs-4">';
    list += '<h4>價格  :  '+product["price"]+'</h4></div>';
    list += '<div class="col-md-4 col-xs-4">';
    list += '<h4>剩餘數量  :  '+product["amount"]+'</h4></div>';
    list += '<div class="col-md-4 col-xs-4">';
    list += '<h4>類別  :  '+product["category"]+'</h4></div>';
    list += '<div class="btn-group" ><br>';
    list += '<button style="background-color:#FFD4D4" class="btn " onclick="addToShoppingCart('+product["PID"]+','+product["UID"]+')"> 加入購物車 </button></div></form></div></div></div>';
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
    var e = document.getElementById("sort");
    var index = e.options[e.selectedIndex].value;
    e.options[e.options.selectedIndex].selected = true;
    return showProduct(products, index);
}

var header = ["商品", "單價", "庫存","數量", "價格", "取消購買"];
var headerclass = ["detail", "price", "stock", "amount", "smallTotal", "trash"];
var maxStock = 10;
function showShoppingCart()
{
    var colnum = header.length;
    var productslist = getPersonalShoppingList(0);
    var list='<tr>';
    list+= '</tr>';
    for (var i = 0; i < colnum; i++) {
        list += '<td>';
        list += header[i];
        list += '</td>';
    }
    var totalcost = 0;
    for (i = 0;i < productslist.length; i++) {
        var product = findProduct(productslist[i]["PID"]);
        if (i%2 === 0) {
            list += '<tr style="background-color: #f9f2f4">';
        }
        else list += '<tr style="background-color: #FFE5FF">';

        for(var j = 0; j < colnum; j++)
        {
            switch(j){
                case 0:
                    list += '<td class='+headerclass[j]+'>';
                    list += product["name"];
                    break;
                case 1:
                    list += '<td class='+headerclass[j]+'>';
                    list += product["price"];
                    break;
                case 2:
                    list += '<td class='+headerclass[j]+'>';
                    list += product["amount"];
                    break;
                case 3:
                    list += '<td class='+headerclass[j]+'>';
                    list += '<select id="amount_'+i.toString()+'" onchange="updateAmount('+product["PID"]+','+i+'); window.location.reload();">';
                    list += '<option value=\"0\">'+productslist[i]["amount"]+'</option>';
                    for (var k = 1; k<=maxStock; k++) {
                        list += '<option value="'+k.toString()+'">'+k+'</option>'
                    }
                        list +='</select>';
                    break;
                case 4:
                    list += '<td class='+headerclass[j]+'>';
                    list += (product["price"] * productslist[i]["amount"]).toString();
                    totalcost += product["price"] * productslist[i]["amount"];
                    break;
                case 5:
                    list += '<td class='+headerclass[j]+'>';
                    list += '<input class="trashButton" type="image" onclick="removeProduct('+product["PID"]+',0); window.location.reload();" img src="./resource/trash.png">';
                    break;
                default:
                    break;
            }
            list += '</td>';
        }
        list += '</tr>';
    }
    list += '<tr><td colspan="'+colnum+'" style="text-align:right; padding-right: 2em;"><label>Total Price：</label>'+totalcost.toString()+'</td></tr>';
    list += '<tr id="decisionRow"><td colspan="'+colnum+'" style="background-color: #f9f2f4; align-content: right;">' +
        '<input class="button" type="submit" name=""  onclick="location.href=\'index.php\'" value="繼續購物" >' +
        '<input class="button" type="submit" name="" onclick="location.href=\'bill.php\'" value="結帳">' +
        '</td></tr>';
    return list;

}

function updateAmount(pid, i) {
    var id = "amount_"+i.toString();
    var e = document.getElementById(id);
    var amount = e.options[e.selectedIndex].value;
    e.options[e.options.selectedIndex].selected = true;
    updateShopAmount(pid, amount);
}



function getShoppingCartLength()
{
    var productslist = getPersonalShoppingList(0);
    if(productslist.length>0) {
        document.getElementById("cart").innerHTML += ' ('+productslist.length+')';
    }
}

function showWallet()
{
    document.getElementById("wallet").innerHTML += ("NT. $"+getWallet());
}

function showBill()
{
    var productslist = getPersonalShoppingList(0);
    var list='<tr><td>商品</td><td>數量</td><td>價格</td></tr>';
    var totalcost = 0;
    for (var i = 0;i < productslist.length; i++) {
        var product = findProduct(productslist[i]["PID"]);
        if (i%2 === 0) {
            list += '<tr style="background-color: #f9f2f4">';
        }
        else list += '<tr style="background-color: #FFE5FF">';

        for(var j = 0; j < 3; j++)
        {
            switch(j){
                case 0:
                    list += '<td class="detail">';
                    list += product["name"];
                    break;
                case 1:
                    list += '<td class="amount">';
                    list += productslist[i]["amount"];
                    break;
                case 2:
                    list += '<td class="smallTotal">';
                    list += (product["price"] * productslist[i]["amount"]).toString();
                    totalcost += product["price"] * productslist[i]["amount"];
                    break;
                default:
                    break;
            }
            list += '</td>';
        }
        list += '</tr>';
    }
    list += '<tr><td colspan="5" style="text-align:right; padding-right: 2em;"><label>Total Price：</label>'+totalcost.toString()+'</td></tr>';
    list +='<tr><td colspan="5" style="text-align:right; padding-right: 2em;"><label>錢包餘額：</label>'+getWallet()+'</td></tr>';
    list += '<tr id="decisionRow"><td colspan="5" style="background-color: #f9f2f4; align-content: right;">' +
        '<input class="button" type="submit" name=""  onclick="location.href=\'topUp.php\'" value="加值" >' +
        '<input class="button" type="submit" onclick="location.href=\'index.php\'" value="取消">' +
        '<input class="button" type="submit" name="" onclick="confirmInfo('+totalcost+')" value="確認">' +
        '</td></tr>';
    return list;
}

function confirmInfo(price)
{
    var walletMoney = getWallet();
    var productslist = getPersonalShoppingList(0);
    if(parseInt(price) <= parseInt(walletMoney))
    {
        for(var i = 0; i <productslist.length; i++)
        {
            orderlistPaid(productslist[i]["PID"], 1);
        }
        alert("購買成功！賣家送出商品後，即可對商品滿意度評價！");
        updateWallet(parseInt(price)*(-1));

        window.location.href='wallet.php';
    }
    else
    {
        alert("餘額不足，請加值後購買！");
        window.location.href='topUp.php';
    }

}

function showOrderlist()
{
    var orderrecord = getPersonalShoppingList(1);
    var list = "";

    for (var i = 0; i < orderrecord.length; i++)
    {
        list += '<tr>';
        var product = findProduct(orderrecord[i]["PID"]);
        list += '<th scope="row">'+(i+1).toString()+'</th>';
        list += '<td>'+orderrecord[i]["time"]+'</td>';
        list += '<td>'+product["name"]+'</td>';
        list += '<td>'+orderrecord[i]["amount"]+'</td>';
        list += '<td>'+(parseInt(product["price"]) * parseInt(orderrecord[i]["amount"])).toString()+'</td>';
        if (orderrecord[i]["checked"]==='0')
        {
            list += '<td><input type="text" class="form-control" disabled></td>';
        }
        else
        {
            list += '<td><input id="comment_'+i+'" type="text" class="form-control" value="'+orderrecord[i]["comment"]+'">' +
                '<button type="button" class="btn " style="background-color: #e4b9c0 " onclick="updateComment('+orderrecord[i]["UID"]+','+orderrecord[i]["PID"]+','+i+'); window.location.reload();">';
            if(orderrecord[i]["comment"]==="")
                list += "送出";
            else list += "修改";
            list +='</button>' + '</td>';
        }
        list += '</tr>';
    }
    return list;
}

function showSelllist()
{
    var soldRecord = getSellingRecord();
    var list = "";
    var count = 0;
    for (var i = 0; i < soldRecord.length; i++)
    {
        if(soldRecord[i]["paid"]==='1') {
            list += '<tr>';
            var product = findProduct(soldRecord[i]["PID"]);
            list += '<th scope="row">'+(count+1).toString()+'</th>';
            count++;
            list += '<td>'+soldRecord[i]["time"]+'</td>';
            list += '<td>'+product["name"]+'</td>';
            list += '<td>'+getUserByID(soldRecord[i]["UID"])["name"]+'</td>';
            list += '<td>'+soldRecord[i]["amount"]+'</td>';

            if (soldRecord[i]["checked"]==='0')
            {
                list += '<td>尚未送出</td>';
                list += '<td><button type="button" class="btn " style="background-color:#FF8076" onclick="confirmSold('+soldRecord[i]["UID"]+','+soldRecord[i]["PID"]+','+soldRecord[i]["amount"]+');window.location.reload();"> 確認 </button></td>';
            }
            else
            {
                list += '<td>商品寄出</td>';
                list += '<td><button type="button" class="btn " style="background-color:#5e5d5d " onclick="" disabled> 確認 </button></td>';
            }


            list += '<td>'+soldRecord[i]["comment"]+'</td>';

            list += '</tr>';
        }

    }
    return list;
}

function confirmSold(uid, pid, amount) {
    updateStock(pid, parseInt(amount)*(-1));
    productSold(uid, pid, 1);
    updateWallet(findProduct(pid)["price"]*amount);
}

function listCateOptions()
{
    var categories = findAllCategory();
    var list = "";
    for (var i = 0; i < categories.length; i++)
    {
        list += '<option>'+categories[i]["category"]+'</option>';
    }
    return list;
}

function addNewProduct() {
    var image = document.getElementById("image").value;
    var name = document.getElementById("name").value;
    var description = document.getElementById("description").value;
    var price = document.productForm.price.value;
    var amount = document.productForm.amount.value;
    var e = document.getElementById("options");
    var cate = e.options[e.selectedIndex].value;
    if (image.length===0 || name.length===0 || description.length===0 || price <=0 || amount <= 0) {
        alert("請檢查是否每個選項都有輸入！");
        return false;
    }
    else {
        addProduct(name, image, description, price, amount, cate);
        var id = getProductID(name);
        window.location.href = "caption.php?PID="+id;
    }

}