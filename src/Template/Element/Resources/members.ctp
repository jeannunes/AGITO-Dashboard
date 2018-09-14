<section class="jumbo" id="members">
    <div class="jumbo-content dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <h3><?= __('Members'); ?></h3>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-9">

                    <h6><?= __('Coordinator'); ?></h6>
                    <p>
                        <?= $this->Html->link('Prof. Emerson Cabrera Paraiso', 'http://www.ppgia.pucpr.br/~paraiso'); ?>
                        <br/>
                        paraiso@ppgia.pucpr.edu.br
                    </p>

                    <h6><?= __('Researchers'); ?></h6>
                    <p>
                        <?= $this->Html->link('Jean Ricardo Nunes Maciel', 'http://lattes.cnpq.br/0878673227537487'); ?>
                        - <?= __('Scientific Initiation'); ?>
                        <br/>
                        jean.maciel@pucpr.edu.br
                    </p>

                    <?php if (isset($extras)): ?>

                        <h6><?= __('Collaborators'); ?></h6>
                        <p>
                            <?= $this->Html->link('Prof. Emerson Cabrera Paraiso', 'http://www.ppgia.pucpr.br/~paraiso'); ?>
                            <br/>
                            paraiso@ppgia.pucpr.edu.br
                        </p>

                        <h6><?= __('Alumni'); ?></h6>
                        <p>
                            <?= $this->Html->link('Prof. Emerson Cabrera Paraiso', 'http://www.ppgia.pucpr.br/~paraiso'); ?>
                            <br/>
                            paraiso@ppgia.pucpr.edu.br
                        </p>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>