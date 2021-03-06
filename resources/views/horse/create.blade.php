

@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Naujas arklys</div>

               <div class="card-body">
                  <form method="POST" action="{{route('horse.store')}}">
                    <div class="form-group">
                        <label>Vardas: </label>
                        <input type="text" name="horse_name" class="form-control" value="{{old('horse_name')}}">
                        <small class="form-text text-muted">Arklio vardas</small>
                    </div>

                    <div class="form-group">
                        <label> Dalyvauta rungtynių skaičius:</label>
                        <input type="text" name="horse_runs" class="form-control" value="{{old('horse_runs')}}">
                        <small class="form-text text-muted">Dalyvauta rungtynių</small>
                    </div>

                    <div class="form-group">
                        <label>Laimėtų rungtynių skaičius: </label>
                        <input type="text" name="horse_wins" class="form-control" value="{{old('horse_wins')}}">
                        <small class="form-text text-muted">Arklio laimėtos rungtynės</small>
                    </div>
                    <div class="form-group">
                        <label>Aprašymas:</label><br>
                                <textarea name="horse_about" class="form-control" ></textarea>
                                <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                                <script>
                                    tinymce.init({
                                        forced_root_block : "",
                                        selector: 'textarea.form-control',
                                        width: 400,
                                        height: 250
                                    });
                                </script>
                    </div>
                        
                        @csrf
                        <button type="submit">Pridėti</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
@section('title') Naujas arklys @endsection