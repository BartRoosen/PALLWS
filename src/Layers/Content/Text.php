<?php

namespace Layers\Content;
use Exception;

class Text{

	public function home()
	{
		return array(
				'title' => '<strong>Wat is Pallium?</strong>',
				'article' => 'Pallium vzw is een vereniging van vrijwilligers in de palliatieve thuiszorg. 
							  Ze engageert zich in nauwe samenwerking met Panal vzw, Palliatief Netwerk Arrondissement Leuven. 
							  De vrijwilligers zijn zorgzaam aanwezig bij de palliatieve zieke thuis zodat de mantelzorgers even ademruimte krijgen. 
							  Een vrijwilliger in de palliatieve zorg begeleidt de zieke op zijn laatste stukje levensweg',
			);
	}
	public function pallzorg()
	{
		return array(
				'title' => 		'<strong>Wat is palliatieve zorg?</strong>',
				'article' => 	'“Onder palliatieve zorg wordt verstaan: 
							   	het geheel van zorgverlening aan patiënten waarvan de levensbedreigende ziekte niet langer op 
							   	curatieve therapieën reageert. Voor de begeleiding van deze patiënten bij hun levenseinde is 
							   	een multidisciplinaire totaalzorg van essentieel belang, zowel op het fysieke, psychische, sociale 
							   	als morele vlak. Het belangrijkste doel van de palliatieve zorg is deze zieke en zijn naasten een 
							   	zo groot mogelijke levenskwaliteit en maximale autonomie te bieden. Palliatieve zorg is erop gericht 
							   	de kwaliteit van het resterende leven van deze patiënt en nabestaanden te waarborgen en te optimaliseren.',
				'title2' => 	'<span class="ital">(14 juni 2002. Wet betreffende de palliatieve zorg)</span>',
				'article2' => 	'Palliatieve zorg is de zorg in de laatste levensfase van een zieke, 
								wanneer er sprake is van een levensbedreigende aandoening waaraan de 
								zieke binnen afzienbare tijd zal overlijden. Palliatieve zorg is complex 
								en <strong>multidisciplinair</strong>: professionals en vrijwilligers werken vaak samen in 
								een team. Palliatieve zorg is <strong>24-uurszorg</strong>. Persoonlijke beschikbaarheid 
								en betrokkenheid van de hulpverleners zijn de belangrijkste kenmerken 
								van goede palliatieve zorg. De hulpverleners brengen <strong>de huidige en 
								toekomstige zorgnoden</strong> van de zieke en zijn naasten in kaart. Daarbij 
								hebben zij aandacht voor lichamelijke, psychische, sociale en spirituele 
								aspecten en spelen zij in op mogelijke toekomstige 
								problemen (<strong>anticiperend</strong> handelen).',
			);
	}
	public function vrijwilligers()
	{
		return array(
				'art1' => 		'"Als vrijwilliger is het een voorrecht om als ‘nabije vreemde’ te mogen 
								binnenkomen bij mensen die op een kruispunt in hun leven staan…"',
				'tit1' => 		'<strong>Dagvrijwilligers</strong>',
				'art2' => 		'Dagvrijwilligers engageren zich om op regelmatige tijdstippen thuis bij de zieke aanwezig te zijn. Ze nemen tijd en zijn nabij.',
				'art3' => 		'Vrijwilligers nemen geen taken over van de andere hulpverleners. Ze zijn aanvullend in de 
								zorg aanwezig. ‘Er zijn’ is daarbij belangrijker dan ‘doen’. Vrijwilligers zijn op een rustige en open manier aanwezig. 
								Daarnaast bieden ze beperkt praktische hulp aan, zoals koffie zetten, de zieke helpen bij eten, drinken en 
								toiletbezoek, een boek of de krant voorlezen. De vrijwilligers ondersteunen de draagkracht van de mantelzorg 
								zodat de mantelzorgers even ademruimte krijgen.',
				'tit2' => 		'<strong>Nachtvrijwilligers</strong>',
				'art4' => 		'Nachtvrijwilligers (verpleegkundigen) waken ’s nachts bij de zieke, meestal in de terminale fase.',
				'art5' =>		'Aan de nachtvrijwilligers wordt één of enkele dagen vooraf gevraagd (maximaal veertig maal per jaar) 
								om van 22u tot 7u bij een zieke thuis te waken. Ze ondersteunen de huisgenoten in de mantelzorg, zodat 
								deze kunnen rusten. Ze vervullen geen beroepstaken.',
				'art6' =>		'De vrijwilligers:',
				'list' =>		array(
										'benaderen de zieke en hun naasten zonder vooroordeel.',
										'zijn aanwezig bij de zieke in een intieme en kwetsbare periode.',
										'hebben aandacht voor de lichamelijke ongemakken, de intense gevoelens en de sociale relaties van de zieke.',
										'reflecteren over de impact van al deze aspecten op zichzelf en wie ze zijn als zorgverlener in de palliatieve zorg.',
									),
				'art7' => 		'De vrijwilligers zijn verzekerd en ontvangen een kilometervergoeding van en naar de zieke.
								De nachtvrijwilligers ontvangen bovendien een forfaitaire onkostenvergoeding.',
			);
	}

	public function vrijwilligerworden()
	{
		return array(
				'tit1' => 		'<strong>Jij als vrijwilliger bij Pallium?</strong>',
				'tit2' => 		'<strong>Hoe word je vrijwilliger?</strong>',
				'list1' =>		array(
										'Je leert nieuwe vaardigheden aan en ontwikkelt je talenten.',
										'Je zet je zinvol in voor anderen en leert nieuwe mensen kennen.',
										'Je engageert je, je groeit volgens je wensen en temperament.',
										'Je bent begaan met het levenseinde en de weg ernaartoe.',
										'Je draagt bij tot een zorgzame en zorgende samenleving.',
										'Je leeftijd speelt in principe geen rol.',
					),
				'list2' => 		array(
										'<li>Je neemt tijdens de kantooruren contact op met:',
										'<ul>
											<li>Pallium (0476 417 358) of info@pallium.be</li>
											<li>Panal (016 23 91 01) of vragen@panal.be</li>
										</ul></li>',
										'<li>Je wordt uitgenodigd voor een kennismakingsgesprek.</li>',
										'<li>Je volgt de cursus “Inleiding in de palliatieve zorg” gedurende acht halve dagen.</li>',
										'<li>Je wordt uitgenodigd voor een vervolggesprek en onderschrijft de afsprakennota.</li>',
										'<li>Je bent klaar om met begeleidingen te starten.</li>',
					),
			);
	}

	public function getuigenissen()
	{
		return array(
				'tit1' => 		'Getuigenissen',
			);
	}

	public function links()
	{
		return array(
				'tit1' => 		'Links',
				'links' => 		array(
						array(
								'tit' => 'Panal',
								'path' => 'http://www.panal.be/nl/page/startpagina.html',
								'link' => 'www.panal.be',
							),
						array(
								'tit' => 'Federatie Palliatieve Zorg',
								'path' => 'http://www.fedpalzorg.be/',
								'link' => 'www.fedpalzorg.be',
							),
						array(
								'tit' => 'European Association of Palliative Care',
								'path' => 'http://www.eapcnet.eu/',
								'link' => 'www.eapcnet.eu',
							),
					),
			);
	}

	public function loginfail()
	{
		return array(
				'message' =>		'Aanmelden is mislukt, controleer uw paswoord en probeer opnieuw',
			);
	}
}