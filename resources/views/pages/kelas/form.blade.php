@extends('layouts.index')
@section('content')
<div class="container mt-4">
    <h1>{{ $student->id ? "Edit" : "Create" }}</h1>
    @if ($student->id)
        <form action="{{ route('student.update', ['student' => $student->id]) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">

    @endif
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">class_id</label>
            <select name="class_id" id="class_id" class="form-select">
                @foreach ($majors as $item)
                <option value=" {{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            @error('class_id') <div class="text-muted">{{ $message }}</div> @enderror
          </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{ $student->name }}">
        @error('title') <div class="text-muted">{{ $message }}</div> @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Born_date</label>
        <textarea class="form-control" name="born_date" id="exampleFormControlTextarea1" rows="3">{{ $student->born_date }}</textarea>
        @error('born_date') <div class="text-muted">{{ $message }}</div> @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">gender</label>
        <select name="gender" id="gender" class="form-select">
            <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>
        </select>
        @error('status') <div class="text-muted">{{ $message }}</div> @enderror
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary mb-3">Confirm</button>
      </div>
    </form>
    </div>
@endsection
