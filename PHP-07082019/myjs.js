$('button').click(function(e){
    $(this).addClass('active');
    // console.log(e);
    // $('button').parent().find('.class-click').text('xxx');
    // $('input').val('abc');
    // $('button').parent().html(`
    //     <input type="file" />
    // `);
    // $('a').attr('href', 'https://google.com');
    $('input').addClass('abc');
});

$('li').click(function(){
    $('li').removeClass('active');
    $(this).addClass('active');
})