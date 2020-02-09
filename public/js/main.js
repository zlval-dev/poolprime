var language = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1]
var clicked = false
var resizeBigger = false
var resizeSmaller = false

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

$('header .burguer').click(() => {
    $('header ul .menu').css({
        visibility: 'visible',
        opacity: 1
    })
    $('header .burguer').css('display', 'none')
    $('#remove-menu').css({
        visibility: 'visible',
        opacity: 1
    })
    $('header .menu-background').css({
        visibility: 'visible',
        opacity: 1
    })
})

$('#remove-menu').click(() => {
    resizeBigger = true
    $('header ul .menu').css({
        visibility: 'hidden',
        opacity: 0
    })
    $('#remove-menu').css({
        visibility: 'hidden',
        opacity: 0
    })
    $('header .burguer').css('display', 'block')
    $('header .menu-background').css({
        visibility: 'hidden',
        opacity: 0
    })
})

window.onresize = () => {
    if(window.innerWidth >= 600 && resizeBigger){
        $('header ul .menu').css({
            visibility: 'visible',
            opacity: 1
        })
        resizeBigger = false
        resizeSmaller = true
    }else if(window.innerWidth < 600 && resizeSmaller){
        $('header ul .menu').css({
            visibility: 'hidden',
            opacity: 0
        })
        resizeSmaller = false
    }
}