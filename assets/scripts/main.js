// console.log( 'JSを読み込んだよ！' );
{
const hamburger = document.querySelector('.js-btn--line'); // 要素取得して変数に格納
const nav = document.querySelector('.js-nav'); 
hamburger.addEventListener('click', function() {
    hamburger.classList.toggle("open");//処理内容
    nav.classList.toggle('open'); //openクラスを付け外しする
    });
}