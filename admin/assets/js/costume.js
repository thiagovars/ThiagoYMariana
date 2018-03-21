  tymNotify = {
  	showNotificationSuccess: function(from, align, name){
    	$.notify({
        	icon: "pe-7s-trash",
        	message: "Remoção completada com sucesso "+name

        },{
            type: type[3],
            timer: 100,
            placement: {
                from: from,
                align: align
            }
        });
		},
		showNotificationFalse: function(from, align, msg){
    	$.notify({
        	icon: "pe-7s-trash",
        	message: msg

        },{
            type: type[4],
            timer: 100,
            placement: {
                from: from,
                align: align
            }
        });
		}
  };

  function remover(guest_id) {
	  $.ajax({
	  	type: 'POST', 
	  	datatype: 'json',
	  	url: 'main/remover',
	  	data: {'guest_id': guest_id},
	  }).done(function (data) {
	  	console.log(data)
	  	var retorno = {};
	  	try {
	  		retorno = JSON.parse(data);
		  	if (retorno.success && retorno.name) {
		  		tymNotify.showNotificationSuccess('bottom', 'center', retorno.name);
		  		$("#invitado"+guest_id).remove();
		  	} else {
		  		throw ("Impossível remover este usuário");
		  	}
	  	} catch (error) {
	  		tymNotify.showNotificationFalse('bottom', 'center', error);
	  	}
	  });
	};

	function agregaInvitado(form) {
		var form = $('#agregarInvitado').serializeArray();
		console.log(form)
	}