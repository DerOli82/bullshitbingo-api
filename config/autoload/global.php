<?php
return array(
    'db' => array(
        'adapters' => array(
            'bullshitbingodb' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'BullshitBingo\\V1' => 'bullshitbingoauth',
            ),
        ),
    ),
);
