$( '.inputfile' ).each( function() {
	var $input	 = $( this ),
		$label	 = $(".inputlabel"),
		labelVal = $label.html();

	$input.on( 'change', function( e ) {
		var fileName = '';

		if( this.files && this.files.length > 1 )
			fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
		else if( e.target.value )
			fileName = e.target.value.split( '\\' ).pop();

        fileName = fileName.replace(/^(.{18}).+/, "$1...");
		if( fileName )
			$(".inputlabel").html( fileName );
		else
			$(".inputlabel").html( labelVal );

            console.log(fileName);
	});

	$input
	.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
	.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
});
$('body').append('<div class="product-image-overlay"><span class="product-image-overlay-close">x</span><img src="" /></div>');
$('.guildPhoto').click(function(){
    var productOverlay = $('.product-image-overlay');
    var productOverlayImage = $('.product-image-overlay img');
    var productImageSource = $(this).attr('src');
    productOverlayImage.attr('src', productImageSource);
    productOverlay.fadeIn(100);
    $('body').css('overflow', 'hidden');
    $('.product-image-overlay-close').click(function () {
        productOverlay.fadeOut(100);
        $('body').css('overflow', 'auto');
    });
});
$('.photoUploader').submit(function(event) {
    $( '.inputfile' ).each( function() {
        if(this.files.length == 0) {
            $('.warning').css("display","block");
            $('.warning').show();
            event.preventDefault();
        }
    });
});
