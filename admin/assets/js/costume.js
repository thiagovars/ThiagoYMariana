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
		},
		showNotificationAddSuccess: function(from, align, msg){
    	$.notify({
        	icon: "pe-7s-trash",
        	message: msg

        },{
            type: type[5],
            timer: 100,
            placement: {
                from: from,
                align: align
            }
        });
		},
  };

  function remover(guest_id) {
	  $.ajax({
	  	type: 'POST', 
	  	datatype: 'json',
	  	url: 'main/remover',
	  	data: {'guest_id': guest_id},
	  }).done(function (data) {
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
		$.ajax({
			type: 'POST',
			datatype: 'json',
			url: 'main/adicionar',
			data: {'guest': form},
		}).done(function (data) {
			var retorno = {};
			try {
				retorno = JSON.parse(data);
				if (retorno.success) {
					$("#registroInvitado").modal('hide');
					tymNotify.showNotificationAddSuccess('bottom', 'center', 'Invitado agregado con suceso!');
				} else {
					throw (data);
				}
			} catch (error) {
				tymNotify.showNotificationFalse('bottom', 'center', error);
			}
		});
	}