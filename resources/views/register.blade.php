@extends('layouts.master')

@section('main')
    <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h1>Registrate</h1>
      {{-- <h2>We're working hard to improve our website and we'll ready to launch after</h2>7 --}}
      <div class="row countdown d-flex justify-content-center" data-count="2023/12/5">
        <div>
          <h3>%d</h3>
          <h4>Día</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Horas</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutos</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Segundos</h4>
        </div>
      </div>
      <form  action="{{route('people.store')}}" class="was-validateds" method="POST">
        @csrf 

        <div class="row">
            <div class="col-lg-12 scroll" >                
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <span ><b style="color: rgb(255, 255, 255)">Carnet Identidad</b></span>
                            <input type="text" name="ci" class="form-control" id="ci" placeholder="Carnet Identidad" value="{{ old('ci') }}" required autocomplete="nope">
                            @error('ci')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <span ><b style="color: rgb(255, 255, 255)">Género</b></span>
                            <select name="gender" id="type" class="form-control select2" required>
                                <option value="" disabled selected>--Seleccione una opción--</option>
                                <option value="Masculino" {{ old('type')=='Usuario'?'selected':'' }}>Masculino</option>
                                <option value="Femenino" {{ old('type')=='Socio'?'selected':'' }}>Femenino</option>
                            </select>
                        </div>
                                                
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <span ><b style="color: rgb(255, 255, 255)">Nombre</b></span>
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Nombre" value="{{ old('first_name') }}" required autocomplete="nope">
                            @error('first_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <span ><b style="color: rgb(255, 255, 255)">Apellido</b></span>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellido" value="{{ old('last_name') }}" required autocomplete="nope">
                            @error('last_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">
                                                
                        <div class="col-md-6 form-group">
                            <span ><b style="color: rgb(255, 255, 255)">Celular</b></span>
                            <input type="number" name="phone" class="form-control" id="phone" placeholder="Nro de Celular" value="{{ old('phone') }}" required autocomplete="nope">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <span ><b style="color: rgb(255, 255, 255)">Edad</b></span>
                            <input type="number" name="age" class="form-control" id="age" placeholder="Ingrese su edad" value="{{ old('age') }}" required autocomplete="nope">
                            @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="row">                                                
                        <div class="col-md-12 form-group">
                            <span ><b style="color: rgb(255, 255, 255)">Institución o Universidad</b></span>
                            <textarea name="institution" id="institution" class="form-control" required rows="3"></textarea>
                            @error('institution')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                   
                    
                    <br>

                    <div style="text-align: right" >
                        <button type="submit" class="btn btn-save-customer" id="btn-sumit" style="background-color: #08acf2;">Registrarse</button>
                    </div>
            </div>

        </div>

    </form>   

      




    </div>
    
    
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        
    </section><!-- End About Us Section -->



  </main><!-- End #main -->
@endsection