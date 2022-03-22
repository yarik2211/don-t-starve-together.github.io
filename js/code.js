$(document).ready(function(){
    $('nav a[href^="#"]').click(function(){
        $('.nav a[href^="#"]').removeClass('active');
        $(this).addClass('active');
        return false;
    })
})