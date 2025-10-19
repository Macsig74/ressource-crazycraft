<?php
$instance['test01'] = array_merge($instance['test01'], array(
    "loadder" => array(
        "minecraft_version" => "1.21.1",
        "loadder_type" => "NeoForge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        "config",
        "options.txt",
    ),
    "whitelist" => array(
        "xotrix",
    ),
    "whitelistActive" => false,
    "status" => array(
        "nameServer" => "Crazy-City",
        "ip" => "192.168.1.115",
        "port" => 25565
    )
));

