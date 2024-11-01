function toggeleMenu(){
    var menuBar=document.querySelector('.opacity-menu');
    var headerNav=document.querySelector('.header-nav');
    // Thêm class mới vào menuBar và headerNav
    menuBar.classList.toggle('current');
    headerNav.classList.toggle('current')
}

function CLoseMenu(){
    var menuBar=document.querySelector('.opacity-menu');
    var headerNav=document.querySelector('.header-nav');

    // Xóa class curent 
    menuBar.classList.remove('current');
    headerNav.classList.remove('current');
}

document.addEventListener('DOMContentLoaded', function() {
    const logoutLink = document.getElementById('logoutLink');
    if(logoutLink){
        logoutLink.addEventListener('click', function(event) {
            // Ngăn chặn hành động mặc định của liên kết
            event.preventDefault();
    
            // Xóa jwt_token khỏi localStorage
            localStorage.removeItem('jwt_token');
    
            // Chuyển hướng về trang logout (hoặc bất kỳ trang nào bạn muốn)
            window.location.href = logoutLink.href;
        });
    }
    
});
