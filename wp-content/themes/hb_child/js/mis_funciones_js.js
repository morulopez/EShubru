
function buttonRespnsive(){
    document.getElementsByClassName('mobile-menu-bars')[0].addEventListener('click',function(){
        document.getElementsByClassName('menu-responsive-modal')[0].style.display='block';
    })
    document.getElementsByClassName('menu-responsive-modal')[0].addEventListener('click',function(){
        this.style.display='none';
    })
}
window.onload = function(){
    buttonRespnsive();
}
