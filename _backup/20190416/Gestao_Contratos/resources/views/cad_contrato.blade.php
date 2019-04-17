@extends('principal') @section('conteudo')
<section class="panel">
    <header class="panel-heading">
        Cadastrar Contrato
    </header>
    <div class="panel-body">
        <div class="form">
            <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                <div class="form-group ">
                    <label for="num_contrato" class="control-label col-lg-2">Número Contrato <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="num_contrato" name="num_contrato" type="text" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="objeto" class="control-label col-lg-2">Objeto Contratado <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="objeto" name="objeto" type="text" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <label for="inicio" class="control-label col-lg-4">Data inicio <span
                                        class="required">*</span></label>
                                <div class="col-lg-8">
                                    <input class="form-control " id="inicio" name="inicio" type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <label for="fim" class="control-label col-lg-4">Data fim <span
                                        class="required">*</span></label>
                                <div class="col-lg-8">
                                    <input class="form-control " id="fim" name="fim" type="date" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                    <label for="valor" class="control-label col-lg-2">Valor Total <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control " id="valor" name="valor" type="text" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="num_edital" class="control-label col-lg-2">Número/Ano edital <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <input class="form-control " id="num_edital" name="num_edital" type="text" />
                    </div>
                </div>
                <div class="form-group ">
                    <label for="modalidade" class="control-label col-lg-2">Modalidade <span
                            class="required">*</span></label>
                    <div class="col-lg-10">
                        <select class="form-control " id="modalidade" name="modalidade">
                            <option value="uni">Unilateral</option>
                            <option value="bi">Bilateral</option>
                            <option value="pluri">Plurilateral</option>
                        </select>
                    </div>
                </div>
                <div class="form-group ">

                    <div class="row" style="margin: 30px; margin-top:10px">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Contrato
                                </header>
                                <div class="panel-body">
                                    <div class="TabControl">
                                        <div id="header">
                                            <ul class="abas">
                                                <li>
                                                    <div class="aba">
                                                        <span>Links</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="aba">
                                                        <span>Arquivos</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="content">
                                            <div class="conteudo">
                                                Conteúdo da aba 1
                                            </div>
                                            <div class="conteudo">
                                                Conteúdo da aba 2
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Cadastrar</button>
                        <button class="btn btn-default" type="reset">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@stop