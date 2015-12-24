/*$(function(){
	$('#vision').html('Hello world');
	$('#organisme-button-description').click(function(){
		$('description-list').html('<div class="row"><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-check"></i><b>Système intuitif</b> Poste des missions en quelques clics, de manière intuitive.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-comments"></i><b>Communication facilitée</b> Communique avec tes bénévoles depuis ta boite mail ou depuis la plateforme et l\'envoi automatique de mails de remerciement peut être paramétré.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-check"></i><b>Visibilité accru</b> En étant sur la plateforme, la visibilité de ton organisme est grandement accrue, de même que ton vivier de potentiel bénévoles.</div></div>')});
});*/

$('a').attr('target', function() {
	if(this.host == location.host) return '_self'
		else return '_blank'
	});
