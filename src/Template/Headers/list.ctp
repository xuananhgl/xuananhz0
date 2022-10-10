
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Headers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>

                <th scope="col"><?= $this->Paginator->sort('about') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bnt') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($headers as $header): ?>
            <tr>
                <td><?= $this->Number->format($header->id_headers) ?></td>

                 <td><?= h($header->about) ?></td>
                <td><?= h($header->title) ?></td>
                <td><?= h($header->button	) ?></td>
                <td><?= h($header->video) ?></td>




                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $header->id_headers]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $header->id_headers]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $header->id_headers],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $header->id_headers)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
