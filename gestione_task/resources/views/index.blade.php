@extends('layouts.home')

@section('content')

  <div class="">
    <h2>BENVENUTO UTENTE</h2>
  </div>
  <div class="tasks">
    <ul>
      @foreach ($tasks as $task)
        <li>
          name: {{ $task['name'] }} <br>
          description: {{ $task['description'] }} <br>
          deadline: {{ $task['deadline'] }} <br>
        </li>
        {{-- quando ci sono dipendenze il modo più semplice per richiamare la corrispondenza è fare come segue per stampare il nome. Praticamente richiamo prima la tabella employye e poi di quella tabella il name --}}
        <br>
        <br>
        Employee: {{ $task -> employee -> firstname}}
        <br>
        <br>
      @endforeach
    </ul>
  </div>

@endsection
