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

function getPersonalShoppingList(paid) {
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/getShoppingCart.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
            products = JSON.parse(products);
        }
    };
    http.send("paid="+paid);
    return products;
}

function addToShoppingCart(pid, sid)
{
    var productslist = getPersonalShoppingList(0);
    if(findProduct(pid)["amount"]==='0')
    {
        alert("尚無庫存，等待賣家進貨");
        return false;
    }
    for (var i = 0; i < productslist.length; i++)
    {
        if(productslist[i]["PID"]===pid.toString()) {
            alert("購物車已經有這個商品囉！請在購物車中修改數量！");
            return false;
        }
        if(findProduct(pid)["UID"] === getUserID()) {
            alert("此商品為個人商品，不提供購買服務！");
            return false;
        }
    }
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/addToShoppingCart.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
            alert("成功加入購物車！");
        }
        else {
            alert("請先登入會員！");
            window.location.href = "login.php";
        }
    };
    http.send("PID="+pid+"&amount=1"+"&SID="+sid);
}

function updateShopAmount(pid, amount)
{
    var product = findProduct(pid);
    if (parseInt(amount) > parseInt(product["amount"])) {
        alert("超過庫存數量，請重新選擇");
        return false;
    }
    else {
        var http = new XMLHttpRequest();
        var products = "";
        http.open("POST", "./dbrequest/updateShopAmount.php", false);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.onreadystatechange=function() {
            if(this.readyState === 4 && this.status === 200) {
                products = http.responseText;
            }
        };
        http.send("PID="+pid+"&amount="+amount);
    }

}

function removeProduct(pid, paid) {
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/removeProduct.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
        }
    };
    http.send("PID="+pid+"&paid="+paid);
}

function orderlistPaid(pid, paid)
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/updateOrderlist.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
        }
    };
    http.send("PID="+pid+"&paid="+paid);
}

function getSellingRecord()
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/getSellRecord.php", false);
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

function productSold(uid, pid, check)
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/updateOrderlist.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
        }
    };
    http.send("UID="+uid+"&PID="+pid+"&checked="+check);
}

function updateStock(pid, amount)
{
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/updateStock.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
        }
    };
    http.send("PID="+pid+"&amount="+amount);
}

function updateComment(bid, pid, i)
{
    var id = "comment_"+i.toString();
    var comment = document.getElementById(id).value;
    console.log(comment);
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/updateComment.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState === 4 && this.status === 200) {
            products = http.responseText;
        }
    };
    http.send("BID="+bid+"&PID="+pid+"&comment="+comment);
}