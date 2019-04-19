<?php

return [
    'alipay' => [
        'app_id'         => '2016092700605379',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvEofKgojpG3sTnaVbbAQW5WuJgFEskliuSKRxm9Tm9D5NWcXS8fm/baPNmLLd+mO/n6BrBZvH08npe3UPakqsK4GRT3z52DO/jM39k2PsUE9eEwq90n7SBITo7Gb0KUqg6MAef99U4LafMeXs0go8QbwSRg46x7Vv+5Iec5Msss0g0R2lu8VCHcHBZm2jzdgQt+3Jc2VjQTAyuI+Fn0WoTuovouTlcHpPxOof1AfOIYaPLpHKnU9bkKtCEMEwwxeoKX2Jc7yPSIOVtrauyrH4Qx0176gW/pm8pgZKZrn8k+zpm0DuDGj61n39iMpL6Al2hwcCreJTcR2uHFZo1i4CwIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAqoApDxeoJZ/QCiKnI5uftNxgh2D7nGpUTX94fAMse840cFzvpVpeloNL5TckVgpgKVw9ZMsctQku1rbX2mtytGILp0Ng718VJB/oL/4esoAqeZ4zTYOGPNswZgCA4nUSnEFXFV4TteHxdTzDVj8cmmt1v+DB2GzBx6So4Me4X/zP2ifJ/Nscas8raMwDbrzcF061VSu4huvdOzVTzkDj5ZShi/6rChn2Fy5g2zT8kQwInX/cJeP/LKymN4lfO9eI9gzcMTxFhRlaiE+nTJGfFxw+dqZOaJ3bacJQ0FybZQ4lYfJ5fJREUUfP2MLzvqk2yHEIYUmbmHwzn812BRHbiQIDAQABAoIBACc6u7e8QrT9c1mRpZE80l9DwXYEq3/Ouzzlkmw+MrL9u/UKfR03kMHizcicimC9nGiHz5xsW1uQFFXU1g9sX4T/dhzzFM+eufeI29yHBLsfYCaBbt5r36wK5rThcsYoF7MaGZZSAgj8Rpkp9OvYM5WYGgyfAxrv0xpDWZP2gAadfT+/fWVVSlhOiZZb4u+Qz0k0woHJH4N/l6uCdDwj92GaJ1iKo2eEG2i4AZcqNhZHYv51PfqnhIPw3hZbaxl4BzoSqgXOi3ijjHDahh6euc5R/RF8DM7oakuuEB725HjmjSvI+WXSffIX+0rofnneM+2bTKIHrmRJPBTyKdSQdHECgYEA3zPJAmPZb5shubd6ZE4L41KhInHVDKBzg1dga0AcAhlKzMxC3Mm418nlZUrH8+Dpcw4Em53UIFX2LSM1joPye83XMES9YaJZEs02cdDjICuxml8j1tEE+Mg4M8yCc0pYALvJ2frX5mzuiKiCO2l5yZqyzJsYLV8CK9x1wrj4Xb0CgYEAw43kuk64K0PAxBocgwF1HMsyToubPM6770m+eAUZqw2+XSHleAEhYxRnfEy9sEd2WGk6SijLUD0uVPcIdma5bM4hVMnekbrNo9NcDH9iolmv89fKwFcl07TWKGgEipwg8iLR99Nuphpwg2z3k1VK5i3F7+WykcIquSwa5EOoM70CgYA9aZI1BiQdgSGWZ9VVI+RBd8q+H3PvNXaS/Meautj5+tuJ3enHtfkV5ocnh5vcjlWtQn4iExr6iqxhXv6tZ8CgL9K1hTRWWMUJV01To5XalCsZvnOt93TWvsA4AF0kO6BbE1BGma4tyGsZTsQGdM79mYL4qPPOCAYg61e7bAlqQQKBgDGzDj6LYyMbxRIR0M06wZjfy5lKwdlicUEPbOjz4uImTAs/YiJtpx6XQPXGSy9R+jHeDIJse7+YzP2rCuuMj/OnL7Fs3LQM1dadEPfcKCU6xg0i+tSHUYXMn+EFDqJrq7PeRZ7GjYiJj67XMtSvCKoXWAbwScHhpxoIq4z35PfBAoGAYmPH0iqp8DDw2n5DgibyrWT32t3+mQjuWTf29A2BuawQyL83GTm76rzoH0q4aZz2Dpz2E1bLzxF4Xy3IlGiO3Dl2mR6UrH8WUL5NIh+VMrIV3HW+WiguD3GExUghv3EaQCVN6Cosx979/mfXu8r1GI+Nnv79IqcLe+dehbkd8DI=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];