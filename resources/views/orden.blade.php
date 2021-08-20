<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Orden de Servicio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form>
                            <div class="card-body">


                                            <fieldset class="border p-2">
                                                <legend class="w-auto">Cliente</legend>
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>Documento</th>
                                                            <th>Nombre</th>
                                                            <th>Telefono Contacto</th>
                                                            <th>Email</th>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="documentNumber" placeholder="Documento"></td>
                                                            <td><input type="text" class="form-control" id="nameClient" placeholder="Nombre Cliente"></td>
                                                            <td><input type="text" class="form-control" id="phoneClient" placeholder="Telefono"></td>
                                                            <td><input type="email" class="form-control" id="emailClient" placeholder="Email"></td>

                                                        </tr>
                                                    </table>
                                                </div>

                                            </fieldset>

                                            <fieldset class="border p-2">
                                                <legend class="w-auto">Datos Telefono</legend>
                                                <div class="card-body">
                                                    <table class="table table-bordered">
                                                        <tr>
                                                            <th>Falla Reportada</th>
                            
                                                            <th>Marca</th>
                                                            <th>Modelo</th>
                                                            <th>Color</th>
                                                            <th>Clave</th>
                                                        </tr>
                                                        <tr><td><input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                            <td><select class="form-control" name="color_id">
                                                                 @foreach($marcas as $key=>$val)
      <option value="{{ $val->id}}" {{ ((isset($user->id) && $user->id== $val->id)? "selected":"") }}>{{$val->name}}</option>
    @endforeach
  </select></td>
                                             
                                                            
                                                            <td><input type="text" class="form-control" id="reparacion" placeholder="Reparacion Efectuada"></td>
                                                            <td><select class="form-control" name="color_id">
                                                                 @foreach($colores as $key=>$val)
      <option value="{{ $val->id}}" {{ ((isset($user->id) && $user->id== $val->id)? "selected":"") }}>{{$val->name}}</option>
    @endforeach
  </select></td>
                                                            <td><input type="text" class="form-control" id="clave" placeholder="Reparacion Efectuada"></td>
                                                        </tr>

                                                    </table>
                                                </div>

                                            </fieldset>






                                <fieldset class="border p-2">
                                    <legend class="w-auto">Validaciones</legend>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Enciende?</th>
                                                <th>Sim Card</th>
                                                <th>MicroSD</th>
                                                <th>Tapa</th>
                                                <th>Bateria</th>

                                            </tr>
                                            <tr>
                                                <td><select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="enciende">

      <option value="1" >Si</option>
      <option value="0" >No</option>
  </select></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                               
                                            </tr>
                                            <tr>                                                
                                                <th>Bandejas</th>
                                                <th>Manipulado Otro ST?</th>
                                                <th>Display</th>
                                                <th>Vidrio</th>
                                                <th>Sonido</th>
                                                
                                            </tr>
                                            <tr>
                                                 <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                               
                                            </tr>
                                            <tr><th>Boton</th>
                                                <th>Auriculares</th>
                                                <th>Señal</th>
                                                <th>Camara Posterior</th>
                                                <th>Power</th>
                                                

                                            </tr>
                                            <tr>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                
                                            </tr>
                                            <tr><th>Bisel</th>
                                                <th>
                                                    Tactil:
                                                </th>
                                                <th>
                                                    Temp:
                                                </th>
                                                <th>
                                                    Vibra:
                                                </th>
                                                <th>
                                                    Huella:
                                                </th>
                                               
                                            </tr>
                                            <tr><td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td> 
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                
                                            </tr>
                                            <tr>
                                            <th>
                                                    Altav:
                                                </th>
                                                <th>
                                                    Wifi:
                                                </th>
                                                <th>
                                                    Cam F:
                                                </th>
                                                <th>
                                                    Vol:
                                                </th>
                                                <th>
                                                    Tornillos
                                                </th>
                                                


                                            </tr>
                                            <tr>
   <td><input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                              

                                          </tr>
                                          <tr><th>
                                                    Microf:
                                                </th>
                                                <th>
                                                    FaceId:
                                                </th>
                                                <th>
                                                    S. Prox:
                                                </th>
                                                <th>
                                                    Bluet:
                                                </th>
                                                <th>

                                                    Linterna:
                                                </th>
                  </tr>


<tr>  <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>

</tr>


<tr>                              <th>
                                                    Carga:
                                                </th>
                                                <th>  Lens: </th></tr>

<tr>                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td>
                                                <td> <input type="text" class="form-control" id="fallareportada" placeholder="Falla Reportada"></td></tr>

                                        </table>
                                    </div>
                                </fieldset>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
        Sign Up
      </button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>