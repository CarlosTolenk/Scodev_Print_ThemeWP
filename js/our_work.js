
	jQuery(document).ready(function($){
 			var elementBefore = '#tab21';
    $('#selection-category li').on('click', function(e){
       e.preventDefault();
	     var elementActive = $(this).attr('id');
			 var all = true;
				switch(elementActive) {
			    case "tab-11":
							if(all){
								$('#tab21').hide('slow');
								$('#tab31').hide('slow');
								$('#tab11').show('slow');
								all=false;

							}else{
								$(elementBefore).hide('slow');
								$('#tab11').show('slow');
								elementBefore = '#tab11';
								alert("No paso");
							}
			        break;
			    case "tab-21":
								if(all){
									$('#tab11').hide('slow');
									$('#tab31').hide('slow');
									$('#tab21').show('slow');
									all=false;

								}else{
									$(elementBefore).hide('slow');
									$('#tab21').show('slow');
									elementBefore = '#tab11';
								}
								break;
					case "tab-31":
								if(all){
									$('#tab11').hide('slow');
									$('#tab21').hide('slow');
									$('#tab31').show('slow');
									all=false;

								}else{
									$(elementBefore).hide('slow');
									$('#tab31').show('slow');
									elementBefore = '#tab11';
								}
								break;
			    default:
						all=true;
						$('#tab11').show('slow');
						$('#tab21').show('slow');
						$('#tab31').show('slow');

						}
    });




  });
