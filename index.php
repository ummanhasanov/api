<?php

function testConnection() {
    $err = ['Error' => 'User or token is incorrect.'];

    $myJson = [
        'mca_email' => 'fabien@mymodcomments.com',
        'mca_token' => '23c4380e50caf91f81793ac91d9bfde9'
    ];

//    header('Content-Type: application/json; charset=UTF-8');

    if (isset($_GET['mca_email']) && $_GET['mca_email'] == $myJson['mca_email'] && isset($_GET['mca_token']) && $_GET['mca_token'] == $myJson['mca_token']) {
        echo json_encode("Success");
    } else {
        echo json_encode($err);
    }
}

function getShippingCost() {

    $json = ['ClassicDelivery' => 15, 'RelayPoint' => 5];

    echo json_encode($json);
}

function getRelayPoint() {
    $point = [
        ["name" => "Pasta & Dolce", "address" => "23 rue de provence, 75002 Paris"],
        ["name" => "Olympia", "address" => "28 boulevard des Capucines, 75009 Paris"]
    ];
    echo json_encode($point);
}

$methods = [
    'testConnection',
    'getShippingCost',
    'getRelayPoint',
];

if (isset($_GET['method']) && in_array($_GET['method'], $methods)) {
    $_GET['method']();
}

