function loadIframe(page,element){
    document.getElementById('content_iframe').src = page;

    const menuItems = document.querySelectorAll('.product-subMenu2 .menu-kind');
    menuItems.forEach(item => {
        item.classList.remove('product-active-menu');
    })
    element.classList.add('product-active-menu');
    //ẩn 
    element.classList.add('product-active-menu');
    const manage = document.querySelector('.manage_product');
    manage.style.display = "none";
}
function choose(element){
    const menuItems = document.querySelectorAll('.product-subMenu2 .menu-kind');
    menuItems.forEach(item => {
        item.classList.remove('product-active-menu');
    })
    element.classList.add('product-active-menu');
    const manage = document.querySelector('.manage_product');
    manage.style.display = "block";
}