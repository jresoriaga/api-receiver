@extends('layouts.app')

<style>

    
</style>

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr class="coke_bg text-uppercase">
                <th> id</th>
                <th> name</th>
                <th> middle name</th>
                <th> last name  </th>
                <th> email Address </th>
                <th> phone</th>
                <th> adddress </th>
                <th> city </th>
                <th> time created </th>
            </tr>
        </thead>
        <tbody>
             @foreach($students as $student)
              <tr>
                  <td> {{$student->id}} </td>
                  <td> {{$student->firstname}} </td>
                  <td> {{$student->middlename}} </td>
                  <td> {{$student->lastname}} </td>
                  <td> {{$student->email}} </td>
                  <td> {{$student->phone2}} </td>
                  <td> {{$student->address}} </td>
                  <td> {{$student->city}} </td>
                  <td> {{date('m/d/Y', $student->timecreated)}} </td>
              </tr>
             @endforeach
        </tbody>
        </table>
        {{-- <span class="d-flex justify-content-center">
            {{$students -> links()}}
        </span> --}}
    </div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html> 