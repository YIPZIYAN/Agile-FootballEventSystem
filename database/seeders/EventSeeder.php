<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'title' => 'TARUMT Football Cup',
                'description' => 'Get ready for an electrifying football spectacle as the TARUMT Football Cup returns for another thrilling edition. With teams from across the region vying for supremacy, this tournament promises intense matches, breathtaking goals, and unforgettable moments on the field. Join us at TARUMT Stadium and experience the passion and excitement of football at its finest.',
                'startDate' => '2024-05-01',
                'endDate' => '2024-05-20',
                'noOfTeams' => 16,
                'location' => 'TARUMT Stadium',
                'deadline' => '2024-04-15',
                'fees' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'TAT Cup',
                'description' => 'Welcome to the TAT Cup, where football legends are born and dreams are realized. Prepare for a football extravaganza like no other, as 32 top teams battle it out for glory and honor. With every match filled with suspense, drama, and skillful displays, the TAT Cup promises to be a showcase of the beautiful game. Don’t miss your chance to witness history in the making at TAT Stadium.',
                'startDate' => '2024-06-01',
                'endDate' => '2024-06-20',
                'noOfTeams' => 32,
                'location' => 'TAT Stadium',
                'deadline' => '2024-05-15',
                'fees' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Football Gala',
                'description' => 'Join us for the Football Gala, a spectacular event that celebrates the spirit of football and the joy it brings to fans around the world. With 24 teams competing in a festival of football, this tournament promises excitement, entertainment, and unforgettable moments for players and spectators alike. Held at Central Park, this gala is not to be missed!',
                'startDate' => '2024-07-01',
                'endDate' => '2024-07-20',
                'noOfTeams' => 24,
                'location' => 'Central Park',
                'deadline' => '2024-06-15',
                'fees' => 75.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Soccer Showdown',
                'description' => 'Experience the ultimate Soccer Showdown, where the finest teams come together for a battle of skill, strategy, and determination. With 20 teams competing in heart-pounding matches, this tournament is sure to keep fans on the edge of their seats. Whether you’re a die-hard supporter or a casual observer, don’t miss the action at City Stadium.',
                'startDate' => '2024-08-01',
                'endDate' => '2024-08-20',
                'noOfTeams' => 20,
                'location' => 'City Stadium',
                'deadline' => '2024-07-15',
                'fees' => 90.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Kickoff Classic',
                'description' => 'Get ready for the Kickoff Classic, where the excitement of football reaches new heights. With 28 teams competing in intense matches filled with drama and passion, this tournament promises to be a thrilling showcase of talent and determination. Join us at Beach Park for an unforgettable football experience.',
                'startDate' => '2024-09-01',
                'endDate' => '2024-09-20',
                'noOfTeams' => 28,
                'location' => 'Beach Park',
                'deadline' => '2024-08-15',
                'fees' => 110.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Goal Rush',
                'description' => 'Prepare for a Goal Rush like never before, as 16 teams battle it out for glory in this adrenaline-fueled tournament. With each match promising thrilling goals, fierce competition, and unforgettable moments, this tournament is a must-see for football fans everywhere. Join us at River Stadium and witness the excitement firsthand!',
                'startDate' => '2024-10-01',
                'endDate' => '2024-10-20',
                'noOfTeams' => 16,
                'location' => 'River Stadium',
                'deadline' => '2024-09-15',
                'fees' => 85.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Victory Cup',
                'description' => 'Compete for victory in the ultimate test of skill and strategy – the Victory Cup. With 32 teams battling it out on the field, this tournament promises fierce competition, nail-biting matches, and unforgettable moments. Join us at Victory Arena and witness the thrill of victory!',
                'startDate' => '2024-11-01',
                'endDate' => '2024-11-20',
                'noOfTeams' => 32,
                'location' => 'Victory Arena',
                'deadline' => '2024-10-15',
                'fees' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Premier League',
                'description' => 'Experience the excitement of the Premier League, where the best teams battle it out for supremacy. With 12 elite teams competing in intense matches filled with skill, passion, and drama, this tournament promises to be a thrilling showcase of football talent. Don’t miss your chance to witness the action at City Stadium!',
                'startDate' => '2024-12-01',
                'endDate' => '2024-12-20',
                'noOfTeams' => 12,
                'location' => 'City Stadium',
                'deadline' => '2024-11-15',
                'fees' => 150.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Champion\'s Cup',
                'description' => 'Compete for glory in the prestigious Champion’s Cup, where the best teams from around the world battle it out for the ultimate prize. With 16 teams vying for supremacy, this tournament promises thrilling matches, incredible goals, and unforgettable moments on the field. Join us at Glory Park and witness history in the making!',
                'startDate' => '2024-12-25',
                'endDate' => '2025-01-10',
                'noOfTeams' => 16,
                'location' => 'Glory Park',
                'deadline' => '2024-12-10',
                'fees' => 130.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Super Cup',
                'description' => 'Get ready for the Super Cup, where the most powerful teams battle it out for supremacy. With 24 teams competing in intense matches filled with skill, speed, and strategy, this tournament promises to be a showcase of football at its finest. Join us at Super Arena and witness the excitement!',
                'startDate' => '2024-12-30',
                'endDate' => '2025-01-14',
                'noOfTeams' => 24,
                'location' => 'Super Arena',
                'deadline' => '2024-12-15',
                'fees' => 140.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Goal Digger Cup',
                'description' => 'Unleash your inner goal digger and compete in this thrilling cup tournament. With 20 teams battling it out on the field, this tournament promises intense matches, nail-biting moments, and unforgettable goals. Join us at Digging Ground and show the world what you’re made of!',
                'startDate' => '2025-01-01',
                'endDate' => '2025-01-16',
                'noOfTeams' => 20,
                'location' => 'Digging Ground',
                'deadline' => '2024-12-15',
                'fees' => 95.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Striker Series',
                'description' => 'Join us for the Striker Series, where the most dominant strikers compete for glory. With 28 teams battling it out in thrilling matches, this tournament promises to showcase the best of attacking football. Don’t miss your chance to witness the action at Striker Stadium!',
                'startDate' => '2025-01-10',
                'endDate' => '2025-01-25',
                'noOfTeams' => 28,
                'location' => 'Striker Stadium',
                'deadline' => '2024-12-25',
                'fees' => 115.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Futbol Fiesta',
                'description' => 'Join us for the Futbol Fiesta, a celebration of football and camaraderie. With 16 teams competing in a festival of football, this tournament promises excitement, entertainment, and unforgettable moments for players and spectators alike. Join us at Fiesta Field for a day of fun and football!',
                'startDate' => '2025-01-15',
                'endDate' => '2025-01-30',
                'noOfTeams' => 16,
                'location' => 'Fiesta Field',
                'deadline' => '2025-01-01',
                'fees' => 80.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Unity Cup',
                'description' => 'Experience the harmony of football in the Unity Cup, where teams come together in the spirit of sportsmanship and unity. With 32 teams battling it out on the field, this tournament promises thrilling matches, skillful displays, and unforgettable moments. Join us at Unity Stadium and be part of the unity!',
                'startDate' => '2025-01-20',
                'endDate' => '2025-02-04',
                'noOfTeams' => 32,
                'location' => 'Unity Stadium',
                'deadline' => '2025-01-05',
                'fees' => 125.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Galactic Trophy',
                'description' => 'Prepare for an out-of-this-world experience in the Galactic Trophy, where teams from across the galaxy compete for glory. With 12 elite teams battling it out on the field, this tournament promises thrilling matches, breathtaking goals, and unforgettable moments. Join us at Galactic Arena and witness the stars collide!',
                'startDate' => '2025-02-01',
                'endDate' => '2025-02-16',
                'noOfTeams' => 12,
                'location' => 'Galactic Arena',
                'deadline' => '2025-01-15',
                'fees' => 155.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Epic Clash Cup',
                'description' => 'Get ready for epic clashes and fierce battles in the Epic Clash Cup, where only the strongest will prevail. With 16 teams competing in adrenaline-fueled matches, this tournament promises excitement, drama, and unforgettable moments. Join us at Clash Stadium and witness the clash of titans!',
                'startDate' => '2025-02-10',
                'endDate' => '2025-02-25',
                'noOfTeams' => 16,
                'location' => 'Clash Stadium',
                'deadline' => '2025-01-25',
                'fees' => 135.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Rapid Fire Cup',
                'description' => 'Experience the speed and intensity of Rapid Fire Cup, where teams battle it out in rapid-fire matches. With 24 teams competing in heart-pounding matches, this tournament promises excitement, drama, and unforgettable moments. Join us at Rapid Arena and witness the fire!',
                'startDate' => '2025-02-20',
                'endDate' => '2025-03-07',
                'noOfTeams' => 24,
                'location' => 'Rapid Arena',
                'deadline' => '2025-02-05',
                'fees' => 100.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Blaze Trophy',
                'description' => 'Ignite the field with fiery competition in the Blaze Trophy, where teams battle it out for glory. With 20 teams competing in adrenaline-fueled matches, this tournament promises excitement, passion, and unforgettable moments. Join us at Blaze Stadium and witness the blaze!',
                'startDate' => '2025-03-01',
                'endDate' => '2025-03-16',
                'noOfTeams' => 20,
                'location' => 'Blaze Stadium',
                'deadline' => '2025-02-15',
                'fees' => 120.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Thunder Cup',
                'description' => 'Unleash the power of thunder in the Thunder Cup, where teams battle it out for supremacy. With 28 teams competing in thunderous matches, this tournament promises excitement, intensity, and unforgettable moments. Join us at Thunder Arena and feel the thunder!',
                'startDate' => '2025-03-10',
                'endDate' => '2025-03-25',
                'noOfTeams' => 28,
                'location' => 'Thunder Arena',
                'deadline' => '2025-02-24',
                'fees' => 145.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'title' => 'Blitz Bash',
                'description' => 'Get ready for an aggressive showdown in the Blitz Bash, where teams collide in fierce battles for victory. With 32 teams competing in high-energy matches, this tournament promises excitement, aggression, and unforgettable moments. Join us at Blitz Stadium and witness the blitz!',
                'startDate' => '2025-03-20',
                'endDate' => '2025-04-04',
                'noOfTeams' => 32,
                'location' => 'Blitz Stadium',
                'deadline' => '2025-03-05',
                'fees' => 130.00,
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];
        Event::insert($events);
    }
}
