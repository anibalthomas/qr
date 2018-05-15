<template>
  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="page-title">
      <div class="title_left">
        <h3>Registro de Alumnos</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
          <div class="input-group">
            <input type="text" v-model="buscar" @keyup.13="buscaralumno()" class="form-control" placeholder="Lector" autofocus>
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Buscar</button>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- /top tiles -->


    <div class="row">

      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320">
          <div class="x_title">
            <h2>Información de Estudiante</h2>
            <ul class="nav navbar-right">
              <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="left col-xs-7">
              <h2>{{alumno.nombre}}</h2><br>
              <p><strong>Matricula: {{alumno.matricula}} </strong>  </p>
              <p><strong>Grado: {{alumno.grado}}</strong>  </p>
              <p><strong>Género: {{alumno.genero}} </strong>  </p>

            </div>
            <div class="right col-xs-5 text-center">
              <img src="/gentelella/images/user.png" alt="" class="img-circle img-responsive">
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320">
          <div class="x_title">
            <h2>Registro de Estudiantes</h2>
            <ul class="nav navbar-right ">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

<div class="form-horizontal form-label-left input_mask">

  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Matricula</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input v-model="matricula" type="text" class="form-control" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input v-model="nombre" type="text" class="form-control" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Género</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <select v-model="genero" class="form-control">
        <option  disabled value="">Selecciona un género</option>
        <option>Hombre</option>
        <option>Mujer</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Grado</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <select v-model="grado" class="form-control">
        <option  disabled value="">Selecciona un Grado</option>
        <option>Maestría</option>
        <option>Doctorado</option>
      </select>
    </div>
  </div>
  <button type="button" class="btn btn-primary pull-right" v-on:click="guardarmodal()" data-dismiss="modal">Guardar</button>
</div>



          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320">
          <div class="x_title">
            <h2>------</h2>
            <ul class="nav navbar-right">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="left col-xs-7">

            </div>

          </div>
        </div>
      </div>

    </div>



    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="x_panel">
                       <div class="x_title">
                         <h2>Participantes Registrados</h2>
                         <ul class="nav navbar-right">
                           <li><a class="collapse-link pull-right"><i class="fa fa-chevron-up pull-right"></i></a>
                           </li>
                         </ul>
                         <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generar PDF</button>
                         <div class="clearfix"></div>
                       </div>
                       <div class="x_content">

                         <table id="datatable" class="table table-striped table-bordered">
                           <thead>
                               <tr>
                                   <th>Matricula</th>
                                   <th>Nombre</th>
                                   <th>Género</th>
                                   <th>Grado</th>
                                   <th>Acción</th>
                               </tr>
                           </thead>
                           <tbody>
                               <tr v-for="(alumn, index) in alumnos">
                                   <td v-text="alumn.matricula"></td>
                                   <td v-text="alumn.nombre"></td>
                                   <td v-text="alumn.genero"></td>
                                   <td v-text="alumn.grado"></td>
                                   <td><button  class="btn btn-danger btn-xs" v-on:click="alumnos.splice(index, 1)"><i class="fa fa-trash-o"></i> Eliminar</button></td>
                               </tr>
                           </tbody>
                         </table>

                          <nav>
                            <ul class="pagination pull-right">

                                <li>
                                  <a href="#">
                                    <span>Atrás</span>
                                  </a>
                                </li>

                                <li><a href="">
                                  <span>1</span></a>
                                </li>

                                <li >
                                  <a href="">
                                  <span>Siguiente</span></a>
                                </li>
                            </ul>
                          </nav>


                       </div>
                     </div>
                   </div>

    </div>
    <br />

      </div>
</template>

<script>


    export default {
      data()
{
  return {
    buscar: "",
    matricula: "",
    nombre: "",
    genero: "",
    grado: "",
    alumno: {},
    alumnos: []
  }
},
mounted(){},
methods: {
  buscaralumno() {
      axios.get('/alumnos?query=' + this.buscar).then(res => {
        // console.table(res.data);
        this.alumno = res.data;
        this.alumnos.push({
          id: this.alumno.id,
          matricula: this.alumno.matricula,
          nombre: this.alumno.nombre,
          genero: this.alumno.genero,
          grado: this.alumno.grado,
        });
      });
    this.buscar = "";
  },
  guardarmodal() {
    this.alumnos.push({
      matricula: this.matricula,
      nombre: this.nombre,
      genero: this.genero,
      grado: this.grado,
    });
    this.matricula = "";
    this.nombre = "";
    this.genero = "";
    this.grado = "";
  },
  guardar() {
  axios.post('/alumnos', this.alumno)
    .then(res =>{
        // this.clientes.push(response.data.cliente);
      //   this.cliente = {name:'', domicilio:'',
      // colonia:'', telcasa:'', telcel:'', duracion: ''},
        console.log(res.data);
    });
  }


},

    }
</script>
