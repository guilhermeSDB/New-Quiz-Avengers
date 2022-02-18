$("button").click(function (target) {
    let btnClicked = '.' + target.currentTarget.classList[2];

    if ($(btnClicked).hasClass("selected")) {
        $(btnClicked).removeClass("selected")
        $(this).addClass("selected");
    } else {
        $(this).addClass("selected");
    }
});

$('button.result_btn').on('click', function(){
    window.location.href = '/'
})