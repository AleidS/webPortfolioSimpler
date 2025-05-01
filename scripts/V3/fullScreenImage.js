function getPics() {} //just for this demo
const imgs = document.querySelectorAll('.fullscreen');
const vids = document.querySelectorAll('.fullScreenVideo');
const fullPage = document.querySelector('#fullpage');

imgs.forEach(img => {
  img.addEventListener('click', function() {
    let cloneImg  = img.cloneNode(true);
    if (window.innerWidth / cloneImg.width < window.innerHeight / cloneImg.height) {
        cloneImg.style.width = "100%";
        cloneImg.style.height='auto';
    } else {
        cloneImg.style.height = "100%";
        cloneImg.style.width='auto';
    }
    fullPage.innerHTML = '';
    fullPage.appendChild(cloneImg);
    fullPage.style.display='flex';
    // cloneImg.preload=true;
    // cloneImg.play=true;
    // console.log('clicked');
    // var url=cloneImg.getAttribute('src');
    // window.open(url,'video','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');
    // fullPage.style.backgroundImage = 'url(' + img.src + ')';
    // fullPage.style.display = 'block';
  });
});

fullPage.addEventListener('click',function(){
        fullPage.style.display='none'
    }
)

// vids.forEach(vid => {
//   vid.addEventListener('click', function() {
//     console.log('clickedVideo');
//     var url=vid.getElementsByTagName("source")[0].src
//     window.open(url,'video','width=largeImage.stylewidth,height=largeImage.style.height,resizable=1');
//     // fullPage.style.backgroundImage = 'url(' + img.src + ')';
//     // fullPage.style.display = 'block';
//   });
// });

fullPage.addEventListener('click',function(){
        fullPage.style.display='none'
    }
)

