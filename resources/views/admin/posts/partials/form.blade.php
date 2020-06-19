{{ Form::hidden('user_id', auth()->user()->id) }}
{{ Form::hidden('category_id', '1') }}
{{ Form::hidden('name', auth()->user()->id) }}
{{ Form::hidden('slug', auth()->user()->id) }}
{{ Form::hidden('excerpt', auth()->user()->id) }}
{{ Form::hidden('body', auth()->user()->id) }}
{{ Form::hidden('status', auth()->user()->id) }}
{{ Form::hidden('file', auth()->user()->id) }}
{{ Form::hidden('menor_65', auth()->user()->id) }}

<div class="form-group col-md-6">
	<!----- TIPO DOCUMENTO ----->
	<label for="tipo_documento">{{ __('Tipo de Documento') }}<span style="color: #e74a3b;"> (*)</span></label>
	<select id="tipo_documento" class="form-control" name="tipo_documento" autofocus>
			<option selected>DNI</option>
			<option>Carnet de Extranjeria</option>
			<option>Pasaporte</option>
			<option>Cedula de Identidad</option>
			<option>Carnet de solicitante de refugio</option>
			<option>Sin Documento</option>
	</select>
</div>

<div class="form-group col-md-6">
	<!----- NUMERO DE DOCUMENTO ----->
	<label for="nro_documento">{{ __('Numero de Documento') }}<span style="color: #e74a3b;"> (*)</span></label>
	<input id="nro_documento" type="text" class="form-control @error('documento') is-invalid @enderror" name="nro_documento" value="{{ old('nro_documento') }}" autofocus>
</div>  

<div class="form-row">
	<!----- apellido_paterno ----->
	<div class="form-group col-md-4">
			<label for="apellido_paterno">{{ __('Apellido Paterno') }}<span style="color: #e74a3b;"> (*)</span></label>
			<input id="apellido_paterno" type="text" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" autofocus>
	</div>

	<!----- apellido_materno ----->
	<div class="form-group col-md-4">
			<label for="apellido_materno">{{ __('Apellido Materno') }}<span style="color: #e74a3b;"> (*)</span></label>
			<input id="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" autofocus>
	</div>

	<!----- nombres ----->
	<div class="form-group col-md-4">
			<label for="nombres">{{ __('Nombres') }}<span style="color: #e74a3b;"> (*)</span></label>
			<input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" autofocus>
	</div>
</div>

<div class="form-row">
	<!----- fecha_nacimiento ----->
	<div class="form-group col-md-3">
			<label for="fecha_nacimiento">{{ __('Fecha Nacimiento') }}</label>
			<input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" autofocus>
	</div>
	<!----- edad ----->
	<div class="form-group col-md-2">
			<label for="edad">{{ __('Edad') }}</label>
			<input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="0" min="10" max="100" autofocus>
	</div>
	<!----- sexo ----->
	<div class="form-group col-md-3">
			<label for="sexo">{{ __('Sexo') }}</label>
			<select id="sexo" class="form-control" name="sexo">
									<option>-- Seleccione --</option>
									<option>Masculino</option>
									<option>Femenino</option>
			</select>
	</div>
	<!----- telefono ----->
	<div class="form-group col-md-4">
			<label for="telefono">{{ __('Telefono/Celular') }}<span style="color: #e74a3b;"> (*)</span></label>
			<input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" autofocus>
	</div>
	</div>

	<div class="form-row">
	<!----- direccion  ----->
	<div class="form-group col-md-6">
			<label for="direccion">{{ __('Domicilio Legal') }}<span style="color: #e74a3b;"> (*)</span></label>
			<input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" autofocus>
	</div>
	<!----- provincia ----->
	<div class="form-group col-md-3">
			<label for="">{{ __('Provincia') }}</label>
			<select class="form-control" name="provincia" id="provincia" onchange="filterCity();">
					<option value="0">-- Seleccione --</option>
					<option value="CHANCHAMAYO">CHANCHAMAYO</option>
					<option value="CHUPACA">CHUPACA</option>
					<option value="CONCEPCION">CONCEPCION</option>
					<option value="HUANCAYO">HUANCAYO</option>
					<option value="JAUJA">JAUJA</option>
					<option value="JUNIN">JUNIN</option>
					<option value="SATIPO">SATIPO</option>
					<option value="TARMA">TARMA</option>
					<option value="YAULI">YAULI</option>
			</select>
	</div>
	<!----- distrito ----->
	<div class="form-group col-md-3">
			<label for="">{{ __('Distrito') }}</label>
			<select class="form-control" name="distrito" id="distrito" disabled>
					<option value="0">-- Seleccione --</option>
					<option data-provincia="CHANCHAMAYO" value="CHANCHAMAYO">CHANCHAMAYO</option>
					<option data-provincia="CHANCHAMAYO" value="PERENE">PERENE</option>
					<option data-provincia="CHANCHAMAYO" value="PICHANAKI">PICHANAKI</option>
					<option data-provincia="CHANCHAMAYO" value="SAN LUIS DE SHUARO">SAN LUIS DE SHUARO</option>
					<option data-provincia="CHANCHAMAYO" value="SAN RAMON">SAN RAMON</option>
					<option data-provincia="CHANCHAMAYO" value="VITOC">VITOC</option>
					<option data-provincia="CHUPACA" value="AHUAC">AHUAC</option>
					<option data-provincia="CHUPACA" value="CHONGOS BAJO">CHONGOS BAJO</option>
					<option data-provincia="CHUPACA" value="CHUPACA">CHUPACA</option>
					<option data-provincia="CHUPACA" value="HUACHAC">HUACHAC</option>
					<option data-provincia="CHUPACA" value="HUAMANCACA CHICO">HUAMANCACA CHICO</option>
					<option data-provincia="CHUPACA" value="SAN JUAN DE ISCOS">SAN JUAN DE ISCOS</option>
					<option data-provincia="CHUPACA" value="SAN JUAN DE JARPA">SAN JUAN DE JARPA</option>
					<option data-provincia="CHUPACA" value="TRES DE DICIEMBRE">TRES DE DICIEMBRE</option>
					<option data-provincia="CHUPACA" value="YANACANCHA">YANACANCHA</option>
					<option data-provincia="CONCEPCION" value="ACO">ACO</option>
					<option data-provincia="CONCEPCION"  value="ANDAMARCA">ANDAMARCA</option>
					<option data-provincia="CONCEPCION"  value="CHAMBARA">CHAMBARA</option>
					<option data-provincia="CONCEPCION"  value="COCHAS">COCHAS</option>
					<option data-provincia="CONCEPCION"  value="COMAS">COMAS</option>
					<option data-provincia="CONCEPCION"  value="CONCEPCION">CONCEPCION</option>
					<option data-provincia="CONCEPCION"  value="HEROINAS">HEROINAS TOLEDO</option>
					<option data-provincia="CONCEPCION"  value="MANZANARES">MANZANARES</option>
					<option data-provincia="CONCEPCION"  value="MARISCAL CASTILLA">MARISCAL CASTILLA</option>
					<option data-provincia="CONCEPCION"  value="MATAHUASI">MATAHUASI</option>
					<option data-provincia="CONCEPCION"  value="MITO">MITO</option>
					<option data-provincia="CONCEPCION"  value="NUEVE DE JULIO">NUEVE DE JULIO</option>
					<option data-provincia="CONCEPCION"  value="ORCOTUNA">ORCOTUNA</option>
					<option data-provincia="CONCEPCION"  value="SAN JOSE DE QUERO">SAN JOSE DE QUERO</option>
					<option data-provincia="CONCEPCION"  value="SANTA ROSA DE OCOPA">SANTA ROSA DE OCOPA</option>
					<option data-provincia="CONCEPCION"  value="SANTO DOMINGO DE ACOBAMBA">SANTO DOMINGO DE ACOBAMBA</option>
					<option data-provincia="HUANCAYO" value="CARHUACALLANGA">CARHUACALLANGA</option>
					<option data-provincia="HUANCAYO" value="CHACAPAMPA">CHACAPAMPA</option>
					<option data-provincia="HUANCAYO" value="CHICCHE">CHICCHE</option>
					<option data-provincia="HUANCAYO" value="CHILCA">CHILCA</option>
					<option data-provincia="HUANCAYO" value="CHONGOS ALTO">CHONGOS ALTO</option>
					<option data-provincia="HUANCAYO" value="CHUPURO">CHUPURO</option>
					<option data-provincia="HUANCAYO" value="COLCA">COLCA</option>
					<option data-provincia="HUANCAYO" value="CULLHUAS">CULLHUAS</option>
					<option data-provincia="HUANCAYO" value="EL TAMBO">EL TAMBO</option>
					<option data-provincia="HUANCAYO" value="HUACRAPUQUIO">HUACRAPUQUIO</option>
					<option data-provincia="HUANCAYO" value="HUALHUAS">HUALHUAS</option>
					<option data-provincia="HUANCAYO" value="HUANCAN">HUANCAN</option>
					<option data-provincia="HUANCAYO" value="HUANCAYO">HUANCAYO</option>
					<option data-provincia="HUANCAYO" value="HUASICANCHA">HUASICANCHA</option>
					<option data-provincia="HUANCAYO" value="HUAYUCACHI">HUAYUCACHI</option>
					<option data-provincia="HUANCAYO" value="INGENIO">INGENIO</option>
					<option data-provincia="HUANCAYO" value="PARIAHUANCA">PARIAHUANCA</option>
					<option data-provincia="HUANCAYO" value="PILCOMAYO">PILCOMAYO</option>
					<option data-provincia="HUANCAYO" value="PUCARA">PUCARA</option>
					<option data-provincia="HUANCAYO" value="QUICHUAY">QUICHUAY</option>
					<option data-provincia="HUANCAYO" value="QUILCAS">QUILCAS</option>
					<option data-provincia="HUANCAYO" value="SAN AGUSTIN">SAN AGUSTIN</option>
					<option data-provincia="HUANCAYO" value="SAN JERONIMO DE TUNAN">SAN JERONIMO DE TUNAN</option>
					<option data-provincia="HUANCAYO" value="SANTO DOMINGO DE ACOBAMBA">SANTO DOMINGO DE ACOBAMBA</option>
					<option data-provincia="HUANCAYO" value="SAÑO">SAÑO</option>
					<option data-provincia="HUANCAYO" value="SAPALLANGA">SAPALLANGA</option>
					<option data-provincia="HUANCAYO" value="SICAYA">SICAYA</option>
					<option data-provincia="HUANCAYO" value="VIQUES">VIQUES</option>
					<option data-provincia="JAUJA" value="ACOLLA">ACOLLA</option>
					<option  data-provincia="JAUJA" value="APATA">APATA</option>
					<option  data-provincia="JAUJA" value="ATAURA">ATAURA</option>
					<option  data-provincia="JAUJA" value="CANCHAYLLO">CANCHAYLLO</option>
					<option  data-provincia="JAUJA" value="CURICACA">CURICACA</option>
					<option  data-provincia="JAUJA" value="EL MANTARO">EL MANTARO</option>
					<option  data-provincia="JAUJA" value="HUAMALI">HUAMALI</option>
					<option  data-provincia="JAUJA" value="HUARIPAMPA">HUARIPAMPA</option>
					<option  data-provincia="JAUJA" value="HUERTAS">HUERTAS</option>
					<option  data-provincia="JAUJA" value="JANJAILLO">JANJAILLO</option>
					<option  data-provincia="JAUJA" value="JAUJA">JAUJA</option>
					<option  data-provincia="JAUJA" value="JULCAN">JULCAN</option>
					<option  data-provincia="JAUJA" value="LEONOR ORDOÑEZ">LEONOR ORDOÑEZ</option>
					<option  data-provincia="JAUJA" value="LLOCLLAPAMPA">LLOCLLAPAMPA</option>
					<option  data-provincia="JAUJA" value="MARCO">MARCO</option>
					<option  data-provincia="JAUJA" value="MASMA">MASMA</option>
					<option  data-provincia="JAUJA" value="MASMA CHICCHE">MASMA CHICCHE</option>
					<option  data-provincia="JAUJA" value="MOLINOS">MOLINOS</option>
					<option  data-provincia="JAUJA" value="MONOBAMBA">MONOBAMBA</option>
					<option  data-provincia="JAUJA" value="MUQUI">MUQUI</option>
					<option  data-provincia="JAUJA" value="MUQUIYAUYO">MUQUIYAUYO</option>
					<option  data-provincia="JAUJA" value="PACA">PACA</option>
					<option  data-provincia="JAUJA" value="PACCHA">PACCHA</option>
					<option  data-provincia="JAUJA" value="PANCAN">PANCAN</option>
					<option  data-provincia="JAUJA" value="PARCO">PARCO</option>
					<option  data-provincia="JAUJA" value="POMACANCHA">POMACANCHA</option>
					<option  data-provincia="JAUJA" value="RICRAN">RICRAN</option>
					<option  data-provincia="JAUJA" value="SAN LORENZO">SAN LORENZO</option>
					<option  data-provincia="JAUJA" value="SAN PEDRO DE CHUNAN">SAN PEDRO DE CHUNAN</option>
					<option  data-provincia="JAUJA" value="SAUSA">SAUSA</option>
					<option  data-provincia="JAUJA" value="SINCOS">SINCOS</option>
					<option  data-provincia="JAUJA" value="TUNAN MARCA">TUNAN MARCA</option>
					<option  data-provincia="JAUJA" value="YAULI">YAULI</option>
					<option  data-provincia="JAUJA" value="YAUYOS">YAUYOS</option>
					<option  data-provincia="JUNIN" value="CARHUAMAYO">CARHUAMAYO</option>
					<option data-provincia="JUNIN" value="CARHUAMAYO">CARHUAMAYO</option>
					<option data-provincia="JUNIN" value="JUNIN">JUNIN</option>
					<option data-provincia="JUNIN" value="ONDORES">ONDORES</option>
					<option data-provincia="JUNIN" value="ULCUMAYO">ULCUMAYO</option>
					<option data-provincia="SATIPO" value="COVIRIALI">COVIRIALI</option>
					<option data-provincia="SATIPO" value="LLAYLLA">LLAYLLA</option>
					<option data-provincia="SATIPO" value="MAZAMARI">MAZAMARI</option>
					<option data-provincia="SATIPO" value="PAMPA HERMOSA">PAMPA HERMOSA</option>
					<option data-provincia="SATIPO" value="PANGOA">PANGOA</option>
					<option data-provincia="SATIPO" value="RIO NEGRO">RIO NEGRO</option>
					<option data-provincia="SATIPO" value="RIO TAMBO">RIO TAMBO</option>
					<option data-provincia="SATIPO" value="SATIPO">SATIPO</option>
					<option data-provincia="SATIPO" value="VIZCATAN DEL ENE">VIZCATAN DEL ENE</option>
					<option data-provincia="TARMA" value="ACOBAMBA">ACOBAMBA</option>
					<option data-provincia="TARMA" value="HUARICOLCA">HUARICOLCA</option>
					<option data-provincia="TARMA" value="HUASAHUASI">HUASAHUASI</option>
					<option data-provincia="TARMA" value="LA UNION">LA UNION</option>
					<option data-provincia="TARMA" value="PALCA">PALCA</option>
					<option data-provincia="TARMA" value="PALCAMAYO">PALCAMAYO</option>
					<option data-provincia="TARMA" value="SAN PEDRO DE CAJAS">SAN PEDRO DE CAJAS</option>
					<option data-provincia="TARMA" value="TAPO">TAPO</option>
					<option data-provincia="TARMA" value="TARMA">TARMA</option>
					<option data-provincia="YAULI" value="CHACAPALPA">CHACAPALPA</option>
					<option data-provincia="YAULI" value="HUAY-HUAY">HUAY-HUAY</option>
					<option data-provincia="YAULI" value="LA OROYA">LA OROYA</option>
					<option data-provincia="YAULI" value="MARCAPOMACOCHA">MARCAPOMACOCHA</option>
					<option data-provincia="YAULI" value="MOROCOCHA">MOROCOCHA</option>
					<option data-provincia="YAULI" value="PACCHA">PACCHA</option>
					<option data-provincia="YAULI" value="SANTA BARBARA DE CARHUACAYAN">SANTA BARBARA DE CARHUACAYAN</option>
					<option data-provincia="YAULI" value="SANTA ROSA DE SACCO">SANTA ROSA DE SACCO</option>
					<option data-provincia="YAULI" value="SUITUCANCHA">SUITUCANCHA</option>
					<option data-provincia="YAULI" value="YAULI">YAULI</option>
			</select>
	</div>
</div>
<span id="option-container" style="visibility: hidden; position:absolute;"></span>

<div class="form-row">
	<!----- instruccion  ----->
	<div class="form-group col-md-3">
			<label for="instruccion">{{ __('Grado de instrucción') }}</label>
			<select id="instruccion" class="form-control" name="instruccion" value="{{ old('instruccion') }}" autofocus>
													<option>Sin Instruccion</option>
													<option>Inicial</option>
													<option>Primaria Completa</option>
													<option>Primaria Incompleta</option>
													<option>Secundaria Completa</option>
													<option>Secundaria Incompleta</option>
													<option>Superior Completo</option>
													<option>Superior Incompleto</option>
							</select>
	</div>
	<!----- civil ----->
	<div class="form-group col-md-3">
			<label for="civil">{{ __('Estado civil') }}</label>
			<select id="civil" type="text" class="form-control" name="civil" value="{{ old('civil') }}" autofocus>
													<option>Soltera/o</option>
													<option>Conviviente</option>
													<option>Casada/o</option>
													<option>Separada/a</option>
													<option>Divorciada/o</option>
													<option>Viuda/o</option>
													<option>Otros</option>
							</select>
	</div>
	<!----- hijos ----->
	<div class="form-group col-md-2">
	<label for="hijos">{{ __('N° de hijos') }}</label>
	<input id="hijos" type="number" class="form-control @error('hijos') is-invalid @enderror" name="hijos" value="0" min="0" max="20" autofocus>
	</div>
	<!----- peso ----->
	<div class="form-group col-md-2">
	<label for="peso">{{ __('Peso') }} (kg)</label>
	<input id="peso" type="number" class="form-control @error('peso') is-invalid @enderror" name="peso" value="0" min="0" max="220" autofocus placeholder="60 Kg">
	</div>

	<!----- talla ----->
	<div class="form-group col-md-2">
			<label for="talla">{{ __('Talla') }} (cm)</label>
			<input id="talla" type="number" class="form-control @error('talla') is-invalid @enderror" name="talla" value="0" min="0" max="300" autofocus>
	</div>
</div>
<!--- fin de CARD BODY -->
<div class="form-row">    
<div class="col col-md-12">
	<div class="panel panel-primary">
			<!-- Default panel contents -->
			<div class="panel-heading text-center"><strong>VULNERABILIDAD</strong></div>
					<div class="form-group col-md-4">
							<label for="mayor_menor">Es mayor de 65 años</label>
							<div class="form-check">
									<input type="hidden" class="form-check-input" type="radio" name="mayor_65" id="mayor_65" checked value="0">
									<input class="form-check-input" type="radio" name="mayor_65" id="mayor_65" checked value="1">
									<label class="form-check-label" for="mayor_65">
											Si
									</label>
							</div>
							<div class="form-check">
									<input type="hidden" class="form-check-input" type="radio" name="mayor_65" id="mayor_65" value="0">
									<input class="form-check-input" type="radio" name="mayor_65" id="mayor_65" value="1">
									<label class="form-check-label" for="mayor_65">
											No
									</label>
							</div>
					</div>
					<div class="form-group col-md-8">
							<label for="">¿Tiene usted algunos de estos problemas de salud? (Co morbilidad)</label>
									<div class="form-check">
											<input type="hidden" type="checkbox" class="form-check-input" name="embarazo" value="0">
											<input id="embarazo" type="checkbox" class="form-check-input" name="embarazo" value="1">
													<label class="form-check-label" for="embarazo">
															Embarazo
													</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="cardiovascular" value="0">
											<input class="form-check-input" type="checkbox" name="cardiovascular" value="1">
													<label class="form-check-label" for="cardiovascular">
															Enfermedad Cardiovascular
													</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="diabetes" value="0">
											<input class="form-check-input" type="checkbox" name="diabetes" value="1">
													<label class="form-check-label" for="diabetes">
															Diabetes
													</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="hepatica" value="0">
											<input class="form-check-input" type="checkbox" name="hepatica" value="1">
													<label class="form-check-label" for="hepatica">
															Enfermedad Hepática
													</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="neurologica" value="0">
											<input class="form-check-input" type="checkbox" name="neurologica" value="1">
											<label class="form-check-label" for="neurologica">
													Enfermedad Crónica neurológica
											</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="inmunodeficiencia" value="0">
											<input class="form-check-input" type="checkbox" name="inmunodeficiencia" value="1">
											<label class="form-check-label" for="inmunodeficiencia">
													Inmunodeficiencia
											</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="renal" value="0">
											<input class="form-check-input" type="checkbox" name="renal" value="1">
											<label class="form-check-label" for="renal">
													Enfermedad renal
											</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="d_hepatico" value="0">
											<input class="form-check-input" type="checkbox" name="d_hepatico" value="1">
											<label class="form-check-label" for="d_hepatico">
												 Daño hepático
											</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="pulmonar" value="0">
											<input class="form-check-input" type="checkbox" name="pulmonar" value="1">
											<label class="form-check-label" for="pulmonar">
													Enfermedad pulmonar crónico
											</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="cancer" value="0">
											<input class="form-check-input" type="checkbox" name="cancer" value="1">
											<label class="form-check-label" for="cancer">
													Cancer
											</label>
									</div>
									<div class="form-check">
											<input type="hidden" class="form-check-input" type="checkbox" name="ninguno" value="0">
											<input class="form-check-input" type="checkbox" name="ninguno" value="1">
											<label class="form-check-label" for="ninguno">
													Ninguno
											</label>
									</div>
					</div>
			</div>
	</div>                
</div>    


	<div class="col col-md-12">
			<div class="panel panel-primary">
			<!-- Default panel contents -->
					<div class="panel-heading text-center"><strong>SERVICIO DE TRANSPORTES</strong></div>             
											<!----- empresa_trans ----->
									<div class="form-row">
											<div class="form-group col-md-6">
													<label for="empresa_trans">{{ __('Empresa de transporte') }}</label>
													<input id="empresa_trans" type="text" class="form-control @error('empresa_trans') is-invalid @enderror" name="empresa_trans" value="{{ old('empresa_trans') }}" autofocus>
											</div>

											<!----- servicio_trans ----->
											<div class="form-group col-md-6">
													<label for="tipo_vehiculo">{{ __('Tipo de vehiculo') }}</label>
													<select id="tipo_vehiculo" type="text" class="form-control" name="tipo_vehiculo" value="{{ old('tipo_vehiculo') }}" autofocus>
															<option>Transporte Masivo</option>
															<option>Transporte camioneta rural - combis</option>
															<option>Servicio especial - taxi</option>
															<option>Servicio de autos colectivos</option>
															<option>Mototaxista</option>
															<option>Mototaxista</option>
															<option>Servicio Regular</option>
															<option>Servicio Turistico</option>
											</select>
											</div>
									</div>
					
							<div class="form-row">
									<div class="form-group col-md-4">
											<label for="numero_placa">{{ __('Numero de Placa') }}</label>
											<input id="numero_placa" type="text" class="form-control @error('name') is-invalid @enderror" name="numero_placa" value="{{ old('numero_placa') }}" required autocomplete="numero_placa" autofocus>
									</div>
									<div class="form-group col-md-4">
											<label for="brevete">{{ __('Numero de Brevete') }}</label>
											<input id="brevete" type="text" class="form-control @error('brevete') is-invalid @enderror" name="brevete" value="{{ old('brevete') }}" autocomplete="brevete">
											</div>
									<div class="form-group col-md-4">
											<label for="pasajeros">{{ __('Cantidad de Pasajeros') }}</label>
											<input id="pasajeros" type="number" class="form-control @error('pasajeros') is-invalid @enderror" name="pasajeros" required autocomplete="pasajeros" min="0">
									</div>
							</div>
					</div>
			</div> 
			<div class="form-group text-center">
					{{ Form::submit('Guardar Inscripcion', ['class' => 'btn btn-lg btn-success']) }}
			</div>
	</div>   

@section('scripts')
<script>
	function filterCity(){
		var provincia = $("#provincia").find('option:selected').text(); // stores province
		$("#option-container").children().appendTo("#distrito"); // moves <option> contained in #option-container back to their <select>
		var toMove = $("#distrito").children("[data-provincia!='"+provincia+"']"); // selects city elements to move out
		toMove.appendTo("#option-container"); // moves city elements in #option-container
		$("#distrito").removeAttr("disabled"); // enables select
};
</script>
@endsection