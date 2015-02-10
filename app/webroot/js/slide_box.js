$(function(){
    $(".slide_btn").on("click", function() {
        $(this).toggleClass("active");//開いた時、ボタンにクラスを追加//toogle content end form
        $(".slide_box").slideToggle("fast");//”slow”、”normal”、”fast”
    });

    $(".fade_btn").on("click", function() {
        $(this).toggleClass("active");//開いた時、ボタンにクラスを追加
        $(".fade_box").fadeToggle("slow");//”slow”、”normal”、”fast
    });
    
    //check button back
     $('.back').bind('click',function (){
             console.log(this);
             window.history.back();
     });
    
})
