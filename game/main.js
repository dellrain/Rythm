document.addEventListener('DOMContentLoaded', function () {
    let yes = document.getElementsByClassName('yes')[0];
    let no = document.getElementsByClassName('no')[0];
    yes.addEventListener('click', function () {
        alert('Мы так и знали!!!');
    });
    no.addEventListener('mouseover', function () {
        let x = Math.random() * 900 + 'px';
        let y = 70 + Math.random() * 350 + 'px';
        no.style.top = y;
        no.style.left = x;
    });
    no.addEventListener('click', function () {
        alert('Врать нехорошо!!!');
    });
});