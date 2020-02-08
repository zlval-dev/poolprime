var language = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1]
var clicked = false

setInterval(()=>{
    clicked = false
}, 800)

if(language == 'pt'){
    $('.first-language img').attr('src', '/img/pt.png')
    $('.second-language img').attr('src', '/img/en.png')
}else{
    $('.first-language img').attr('src', '/img/en.png')
    $('.second-language img').attr('src', '/img/pt.png')
}

$('#galery').click(() => {
    $('html,body').animate({
        scrollTop: $(".main-galery").offset().top
    }, 1500)
})

$('#contact').click(() => {
    $('html,body').animate({
        scrollTop: $("footer").offset().top
    }, 1500)
})

$('.first-language img').click(() => {
    if(!clicked){
        $('header ul .language li img').css("background-color","#707070")
        $('.second-language').toggle('#visible')
        clicked = true;
    }
})

$('.second-language img').click(() => {
    if(language == 'pt')
        window.location = 'en'
    else
        window.location = 'pt'
})

$(this).click((e) => {
    if(e.target.closest('.first-language img') == null && $('.second-language').css('display') != 'none' && !clicked){
        $('.second-language').toggle('#visible')
        clicked = true
    }
})