function showOptions()
{
    document.getElementById("functions").innerHTML +=
        '<a href="Introduce.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;" >介紹</a>'+
        '<a href="commodity.php" class="list-group-item list-group-item-action list-group-item-warning" style="width:auto;">個人商品</a>' +
        '<a href="wallet.php" class="list-group-item list-group-item-action list-group-item-success" style="width:auto;">購買紀錄</a>'+
        '<a href="Sales.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">銷售紀錄</a>';
}

function showAdminOptions()
{
    document.getElementById("functions").innerHTML +=
        '<a href="Offer.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">優惠訊息</a>'+
        '<a href="User.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;">使用者資訊</a>';
}
