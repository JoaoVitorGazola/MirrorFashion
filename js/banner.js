var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;
function trocaBanner() {
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('.banner-destaque img').src = banners[bannerAtual];
}
var timer = setInterval(trocaBanner, 4000);

document.querySelector('.play').onclick = function() {
    timer = setInterval(trocaBanner, 4000);
}

document.querySelector('.pause').onclick = function() {
    clearInterval(timer);
}