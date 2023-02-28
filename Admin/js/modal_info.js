$.ready(function(){
    $("#infoModal").on("shown.bs.modal",function(){
        $("input").trigger("focus");
    })
});