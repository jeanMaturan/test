<?php

namespace App\Site;

/**
 * TEMPORARY hard-coded data so the public pages can be viewed.
 * Nothing here touches a database. Replace each method with a repository
 * call later, then delete this file.
 *
 * To see an empty state on a page, make the matching method `return [];`
 */
final class SiteSampleData
{
    public const FEE_PER_GUEST = 150;
    public const DOWNPAYMENT_PERCENT = 50;
    public const GUESTS_PER_TABLE = 4;
    public const MAX_ARTISTS = 5;

    /** Placeholder logged-in user (there is no real login yet). */
    public static function user(): array
    {
        return ['name' => 'Guest User', 'email' => 'guest@example.com', 'profile_picture' => null];
    }

    /** The 8 guest reviews that were written directly into index.php and reviews.php (original site content). */
    public static function guestReviews(): array
    {
        return [
            ['name' => 'Dirpie', 'location' => 'Valencia', 'image' => 'derpie.png', 'text' => 'I love painting here! The staff are friendly and the food is delicious!'],
            ['name' => 'Beam', 'location' => 'Dauin', 'image' => 'beam.png', 'text' => 'It felt like home. I highly recommend!'],
            ['name' => 'Gordon', 'location' => 'Tanjay', 'image' => 'gordon.png', 'text' => 'Good coffee + cozy space? Amazing.'],
            ['name' => 'Mia', 'location' => 'Dumaguete', 'image' => 'Mia.png', 'text' => 'The atmosphere is so cozy and the coffee tastes amazing!'],
            ['name' => 'Kyle', 'location' => 'Bacong', 'image' => 'Kyle.png', 'text' => 'A beautiful place to relax, create, and enjoy good food.'],
            ['name' => 'Anna', 'location' => 'Valencia', 'image' => 'Anna.png', 'text' => 'Friendly staff, great coffee, and such a creative environment.'],
            ['name' => 'Lia', 'location' => 'Dauin', 'image' => 'Lia.png', 'text' => 'One of my favorite places to spend a quiet afternoon.'],
            ['name' => 'Mark', 'location' => 'Tanjay', 'image' => 'Mark.png', 'text' => 'The perfect combination of art, coffee, and good vibes.'],
        ];
    }

    /** Reviews submitted by customers and approved by admin. Empty until a database exists. */
    public static function approvedReviews(): array
    {
        return [];
    }

    public static function coffeeProducts(): array
    {
        return [
            ['name' => 'Caramel Macchiato', 'description' => 'Espresso, steamed milk and caramel drizzle.', 'price' => 140, 'image' => 'caramelmacchiato.png'],
            ['name' => 'Iced Spanish Latte', 'description' => 'Sweet, creamy and chilled.', 'price' => 150, 'image' => 'icedspanishlatte.png'],
            ['name' => 'Chocolate Latte', 'description' => 'Rich chocolate with steamed milk.', 'price' => 115, 'image' => 'chocolatelatte.png'],
            ['name' => 'Cappuccino', 'description' => '', 'price' => 120, 'image' => 'capuccino.jpg'],
        ];
    }

    public static function pastryProducts(): array
    {
        return [
            ['name' => 'Blueberry Cheesecake', 'description' => 'Creamy cheesecake with blueberry topping.', 'price' => 120, 'image' => 'bluberry.jpeg'],
            ['name' => 'Butter Croissant', 'description' => 'Flaky and buttery.', 'price' => 85, 'image' => 'butterCroissant.jpg'],
            ['name' => 'Cinnamon Roll', 'description' => '', 'price' => 95, 'image' => 'cinnamonroll.jpg'],
        ];
    }

    public static function merchProducts(): array
    {
        return [
            ['name' => 'Tote Bag', 'description' => 'Everyday canvas tote.', 'price' => 350, 'image' => 'tote.png'],
            ['name' => 'Coffee Cup', 'description' => 'Cafe-branded cup.', 'price' => 250, 'image' => 'coffeecup.png'],
            ['name' => 'Apron', 'description' => '', 'price' => 450, 'image' => 'apron.png'],
        ];
    }

    public static function activeEvent(): ?array
    {
        return [
            'name' => 'Paint & Sip Night',
            'description' => "Paint, sip, unwind, and let your art & creativity light up the night.\nFor artists and art lovers.",
            'date' => '2027-12-04',
            'time' => '17:00',
            'location' => "Maturan's Art Cafe",
            'image' => 'eventpic.png',
        ];
    }

    /** Approved artists with their approved artworks (for the gallery page). */
    public static function galleryArtists(): array
    {
        return [
            [
                'name' => 'Sample Artist',
                'bio' => 'A short bio about the artist goes here.',
                'artworks' => [
                    ['title' => 'Sample Artwork One', 'description' => 'A short description.', 'price' => 2500, 'image' => 'pattern1.png'],
                    ['title' => 'Sample Artwork Two', 'description' => '', 'price' => 1800, 'image' => null],
                ],
            ],
        ];
    }

    public static function approvedArtistCount(): int
    {
        return 2;
    }

    public static function threads(): array
    {
        return [
            [
                'id' => 1,
                'subject' => 'Question about events',
                'status' => 'Replied',
                'created_at' => '2026-10-01 13:00:00',
                'message' => 'Hi! Is the Paint & Sip Night open to walk-ins?',
                'replies' => [
                    ['sender' => 'admin', 'text' => 'Hello! Yes, walk-ins are welcome, but reserving a table is recommended.', 'created_at' => '2026-10-01 15:20:00'],
                    ['sender' => 'customer', 'text' => 'Thank you!', 'created_at' => '2026-10-02 10:30:00'],
                ],
            ],
        ];
    }
}
