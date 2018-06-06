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
            '<button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button></div></div></div></div></div>';
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
