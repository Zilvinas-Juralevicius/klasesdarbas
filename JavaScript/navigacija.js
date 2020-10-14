let turiniai = document.querySelectorAll('main > section');
let meniuElementai = document.querySelectorAll('header nav > a')

function pakeistiPusplapi (maniuElem, pslId) {
    for (var i = 0; turiniai.length > i; i++) {
        turiniai[i].style.display ='none';
        meniuElementai[i].classList.remove('active');
    }
    meniuElem.addClass.add('active');
    document.getElementById(pslId).style.display = 'block';
}

// Default puslapis kuris bus uzkrovus tinklapi
//let defaultElem = document.querySelector('active')[0];
let defaultElem = document.querySelector('nav a:last-child');
pakeistiPusplapi( defaultElem, 'contacts');