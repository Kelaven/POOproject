// ! Variables

// Les boutons et le texte :
const playBtn = document.getElementById('playBtn');
const replayBtn = document.getElementById('replayBtn');
const gameTxt = document.querySelector('.txt');
// Les vidéos :
const charactersVideos = document.querySelectorAll('.character__video');
const orcImg = document.querySelector('.character__video--orc');
const heroImg = document.querySelector('.character__video--hero');
// Les tombes : 
const herosDead = document.getElementById('hero__dead');
const orcDead = document.getElementById('orc__dead');






// ! Evenements


// * cacher le menu des vidéos
charactersVideos.forEach(characterVideo => {
    characterVideo.controls = false; // Masquer les contrôles par défaut
});


// * lancer le jeu au click sur le boutton
playBtn.addEventListener('click', () => {
    playBtn.classList.add('playBtn__fade-out');
    setTimeout(() => {
        playBtn.classList.add('d-none'); // je le d-none après l'animation de fade-out
    }, 500);


    setTimeout(() => {
        gameTxt.classList.remove('d-none'); // j'affiche le texte

        charactersVideos.forEach(characterVideo => { // j'active les vidéos
                characterVideo.play();
        })
    }, 500);


    setTimeout(() => {
    replayBtn.classList.remove('d-none'); // j'affiche le bouton rejouer à la fin
    replayBtn.classList.add('replayBtn__fade-int');
    }, 8000);


    // * affiher la tombe du perdant
    setTimeout(() => {
        if (winner == "orc") { // en utilisant la variable définie dans index.php
            herosDead.classList.remove('d-none');
            herosDead.classList.add('dead__fade-int');
            setTimeout(() => {
                heroImg.classList.add('d-none');
            }, 5000);
        } else if (winner == "hero"){
            orcDead.classList.remove('d-none');
            orcDead.classList.add('dead__fade-int');
            setTimeout(() => {
                orcImg.classList.add('d-none');
                orcImg.classList.add('playBtn__fade-out');
            }, 4000);
        } 
    }, 6000);



})

// * recharger la page au click sur rejouer

replayBtn.addEventListener('click', () => {
    location.reload();
})

