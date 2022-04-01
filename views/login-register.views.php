<?php 
include "header.php"; 
 ?>
        <!-- Main Header Area End Here -->

        <!-- Begin Yena's Breadcrumb Area -->
        <div class="breadcrumb-area ">
            <div class="container-fluid h-100">
                <div class="breadcrumb-content h-100">
                    <h2 class="text-capitalize mb-0">Acceso & Registro</h2>
                    <ul>
                        <li><a href="index.html"></a></li>
                        <li class="active"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Yena's Breadcrumb Area End Here -->


        <!-- Begin Login Register Area -->
        <div class="login-register_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6">
                        <form  class="mb-5" id="frmlog"  >
                            <div class="login-form">
                                <h4 class="login-title">Iniciar Sesion</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <label>Dirección de correo</label>
                                        <input type="email" placeholder="Correo" 
                                        name="email" id="email" required>
                                    </div>
                                    <div class="col-12 mb--20">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" 
                                        placeholder="Contraseña" id="txtpassword" 
                                        name="txtpassword" required>

                                        <div class="form-group">
                                        <input id="verPassword" type="checkbox" onclick="showPassword();">
                                        <label for="verPassword">Ver Contraseña</label>  
                                        </div>
                                    </div>
                                   
 
                                      
                               
                                    <div class="col-md-8">
                                        <div class="check-box">
                                            <input type="checkbox" id="remember_me" name="remember_me" onclick="setcookie()">
                                            <label for="remember_me">Recordar Cuenta</label>
                                        </div>
                                    </div>

 
                                    <div class="col-md-4">
                                        <div class="forgotton-password_info">
                                            <a href="#"> Contraseña olvidada?</a>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button class="login_btn" id="loginbtn1" type="button">Acceso</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                       <form id="frmajax" >
                            <div class="login-form">
                                <h4 class="login-title">Registro de Clientes</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Nombre</label>
                                        <input type="text" placeholder="Nombre" name="name" id="name" required >
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <label>Apellidos</label>
                                     <input type="text" placeholder="Apellidos" 
                                     name="lastname" id="lastname"  required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Correo</label>
                                        <input type="email" placeholder="Correo" 
                                        name="email2" id="email2"  required>
                                    </div>
                                
                                    <div class="col-md-6">
                                        <label>Contraseña</label>
                                        <input type="text" placeholder="Contraseña" 
                                        name="pass" id="pass" class="pass"  required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirmar Contraseña</label>
                                        <input type="text" placeholder="Confirmar Contraseña" 
                                        name="confirm" class="confirm" id="confirm"  required>
                                    </div>


                              <!--        <script type="text/javascript">
                                        function seePassword(){
                                            var pass=document.getElementById('pass');
                                            var veopass=document.getElementById('veopass');
                                            if(pass.type=='password') && (veopass.type=='password')
                                            {
                                                pass.type='text';
                                                veopass.type='text';
                                            }
                                            else{
                                                pass.type='password';
                                                veopass.type='password';
                                            }
                                        }
                                    </script> -->


                                    <div class="col-12">
                                        <button class="register_btn" name="registerbtn" 
                                        id="registerbtn" type="button">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Begin Footer Area -->
        <?php include ("footer.php"); ?>