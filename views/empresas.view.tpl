
{{if mostrarErrores}}
<ul class="error">
    {{foreach errores}}
        <li>{{errmsg}}</li>
    {{endfor errores}}
</ul>
{{endif mostrarErrores}}

<section class="container">
      <center><p class="section-subheader"></p>
              <form action="index.php?page=Empresas"  method="post" class="tm-contact-form">
                    <label> Nombre</label>
                      <br/>
                    <input type="text"
                            name="txtUserName"
                            id="txtUserName"
                            class="form-control"
                            placeholder="Nombre..."
                            value="{{txtUserName}}"/>
                    <br/>
                    <label>Primer Apellido:</label>
                      <br/>
                      <input type="text"
                        name="txtUserPrimerApellido"
                        id="txtUserPrimerApellido"
                        class="form-control"
                        placeholder="Primer Apellido..."
                         value="{{txtUserPrimerApellido}}"/>
                    <br>
                    <label>Segundo Apellido:</label>
                      <br/>
                    <input type="text"
                        name="txtUserSegundoApellido"
                        id="txtUserSegundoApellido"
                        class="form-control"
                        placeholder="Segundo Apellido..."
                        value="{{txtUserSegundoApellido}}"/>
                    <br>
                    <label>Fecha de Nacimiento</label>
                      <br/>
                    <input type="date"
                            name="txtUserFechaNac"
                            id="txtUserFechaNac"
                            class="form-control"
                            value="{{txtUserFechaNac}}"/>
                    <br/>
                    <label> Telefono</label>
                      <br/>
                    <input type="text"
                            name="txtUserTelefono"
                            id="txtUserTelefono"
                            class="form-control"
                            placeholder="Telefono..."
                            value="{{txtUserTelefono}}"/>
                    <br/>
                    <label>Email</label>
                      <br/>
                    <input type="text"
                            name="txtEmail"
                            id="txtEmail"
                            class="form-control"
                            placeholder="Email..."
                            value="{{txtEmail}}"/>
                    <br/>
                    <label>Identidad</label>
                      <br/>
                    <input type="text"
                            name="txtUserIdentidad"
                            id="txtUserIdentidad"
                            class="form-control"
                            placeholder="Identidad..."
                            value="{{txtUserIdentidad}}"/>
                      </br>
                      <label>Contraseña:</label>
                    </br>
                      <input type="password"
                        name="txtPswd"
                        id="txtPswd"
                        class="form-control"
                        placeholder="Contraseña..."
                         value="{{txtPswd}}"/>
                      <br>
                      <label>Confirme Contraseña:</label>
                      <br>
                          <input type="password"
                          name="txtPswdCnf"
                          id="txtPswdCnf"
                          class="form-control"
                          placeholder="Confirmacion de Contraseña..."
                          value="{{txtPswdCnf}}"/>
                      <br>
                      <input type="submit"
                          value="Regístrate"
                          onclick="return validar();"
                          name="btnRegistrar"/>
                  </br></br>
                </form>
          </center>
  </section>
