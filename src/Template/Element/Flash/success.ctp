<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->

<div class="alert alert-brand alert-dismissible fade show   m-alert m-alert--square m-alert--air" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        <strong>
            Notification!
        </strong>
        <?= $message ?>
</div>
