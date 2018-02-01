/**
 * Created by rehellinen on 2017/10/15.
 */
$('#addButton').click(function () {
   location.href = URL.add_url;
});

$('#submitButton').click(function () {
    var result = $('#submitForm').serializeArray();
    var postData = {};
    $(result).each(function () {
        postData[this.name] = this.value;
    });
    $.post(URL.submit_url, postData, function (result) {
        if(result.status===1){
            dialog.success(result.message, URL.success_url);
        }
        if(result.status===0){
            dialog.error(result.message);
        }
    },"JSON");
});

$('.table-striped .editButton').click(function () {
    var id = $(this).attr('attr-id');
    location.href = URL.edit_url+'&id='+id;
});

$('.table-striped .statusButton').click(function () {
   var id = $(this).attr('attr-id');
   var status = $(this).attr('attr-status');
   var message = $(this).attr('message');
   var postData = {
        'id' : id,
        'status' : status
    };
   dialog.status(message, URL.status_url, postData);
});

$('* .listorder').blur(function () {
    var listorder = $(this).val();
    var id = $(this).attr('attr-id');
    var postData = {
        'id' : id,
        'listorder' : listorder
    };

    $.post(URL.listorder_url, postData, function (result) {
        if(result.status===1){
            dialog.success(result.message, URL.success_url);
        }
        if(result.status===0){
            dialog.error(result.message);
        }
    },"JSON")
});
