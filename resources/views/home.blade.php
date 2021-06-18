@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-body">
    <h2>Užklausų lentelė</h2>
  @if($errors->any())
  <div class="alert alert-danger">
    <p><b>{{$errors->first()}}</b></p>
  </div>
  @endif

  <table class="table">
    <tr>
      <th>Užklausos laikas</th>
      <th>Puslapis</th>
      <th>Vardas</th>
      <th>Telefonas</th>
      <th>El.pastas</th>
      <th>Uzklausa</th>
    </tr>

    {{-- @foreach ($uzklausos as $uzklausos)
    <tr>
      <td>{{ $uzklausos->created_at }}</td>
      <td>{{ $uzklausos->puslapis }}</td> 
      <td>{{ $uzklausos->vardas }}</td>
      <td>{{ $uzklausos->tel }}</td> 
      <td>{{ $uzklausos->el_pastas }}</td>
      <td>{{ $uzklausos->uzklausa }}</td> 
      <td>
        <form action={{ route('uzklausos.destroy', $uzklausos->id) }} method="POST">
          <a class="btn btn-success" href={{ route('uzklausos.edit', $uzklausos->id) }}>Edit</a>
          @csrf @method('delete')
          <input type="submit" class="btn btn-danger" value="Delete" />
        </form>
      </td>

    </tr>
    @endforeach --}}
    
  </table>
  @if (session('status_success'))
  <div class="alert alert-success">
    <p style="color: green"><b>{{ session('status_success') }}</b></p>
  </div>
  @elseif(session('status_error'))
  <div class="alert alert-danger">
    <p style="color: red"><b>{{ session('status_error') }}</b></p>
  </div>
  @endif
  {{-- <div>
    <a href="{{ route('uzklausos.create') }}" class="btn btn-success">Add new request</a>
  </div> --}}
</div>
@endsection