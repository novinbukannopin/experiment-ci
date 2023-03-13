<div class="container mx-auto px-4 my-8">
    <p>HOMEPAGE</p>
    <p>
        <?php
        if (isset($session) && !empty($session->getFlashdata('message'))) {
            echo $session->getFlashdata('message');
        }
        ?>
    </p>
</div>