$(function () {
    $('img').each(function () {
        var imgpath = $(this).attr('src').slice(3,)
        // console.log(imgpath)
        imgpath = "{% static '" + imgpath + "' %}"
        $(this).attr('src', imgpath)
    })
    console.log($('body').html())
})