//pada saaat link di klik

$('.page-scroll').on('click', function(e) {

//ambil isi href
 var tujuan = $(this).attr('href');

//ambil elemen
 var elemenTujuan = $(tujuan);


 $('html , body').animate({
 	//offset=jarak
  scrollTop: elemenTujuan.offset().top - 50
 },1000);

 e.preventDefault();
});