@extends('app.master')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">List of commands</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Commmand Number</th>
          <th>Consummer name</th>
          <th>Date</th>
          <th>Status</th>
          <th>Options</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Trident</td>
          <td>AOL browser (AOL desktop)</td>
          <td>Win XP</td>
          <td>6</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 1.0</td>
          <td>Win 98+ / OSX.2+</td>
          <td>1.7</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 1.5</td>
          <td>Win 98+ / OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 2.0</td>
          <td>Win 98+ / OSX.2+</td>
          <td>1.8</td>
          <td>A</td>
        </tr>
        <tr>
          <td>Gecko</td>
          <td>Firefox 3.0</td>
          <td>Win 2k+ / OSX.3+</td>
          <td>1.9</td>
          <td>A</td>
        </tr>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@section('script')
<script>
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
@endsection
