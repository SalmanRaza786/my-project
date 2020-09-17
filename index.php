<!DOCTYPE html>
<html lang="en">
<head>
	<title>Landing Bot Tim</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="dist/jquery.convform.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
	<section id="demo">
	    <div class="vertical-align">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-6 col-sm-offset-3 col-xs-offset-0">

						<div style="align-items: center;margin-bottom: -5%;">
						<img src="logo.png" alt="Logo TIM" width="30%" height="30%"></div>
						<div style="text-align: right; margin-bottom: 1%; margin-right: 2%;">
							<img src="logo2.png" alt="Logo TIM" width="40%" height="40%"><br>
							<a href="https://bollettaamica.it/wp-content/uploads/2020/09/Informativa_Privacy-bollettaamica.pdf" target="_blank">
								<text style="color: white; font-size: 8pt;">
									Informativa Privacy
	
								</text>
							</a></div>
							
	                    <div class="card no-border">
	                        <div id="chat" class="conv-form-wrapper">
	                            <form action="" method="GET" class="hidden">
							
						
										
								
								
						
									
			
									<input type="text" data-conv-question="Ciao, la nostra offerta include a € 24,90: Fibra alla massima velocità, Tim Vision, Chiamate Illimitate e il nuovissimo modem Tim Hub." data-no-answer="true">
									
									<input type="text" data-conv-question="Per avere una consulenza telefonica gratuita, ci servono alcuni dati." data-no-answer="true">
						
									<input type="text" name="name" data-conv-question="Scrivici qui il tuo nome e cognome.">
	                                <input type="text" data-conv-question="Ciao, {name}! Piacere di conoscerti!" data-no-answer="true">
									
								
	                               
									<input type="number" data-pattern="^[0-9.+-]" name="numero" data-conv-question="Perfetto! Scrivi qui sotto il tuo numero di telefono." >
									

									<input type="email" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" name="email" data-conv-question="Bene, solo un'ultima richiesta. Scrivi qui sotto la tua email.">
									<input type="text" data-conv-question="Saremo lieti di aiutarti e ti ricontatteremo il prima possibile." data-no-answer="true" id="pinicello">

							
									<select name="informativa" data-callback="storeState" data-conv-question="Ti ricordiamo che, per proseguire e richiedere la consulenza gratuita, è necessario accettare la nostra Informativa Privacy." >
										<option value="accetto">Accetto</option>
									<option value="non-accetto">Non accetto</option>
								</select>


										<div data-conv-fork="informativa">
											<div data-conv-case="accetto">
												<input type="text" data-conv-question="Okay!" data-no-answer="true">
											</div>
											<div data-conv-case="non-accetto">
												<input type="text" data-conv-question="Ops, non hai accettato l'Informativa Privacy. Ti ricordiamo che se non accetti i termini, non possiamo ricontattarti." data-no-answer="true">
												<select name="informativa" data-callback="storeState" data-conv-question="Sei sicuro di non voler accettare l'Informativa Privacy?" >
													
													
													<option value="ultimo-accetto">Sì, rifiuto di rilasciare il consenso.</option>
												<option value="ultimo-non-accetto">No, accetto.</option>
											</select>
											</div>
										</div>
									
									<select data-conv-question="Grazie per aver usato Bolletta Amica! Se ti fa piacere lasciaci un feedback.">
										<option value="">1 Stella</option>
										<option value="">2 Stelle</option>
										<option value="">3 Stelle</option>
										<option value="">4 Stelle</option>
										<option value="">5 Stelle</option>

									</select>

									<select data-conv-question="Grazie ancora per il suo feedback. A presto!">
									 </select>
								</form>
							
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</section>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="dist/autosize.min.js"></script>
	<script type="text/javascript" src="dist/jquery.convform.js"></script>

	<script>

		function google(stateWrapper, ready) {
			window.open("https://google.com");
			ready();
		}
		function bing(stateWrapper, ready) {
			window.open("https://bing.com");
			ready();
		}
		var rollbackTo = false;
		var originalState = false;
		function storeState(stateWrapper, ready) {
			rollbackTo = stateWrapper.current;
			console.log("storeState called: ",rollbackTo);
			ready();
		}

		function rollback(stateWrapper, ready) {
			console.log("rollback called: ", rollbackTo, originalState);
			console.log("answers at the time of user input: ", stateWrapper.answers);
			if(rollbackTo!=false) {
				if(originalState==false) {
					originalState = stateWrapper.current.next;
						console.log('stored original state');
				}
				stateWrapper.current.next = rollbackTo;
				console.log('changed current.next to rollbackTo');
			}
			ready();
		}
		function restore(stateWrapper, ready) {
			if(originalState != false) {
				stateWrapper.current.next = originalState;
				console.log('changed current.next to originalState');
			}
			ready();
		}
	</script>
	<script>
		jQuery(function($){
			convForm = $('#chat').convform({selectInputStyle: 'disable'});
			console.log(il);
		});
	</script>
</body>
</html>