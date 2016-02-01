$(function() {
	var orgcit=1;//1 si citoyen est activé, 0 sinon
	var citoyenButton = document.getElementById('citoyen-button');
	var orgButton = document.getElementById('organisme-button');


	//Appui sur le bouton de description organisme
	$('#organisme-button-description').click(function(){
		var enbool = false;
		if ((window.location.pathname=="/tests/index_en.php") || (window.location.pathname=="/index_en.php")) {
			enbool = true;
		} else{
			enbool = false;
		};
		if (enbool) {
			$('#description-list').html('<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-comments"></i><b>Launch your call to action</b> Share your missions within a few clicks in a highly connected network.</div><div class="row"><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-check"></i><b>With a customized research system</b> Specify the number of volunteers you need, as well as the skills you are looking for.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-chevron-up"></i><b>Laissant place à plus de communication</b> Engagez facilement le contact avec vos bénévoles et faites le suivi avec eux.</div></div>');
			orgcit = 0;
		} else{
			$('#description-list').html('<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-comments"></i><b>Lancez votre appel à l’action</b> Partagez vos missions en quelques clics sur un réseau ultra-connecté.</div><div class="row"><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-check"></i><b>Avec un système de recherche personnalisé</b> Indiquez le nombre de bénévoles dont vous avez besoin, ainsi que les compétences que vous recherchez.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-chevron-up"></i><b>Allowing more communication</b> Get easily in touch with  volunteers and do a follow-up with them. </div></div>');
			orgcit = 0;
		};	
	});

	//Appui sur le bouton de description citoyen
	$('#citoyen-button-description').click(function(){
		var enbool = false;
		if ((window.location.pathname=="/tests/index_en.php") || (window.location.pathname=="/index_en.php")) {
			enbool = true;
		} else{
			enbool = false;
		};
		if (enbool) {
			$('#description-list').html('<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-hand-o-up"></i><b>Find your mission</b> Filters to ease your mission research, according to your availabilities and interests (close to you).</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-map-o"></i><b>Even if you have only a few hours</b> No more reason to miss an occasion to get involved, whether it is on a punctual or a regular basis.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-users"></i><b>Being in good company</b> Invite your friends to take part to your missions. Because the more, the merrier and the bigger the impact. </div>');
			orgcit = 1;
		} else{
			$('#description-list').html('<div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-hand-o-up"></i><b>Trouve ta mission</b> Des filtres pour faciliter ta recherche de mission à proximité, selon tes disponibilités, tes centres d’intérêt et ta géolocalisation.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-map-o"></i><b>Même si tu n’as que quelques heures</b> Plus question de manquer une occasion de s’impliquer, que ce soit ponctuellement ou régulièrement.</div><div class="col-sm-4 text-sk block-text"><i class="icon icon-sk icon-users"></i><b>En étant bien entouré</b> Invite tes amis à participer à tes missions. Parce que plus on est de fous, plus on a de fun et d’impact. </div>');
			orgcit = 1;
		};
		
	});

	//Appui sur le bouton du formulaire organisme
	$('#organisme-button').click(function(){
		$('#php-form').html('<iframe height="560" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/m19bqvke0my1owd/"><a href="https://tjaurou.wufoo.com/forms/m19bqvke0my1owd/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">There are tons of <a href="http://www.wufoo.com/features/">Wufoo features</a> to help make your forms awesome.</span></div>');
	});

	//Appui sur le bouton du formulaire citoyen
	$('#citoyen-button').click(function(){
		$('#php-form').html('<iframe height="564" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/z1ihgqmq177l9zv/"><a href="https://tjaurou.wufoo.com/forms/z1ihgqmq177l9zv/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">Online contact and registration forms from <a href="http://www.wufoo.com">Wufoo</a>.</span></div>');
	});

	//Appui sur le bouton inscris-toi
	$("#citoyen-register").click(function() {
		if(orgcit==1){
			citoyenButton.classList.add("active");
			orgButton.classList.remove("active");
			$('html, body').animate({
				scrollTop: $("#register-section").offset().top
			}, 2000);
			$('#php-form').html('<iframe height="564" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/z1ihgqmq177l9zv/"><a href="https://tjaurou.wufoo.com/forms/z1ihgqmq177l9zv/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">Online contact and registration forms from <a href="http://www.wufoo.com">Wufoo</a>.</span></div>');
		}
		else if(orgcit==0){
			citoyenButton.classList.remove("active");
			orgButton.classList.add("active");
			$('html, body').animate({
				scrollTop: $("#register-section").offset().top
			}, 2000);
			$('#php-form').html('<iframe height="560" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://tjaurou.wufoo.com/embed/m19bqvke0my1owd/"><a href="https://tjaurou.wufoo.com/forms/m19bqvke0my1owd/">Fill out my Wufoo form!</a></iframe><div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"><span class="notranslate">There are tons of <a href="http://www.wufoo.com/features/">Wufoo features</a> to help make your forms awesome.</span></div>');
		}
		else{
			alert("Tu as le formulaire ci-dessous");
		}
	});

	//New tab for external links
	$('a').attr('target', function() {
		if(this.host == location.host) return '_self'
			else return '_blank'
		});
});
