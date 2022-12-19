<?php

$users = [
    ['name' => 'Bebras', 'psw' => '123', 'color' => 'crimson'],
    ['name' => 'Briedis', 'psw' => '123', 'color' => 'skyblue'],
    ['name' => 'Parsas', 'psw' => '123', 'color' => 'pink']
];

file_put_contents(__DIR__ . '/users', serialize($users));