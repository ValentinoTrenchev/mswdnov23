<?php
$socialItems = [
    ['name' => 'Twitter','url'=> 'https://twitter.com/icemalta', 'icon'=> '<i class="bi-twitter-x" style="font-size: 1.5rem;"></i>'],
    ['name' => 'Instagram','url'=> 'https://www.instagram.com/icemalta', 'icon'=> '<i class="bi-instagram" style="font-size: 1.5rem;"></i>'],
    ['name' => 'Facebook','url'=> 'https://www.facebook.com/icemalta/', 'icon'=> '<i class="bi-facebook" style="font-size: 1.5rem;"></i>']
];
?>


<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="https://icemalta.com" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <i class="bi-rocket-takeoff" style="font-size: 1.5rem;"></i>
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">©
                <?= date('Y') ?> ICE Malta
            </span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">

        <?php
            foreach ($socialItems as $socialItem) {
            echo <<<ITEM
                <li class="ms-3">
                    <a class="text-body-secondary"
                        href="{$socialItem['url']}" aria-current="page">{$socialItem['icon']}</a>
                    </li>
                ITEM;
            }
        ?>
        </ul>
    </footer>
</div>