@extends('layouts.home')

@section('content')

  <form action="" method="post">

    <label for="name"> name: </label>
    <input type="text" name="name" value="{{ $task['name'] }}">
    <br>


    <label for="description">description:</label>
    <input type="text" name="description" value="{{ $task['description'] }}">
    <br>

    <label for="deadline">deadline:</label>
    <input type="text" name="deadline" value="{{ $task['deadline'] }}">
    <br>


    <label for="employee">Employee: </label>
    <select name="employee">
      @foreach ($employees as $employee)
        <option value=""></option>
        <option value="{{ $employee['firstname'] }}"

        @if ($employee['firstname'] == $task -> employee -> firstname)
          selected
        @endif
        > "{{ $employee['firstname'] }}" </option>
      @endforeach
    </select>
    <br>

    <input type="submit" name="" value="UPDATE">


  </form>

@endsection
