// Toggle between regular contents and 3D contents

var previousHeaderBg = {}
var previousFooterBg = {}
// const stylle = getComputedStyle(document.getElementById('recipeApp-bound')).backgroundColor
// alert(stylle)


function show3D(id) {

    const bound = document.getElementById(`${id}-bound`)
    // document.getElementById(`${id}-bound`).style.display = 'block';
    const card = document.getElementById(`${id}`)
    const cardFooter = card.getElementsByClassName('cardFooter')[0]
    const cardHeader = card.getElementsByTagName('h2')[0]
    const contents = document.getElementById(`${id}`).getElementsByClassName('contents')[0]
    const skipButtons = card.getElementsByClassName('fas')

    // because IOS has a different background color, save initial background-colors here before removing it, and re-appy on closing 3D view
    if (previousHeaderBg.id == undefined) {
        previousHeaderBg.id = getComputedStyle(card.getElementsByTagName('h2')[0]).background
    }
    if (previousFooterBg.id == undefined) {
        previousFooterBg.id = getComputedStyle(card.getElementsByClassName('cardFooter')[0]).background
    }
    // document.getElementById(`${id}-card`).getElementsByClassName('contents')[0].style.height = '0px';
    if (card.getElementsByClassName('3dCheckbox')[0].checked == true) {
        $('.navbar').addClass("navbar-hide");
        if (reduced & !understand) {
            $('.popUp').css('display', 'flex');
            $('#back').on('click', function () {
                $('.popUp').css('display', 'none')
                card.getElementsByClassName('3dCheckbox')[0].checked = false
            })
            $('#understand').on('click', function () {
                understand = true
                $('.popUp').css('display', 'none')
                show3D(id)
            })
            return;
        }
        registerVideo(`#${id}-bound`, `#${id}Video`, true);
        // registerVideo("#recipeApp-bound", "#recipeAppVideo", true);
        // // registerVideo("#drawingApp-bound", "#drawingAppVideo");
        // registerVideo("#artPortfolio-bound", "#artPortfolioVideo");


        anime.timeline({ loop: false })
            .add({
                targets: contents,
                // translateX: [0, -200],
                opacity: [1, 0],
                duration: 1000,
                easing: 'easeInOutSine'
            })
        setTimeout(function () {
            anime.timeline({ loop: false })
                .add({
                    targets: bound,
                    opacity: [0, 1],
                    // translateX: [500, 0],
                    duration: 500,
                    easing: 'easeInOutSine'
                })
            anime.timeline({ loop: false })
                .add({
                    targets: card.getElementsByClassName('cardbg'),
                    opacity: [1, 0],
                    // translateX: [500, 0],
                    duration: 500,
                    easing: 'easeInOutSine'
                })
            anime.timeline({ loop: false })
                .add({
                    targets: skipButtons,
                    // translateX: [0, -200],
                    opacity: [0, 1],
                    duration: 1000,
                    easing: 'easeInOutSine'
                })
        }, 1000)
        setTimeout(function () {
            card.style.background = "none!important";
            card.style.backdropFilter = "none";
            card.style.minHeight = "50vh";
            card.style.border = "none";
            card.style.width = "100vw"
            card.style.maxWidth = "100vw"
            contents.style.display = "none"
            bound.style.height = '5000px';
            bound.style.display = 'block';

            // cardHeader.style.backgroundImage = 'url(../Images/backgrounds/nazar-synytsia-0ybIsh4UPYk-unsplash-bg-min2.png)';
            cardHeader.style.top = '0px';
            cardHeader.style.zIndex = '20';
            cardHeader.style.borderRadius = '0px';
            cardFooter.style.zIndex = '20';
            // card.style.borderTop = 'none'

            // Using cssText overrides all styles, not just the ones listed

            cardFooter.style.top = '94vh'
            // cardFooter.style.backgroundImage = 'url(../Images/backgrounds/nazar-synytsia-0ybIsh4UPYk-unsplash-bg-min2.png)';

        }, 1000)
        setTimeout(function () {
            cardHeader.style.background = 'rgba(0,80,80,1)';
            cardFooter.style.background = 'rgba(0,100,100,1)';
        }, 2000)
        setTimeout(function () {
            window.scrollBy({
                top: window.innerHeight / 2,
                left: 0,
                behavior: "smooth",
            });
        }, 3000)
    }
    else {

        registerVideo(`#${id}-bound`, `#${id}Video`, false);
        cardHeader.style.background = 'none';
        cardFooter.style.background = 'none';
        cardHeader.style.backdropFilter = 'none';
        cardFooter.style.backdropFilter = 'none';


        anime.timeline({ loop: false })
            .add({
                targets: bound,
                opacity: 0,
                // translateX: [0, 500],
                height: 0,
                duration: 500,
                easing: 'easeInOutSine'
            })
        anime.timeline({ loop: false })
            .add({
                targets: skipButtons,
                // translateX: [0, -200],
                opacity: [1, 0],
                duration: 1000,
                easing: 'easeInOutSine'
            })
        scrollAnchor = card.getElementsByClassName('scrollAnchor')[0];
        document.getElementById(`${id}-scroll`).scrollIntoView();
        contents.style.display = "flex"
        anime.timeline({ loop: false })
            .add({
                targets: contents,
                // translateX: [-500, 0],
                opacity: 1,
                duration: 500,
                delay: 500,
                easing: 'easeInOutSine'
            })


        setTimeout(function () {
            bound.style.display = 'none';
            contents.style.display = "flex"
            contents.style.height = "auto"
            card.style.maxWidth = 'calc(min(860px, 100%))'
            cardHeader.style.position = 'sticky'
            cardHeader.style.top = 'auto'
            cardHeader.style.zIndex = 'auto'
            cardFooter.style.position = 'sticky'
            cardFooter.style.bottom = 'none'
        }, 1000);
        anime.timeline({ loop: false })
            .add({
                targets: card.getElementsByClassName('cardbg'),
                opacity: [0, 1],
                // translateX: [500, 0],
                duration: 2000,
                easing: 'easeInOutSine'
            })

    }
}