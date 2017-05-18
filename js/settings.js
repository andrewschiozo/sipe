var url_base = 'http://localhost/sipe/';
var url_data = url_base + "data/";

function loadView(view, element)
{
    $.get(url_base + view, function(data){
        element.html(data);
    });
}