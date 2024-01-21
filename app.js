window.onscroll = function () {
    gorget();
}

function gorget() {
    let b1 = document.getElementById("vgomb");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        b1.style.display = "block";
    }
    else {
        b1.style.display = "none";
    }
}

function visszaFel() {
    document.body.scrollTop = 0; //safari
    document.documentElement.scrollTop = 0; //opera chrome internet explorer firefox
}

let HAS = document.getElementById('hideAndSeek');
let display = 0;
let arrow = document.getElementById('more');
HAS.style.display = 'none';

function hideAndSeek()
{
    if (display == 1) 
    {
        HAS.style.display = 'none';
        display = 0;
        arrow.innerHTML = "&#xe313;";
    } 
    else 
    {
        HAS.style.display = 'flex';
        display = 1;
        arrow.innerHTML = "&#xe316;"    
    }
}