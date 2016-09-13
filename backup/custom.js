$(function() {
    
	$('.nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });
	
	$('form').validator().on('submit', function (e) { 
		if (!e.isDefaultPrevented()) {
			var formId = this.id
				formObj = $(this);
			
			if (formId == 'praiseForm') {
				sendMail('', 'ELOGIO', formObj.find('#praise').val());
	
			} else if (formId == 'contactForm') {
				var name = formObj.find('#name').val(),
					email = formObj.find('#email').val(),
					message = formObj.find('#message').val();

				sendMail(email, 'CONTATO', 'NOME: ' + name + '<br>' + 'MENSAGEM: ' + message);
			}		
		}
	});	
	
	function sendMail(address, subject, message) {
		var toAddress = 'idowedplanners@gmail.com',
			fromAddress = address || toAddress;
				
		$.ajax({
			type: 'POST',
			url: 'https://mandrillapp.com/api/1.0/messages/send.json',
			data: {
				'key': 'NFTK3NiL9PdoDQG-5YALhQ',
				'message': {
					'from_email': fromAddress,
					'to': [
						{
							'email': toAddress,
							'type': 'to'
						}
					],
					'autotext': 'true',
					'subject': subject,
					'html': message
				}
			}	
		 });
	}
});