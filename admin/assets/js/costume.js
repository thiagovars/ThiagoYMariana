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

	function agregaInvitado(object) {
		var form = serializeForm(object);
		$.ajax({
			type: 'POST',
			datatype: 'json',
			url: 'main/adicionar',
			data: {'guest': form},
		}).done(function (data) {
			var retorno = {};
			var trInvitadoIncluded = buildTR(form);
			try {
				retorno = JSON.parse(data);
				if (retorno.success) {
					$("#registroInvitado").modal('hide');
					$("#invitados-content").before(trInvitadoIncluded);
					tymNotify.showNotificationAddSuccess('bottom', 'center', 'Invitado agregado con suceso!');
				} else {
					throw (data);
				}
			} catch (error) {
				tymNotify.showNotificationFalse('bottom', 'center', error);
			}
		});
	}

	function serializeForm(object) {
		var form = object.serializeArray();
		var foundUnderTwelve = false;
		var foundVegan = false;
		for (var i = form.length - 1; i >= 0; i--) {
			if (form[i].name == 'underTwelve') {
				foundUnderTwelve = true;
				form.splice(i, 1);
				form.push({name: "underTwelve", value: 1});
			} else if (form[i].name == 'vegan') {
				foundVegan = true;
				form.splice(i, 1);
				form.push({name: "vegan", value: 1});
			}
		}
		if (!foundUnderTwelve) {
			form.push({name: "underTwelve", value: 0});
		}
		if (!foundVegan) {
			form.push({name: "vegan", value: 0});
		}
		return form;
	}

	function buildTR(form) {
		// recuperar id do usuário já inserido
		var idguest = 1;
		var classUnderTwelve = '';
		var classVegan = '';
    var index = {'name': 0, 'apellido': 1, 'underTwelve': 2, 'vegan': 3, 'idguest': idguest};
		var html = '<tr class=\'normal\' id=\'invitado\'>';
				html += '<td>'+index.idguest+'</td>';
				html += '<td>'+form[index.name].value+form[index.apellido].value+'</td>';
		if (form[index.underTwelve].value == 1) {
			classUnderTwelve = 'fa-check text-success';
		} else {
			classUnderTwelve = 'fa-times text-danger';
		}
				html += '<td><i class=\'fa '+classUnderTwelve+'\'></i></td>';
		if (form[index.vegan].value == 1) {
			classVegan = 'fa-check text-success';
		} else {
			classVegan = 'fa-times text-danger';
		}
				html += '<td><i class=\'fa '+classVegan+'\'></i></td>';
		html += '</tr>';
		console.log(html)
		return html;
	}