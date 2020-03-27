$(window).scroll(function () {
    if($(window).scrollTop() > 200){
        $('.button-up').addClass('active');
    }
    else{
        $('.button-up').removeClass('active');
    }
})
$(window).scroll(function () {
    if($(window).scrollTop() > 200){
        $("#top-basis ").show(1000);
    }
    else{
        $("#top-basis ").hide(1000);
    }
})


$('#chevl1').click(function(){



    $('#slide3').removeClass('passive')
    $('#slide3').addClass('activeslide')

    $('#slide1').removeClass('activeslide')
    $('#slide1').addClass('passive')
})
$('#chevr1').click(function(){
    $('#slide2').removeClass('passive')
    $('#slide2').addClass('activeslide')

    $('#slide1').removeClass('activeslide')
    $('#slide1').addClass('passive')
})
$('#chevl2').click(function(){
    $('#slide1').removeClass('passive')
    $('#slide1').addClass('activeslide')

    $('#slide2').removeClass('activeslide')
    $('#slide2').addClass('passive')
})
$('#chevr2').click(function(){
    $('#slide3').removeClass('passive')
    $('#slide3').addClass('activeslide')

    $('#slide2').removeClass('activeslide')
    $('#slide2').addClass('passive')
})
$('#chevl3').click(function(){
    $('#slide2').removeClass('passive')
    $('#slide2').addClass('activeslide')

    $('#slide3').removeClass('activeslide')
    $('#slide3').addClass('passive')
})
$('#chevr3').click(function(){
    $('#slide1').removeClass('passive')
    $('#slide1').addClass('activeslide')

    $('#slide3').removeClass('activeslide')
    $('#slide3').addClass('passive')
})





$(window).scroll(function () {
    if($(window).scrollTop()  > 370){
        $('.amen').addClass('amenactive');
    }
    else{
        $('.amen').removeClass('amenactive');
    }
});





$('#button1').click(function () {
    $('#prt1').addClass('activeprt')
    $('#prt2').addClass('activeprt')
    $('#prt3').addClass('activeprt')
    $('#prt4').addClass('activeprtxpb')
    $('#prt5').addClass('activeprt')
    $('#prt6').addClass('activeprt')
    $('#imgbrobl').addClass('imgbrobl')





    $('#prt3').removeClass('activeprtx5pb')
    $('#prt4').removeClass('activeprtx5')
    $('#prt6').removeClass('activeprtx52')

    $('#prt1').removeClass('activeprtx4')
    $('#prt2').removeClass('activeprtx4')
    $('#prt5').removeClass('activeprtx4')
    $('#prt6').removeClass('activeprtx4pb')
    $('#prt6').removeClass('activeprtx4pb2')


    $('#prt1').removeClass('activeprtx3')
    $('#prt4').removeClass('activeprtx3pb')
    $('#prt5').removeClass('activeprtx3')

    $('#prt2').removeClass('activeprtx2')
    $('#prt3').removeClass('activeprtx2')
    $('#prt2').removeClass('activeprt2')

    $('#prt1').addClass('activeprtx3')
    $('#prt4').addClass('activeprt3')
    $('#prt5').addClass('activeprtx3')


    $('#button1').addClass('activeport')


    $('#button2').removeClass('activeport')
    $('#button3').removeClass('activeport')
    $('#button4').removeClass('activeport')
    $('#button5').removeClass('activeport')
})

$('#button2').click(function () {

    $('#prt1').removeClass('activeprt')
    $('#prt2').removeClass('activeprt')
    $('#prt3').removeClass('activeprt')
    $('#prt4').removeClass('activeprtxpb')
    $('#prt5').removeClass('activeprt')
    $('#prt6').removeClass('activeprt')
    $('#prt1').removeClass('activeprtx3')
    $('#prt4').removeClass('activeprtx3pb')
    $('#prt5').removeClass('activeprtx3')
    $('#prt1').removeClass('activeprtx4')
    $('#prt2').removeClass('activeprtx4')
    $('#prt5').removeClass('activeprtx4')
    $('#prt6').removeClass('activeprtx4pb')
    $('#prt3').removeClass('activeprtx5pb')
    $('#prt4').removeClass('activeprtx5')
    $('#prt6').removeClass('activeprtx52')
    $('#prt6').removeClass('activeprtx4pb2')
    $('#imgbrobl').removeClass('imgbrobl')

    $('#prt2').addClass('activeprt2')
    $('#prt3').addClass('activeprtx2')

    $('#prt1').removeClass('activeprtx3')
    $('#prt4').removeClass('activeprt3')
    $('#prt5').removeClass('activeprtx3')

    $('#button2').addClass('activeport')

    $('#button1').removeClass('activeport')
    $('#button3').removeClass('activeport')
    $('#button4').removeClass('activeport')
    $('#button5').removeClass('activeport')
})

$('#button3').click(function () {
    $('#prt1').removeClass('activeprt')
    $('#prt2').removeClass('activeprt2')
    $('#prt3').removeClass('activeprt')
    $('#prt4').removeClass('activeprtxpb')
    $('#prt5').removeClass('activeprt')
    $('#prt6').removeClass('activeprt')
    $('#prt2').removeClass('activeprtx2')
    $('#prt3').removeClass('activeprtx2')
    $('#prt1').removeClass('activeprtx4')
    $('#prt2').removeClass('activeprtx4')
    $('#prt5').removeClass('activeprtx4')
    $('#prt6').removeClass('activeprtx4pb')
    $('#prt3').removeClass('activeprtx5pb')
    $('#prt4').removeClass('activeprtx5')
    $('#prt6').removeClass('activeprtx52')
    $('#prt2').removeClass('activeprt')
    $('#prt6').removeClass('activeprtx4pb2')
    $('#imgbrobl').removeClass('imgbrobl')

    $('#prt2').removeClass('activeprt2')
    $('#prt3').removeClass('activeprtx2')

    $('#prt1').addClass('activeprtx3')
    $('#prt4').addClass('activeprtx3pb')
    $('#prt5').addClass('activeprtx3')
    $('#prt4').addClass('proba')



    $('#button3').addClass('activeport')

    $('#button1').removeClass('activeport')
    $('#button2').removeClass('activeport')
    $('#button4').removeClass('activeport')
    $('#button5').removeClass('activeport')
})

$('#button4').click(function () {
    $('#prt1').removeClass('activeprt')
    $('#prt2').removeClass('activeprt2')
    $('#prt3').removeClass('activeprt')
    $('#prt4').removeClass('activeprtxpb')
    $('#prt5').removeClass('activeprt')
    $('#prt6').removeClass('activeprt')
    $('#prt2').removeClass('activeprtx2')
    $('#prt3').removeClass('activeprtx2')
    $('#prt1').removeClass('activeprtx3')
    $('#prt4').removeClass('activeprtx3pb')
    $('#prt5').removeClass('activeprtx3')
    $('#prt3').removeClass('activeprtx5pb')
    $('#prt4').removeClass('activeprtx5')
    $('#prt6').removeClass('activeprtx52')
    $('#imgbrobl').removeClass('imgbrobl')

    $('#prt2').removeClass('activeprt2')
    $('#prt3').removeClass('activeprtx2')

    $('#prt1').addClass('activeprtx4')
    $('#prt2').addClass('activeprtx4')
    $('#prt5').addClass('activeprtx4')
    $('#prt6').addClass('activeprtx4pb')
    $('#prt6').addClass('activeprtx4pb2')

    $('#button4').addClass('activeport')

    $('#button1').removeClass('activeport')
    $('#button2').removeClass('activeport')
    $('#button3').removeClass('activeport')
    $('#button5').removeClass('activeport')
})

$('#button5').click(function () {
    $('#prt1').removeClass('activeprt')
    $('#prt2').removeClass('activeprt2')
    $('#prt2').removeClass('activeprt')
    $('#prt3').removeClass('activeprt')
    $('#prt4').removeClass('activeprtxpb')
    $('#prt5').removeClass('activeprt')
    $('#prt6').removeClass('activeprt')
    $('#prt2').removeClass('activeprtx2')
    $('#prt3').removeClass('activeprtx2')
    $('#prt1').removeClass('activeprtx3')
    $('#prt4').removeClass('activeprtx3pb')
    $('#prt5').removeClass('activeprtx3')
    $('#prt1').removeClass('activeprtx4')
    $('#prt2').removeClass('activeprtx4')
    $('#prt5').removeClass('activeprtx4')
    $('#prt6').removeClass('activeprtx4pb')
    $('#prt6').removeClass('activeprtx4pb2')
    $('#imgbrobl').removeClass('imgbrobl')

    $('#prt2').removeClass('activeprt2')
    $('#prt3').removeClass('activeprtx2')

    $('#prt3').addClass('activeprtx5pb')
    $('#prt4').addClass('activeprtx5')
    $('#prt6').addClass('activeprtx52')

    $('#button5').addClass('activeport')

    $('#button1').removeClass('activeport')
    $('#button2').removeClass('activeport')
    $('#button3').removeClass('activeport')
    $('#button4').removeClass('activeport')
})












































