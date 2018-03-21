<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Area Administrativa</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="assets/js/costume.js"></script>

</head>
<body>

<!-- Modal -->
<div class="modal fade" id="registroInvitado" tabindex="-1" role="dialog" aria-labelledby="registroInvitado" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span>Registro de Invitado(a)</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="form-inline" id="agregarInvitado">
                <div class="form-group mb-2">
                    <input type="text" class="form-control" id="name" aria-describedby="nomeInvitado" name="name" placeholder="Nombre del invitado" />
                    <input type="text" class="form-control" id="apellido" aria-describedby="apellidoInvitado" name="apellido" placeholder="Apellido del invitado" />
                </div>
                <div class="form-group mb-2">
                    <input type="checkbox" class="form-checkbox-input" value="true" id="underTwelve" name="underTwelve" />
                    <label class="form-checkbox-label" for="underTwelve">
                        Ninõ?
                    </label>
                    <input type="checkbox" class="form-checkbox-input" value="true" id="vegan" name="vegan" />
                    <label class="form-checkbox-label" for="underTwelve">
                        Vegano?
                    </label>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="agregaInvitado($('#agregarInvitado'))">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <?php 
    $color = (strtoupper($user_name) == 'THIAGO') ? 'azure' : 'purple';?>
    <div class="sidebar" data-color="<?php echo $color; ?>" data-image="assets/img/sidebar-4.jpg">

    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Cálculo de convidados</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo BASE_URL; ?>/auth/logout">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orçamento do salão por pessoa</h4>
                                <p class="category">Cálculo em 3 menus: infantil, vegano e não-vegano</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>#Total</th>
                                        <th>#não veganos</th>
                                        <th>#Niños</th>
                                        <th>#Veganos</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h2 class="text-danger"><?php echo $total['normal']; ?></h2></td>
                                            <td><h2 class="text-primary"><?php echo $total['adults']; ?></h2></td>
                                            <td><h2 class="text-info"><?php echo $total['kids']; ?></h2></td>
                                            <td><h2 class="text-warning"><?php echo $total['vegans']; ?></h2></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <table class="table table-hover">
                                    <thead>
                                        <th>Total de convidados</th>
                                        <th>Confirmados</th>
                                        <th>Não comparecerão</th>
                                        <th>Sem resposta</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><h2 class="text-primary"><?php echo $total_guests['total']; ?> Convidados</h2></td>
                                            <td><h2 class="text-success"><?php echo $total_guests['comparecerao']; ?> Virão</h2></td>
                                            <td><h2 class="text-warning"><?php echo $total_guests['naoComparecerao']; ?> Não virão</h2></td>
                                            <td><h2 class="text-info"><?php echo $total_guests['aindaNaoResponderam']; ?> Não responderam</h2></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id='main'>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Lista de convidados</h4>
                                <p class="category">Em verde são os convidados que já confirmaram e estão sendo contabilizados no total</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroInvitado">
                                    <i class="fa fa-check text-info"></i><strong>Agregar Invitado(a)</strong>
                                </button>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Niño</th>
                                        <th>Vegano</th>
                                        <th>Ações</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($invitados as $invitado) { 
                                            if ($invitado['confirmed'] == 0) {
                                                $lineClass = 'normal';
                                            } else if ($invitado['confirmed'] == 1) {
                                                $lineClass = 'success';
                                            } else {
                                                $lineClass = 'danger';
                                            }
                                        ?>
                                        <tr class="<?php echo $lineClass; ?>" id='invitado<?php echo $invitado['guest_id']; ?>'>
                                            <td><?php echo $invitado['guest_id']; ?></td>
                                            <td><?php echo utf8_encode($invitado['name']).' '.utf8_encode($invitado['surname']); ?></td>
                                            <td><i class="fa <?php echo ($invitado['undertwelve']) ? 'fa-check text-success' : 'fa-times text-danger'; ?>"></i></td>
                                            <td><i class="fa <?php echo ($invitado['vegan_menu']) ? 'fa-check text-success' : 'fa-times text-danger'; ?>"></i></td>
                                            <td><a href="#invitado*<?php echo $invitado['guest_id']; ?>" onclick="remover(<?php echo $invitado['guest_id']; ?>)"><i class="fa pe-7s-trash"></a></i></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <p class="copyright pull-right">
                    &copy;Thiago y Mariana
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	$.notify({
            	icon: 'pe-7s-like',
            	message: "Welcome, <b><?php echo $user_name; ?></b>"

            },{
                type: 'info',
                timer: 100
            });

    	});
	</script>

</html>
