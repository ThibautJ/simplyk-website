$(function() {
	//Appui sur le bouton de description organisme
	$('#organisme-button-description').click(function(){
		$('#description-list').html('<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-comments"></i><b>Communication facilitée</b> Communique avec tes bénévoles depuis ta boite mail ou depuis la plateforme et l\'envoi automatique de mails de remerciement peut être paramétré.</div><div class="row"><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-check"></i><b>Système intuitif</b> Poste des missions en quelques clics, de manière intuitive.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-chevron-up"></i><b>Visibilité accru</b> En étant sur la plateforme, la visibilité de ton organisme est grandement accrue, de même que ton vivier de potentiel bénévoles.</div></div>');
	});

	//Appui sur le bouton de description citoyen
	$('#citoyen-button-description').click(function(){
		$('#description-list').html('<div class="row"><div class="col-sm-3 text-sk block-text"><i class="icon icon-sk icon-hand-o-up"></i><b>Missions catégorisées</b> La catégorisation de nos missions te permet de choisir une activité selon que tu ais envie de faire du social, du sport ou de l\'évènementiel par exemple.</div><div class="col-sm-3 text-sk block-text"><i class="icon icon-sk icon-map-o"></i><b>Carte interactive</b> Grâce à notre carte interactive et à notre système de mission géolocalisée, trouve une mission près de chez toi ou n\'importe où tu le désires.</div><div class="col-sm-3 text-sk block-text"><i class="icon icon-sk icon-users"></i><b>Invite tes amis</b> Si tu ne te sens pas de venir seul, franchis le pas en venant avec des amis à toi et trouve des missions pour plusieurs. </div><div class="col-sm-3 text-sk block-text"><i class="icon icon-sk icon-calendar-check-o"></i><b>Filtre temporel</b> Trouve une mission quand tu le désires, en prévoyance ou pour le dernier moment grâce à notre filtre temporel de recherche de missions. </div></div>');
	});

	//Appui sur le bouton du formulaire organisme
	$('#organisme-button').click(function(){
		$('#php-form').html('<iframe height="560" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/m19bqvke0my1owd/"><a href="https://tjaurou.wufoo.com/forms/m19bqvke0my1owd/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">There are tons of <a href="http://www.wufoo.com/features/">Wufoo features</a> to help make your forms awesome.</span></div>');
	});

	//Appui sur le bouton du formulaire citoyen
	$('#citoyen-button').click(function(){
		$('#php-form').html('<iframe height="564" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/z1ihgqmq177l9zv/"><a href="https://tjaurou.wufoo.com/forms/z1ihgqmq177l9zv/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">Online contact and registration forms from <a href="http://www.wufoo.com">Wufoo</a>.</span></div>');
	});

	//New tab for external links
	$('a').attr('target', function() {
		if(this.host == location.host) return '_self'
			else return '_blank'
		});
});
