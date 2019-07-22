/*页面 全屏-添加*/
function o2o_edit(title,url){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}

/*添加或者编辑缩小的屏幕*/
function o2o_s_edit(title,url,w,h){
    layer_show(title,url,w,h);
}
/*-删除*/
function o2o_del(url){

    layer.confirm('确认要删除吗？',function(index){
        window.location.href=url;
    });
}

$('.listorder input').blur(function () {
    var data = {
        'id': $(this).attr('attr-id'),
        'listorder': $(this).val()
    };
    var listorder_url = SCOPE.listorder_url;
    $.post(listorder_url, data, function(result){
        if(result.code == 0){
            location.href = result.data;
        }else{
            alert(result.msg);
        }
    },'json');
});

function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
    }
}