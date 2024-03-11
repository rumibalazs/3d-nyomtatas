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


const morebtns = document.querySelectorAll('.more');
const texts = document.querySelectorAll('.text');

morebtns.forEach((morebtn, index) => {
    morebtn.addEventListener('click', (e) => {
        texts[index].classList.toggle('showMore');
        const newText = texts[index].classList.contains('showMore') ? 'Kevesebb...' : 'Tovább...';
        morebtn.innerText = newText;
    });
});

var invalidChars = [
    "-",
    "+",
    "e",
    "E",
];

var elements = document.querySelectorAll('.db');

elements.forEach(function (element) {
    element.addEventListener("input", function () {
        this.value = this.value.replace(/[e\+\-]/gi, "")
    });

    element.addEventListener("keydown", function (e) {
        if (invalidChars.includes(e.key)) {
            e.preventDefault();
        }
    });
});