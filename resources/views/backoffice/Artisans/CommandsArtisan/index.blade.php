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
                            {{$command->consommateur->nom_consommateur}} {{$command->consommateur->prénom_consommateur}}
                              <br/>
                              <small>
                                  Created {{$command->date_commande}}
                              </small>
                          </td>

                          <td>
                                {{$command->adresse_livraison}}
                          </td>

                          <td>
                            @foreach ($command->produits as $product)
                            @foreach ($quantite_produits as $quantite_produit)

                                    @if ($product->Id_Produit == $quantite_produit->Id_Produit)
                                            {{$product->nom_produit}}
                                            @break
                                    @endif
                                 @endforeach
                        @endforeach

                          </td>
                          <td>
                            @foreach ($quantite_produits as $quantite_produit)
                                @if ($quantite_produit->Id_Commande == $command->Id_Commande)
                                        {{$quantite_produit->quantité_demande}}
                                        @break
                                @endif
                            @endforeach
                        </td>

                        <td class="project-state">
                          <span class="badge @if($command->état_commande == 'Refuse') badge-danger @elseif ($command->état_commande == 'Acceptée') badge-success @elseif ($command->état_commande == 'Affecter') badge-primary @elseif ($command->état_commande == 'Livrer') badge-info @else badge-secondary @endif ">{{$command->état_commande}}</span>
                      </td>
                        <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="mycommand/{{$command->Id_Commande}}/edit">
                          <i class="fas fa-eye">
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
