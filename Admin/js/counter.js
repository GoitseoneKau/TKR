function loadStats(){
    $.getJSON('functions/counter.php',(data)=>{
        $('#badgeReg').html(data.registered)
        $('#badgeNew').html(data.new)
        $('#badgeTotal').html(data.total)
        $('span#old').text(data.registered)
        $('span#new').text(data.new)
    });
}

setInterval(loadStats,500);

   
