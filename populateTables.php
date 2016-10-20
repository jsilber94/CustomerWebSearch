<?php

require "vendor/autoload.php";  //assumes your code is lab7 folder
require "CustomerDAO";




$faker = Faker\Factory::create();  //factory method to get an instance

for ($i = 0; $i < 50; $i++) {

    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    $birthDate = $faker->dateTimeBetween('-65 years', 'now');
    $salary = $faker->numberBetween(10000, 1000000);
    $civicNumber = $faker->numberBetween(1, 1000);
    $street = $faker->streetName;
    $city = $faker->city;
    $state = $faker->stateAbbr;
    $postcode = $faker->postcode;

    $birthDate = $birthDate->format('Y-m-d');
    $class = new Customer($firstName, $lastName, $birthDate, $salary, $civicNumber, $street, $city, $state, $postcode);
    $dao = new CustomerDAO($class);

    $dao->insertIntoDB();
}



