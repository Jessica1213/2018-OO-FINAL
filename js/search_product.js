function searchItem() {
    var name = document.getElementById("search").value;
    console.log(name);
    var http = new XMLHttpRequest();
    var products = "";
    http.open("POST", "./dbrequest/searchProduct.php", false);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http.onreadystatechange=function() {
        if(this.readyState == 4 && this.status ==200) {
            products = http.responseText;
        }
    };
    http.send("name="+name);
    console.log(products);
    return products;
}
