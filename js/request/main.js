$(function(){

    loadView("header.html", $("#header"));
    loadView("dashboard.html", $("#content"));
    loadView("footer.html", $("#footer"));

    $('header').on('click', '.menu-item', function(){
        var file = $(this).attr("file");
        loadView(file, $("#content"));
    });
});