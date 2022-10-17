function load(target, url) {
    var r = new XMLHttpRequest();
    r.open("GET", url, true);
    r.onreadystatechange = function () {
        if (r.readyState != 4 || r.status != 200) return;
        target.innerHTML = r.responseText;
    };
    r.send();
}

let includes = Array.from(document.querySelectorAll('[data-include]'));
includes.map(include => {
    let file = include.dataset['include'] + '.php';
    load(include, file);
});



function ajaxPageLoader(request_url) {
    console.log("Content loading from : "+request_url);
    $("#container").load(request_url+" #container", function() {
        window.history.pushState({}, "", request_url); // update current url in browser.
        console.log("Content loaded");
    });
}

function changeState(state) {
    if(state !== null) { // initial page
        ajaxPageLoader(state.url);
    }
}


$(document).ready(function(){
    $(document).on('click','.ajax_link',function(){
        ajaxPageLoader($(this).attr('href'));
        return false;
    });
});
// back button event
$(window).on("popstate", function(e) {
    changeState(e.originalEvent.state);
    return false;
});