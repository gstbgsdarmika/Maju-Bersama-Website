const nav = document.getElementById('nav');

window.addEventListener('scroll', function() {
    scrollposition = window.scrollY;

    if(scrollposition >= 60){
        nav.classList.add('scroll-navbar');

    } else if(scrollposition <= 60){
        nav.classList.remove('scroll-navbar')
    }
});

// navbar aktif
    let navAktif = document.querySelectorAll(".nav-link");
    for(let i=0; i<navAktif.length; i++){
        navAktif.onclick = function(){
            let j = 0;
            while(j < navAktif.length){
                navAktif[j++].className = 'nav-link';
            }
            navAktif[i].className = 'active';
        }
    }
