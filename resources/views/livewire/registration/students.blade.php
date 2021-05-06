<div class="px-5 py-4">
    <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
            <div class="overflow-hidden shadow sm:rounded-md">
                <div class="px-4 py-2 bg-white sm:p-6">
                    <h2 class="pb-5 text-2xl text-red-700 sm:text-4xl text-bold">Datos del Estudiante</h2>
                    <div class="grid grid-cols-12 gap-4 mb-8">
                        <div class="col-span-12 sm:col-span-4">
                            <label for="id_student" class="block text-base font-bold text-gray-700">Cédula del
                                Estudiante:</label>

                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-id-card fa-2x"></i>
                                </span>
                                <input type="number" name="id_student" id="id_student"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-8">
                            <div class="grid justify-items-stretch">
                                <div class="sm:justify-self-end justify-self-center">
                                    <label for="ie"
                                        class="block text-base font-bold text-gray-700 justify-self-center ">Último
                                        Período Escolar:</label>

                                    <input type="text" name="ie" id="ie"
                                        class="flex-1 block h-24 m-auto mt-1 text-center border-gray-300 rounded-none shadow-md justify-self-center w-28 focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-5xl">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-4">
                            <label for="name" class="block text-base font-bold text-gray-700">Nombres:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-keyboard"></i>
                                </span>
                                <input type="text" name="name" id="name"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-4">
                            <label for="lastname" class="block text-base font-bold text-gray-700">Apellidos:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-keyboard"></i>
                                </span>
                                <input type="text" name="lastname" id="lastname"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-4">
                            <label for="gender" class="block text-base font-bold text-gray-700">Genero:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-venus-mars fa-2x"></i>
                                </span>
                                <select id="gender" name="gender" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value='N/A'>N/A</option>
                                    <option value='F'>FEMENINO</option>
                                    <option value='M'>MASCULINO</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-3">
                            <label for="	laterality"
                                class="block text-base font-bold text-gray-700">Lateralidad:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-hands fa-2x"></i>
                                </span>

                                <select id="laterality" name="laterality" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="D">Derecho(a)</option>
                                    <option value="Z">Zurdo(a)</option>
                                    <option value="A">Ambidiestro(a)</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="birthday" class="block text-base font-bold text-gray-700">Fecha Nac.:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-calendar-alt fa-2x"></i>
                                </span>
                                <input type="date" name="birthday" id="birthday" autocomplete="off"
                                    class="block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="old" class="block text-base font-bold text-gray-700">Edad calculada:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-clock fa-2x"></i>
                                </span>
                                <input type="text" name="old" id="old" autocomplete="off"
                                    class="block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="birth_order" class="block text-base font-bold text-gray-700">Orden Nac.:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-sort-numeric-down fa-2x"></i>
                                </span>
                                <input type="number" name="birth_order" id="birth_order" autocomplete="off"
                                    class="block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-12 gap-4 mb-4">
                        <div class="col-span-12 sm:col-span-4">
                            <label for="state_birth" class="block text-base font-bold text-gray-700">Estado de
                                Nacimiento:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-flag fa-2x"></i>
                                </span>

                                <select id="state_birth" name="state_birth" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="N/A">N/A</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-5">
                            <label for="birthplace" class="block text-base font-bold text-gray-700">Lugar
                                Nacimiento.:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-globe-americas fa-2x"></i>
                                </span>

                                <input type="text" name="birthplace" id="birthplace" autocomplete="on"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="marital_status" class="block text-base font-bold text-gray-700">Estado
                                Civil:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-people-arrows fa-2x"></i>
                                </span>

                                <select id="marital_status" name="marital_status" autocomplete="off"
                                    class="flex-1 block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
                                    <option value="Soltero(a)">Soltero(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viudo(a)">Viudo(a)</option>
                                    <option value="Concubinato">Concubinato</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12 sm:col-span-3">
                            <label for="pending_matter" class="block text-base font-bold text-gray-700">Materia
                                Pendiente</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-book-dead fa-2x"></i>
                                </span>

                                <select id="pending_matter" name="pending_matter" autocomplete="off"
                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-none shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value='N/A'>N/A</option>
                                    <option value='NO'>NO</option>
                                    <option value='SI'>SI</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-4">
                            <label for="condition" class="block text-base font-bold text-gray-700">Condición de
                                Estudio</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-person-booth fa-2x"></i>
                                </span>
                                <select id="condition" name="condition" autocomplete="off"
                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-none shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="NUEVO INGRESO">NUEVO INGRESO</option>
                                    <option value="REGULAR">REGULAR</option>
                                    <option value="REPITIENTE DE LA INST">REPITIENTE DE LA INST</option>
                                    <option value="REPITIENTE OTRA INST">REPITIENTE OTRA INST</option>
                                    <option value="REZAGADO">REZAGADO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label for="year_study" class="block text-base font-bold text-gray-700">Año de
                                Estudio</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-graduation-cap fa-2x"></i>
                                </span>
                                <select id="year_study" name="year_study" autocomplete="off"
                                    class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-none shadow-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="N/A">N/A</option>
                                    <option value="1ER AÑO">1ER AÑO</option>
                                    <option value="2DO AÑO">2DO AÑO</option>
                                    <option value="3ER AÑO">3ER AÑO</option>
                                    <option value="4TO AÑO CS">4TO AÑO CS</option>
                                    <option value="5TO AÑO CS">5TO AÑO CS</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-span-12 sm:col-span-2">
                            <label for="section" class="block text-base font-bold text-gray-700">Sección:</label>
                            <div class="flex mt-1 rounded-md shadow-sm">
                                <span
                                    class="inline-flex items-center px-3 mt-1 text-sm text-gray-500 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md">
                                    <i class="fas fa-sort-alpha-down fa-2x"></i>
                                </span>
                                <input type="text" name="section" id="section" autocomplete="off"
                                    class="block w-full mt-1 border-gray-300 rounded-none shadow-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
