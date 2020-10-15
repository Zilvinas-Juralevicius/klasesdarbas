//$(function(){

   // $('body').css({
        // keli nustatomi parametrai
       // 'background-color', 'red'

   // })

//});
$(function () {
    $('header > img').click(function (){
        $('aside > section > img').toggle();
    });

    $('#forma').load('namudarbai/alus/alus2.html');
});