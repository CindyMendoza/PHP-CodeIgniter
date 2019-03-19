<div class="row">

    <div class="large-9 columns">
        <h3>Cont&aacute;ctanos</h3>
        <p>Nos encantar&iacute;a ponernos en contacto contigo. Env&iacute;anos comentarios y sugerencias a trav&eacute;s del siguiente formulario.</p>
        <div class="section-container tabs" data-section>
            <section class="section">
                <h5 class="title"><a href="#panel1">Contact nuestra compa&ntilde;&iacute;a</a></h5>
                <div class="content" data-slug="panel1">
                    <form action="formulario_contacto_proceso.php" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">Nombre</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" id="yourName" name="name" placeholder="ej. Miguel de Icaza">
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">Area de contacto</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="radio" name="area" value="atencion" id="areaAtencion"><label for="areaAtencion">Atenci&oacute;n a clientes</label>
                                <input type="radio" name="area" value="ventas" id="areaVentas"><label for="areaVentas">Ventas</label>
                                <input type="radio" name="area" value="recursos" id="areaRecursos"><label for="areaRecursos">Recursos Humanos</label>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">&Aacute;rea de inter&eacute;s</label>
                            </div>
                            <div class="large-10 columns">
                                <!-- Example to use with for -->
                                <select>
                                    <option value="">Selecciona una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">N&uacute;mero de gente en su compa&ntilde;&iacute;a</label>
                            </div>
                            <div class="large-10 columns">
                                <!-- Example to use with while -->
                                <select>
                                    <option value="">Selecciona una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline"> Correo</label>
                            </div>
                            <div class="large-10 columns">
                                <input type="text" id="yourEmail" name="email" placeholder="ej. miguel@icaza.yo">
                            </div>
                        </div>
                        <label>Mensaje</label>
                        <textarea rows="4" name="message"></textarea>
                        <button type="submit" class="radius button">Enviar</button>
                    </form>
                </div>
            </section>
        </div>
    </div>