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
			// url: 'main/adicionar',
			data: {'guest': form},
		}).done(function (data) {
			var retorno = {};
			var trInvitadoIncluded = buildTR(form);
			console.log(trInvitadoIncluded)
			// try {
			// 	retorno = JSON.parse(data);
			// 	if (retorno.success) {
			// 		$("#registroInvitado").modal('hide');
			// 		tymNotify.showNotificationAddSuccess('bottom', 'center', 'Invitado agregado con suceso!');
					// $('#invitados-content').append(trInvitadoIncluded);
			// 	} else {
			// 		throw (data);
			// 	}
			// } catch (error) {
			// 	tymNotify.showNotificationFalse('bottom', 'center', error);
			// }
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
		// <?php foreach ($invitados as $invitado) { 
     //        if ($invitado['confirmed'] == 0) {
     //            $lineClass = 'normal';
     //        } else if ($invitado['confirmed'] == 1) {
     //            $lineClass = 'success';
     //        } else {
     //            $lineClass = 'danger';
     //        }
     //    ?>
     //    <tr class="<?php echo $lineClass; ?>" id='invitado<?php echo $invitado['guest_id']; ?>'>
     //        <td><?php echo $invitado['guest_id']; ?></td>
     //        <td><?php echo utf8_encode($invitado['name']).' '.utf8_encode($invitado['surname']); ?></td>
     //        <td><i class="fa <?php echo ($invitado['undertwelve']) ? 'fa-check text-success' : 'fa-times text-danger'; ?>"></i></td>
     //        <td><i class="fa <?php echo ($invitado['vegan_menu']) ? 'fa-check text-success' : 'fa-times text-danger'; ?>"></i></td>
     //        <td><a href="#invitado*<?php echo $invitado['guest_id']; ?>" onclick="remover(<?php echo $invitado['guest_id']; ?>)"><i class="fa pe-7s-trash"></a></i></td>
     //    </tr>
     //    <?php } ?>
		var html = '<tr class="normal" id="invitado">';
		for (var i = form.length - 1; i >= 0; i--) {
			if (form[i].name == 'name') {
				html += '<td>'+form[i].value+'</td>';
			}
			if (form[i].name == 'apellido') {
				html += '<td>'+form[i].value+'</td>';
			}
			if (form[i].name == 'vegan') {
				var classUnderTwelve = '';
				if (form[i].value == 1) {classUnderTwelve = 'fa-check text-success';} else {classUnderTwelve = 'fa-times txt-danger';}
				html += '<td><i class="fa '+classUnderTwelve+'"></i></td>';
			}
			if (form[i].name == 'underTwelve') {
				var classvegan = '';
				if (form[i].value == 1)  {classvegan = 'fa-check text-success';} else {classvegan = 'fa-times txt-danger';}
				html += '<td><i class="fa '+classvegan+'"></i></td>';
			}
		}
		html += '</tr>';
		return html;
	}