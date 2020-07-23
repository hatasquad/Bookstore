function init() {
    $.post(
        "core.php",
        {
            "action" : "init"
        },
        showGoods
    );
}

function showGoods(data) {
    data = JSON.parse(data);
    console.log(data);
    var out='<select>';
    out +='<option data-id="0">Add book</option>';
    for (var id in data) {
        out +=`<option data-id="${data[id].id}">${data[id].title}</option>`;
    }
    out +='</select>';
    $('.goods-out').html(out);
    $('.goods-out select').on('change', selectGoods);
}
function selectGoods(){
let id = $('.goods-out select option:selected').attr('data-id');
 $.post(
     "core.php",
     {
         "action" : "selectOneGoods",
         "bid" : id
     },
     function (data) {
        data = JSON.parse(data);
        $('#btitle').val(data.title);
        $('#bauthor').val(data.author);
        $('#bprice').val(data.price);
        $('#bimg').val(data.img);
        $('#bdesc').val(data.description);
        $('#bisnew').val(data.isNew);
        $('#bid').val(data.id);
     }
 );
}

function saveToDb(){
    let id = $('#bid').val();
    if (id!=""){
        $.post(
            "core.php",
            {
                "action" : "updateGoods",
                "id": id,
                "btitle":  $('#btitle').val(),
                "bauthor":  $('#bauthor').val(),
                "bprice":  $('#bprice').val(),
                "bimg":  $('#bimg').val(),
                "bdesc":  $('#bdesc').val(),
                "bisnew":  $('#bisnew').val(),

            },
            function (data) {
                if (data==1){
                    alert('Item Updated')
                    init();
                }else {
                    console.log(data);
                }
            }
        )
    }else {
        $.post(
            "core.php",
            {
                "action" : "newGoods",
                "id": 0,
                "btitle":  $('#btitle').val(),
                "bauthor":  $('#bauthor').val(),
                "bprice":  $('#bprice').val(),
                "bimg":  $('#bimg').val(),
                "bdesc":  $('#bdesc').val(),
                "bisnew":  $('#bisnew').val(),

            },
            function (data) {
                if (data==1){
                    alert('Item Updated')
                    init();
                }else {
                    console.log(data);
                }
            }
        )
    }
}



$(document).ready(function () {
   init();
   $('.addToDb').on('click', saveToDb)
});