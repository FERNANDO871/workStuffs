<?php 
include "header.php"; 
 ?>
           <!-- Main Header Area End Here -->

        <!-- Begin Yena's Breadcrumb Area -->
        <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Mi Cuenta</h2>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Mi Cuenta</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Yena's Breadcrumb Area End Here -->

        <!-- Begin Page Content Area -->
        <main class="page-content">
            <!-- Begin Account Page Area -->
            <div class="account-page-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab" href="#account-dashboard" role="tab" aria-controls="account-dashboard" aria-selected="true">Panel de Contro</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders" role="tab" aria-controls="account-orders" aria-selected="false">Mis Pedidos</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="account-cupones-tab" data-bs-toggle="tab" href="#account-cupones" role="tab" aria-controls="account-cupones" aria-selected="false">Mis Cupones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address" role="tab" aria-controls="account-address" aria-selected="false">Direccion</a>
                                </li>
                                <li class="nav-item">

                                    <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Perfil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="account-logout-tab" href="cerrarsesion.php" role="tab" aria-selected="false">Cerrar Sesion</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                                <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel" aria-labelledby="account-dashboard-tab">
                                    <div class="myaccount-dashboard">
                                        <p>Hola <b><?php echo $nombre; ?></b> 
                                        <p>Desde el panel de control de su cuenta, puede ver sus pedidos recientes, administrar sus direcciones de envío y facturación y editar su contraseña y los detalles de su cuenta.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="account-orders" role="tabpanel" aria-labelledby="account-orders-tab">
                                    <div class="myaccount-orders">
                                
                                        <h4 class="small-title">MIS PEDIDOS</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ORDEN</th>
                                                        <th>FECHA</th>
                                                        <th>ESTATUS</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>  
                                                </thead>
                                                <tbody>
                                                 <?php   while($row2 =mysqli_fetch_array($return_pedidos)){ 

                                                    $TotalForm = number_format($row2[4], 2);

                            if ($row2['Estatus'] == 1) {
                                $estatus="En Proceso";
                            }
                            if ($row2['Estatus'] == 2) {
                                $estatus="SUSPENDIDO";
                            }
                            if ($row2['Estatus'] == 3) {
                                $estatus="Administrador";
                            }
                            ?>
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)">#<?php echo $row2[6] ?>-<?php echo $row2[7] ?></a></td>
                                                        <td><?php echo $row2[1] ?></td>
                                                        <td><?php echo $estatus ?></td>
                                                        <td>$ <?php echo $TotalForm ?> </td>
                                                        <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm"><span>View</span></a>
                                                        </td>
                                                    </tr>
                                                  

                                                    <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                        <div class="tab-pane fade" id="account-cupones" role="tabpanel" aria-labelledby="account-cupones-tab">
                                    <div class="myaccount-cupones">
                                        <h4 class="small-title">MIS CUPONES</h4>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>ORDEN</th>
                                                        <th>FECHA</th>
                                                        <th>NOMBRE</th>
                                                        <th>ESTATUS</th>
                                                        <th>TOTAL</th>
                                                        <th></th>
                                                    </tr>  
                                                </thead>
                                                <tbody>
                                                    <?php
                          while($row =mysqli_fetch_array($return)){ 

                            if ($row['Estatus'] == 1) {
                                $tipousuario="ACTIVO";
                            }
                            if ($row['Estatus'] == 2) {
                                $tipousuario="SUSPENDIDO";
                            }
                            if ($row['Estatus'] == 3) {
                                $tipousuario="Administrador";
                            }
                            ?>
                                                    <tr>
                                                        <td><a class="account-order-id" href="javascript:void(0)"><?php echo $row[0] ?></a></td>
                                                        <td><?php echo $row[2] ?></td>
                                                        <td><?php echo $row[4] ?></td>
                                                       <td><?php echo $tipousuario ?></td>
                                                        <td></td>
                                                        <td><a href="javascript:void(0)" class="yena-btn yena-btn_sm"><span>View</span></a>
                                                        </td>
                                                    </tr>
                                                    

                                <?php  } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-address" role="tabpanel" aria-labelledby="account-address-tab">
                                    <div class="myaccount-address">
                                        <p>The following addresses will be used on the checkout page by default.</p>
                                        <div class="row">
                                            <div class="col">
                                                <h4 class="small-title">BILLING ADDRESS</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                            <div class="col">
                                                <h4 class="small-title">SHIPPING ADDRESS</h4>
                                                <address>
                                                    1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                    <div class="myaccount-details">
                                        <form action="#" class="yena-form">
                                            <div class="yena-form-inner">
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-firstname">First Name*</label>
                                                    <input type="text" id="account-details-firstname">
                                                </div>
                                                <div class="single-input single-input-half">
                                                    <label for="account-details-lastname">Last Name*</label>
                                                    <input type="text" id="account-details-lastname">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-email">Email*</label>
                                                    <input type="email" id="account-details-email">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-oldpass">Current Password(leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password" id="account-details-oldpass">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-newpass">New Password (leave blank to leave
                                                        unchanged)</label>
                                                    <input type="password" id="account-details-newpass">
                                                </div>
                                                <div class="single-input">
                                                    <label for="account-details-confpass">Confirm New Password</label>
                                                    <input type="password" id="account-details-confpass">
                                                </div>
                                                <div class="single-input">
                                                    <button class="yena-btn" type="submit"><span>Save
                                                    Changes</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account Page Area End Here -->
        </main>
        <!-- Page Content Area End Here -->



        <!-- Begin Footer Area -->
<?php include ("footer.php"); ?>