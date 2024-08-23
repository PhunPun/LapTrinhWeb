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