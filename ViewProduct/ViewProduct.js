// ----------------------------------------smail img------------------------------------------------------------
// Chọn tất cả các phần tử có class view-main-left-small-img
var smallImages = document.querySelectorAll('.view-main-left-small-img');
var smallImagesContainer = document.querySelector('.view-main-left-small');
var smallActive = document.querySelector('.small-img-active');
var hidenText = document.querySelectorAll('.small-img-text');
// Chọn phần tử hiển thị ảnh lớn
var bigImage = document.querySelector('.view-main-left-big-img');
var curentIndex = 0
document.addEventListener('DOMContentLoaded', function(){
    smallImages = document.querySelectorAll('.view-main-left-small-img');
    hidenText = document.querySelectorAll('.small-img-text');
    if(smallImages.length > 6){
        var imgHidenEd = smallImages.length - 6;
        hidenText.forEach(function(hidentext){
            hidentext.textContent = "+ " + imgHidenEd;
        })
    }
})
// Lặp qua từng phần tử nhỏ và thêm sự kiện click
smallImages.forEach(function(smallImage, index) {
    smallImage.addEventListener('click', function() {
        bgImage = getComputedStyle(smallImage).backgroundImage;
        bigImage.style.backgroundImage = bgImage;
        curentIndex = index;
        smallActive.classList.remove('small-img-active');
        smallImage.classList.add('small-img-active');
        smallActive = document.querySelector('.small-img-active');
    });
});
function mainLeftPrev(){
    smallImages[smallImages.length -1].click();
    showSmallList('prev');
    
}
function mainLeftNext(){
    smallImages[1].click();
    showSmallList('next');
    
}
function showSmallList(type){
    smallImageDom = document.querySelectorAll('.view-main-left-small-img');
    if(type === 'prev'){
        smallImagesContainer.prepend(smallImageDom[smallImageDom.length - 1]);
    } 
    else if(type === 'next'){
        
        smallImagesContainer.appendChild(smallImageDom[0]);
    }
    else {

    }
    smallImages = document.querySelectorAll('.view-main-left-small-img');
    smallActive.classList.remove('small-img-active');
    smallImages[0].classList.add('small-img-active');
    smallActive = document.querySelector('.small-img-active');
}
// -------------------------------------------------------see other ---------------------------------------------
var otherImages = document.querySelectorAll('.view-see-other-img')
var otherImageCover = document.querySelector('.view-see-other-over')

function seeOtherPrev(){
    scrollOtherImg('prev')
}
function seeOtherNext(){
    scrollOtherImg('next')
}
function scrollOtherImg(type){
    var otherImagesDom = document.querySelectorAll('.view-see-other-img');
    if (type === "next") {
        otherImageCover.appendChild(otherImagesDom[0]);
    } else {
       otherImageCover.prepend(otherImagesDom[otherImagesDom.length -1]);
    }
}