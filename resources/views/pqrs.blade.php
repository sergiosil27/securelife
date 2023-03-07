@extends('layouts.home')

@section('title', 'Home')


@section('content')
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Radicar PQRS</h2>
            <p>Para radicar un nuevo PQRS por favor diligencie el siguiente formulario.</p>
          </div>
          <div class="col">

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Tipo de Solicitud <span class="text-danger">*</span></label>
                    <select class="form-control" name="tiposol" id="tiposol">
                    <option value="">--Seleccione tipo de solicitud--</option>
                    <option value="">PETICIÓN</option>
                    <option value="">QUEJA</option>
                    <option value="">RECLAMO</option>
                    <option value="">SUGERENCIA</option>
                  </select>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Cedula de Ciudadania <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cc" name="cc">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Nombres <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Apellidos <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Telefono </label>
                    <input type="text" class="form-control" id="phone" name="phone">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Asunto </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensaje </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
@stop