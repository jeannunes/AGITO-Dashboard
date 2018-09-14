<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div> -->
<script>
    $(document).ready(function () {
        $.notify({
            message: "<?=h($message)?>",
            type: 'primary'
        });
    });
</script>