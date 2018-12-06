
<?= $this->element('Lib/data_table') ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-body">


            <div class="form-group row ">
                <div class="col-md-6 ">
                    <h2 class="prompt-400 "><i class="fa fa-cogs"></i> ประวัติการอัพโหลด</h2>
                </div>


            </div>
            <table id="datatable" class="table table-responsive-lg table-responsive-sm" cellspacing="0"  width="100%">
                <thead>
                    <tr>


                        <th >วันที่</th>

                        <th style="text-align: center">รายการ</th>
                        <th style="text-align: center">View</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datas as $item): ?>
                        <tr >
                            <td><?= h($item->created) ?></td>
                            <td style="text-align: center"><?= h($item->name) ?></td>
                            <td style="text-align: center">
                             <?= $this->Html->link(BT_VIEW, ['action' => 'view', $item->id], ['escape' => false, 'label' => false]) ?>
                               
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

