<?php //Генерация хеша для паролей пользователей
    /* $hashMass['admin'] = password_hash('3zMoRLzP', PASSWORD_DEFAULT);
    $hashMass['kontent'] = password_hash('DeL1ayK*', PASSWORD_DEFAULT);
    $hashMass['manager'] = password_hash('K881POKp', PASSWORD_DEFAULT);
    $hashMass['developer'] = password_hash('ui1D49oc3', PASSWORD_DEFAULT);
    $hashMass['seo-master'] = password_hash('j3yCzR0R', PASSWORD_DEFAULT); */

    //Так пароль хранить нельзя, но раз нет БД, то для проверки оставлю пароли здесь...
    $users = [
      [
        'login' => 'admin',
        'password' => '3zMoRLzP',
        'hash' => '$2y$10$z7ucSdd/mIFHfufZFI9ANuQmgFbr3WB4gs0GmqN53jZEsgrwSVwVi'
      ],
      [
        'login' => 'kontent',
        'password' => 'DeL1ayK*',
        'hash' => '$2y$10$BQdw9uOPB0IBRo0Lv0ZM5.NtUeNvN4/Zc26UwCUxHH8bAtwCNOy82'
      ],
      [
        'login' => 'manager',
        'password' => 'K881POKp',
        'hash' => '$2y$10$aJy63tM3UeztmTOzUdjcqeN53HvtBliPWLzeNAGLIqvBy4tAli02W'
      ],
      [
        'login' => 'developer',
        'password' => 'ui1D49oc3',
        'hash' => '$2y$10$Yl.QsYYau8mtBn6RZpqtjuAU78Y3gzOlSdOimtO/lrW5/IdYLGkwC'
      ],
      [
        'login' => 'seo-master',
        'password' => 'j3yCzR0R',
        'hash' => '$2y$10$2Sklo7gpd6vBJVlHZZmAouaIyx3UtgUyL0d.Ttr5kfdw.BILMYxh2'
      ],
    ];