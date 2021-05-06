<div class="px-5 py-4">
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="px-4 py-2 bg-white sm:p-6">
                    <h2 class="pb-5 text-2xl text-red-700 sm:text-4xl text-bold">Ubicación Domiciliaria del Estudiante</h2>


                    <div class="grid grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-3">
                            <label for="gender" class="block text-base font-bold text-gray-700">Tipo de Vía:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-road fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="AUTOPISTA">AUTOPISTA</option>
                                    <option value="AVENIDA">AVENIDA</option>
                                    <option value="CALLE">CALLE</option>
                                    <option value="CALLEJON">CALLEJON</option>
                                    <option value="ESQUINA">ESQUINA</option>
                                    <option value="MANZANA">MANZANA</option>
                                    <option value="CARRETERA">CARRETERA</option>
                                    <option value="VEREDA">VEREDA</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="lastname" class="block text-base font-bold text-gray-700">Dirección
                                (URB/CALLE/SECTOR/VEREDA/N°CASA):</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-street-view fa-2x"></i>
                                </span>
                                <input type="text" name="lastname" id="lastname"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="gender" class="block text-base font-bold text-gray-700">Zona Ubicación:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-street-view fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="Urbana">Urbana</option>
                                    <option value="Rural">Rural</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-12 gap-4 mb-8">
                        <div class="col-span-12 sm:col-span-3">
                            <label for="gender" class="block text-base font-bold text-gray-700">Tipo de
                                Vivienda:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-home fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="Casa">Casa</option>
                                    <option value="Apartamento">Apartamento</option>
                                    <option value="Rancho">Rancho</option>
                                    <option value="Quinta">quinta</option>
                                    <option value="Casa Vecindad">Casa Vecindad</option>
                                    <option value="Improvisada">Improvisada</option>
                                    <option value="Refugio">Refugio</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="gender" class="block text-base font-bold text-gray-700">Ubic. de
                                Vivienda:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-street-view fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="Urbanización">Urbanización</option>
                                    <option value="Barrio">Barrio</option>
                                    <option value="Caserio">Caserio</option>
                                    <option value="Zona Residencial">Zona Residencial</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-span-12 sm:col-span-3">
                            <label for="gender" class="block text-base font-bold text-gray-700">Cond. de
                                Vivienda:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-house-user fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="Alquilada">Alquilada</option>
                                    <option value="Propia Pagada">Propia Pagada</option>
                                    <option value="Propia Pagandose">Propia Pagandose</option>
                                    <option value="Al cuidado">Al cuidado</option>
                                    <option value="Arrimado">Arrimado</option>
                                    <option value="Cedida">Cedida</option>
                                    <option value="De la Empresa">De la Empresa</option>
                                    <option value="Anexo">Anexo</option>
                                    <option value="Prestada">Prestada</option>
                                    <option value="Herencia">Herencia</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="gender" class="block text-base font-bold text-gray-700">Cond.
                                Infraestructura:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-house-damage fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="Buena">Buena</option>
                                    <option value="Deteriorada">Deteriorada</option>
                                    <option value="Deplorable">Deplorable</option>
                                    <option value="Excelente">Excelente</option>
                                    <option value="Regular">Regular</option>
                                </select>
                            </div>
                        </div>


                    </div>



                    <h2 class="pb-5 text-2xl text-red-700 sm:text-4xl text-bold">Otros datos del Estudiante</h2>


                    <div class="grid grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="gender" class="block text-base font-bold text-gray-700">E-mail:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </span>
                                <input type="email" name="id_student" id="id_student"
                                class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                            </div>
                        </div>


                        <div class="col-span-12 sm:col-span-6">
                          <label for="gender" class="block text-base font-bold text-gray-700">Pantel de Procedencia:</label>
                          <div class="flex mt-1 rounded-md shadow-sm">
                              <span
                                  class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                  <i class="fas fa-university fa-2x"></i>
                              </span>
                              <select id="gender" name="gender" autocomplete="off"
                                  class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                  <option value="N/A">N/A</option>

                              </select>
                          </div>
                      </div>

                    </div>

                    <div class="grid grid-cols-12 gap-4 mb-4">
                      <div class="col-span-12 sm:col-span-12">
                          <label for="gender" class="block text-base font-bold text-gray-700">Observaciones:</label>
                          <div class="flex mt-1 rounded-md shadow-sm">
                              <span
                                  class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                  <i class="fas fa-quote-left fa-2x"></i>
                              </span>
                              <textarea class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm" id="observacion" onKeyUp="this.value = this.value.toUpperCase()" value="" placeholder="Informacion relevante del estudiante, que no tiene campo de llenado en la ficha electronica" maxlength="200" name="observacion" cols="50" rows="3"></textarea>
                          </div>
                      </div>
                    </div>










                </div>
        </form>
    </div>
</div>
