<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Validasi
    |--------------------------------------------------------------------------
    |
    | Baris-baris bahasa berikut berisi pesan kesalahan default yang digunakan
    | oleh kelas validator. Beberapa aturan ini memiliki beberapa versi, seperti
    | aturan ukuran. Jangan ragu untuk menyesuaikan setiap pesan di sini.
    |
    */

    'accepted' => ' :attribute harus diterima.',
    'accepted_if' => ' :attribute harus diterima ketika :other adalah :value.',
    'active_url' => ' :attribute harus berupa URL yang valid.',
    'after' => ' :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => ' :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => ' :attribute hanya boleh berisi huruf.',
    'alpha_dash' => ' :attribute hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num' => ' :attribute hanya boleh berisi huruf dan angka.',
    'array' => ' :attribute harus berupa array.',
    'ascii' => ' :attribute hanya boleh berisi karakter alfanumerik satu-byte dan simbol.',
    'before' => ' :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => ' :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => ' :attribute harus memiliki antara :min dan :max item.',
        'file' => ' :attribute harus berukuran antara :min dan :max kilobyte.',
        'numeric' => ' :attribute harus antara :min dan :max.',
        'string' => ' :attribute harus memiliki antara :min dan :max karakter.',
    ],
    'boolean' => ' :attribute harus bernilai benar atau salah.',
    'can' => ' :attribute mengandung nilai yang tidak sah.',
    'confirmed' => 'Konfirmasi  :attribute tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date' => ' :attribute harus berupa tanggal yang valid.',
    'date_equals' => ' :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => ' :attribute harus sesuai dengan format :format.',
    'decimal' => ' :attribute harus memiliki :decimal tempat desimal.',
    'declined' => ' :attribute harus ditolak.',
    'declined_if' => ' :attribute harus ditolak ketika :other adalah :value.',
    'different' => ' :attribute dan :other harus berbeda.',
    'digits' => ' :attribute harus berisi :digits digit.',
    'digits_between' => ' :attribute harus berisi antara :min dan :max digit.',
    'dimensions' => ' :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => ' :attribute memiliki nilai duplikat.',
    'doesnt_end_with' => ' :attribute tidak boleh diakhiri dengan salah satu dari berikut: :values.',
    'doesnt_start_with' => ' :attribute tidak boleh dimulai dengan salah satu dari berikut: :values.',
    'email' => ' :attribute harus berupa alamat email yang valid.',
    'ends_with' => ' :attribute harus diakhiri dengan salah satu dari berikut: :values.',
    'enum' => 'Pilihan :attribute tidak valid.',
    'exists' => 'Pilihan :attribute tidak valid.',
    'extensions' => ' :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => ' :attribute harus berupa file.',
    'filled' => ' :attribute harus memiliki nilai.',
    'gt' => [
        'array' => ' :attribute harus memiliki lebih dari :value item.',
        'file' => ' :attribute harus lebih besar dari :value kilobyte.',
        'numeric' => ' :attribute harus lebih besar dari :value.',
        'string' => ' :attribute harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => ' :attribute harus memiliki :value item atau lebih.',
        'file' => ' :attribute harus lebih besar atau sama dengan :value kilobyte.',
        'numeric' => ' :attribute harus lebih besar atau sama dengan :value.',
        'string' => ' :attribute harus lebih besar atau sama dengan :value karakter.',
    ],
    'hex_color' => ' :attribute harus berupa warna heksadesimal yang valid.',
    'image' => ' :attribute harus berupa gambar.',
    'in' => 'Pilihan :attribute tidak valid.',
    'in_array' => ' :attribute harus ada di dalam :other.',
    'integer' => ' :attribute harus berupa bilangan bulat.',
    'ip' => ' :attribute harus berupa alamat IP yang valid.',
    'ipv4' => ' :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => ' :attribute harus berupa alamat IPv6 yang valid.',
    'json' => ' :attribute harus berupa string JSON yang valid.',
    'lowercase' => ' :attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => ' :attribute harus memiliki kurang dari :value item.',
        'file' => ' :attribute harus kurang dari :value kilobyte.',
        'numeric' => ' :attribute harus kurang dari :value.',
        'string' => ' :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => ' :attribute tidak boleh memiliki lebih dari :value item.',
        'file' => ' :attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => ' :attribute harus kurang dari atau sama dengan :value.',
        'string' => ' :attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => ' :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => ' :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => ' :attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => ' :attribute tidak boleh lebih besar dari :max.',
        'string' => ' :attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => ' :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => ' :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => ' :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => ' :attribute harus memiliki setidaknya :min item.',
        'file' => ' :attribute harus berukuran minimal :min kilobyte.',
        'numeric' => ' :attribute harus minimal :min.',
        'string' => ' :attribute harus minimal :min karakter.',
    ],
    'min_digits' => ' :attribute harus memiliki setidaknya :min digit.',
    'missing' => ' :attribute harus hilang.',
    'missing_if' => ' :attribute harus hilang ketika :other adalah :value.',
    'missing_unless' => ' :attribute harus hilang kecuali :other adalah :value.',
    'missing_with' => ' :attribute harus hilang ketika :values ada.',
    'missing_with_all' => ' :attribute harus hilang ketika :values ada.',
    'multiple_of' => ' :attribute harus kelipatan dari :value.',
    'not_in' => 'Pilihan :attribute tidak valid.',
    'not_regex' => 'Format  :attribute tidak valid.',
    'numeric' => ' :attribute harus berupa angka.',
    'password' => [
        'letters' => ' :attribute harus berisi setidaknya satu huruf.',
        'mixed' => ' :attribute harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => ' :attribute harus berisi setidaknya satu angka.',
        'symbols' => ' :attribute harus berisi setidaknya satu simbol.',
        'uncompromised' => ' :attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],
    'present' => ' :attribute harus ada.',
    'present_if' => ' :attribute harus ada ketika :other adalah :value.',
    'present_unless' => ' :attribute harus ada kecuali :other adalah :value.',
    'present_with' => ' :attribute harus ada ketika :values ada.',
    'present_with_all' => ' :attribute harus ada ketika :values ada.',
    'prohibited' => ' :attribute dilarang.',
    'prohibited_if' => ' :attribute dilarang ketika :other adalah :value.',
    'prohibited_unless' => ' :attribute dilarang kecuali :other ada di :values.',
    'prohibits' => ' :attribute melarang :other untuk hadir.',
    'regex' => 'Format  :attribute tidak valid.',
    'required' => ' :attribute wajib diisi.',
    'required_array_keys' => ' :attribute harus berisi entri untuk: :values.',
    'required_if' => ' :attribute wajib diisi ketika :other adalah :value.',
    'required_unless' => ' :attribute wajib diisi kecuali :other ada di :values.',
    'required_with' => ' :attribute wajib diisi ketika :values ada.',
    'required_with_all' => ' :attribute wajib diisi ketika :values ada.',
    'required_without' => ' :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => ' :attribute wajib diisi ketika tidak ada satu pun dari :values yang ada.',
    'same' => ' :attribute dan :other harus cocok.',
    'size' => [
        'array' => ' :attribute harus berisi :size item.',
        'file' => ' :attribute harus berukuran :size kilobyte.',
        'numeric' => ' :attribute harus berukuran :size.',
        'string' => ' :attribute harus berisi :size karakter.',
    ],
    'starts_with' => ' :attribute harus dimulai dengan salah satu dari berikut: :values.',
    'string' => ' :attribute harus berupa string.',
    'timezone' => ' :attribute harus berupa zona waktu yang valid.',
    'unique' => ' :attribute sudah digunakan.',
    'uploaded' => ' :attribute gagal diunggah.',
    'uppercase' => ' :attribute harus berupa huruf kapital.',
    'url' => ' :attribute harus berupa URL yang valid.',
    'uuid' => ' :attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Baris Bahasa Kustom untuk Validasi Atribut
    |--------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan
    | menggunakan konvensi "attribute.rule" untuk memberi nama baris. Ini
    | mempermudah menentukan baris bahasa kustom tertentu untuk aturan atribut.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'pesan kustom',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Atribut Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Baris bahasa berikut digunakan untuk mengganti placeholder atribut kami
    | dengan sesuatu yang lebih ramah pembaca seperti "Alamat Email" daripada
    | "email". Ini benar-benar membantu kita membuat pesan lebih ekspresif.
    |
    */

    'attributes' => [],

];

