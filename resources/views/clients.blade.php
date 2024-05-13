@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Edit Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulaire de modification du client</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Delete  Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation de suppression du client</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form method="post" action="">
                            Voulez-vous supprimer le client ?
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Annuler</button>
                                <a type="submit" id="deletebtn" href="" class="btn btn-danger align-center " value="Ajouter">Supprimer</a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Add Modal -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulaire d'ajout d'un client</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- end modals  -->


        <div class="d-flex justify-content-between align-items-center">
            <span class="display-5">Liste des clients</span>
            <span>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                    Ajouter client
                </button>
            </span>
        </div>
        <table class='table
         border'>
            <tr>
                <th scope="col" class="col-2">Nom</th>
                <th scope="col" class="col-2">Prénom</th>
                <th scope="col" class="col-2">Date de naissance</th>
                <th scope="col" class="col-1">Sexe</th>
                <th scope="col" class="col-2">Adresse</th>
                <th scope="col" class="col-2">Operations</th>
            </tr>


            <tr>
                <td>rownom_etu</td>
                <td>rowprenom_etu</td>
                <td>rowdate_nais</td>
                <td>rowsexe</td>
                <td>rowadresse</td>
                <td>
                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Modifier</button>
                    <button type='button' id='submit' class='btn btn-sm btn-danger' data-bs-toggle='modal' data-target='#exampleModal1' data-bs-target='#exampleModal1'>Supprimer
                    </button>
                </td>
            </tr>" ;
        </table>

    </div>
</div>
@endsection