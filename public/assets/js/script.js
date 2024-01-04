// ! Variables

const charactersVideos = document.querySelectorAll('.character__video');
const playBtn = document.getElementById('playBtn');
const replayBtn = document.getElementById('replayBtn');
const gameTxt = document.querySelector('p');
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
        playBtn.classList.add('d-none');
    }, 500);


    setTimeout(() => {
        gameTxt.classList.remove('d-none');


        // activer les vidéos
        charactersVideos.forEach(characterVideo => {
                characterVideo.play();
    
                characterVideo.addEventListener('ended', () => { // quand la vidéo est finie
    
                })
        })
        
    }, 500);


    setTimeout(() => {
    replayBtn.classList.remove('d-none');
    replayBtn.classList.add('replayBtn__fade-int');
    }, 6000);

})

// * recharger la page au click sur rejouer

replayBtn.addEventListener('click', () => {
    location.reload();
})


if (winner == 'orc') {
    orcDead.classList.add('d-none');
    herosDead.classList.remove('d-none');
} else if (winner == 'hero'){
    herosDead.classList.add('d-none');
    orcDead.classList.remove('d-none');
} else {
    orcDead.classList.add('d-none');
    herosDead.classList.add('d-none');
}