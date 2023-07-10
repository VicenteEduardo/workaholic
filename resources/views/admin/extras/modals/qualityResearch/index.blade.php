<form class="card-body" action="{{ route('admin.qualityResearch.report') }}" target="_blank">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Imprimir Relatório Sobre a Pesquisa de Qualidade</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Mediateca <span class="text-danger">*</span></label>
                        <div class="col-md-10">
                            <select required name="origin" class="form-control">
                                <option value="Mediateca do Lubango">Mediateca do Lubango</option>
                                <option value="Mediateca do Soyo">Mediateca do Soyo</option>
                                <option value="Mediateca de Benguela">Mediateca de Benguela</option>
                                <option value="Mediateca de Luanda 28 de Agosto">Mediateca de Luanda 28 de Agosto</option>
                                <option value="Mediateca António Didalelwa">Mediateca António Didalelwa</option>
                                <option value="Mediateca Rei Ngola Kiluanji">Mediateca Rei Ngola Kiluanji</option>
                                <option value="Mediateca Abel Abraão">Mediateca Abel Abraão </option>
                                <option value="Mediateca de Saurimo">Mediateca de Saurimo</option>
                                <option value="Mediateca do Huambo">Mediateca do Huambo</option>
                                <option value="Mediateca Zé Dú">Mediateca Zé Dú </option>
                                <option value="all">Todas as Mediatecas</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <b class="col-md-12 text-left mb-3">Incluir Colunas no Relatório</b>
                        <div class="col-md-12">
                            <div class="row text-left mx-2">

                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="mediaLibrarie" checked>
                                    <small>Mediateca a Avaliar</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="gender" checked>
                                    <small>Sexo</small>
                                </div>

                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="age" checked>
                                    <small>Média de Idade</small>
                                </div>

                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="employeeService" checked>
                                    <small>Atendimento dos funcionários</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="communication" checked>
                                    <small>Comunicação/ Divulgação</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="educationalActivities" checked>
                                    <small>Atividades culturais/ educativas</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="collection">
                                    <small>Acervo (Livros, revistas, filmes e jornais, jogos)</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="connection">
                                    <small>Internet, conexão e computadores</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="cleaning">
                                    <small>Limpeza</small>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input type="checkbox" class="form-check-input" name="safety">
                                    <small>Segurança</small>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn px-5 col-md-4 btn-primary">Imprimir</button>
                    </div>
                </div>
            </div>
        </div>
</form>