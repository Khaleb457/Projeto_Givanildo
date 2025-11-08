<?php
require_once __DIR__ ."../../modal/modalTarefa.php";                

?>
<div class="modal-overlay" id="taskModalOverlay">
    <div class="modal-content">
        
        <div class="modal-header">
            <button type="button" class="modal-save-btn" id="saveTaskIcon">
                <i class="fas fa-save save-icon"></i>
                <span class="save-text">Salvar</span>
            </button>
            
            <h2 class="modal-title">Tarefas</h2>
            
            <button class="modal-close-btn" id="closeTaskModal">
                <span class="close-text">Sair</span>
                <i class="fas fa-sign-out-alt close-icon"></i>
            </button>
        </div>

        <form id="taskForm" action="controller/TarefaController.php" method="POST">
            <div class="modal-body task-modal-body">
                
                <div class="input-full-width">
                    <input type="text" name="titulo" placeholder="Título" required>
                </div>
                
                <div class="input-row">
                    <div class="input-select-group">
                        <select name="categoria_id" required>
                            <option value="" disabled selected>Categoria</option>
                            
                            <?php 
                                // O PHP dinâmico irá preencher esta área:
                                // if (isset($categorias) && is_array($categorias)) {
                                //     foreach ($categorias as $cat) {
                                //         echo "<option value=\"{$cat['CATE_ID']}\">{$cat['CATE_DESCRICAO']}</option>";
                                //     }
                                // }        
                            ?>
                            <option value="1">Trabalho</option>
                            <option value="2">Pessoal</option>
                            <option value="3">Estudos</option>
                            
                        </select>
                    </div>

                    <div class="input-date-group">
                        <i class="far fa-calendar-alt date-icon"></i>
                        <input type="date" name="data_vencimento" value="2025-08-31" required>
                    </div>
                </div>

                <div class="input-full-width description-area">
                    <textarea name="descricao" placeholder="Descrição"></textarea>
                </div>
            </div>
            
            <button type="submit" style="display: none;" id="submitTaskBtn"></button>
        </form>
    </div>
</div>