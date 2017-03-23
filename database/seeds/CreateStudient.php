<?php

use Illuminate\Database\Seeder;

class CreateStudient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();


        DB::table('users')->insert([
            'nom' => "Aguer",
            'prenom' => 'Julien',
            'email' => 'julien.aquer@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bagneres",
            'prenom' => 'Raphael',
            'email' => 'raphael.bagneres-pedeboscq@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Baudou",
            'prenom' => 'Thomas',
            'email' => 'thomas.baudou@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Berque",
            'prenom' => 'Beila',
            'email' => 'leila.berque@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Biron",
            'prenom' => 'Nolann',
            'email' => 'nolann.biron@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bordas",
            'prenom' => 'Pierre',
            'email' => 'pierre.bordas@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bouchou",
            'prenom' => 'Michel',
            'email' => 'michel.bouchou@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bourges",
            'prenom' => 'Pierre',
            'email' => 'pierre.bourges@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Bouteiller",
            'prenom' => 'Aurelien',
            'email' => 'aurelien.bouteiller@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Boutet",
            'prenom' => 'Loanne',
            'email' => 'loanne.boutet@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Broustaut",
            'prenom' => 'Alexis',
            'email' => 'alexis.broustaut@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Chapeau",
            'prenom' => 'Stephane',
            'email' => 'stephane.chapeau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Courbin",
            'prenom' => 'Quentin',
            'email' => 'quentin.courbin@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Coutant",
            'prenom' => 'Alex',
            'email' => 'alex.coutant@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Cransac",
            'prenom' => 'Florian',
            'email' => 'florian.cransac@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Cuvelier",
            'prenom' => 'Louis',
            'email' => 'louis.cuvelier@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Denjean",
            'prenom' => 'Axel',
            'email' => 'axel.denjean@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Descoins",
            'prenom' => 'Mikael',
            'email' => 'mikael.descoins@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Estival",
            'prenom' => 'Benoit',
            'email' => 'benoit.estival@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Etoughe",
            'prenom' => 'Anthony',
            'email' => 'anthony.etoughe@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Foucaud",
            'prenom' => 'Josue',
            'email' => 'josue.foucaud@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Gbogbohoundada",
            'prenom' => 'Olivier',
            'email' => 'olivier.gbogbohoundada@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Huet de froberville",
            'prenom' => 'Aymeric',
            'email' => 'aymeric.huetdefroberville@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Landais",
            'prenom' => 'David',
            'email' => 'david.landais@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lauga",
            'prenom' => 'Nathan',
            'email' => 'nathan.lauga@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lemzaoueq",
            'prenom' => 'Nathan',
            'email' => 'nabil.lemzaoueq@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Leveque",
            'prenom' => 'Louis',
            'email' => 'louis.leveque@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lhote",
            'prenom' => 'Esteban',
            'email' => 'esteban.lhote@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Lummau",
            'prenom' => 'Jules',
            'email' => 'jules.lummau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Maurin",
            'prenom' => 'Thomas',
            'email' => 'thomas.maurin@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Mestreau",
            'prenom' => 'Erwan',
            'email' => 'erwan.mestreau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Monnier",
            'prenom' => 'Logann',
            'email' => 'logann.monnier@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Nay",
            'prenom' => 'Ludovic',
            'email' => 'ludovic.nay@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Payet",
            'prenom' => 'Quentin',
            'email' => 'quentin.payet@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Persch",
            'prenom' => 'Jules',
            'email' => 'jules.persch@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Pessiot",
            'prenom' => 'Gregoire',
            'email' => 'gregoire.pessiot@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Priolot",
            'prenom' => 'Marc',
            'email' => 'marc.priolot@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Provoost Donadeo",
            'prenom' => 'Joanna',
            'email' => 'joanna.provoostdonadeo@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Ruiz",
            'prenom' => 'Clement',
            'email' => 'clement.ruiz@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Thery",
            'prenom' => 'Adrien',
            'email' => 'adrien.thery@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Tricaud",
            'prenom' => 'Alexandre',
            'email' => 'alexandre.tricaud@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Valleau",
            'prenom' => 'Elien',
            'email' => 'elien.valleau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);

        DB::table('users')->insert([
            'nom' => "Victoras",
            'prenom' => 'Nicolas',
            'email' => 'nicolas.victoras@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',

        ]);
        DB::table('users')->insert([
            'nom' => "test",
            'prenom' => 'test',
            'email' => 'test@test.fr',
            'password' => '$2y$10$ds602.avVrac/h8fImdr3.IPcVpxqeRmuKQm5Bheq0fYo75GlN4WS',
            'role' => 'admin',

        ]);

    }
}
