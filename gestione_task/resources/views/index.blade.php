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
        {{-- quando ci sono dipendenze il modo più semplice per richiamare la corrispondenza è fare come segue per stampare il nome. Praticamente richiamo prima la tabella employye e poi di quella tabella il name (o il dato) --}}
        <br>
        <br>
        {{-- il dato employee si riferisce alla funzione employee() creata nel Model Tast.php --}}
        Employee: {{ $task -> employee -> firstname}}
        <br>
        <br>
        <a href="{{ route('edit', $task['id']) }}"> Edit me</a>
        <hr>
      @endforeach
    </ul>
  </div>

@endsection
