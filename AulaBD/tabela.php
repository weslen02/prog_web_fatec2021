<table>
    <tr>
        <th>Tarefa</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
        <th>Opções</th>
    </tr>

    <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa['nome']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td>
            <td>
                <?php
                echo  date('d-m-Y', strtotime($tarefa['prazo']));
                //traduz_data_para_exibir($tarefa['prazo']); 
                ?>
            </td>
            <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
            <td>
                <?php
                echo traduz_concluida($tarefa['concluida']);
                ?>
            </td>
            <td>
                <a href="editar.php?id=<?php echo $tarefa['id']; ?> "></a>
                Editar
            </td>
        </tr>
    <?php endforeach; ?>
</table>