$(document).ready(function() {
    var w = $(".all").width() + window.pageXOffset;

    $(".all").css({'position':'absolute','left': w + 'px'}).animate({
        left: '-=' + ($('.all').width()+160)
    },2000, function () {
        setTimeout(2000,$(".all").css({'position':''}));
    });

    $("a").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $(".all").css({'position':'absolute'}).animate({
            left: '-=' + w
        },2000,function () {
            setTimeout(2000, redirectPage());
        });
    });
    function redirectPage() {
        window.location = linkLocation;
    }
});