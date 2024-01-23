@extends('app.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Commands</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                      <tr>
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 15%">
                              Consumer
                          </th>

                          <th>
                            Adresse
                          </th>
                          <th>
                            Product
                          </th>

                          <th>
                            Quantity
                          </th>


                          <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th>
                            Action
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($commands as $command)


                      <tr>
                          <td>
                              #
                          </td>
                          <td>
                              <a>
                                {{$command->date_commande}}
                              </a>
                              <br/>
                              <small>
                                  Created {{$command->date_commande}}
                              </small>
                          </td>

                          <td>
                                {{$command->adresse_livraison}}
                          </td>


                          <td>
                            ka3k
                        </td>
                        <td>20</td>
                        <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                          </a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
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
@section('menu')
@include('backoffice.Artisans.menu')
@endsection
@endsection
