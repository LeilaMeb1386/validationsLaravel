@extends('layout.base')

@section('title', 'Home')

@section('content')
  <h1>Add one product</h1>
  <form class="" action="/insertsalle" method="post">
    @csrf
    <input required type="text" name="name" placeholder="salle-name">
    <input required type="text" name="position" value="" placeholder="posiiton">
    <input required type="text" name="status" value="" placeholder="status" >
    <select multiple class="" name="positions[]">
        @foreach ($position as $position)
          <option value="{{ $position->id }}">
          {{ $position->name }}
          </option>
        @endforeach
    </select>
    <select multiple class="" name="statuses[]">
      @foreach ($statuses as $status)
        <option value="{{ $status->id }}">
        {{ $status->name }}
        </option>
      @endforeach
    </select>
    <input type="submit" name="" value="Insert">
  </form>
    <h1>Liste des salles</h1>
    <div class="list">
    <table>
           <tr>
             <th>name</th>
             <th>Positions</th>
             <th>Statuses</th>
             <th>Delete</th>
             <th>Update</th>
           </tr>
           @foreach($salles as $salle)
             <tr>
               <td>{{ $salle->name}}</td>
               <td>
                 @foreach($salle->positions as $position)
                   {{ $position->name}},
                 @endforeach
               </td>
               <td>
                 @foreach($salle->statuses as $status)
                   {{ $status->name}},
                 @endforeach
               </td>
               <td><form class=""  action="/deletesalle" method="POST"> @csrf <input type="hidden" name="id" value="{{ $salle->id }}"><input type="submit" name="" value="X"></form></td>
               <td><form class=""  action="/updatesalle" method="POST"> @csrf <input type="hidden" name="id" value="{{ $salle->id }}"><input type="submit" name="" value="U"></form></td>
             </tr>

           @endforeach

         </table>
       </div>


@endsection
