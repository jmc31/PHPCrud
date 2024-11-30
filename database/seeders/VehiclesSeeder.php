<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Vehicle;

class VehiclesSeeder extends Seeder
{
    public function run()
    {
        $vehicles = [
            ['make' => 'Toyota', 'model' => 'Corolla', 'year' => 2018, 'rental_price' => 50.00, 'available' => true],
            ['make' => 'Honda', 'model' => 'Civic', 'year' => 2020, 'rental_price' => 55.00, 'available' => false],
            ['make' => 'Ford', 'model' => 'Focus', 'year' => 2019, 'rental_price' => 52.00, 'available' => true],
            ['make' => 'Chevrolet', 'model' => 'Malibu', 'year' => 2021, 'rental_price' => 60.00, 'available' => true],
            ['make' => 'Nissan', 'model' => 'Altima', 'year' => 2017, 'rental_price' => 48.00, 'available' => false],
            ['make' => 'Hyundai', 'model' => 'Elantra', 'year' => 2020, 'rental_price' => 50.00, 'available' => true],
            ['make' => 'Kia', 'model' => 'Optima', 'year' => 2019, 'rental_price' => 53.00, 'available' => false],
            ['make' => 'Volkswagen', 'model' => 'Jetta', 'year' => 2018, 'rental_price' => 55.00, 'available' => true],
            ['make' => 'BMW', 'model' => '3 Series', 'year' => 2021, 'rental_price' => 90.00, 'available' => true],
            ['make' => 'Audi', 'model' => 'A4', 'year' => 2020, 'rental_price' => 85.00, 'available' => false],
            ['make' => 'Mercedes-Benz', 'model' => 'C-Class', 'year' => 2021, 'rental_price' => 95.00, 'available' => true],
            ['make' => 'Subaru', 'model' => 'Impreza', 'year' => 2018, 'rental_price' => 50.00, 'available' => false],
            ['make' => 'Mazda', 'model' => 'Mazda3', 'year' => 2020, 'rental_price' => 52.00, 'available' => true],
            ['make' => 'Lexus', 'model' => 'IS', 'year' => 2021, 'rental_price' => 100.00, 'available' => true],
            ['make' => 'Jeep', 'model' => 'Compass', 'year' => 2019, 'rental_price' => 65.00, 'available' => false],
            ['make' => 'Tesla', 'model' => 'Model 3', 'year' => 2022, 'rental_price' => 120.00, 'available' => true],
            ['make' => 'Chrysler', 'model' => '300', 'year' => 2018, 'rental_price' => 60.00, 'available' => true],
            ['make' => 'Dodge', 'model' => 'Charger', 'year' => 2020, 'rental_price' => 70.00, 'available' => false],
            ['make' => 'Acura', 'model' => 'TLX', 'year' => 2021, 'rental_price' => 88.00, 'available' => true],
            ['make' => 'Volvo', 'model' => 'S60', 'year' => 2019, 'rental_price' => 75.00, 'available' => true],
        ];

        foreach ($vehicles as $vehicle) {
            Vehicle::create($vehicle);
        }
    }
}

