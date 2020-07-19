function init() {
    $.getJSON("goods.json", goodsOut);
}
/*function goodsOut(data) {
console.log(data);
for(let key in data.books){
    console.log(data.books[key]);

}
}*/
$(document).ready(function () {
    init();
})