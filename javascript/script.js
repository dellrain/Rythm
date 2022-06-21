const elem = document.getElementsByClassName('amountPages');
let amountPages = get_cookie('amount') === null ? 1: Number.parseInt(get_cookie('amount'))
elem[0].innerHTML = amountPages.toString();

function get_cookie ( cookie_name ) {
    const results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
    if (results)
        return( results[2] );
    else
        return null;
}
function increaseCountPagesVisited() {
    document.cookie = 'amount=' + (amountPages + 1);
    elem[0].innerHTML = amountPages.toString();
}