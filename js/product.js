// var sortCategory = ["名稱", "種類"];

function getAllUrlParams(url) {
    // get query string from url (optional) or window
    var queryString = url ? url.split('?')[1] : window.location.search.slice(1);
    // we'll store the parameters here
    var obj = {};

    // if query string exists
    if (queryString) {
        // stuff after # is not part of query string, so get rid of it
        queryString = queryString.split('#')[0];
        // split our query string into its component parts
        var arr = queryString.split('&');
        for (var i=0; i<arr.length; i++) {
            // separate the keys and the values
            var a = arr[i].split('=');
            // in case params look like: list[]=thing1&list[]=thing2
            var paramNum = undefined;
            var paramName = a[0].replace(/\[\d*\]/, function(v) {
                paramNum = v.slice(1,-1);
                return '';
            });
            // set parameter value (use 'true' if empty)
            var paramValue = typeof(a[1])==='undefined' ? true : a[1];
            // (optional) keep case consistent
            paramName = paramName.toLowerCase();
            paramValue = paramValue.toLowerCase();
            // if parameter name already exists
            if (obj[paramName]) {
                // convert value to array (if still string)
                if (typeof obj[paramName] === 'string') {
                    obj[paramName] = [obj[paramName]];
                }
                // if no array index number specified...
                if (typeof paramNum === 'undefined') {
                    // put the value on the end of the array
                    obj[paramName].push(paramValue);
                }
                // if array index number specified...
                else {
                    // put the value at that index number
                    obj[paramName][paramNum] = paramValue;
                }
            }
            // if param name doesn't exist yet, set it
            else {
                obj[paramName] = paramValue;
            }
        }
    }

    return obj;
}

function findItem(name, type) {
    if(type==="Choose...") type="名稱";
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
    http.send("name="+name+"&category="+type);
    return products;
}
function searchItem() {
    var key = document.getElementById("search").value;
    if(key.length===0) return false;
    else window.location.href = "main.php?keyword="+key;
}

function showItems() {
    var params = getAllUrlParams(window.location.href);
    var e = document.getElementById("choice");
    var type = e.options[e.selectedIndex].text;
    console.log(type);
    var products = findItem(params.keyword, type);
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
            '<button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>' +
            '<button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button></div></div></div></div></div>';
    }
    return list;
}

function chooseType()
{
    var type = document.getElementById("choice");
    console.log(type.options[type.selectedIndex].text);
}