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

$(function (){
    $('header > a').click(function(e){
        pakeistiTaba($(this).attr('href'));
        e.preventDefault()
    });

    function pakeistiTaba (id) {
        $('.main > section').hide();
        $(id).show();
        pakeistiTaba()
    }
});

    $(function (){
        $('header nav > a').clickfunction(e){
            pakeistiTaba($(this).attr('href'));
            priskirtiKlase('active',this);
            e.preventDefault()
        });
        function pakeistiTaba (id) {
            $('main > section').hide();
            $(id).show();
        }
        function priskirtiKlase(klasesvaedas, el){
            $('header nav > a').removeClass(klasesvaedas);
            $(el).addClass(klasesvaedas);
        }
        pakeistiTaba('#about');
    });