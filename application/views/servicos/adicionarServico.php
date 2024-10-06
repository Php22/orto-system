<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title" style="margin: -20px 0 0">
                <span class="icon">
                    <i class="fas fa-wrench"></i>
                </span>
                <h5>Cadastro de Trabalhos</h5>
            </div>
            <div class="widget-content nopadding tab-content">
                <?php echo $custom_error; ?>
                <form action="<?php echo current_url(); ?>" id="formServico" method="post" class="form-horizontal">
                    <div class="control-group">
                        <label for="nome" class="control-label">Cliente<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nome" type="text" name="nome" value="<?php echo set_value('nome'); ?>" />
                        </div>
                        <div class="control-group">
                        <label for="paciente" class="control-label">Paciente<span class="required">*</span></label>
                        <div class="controls">
                            <input id="paciente" type="text" name="paciente" value="<?php echo set_value('paciente'); ?>" />
                        </div>
                        <div class="control-group">
                        <label for="trabalho" class="control-label">Trabalho<span class="required">*</span></label>
                        <div class="controls">
                            <input id="trabalho" type="text" name="trabalho" value="<?php echo set_value('trabalho'); ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="preco" class="control-label"><span class="required">Valor*</span></label>
                        <div class="controls">
                            <input id="preco" class="money" data-affixes-stay="true" data-thousands="" data-decimal="." type="text" name="preco" value="<?php echo set_value('preco'); ?>" />
                       
                     </div>
                     </div>
                        <div class="control-group">
                        <label for="agenda" class="control-label">Data Agenda<span class="required">*</span></label>
                        <div class="controls">
                            <input id="agenda" type="text" name="agenda" value="<?php echo set_value('agenda'); ?>" />
                        </div>
                    </div>
                    <div class="span2">
                                            <label for="status">Status<span class="required">*</span></label>
                                            <select class="span10" name="status" id="status" value="">
                                                <option value="Agenda">Agenda</option>
                                                <option value="Sem data">Sem data</option>
                                                <option value="Producao">Produção</option>
                                                
                                                <option value="Finalizado">Finalizado</option>
                                                
                                            </select>
                                        </div>
                    <!-- <div class="control-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <div class="controls">
                            <input id="descricao" type="text" name="descricao" value="<?php echo set_value('descricao'); ?>" />
                        </div> -->
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3" style="display:flex;justify-content: center">
                                <button type="submit" class="button btn btn-mini btn-success" style="max-width: 160px">
                                  <span class="button__icon"><i class='bx bx-plus-circle'></i></span><span class="button__text2">Adicionar</span></a></button>
                                <a href="<?php echo base_url() ?>index.php/servicos" id="btnAdicionar" class="button btn btn-mini btn-warning" style="max-width: 160px">
                                  <span class="button__icon"><i class="bx bx-undo"></i></span><span class="button__text2">Voltar</span></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/maskmoney.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".money").maskMoney();
        $("#nome").autocomplete({
            source: "<?php echo base_url(); ?>index.php/servicos/autoCompleteCliente",
            minLength: 1,
        });

        $('#formServico').validate({
            rules: {
                nome: {
                    required: true
                },
                preco: {
                    required: true
                }
            },
            messages: {
                nome: {
                    required: 'Campo Requerido.'
                },
                preco: {
                    required: 'Campo Requerido.'
                }
            },
            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
    });
</script>
