(
	function($) {
		$(document).ready(function () {
			$('.tabele *').removeClass('col-12');
			$('#cennikmonetyzlote_nav-profile').addClass('show').addClass('active');
			$('#cennikmonetyzlote_nav-contact-tab').addClass('active');
			$('#cennikmonetyzlote_nav-contact').removeClass('show').removeClass('active');
		});

		$('.cennikcol').on('click', 'button', function() {
			if ( $(this).is('#cennikmonetyzlote_nav-profile-tab') ) {
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(0).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(1).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(2).addClass('show').addClass('active');
				return;
			}
			if ( $(this).is('#cennikmonetyzlote_nav-contact-tab') ) {
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(0).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(1).addClass('show').addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(2).removeClass('show').removeClass('active');
				return;
			}
			if ( $(this).text() === 'ZŁOTE') {
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('.tab-pane').slice(0).addClass('show').addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('.tab-pane').slice(1).removeClass('show').removeClass('active');
				return;
			}
			if ( $(this).text() === 'SREBRNE') {
				$('#cenniksztabkisilver_nav-contact').addClass('show').addClass('active');
				$('#cenniksztabkisilver_nav-home').removeClass('show').removeClass('active');
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('.tab-pane').slice(0).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('.tab-pane').slice(1).addClass('show').addClass('active');
				return;
			}
			if ( $(this).index() === 2 ) {
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(0).addClass('show').addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(1).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(2).removeClass('show').removeClass('active');
				return;
			}
			if ( $(this).index() === 1 ) {
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(0).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(1).addClass('show').addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(2).removeClass('show').removeClass('active');
				return;
			}
			if ( $(this).index() === 0 ) {
				$(this).parent().children().removeClass('active');
				$(this).addClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(0).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(1).removeClass('show').removeClass('active');
				$(this).parent().parent().parent().children('.tab-content').children('div').slice(2).addClass('show').addClass('active');
				return;
			}
		});
	}(jQuery)
);