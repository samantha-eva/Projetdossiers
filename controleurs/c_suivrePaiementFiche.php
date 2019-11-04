<?php

include("vues/v_sommaire.php");
?>

<div class="container">



    <!---------- Tableau des fiches de frais ---------->



    <div class="panel panel-info">

        <div class="panel-heading">Fiches de frais</div>

        <table id="tableau-fiches" class="table table-bordered table-responsive tablesorter">

            <thead>

                <tr>

                    <th class="col-md-1 filter-false"><input type="checkbox" id="tout_cocher" class="tout_cocher"

                                                             onclick="toutCocher('tout_cocher');"></th>

                    <th class="col-md-2">Visiteur</th>

                    <th class="col-md-2 filter-select sorter-ddmmyy" data-placeholder="Tous les mois">Mois (aaaa-mm)</th>

                    <th class="col-md-1">Montant</th>

                    <th class="col-md-2">Date de modification</th>

                    <th class="filter-select filter-exact"

                        data-placeholder="Tous les états">Etat fiche</th>

                    <th class="col-md-1 filter-false">Action</th>

                </tr>

            </thead>

            <tfoot>

                <tr>

                    <th class="col-md-1"><input type="checkbox" id="tout_cocher_foot" class="tout_cocher" 

                                                onclick="toutCocher('tout_cocher_foot');"></th>

                    <th class="col-md-50">Visiteur</th>

                    <th class="col-md-50">Mois (aaaa-mm)</th>

                    <th class="col-md-50">Montant</th>

                    <th class="col-md-50">Date de modification</th>

                    <th class="col-md-50">Etat fiche</th>

                    <th class="col-md-50">Action</th>

                </tr>

                <tr>

                    <th colspan="7" class="ts-pager form-inline">

                        <div class="btn-group btn-group-sm" role="group">

                            <button type="button" class="btn btn-default first">

                                <span class="glyphicon glyphicon-step-backward"></span>

                            </button>

                            <button type="button" class="btn btn-default prev">

                                <span class="glyphicon glyphicon-backward"></span>

                            </button>

                        </div>


                     
                </tr>

            </tfoot>  

            <tbody> 

               
