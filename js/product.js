function findItem(name, type)
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/searchProduct.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
            products = JSON.parse(products);
        }
    };
    http.send("name="+name+"&searchby="+type);
    return products;
}

function findProduct(pid)
{
    var http = new XMLHttpRequest();
    var product = "";
    http.open("POST", "./dbrequest/findProductByID.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            product = http.responseText;
            product = JSON.parse(product);
        }
    };
    http.send("PID="+pid);
    return product;
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
        list += '<div class="d-flex justify-content-between align-items-center">' +
            '<div class="btn-group">'+
            '<button type="button" class="btn btn-sm btn-outline-secondary" onclick="viewProduct('+products[i]["PID"]+')">瀏覽</button>' +
            '<button type="button" class="btn btn-sm btn-outline-secondary" onclick="addToShoppingCart('+products[i]["PID"]+')">加入購物車</button></div></div></div></div></div>';
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
    list += '<div class="row"><div class="col-md-4 col-xs-4" style="background:#eee;height: 300px; width:100%;">';
    list += '<img src="'+product["image"]+'" alt="..." class="img-thumbnail" style="height: 100%; width:100%;">';
    list += '</div><HR style="width:auto;" size="10"></div>';
    list += '<div class="row" style="width:auto;background:#eee">';
    list += '<form  action="" name="InfoForm" method="post" onsubmit="return false;">';
    list += '<div class="col"><table class="table table-striped"><thead><tr><th scope="col"><h4>商品名稱</h4> <label>'+product["name"]+'</label></th></tr></thead>';
    list += '<tbody><tr><th scope="row"><h4>商品介紹</h4><label>'+product["description"]+'</label></th></tr><tr><th scope="row">';
    list += '<h4>價格</h4><label>'+product["price"]+'</label></th></tr><tr><th scope="row">';
    list += '<h4>類別</h4><label>'+product["category"]+'</label></th></tr></tbody></table>';
    list += '<button class="btn "> 購買 </button><button class="btn "> 加入購物車 </button></div></form></div></div>';
    document.getElementById("product").innerHTML+= list;
}

function findAllCategory()
{
    var http = new XMLHttpRequest();
    var categories = "";
    http.open("POST", "./dbrequest/findCategories.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            categories = http.responseText;
            categories = JSON.parse(categories);
        }
    };
    http.send();
    return categories;
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

function findPersonalProduct()
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/findPersonalProducts.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
            products = JSON.parse(products);
        }
    };
    http.send();
    return products;
}

function showPersonalItems()
{
    var products = findPersonalProduct();
    return showProduct(products);
}

function getPersonalShoppingList(uid) {
    // var http = new XMLHttpRequest();
    // var products = "";
    // http.open("POST", "./dbrequest/addToShoppingCart.php", false);
    // http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // http.onreadystatechange=function() {
    //     if(this.readyState === 4 && this.status === 200) {
    //         products = http.responseText;
    //         products = JSON.parse(products);
    //     }
    // };
    // http.send("UID="+uid);
    // return products;
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

    var table = document.getElementById("shoppingCartList_Header");
    var tOBj = table.tBodies[0];
    var row  = document.createElement("tr");//產生一ROW;
    var cell = document.createElement("td");//產生第一欄;
    for (var i=1;i <= 2;i++) {    // '2' 改成購買商品數
        row = document.createElement("tr");//產生一ROW
        for (var j = 1; j <= 5; j++) {
            cell = document.createElement("td");//產生第一欄
            switch(j){
                case 1:
                    cell.innerHTML = "<input  type=\"radio\" name=\"doubleCheck\">";  //設定欄位內容，將確認, ' \ ' 重要。
                    break;
                case 2:
                    cell.innerHTML = "ProductName";  //設定欄位內容，項目名稱, ' \ ' 重要。
                    break;
                case 3:
                    cell.innerHTML = "ProductPrice";  //設定欄位內容，單價, ' \ ' 重要。
                    break;
                case 4:
                    cell.innerHTML = "<select>" +
                        "<option value=\"1\">1</option>" +
                        "<option value=\"2\">2</option>" +
                        "<option value=\"3\">3</option>" +
                        "<option value=\"4\">4</option>" +
                        "<option value=\"5\">5</option>" +
                        "</select>";  //設定欄位內容，數量, ' + ' 與 '  \ ' 重要。
                    break;
                case 5:
                    cell.innerHTML = "Price";  //設定欄位內容，價格, ' \ ' 重要。
                    break;
                default:
                    break;
            }
            row.appendChild(cell);//將設定的欄位內容塞入ROW中
        }

        if(i % 2 === 0){    //修改列顏色，美術不好不知道怎麼選顏色ˊˇˋ"
            row.style.background = '#f9f2f4';
        }else{
            row.style.background = '#02df82';
        }

        tOBj.appendChild(row);//將ROW塞進表格

    }
}