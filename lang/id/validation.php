<?php

return [
    'custom' => [
        'data.name' => [
            'required' => 'Kolom wajib diisi',
        ],
        'data.email' => [
            'required' => 'Kolom wajib diisi',
            'email' => 'Kolom harus berupa alamat email yang valid',
            'unique' => 'Email sudah digunakan',
        ],
        'data.password' => [
            'required' => 'Kolom wajib diisi',
            'same' => 'Password tidak sama dengan konfirmasi',
            'min' => 'Minimal 8 karakter'
        ]
    ],
];
