<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <title><?= $this->fetch('title') ?></title>
</head>
<body>
<table style="width: 100%;">
    <tr>
        <td>
            <h1 style="text-align: center;">AGITO</h1>
        </td>
    </tr>
    <tr>
        <td>
            <?= $this->fetch('content'); ?>
        </td>
    </tr>
    <tr>
        <td>
            <table style="width: 100%;">
                <tr>
                    <td>
                        <a href='https://play.google.com/store/apps/details?id=br.com.pucpr.politecnica.lasin.agito&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'
                           target='_blank'>
                            <img alt='Disponível no Google Play' width="200"
                                 src='https://play.google.com/intl/en_us/badges/images/generic/pt_badge_web_generic.png'/>
                        </a>
                    </td>
                    <td><?= __('Brought to you by'); ?></td>
                    <td><?= $this->Html->link('PUCPR', 'https://pucpr.br', ['target' => '_blank']); ?></td>
                    <td><?= $this->Html->link('UFMG', 'https://ufmg.br/', ['target' => '_blank']); ?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="font-size: xx-small;text-align: center;">
            <?= __('Google Play and its logo are trademarks from Google LLC.'); ?>
        </td>
    </tr>
</table>
</body>
</html>
