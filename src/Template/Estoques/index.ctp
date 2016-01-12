

<?= $this->Flash->render() ?>


<form class="form-inline">

    <div class="form-group">
        <label class="sr-only" for="exampleInputAmount">Descricao</label>
        <div class="input-group">      
            <input type="text" class="form-control" id="txt_descricao" placeholder="Amount">  

            
            
            
        </div>
        

    </div>
    <button id="btn_buscar_estoques" type="button" class="btn btn-primary">Buscar</button>
    
            <div id="barra" class="progress hidden">
            <div class=" progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                <span class="sr-only">45% Complete</span>
            </div>
        </div>            

    
    
</form>


<div class="col-lg-12">

    <textarea id="msg" class="form-control" rows="3">
        <?php
        $name = $this->request->session()->read('nome');
        echo "sessao " . $name;
        ?>
    </textarea>

</div>




<div class="col-lg-6">
    <h2><?= __('Estoques') ?></h2>        
    <?= $this->Html->link(__('Novo Estoque'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <br/><br/>





    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('active') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>

            </thead>
            <tbody id="corpo_tabela">
                <?php foreach ($estoques as $estoque): ?>
                    <tr>
                        <td><?= $this->Number->format($estoque->id) ?></td>
                        <td><?= h($estoque->descricao) ?></td>
                        <td><?= $this->Number->format($estoque->active) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('view'), ['action' => 'view', $estoque->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estoque->id]) ?>
                            <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $estoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estoque->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>


<?php
//nadaa
?>

