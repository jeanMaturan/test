<?php

namespace App\Admin;

/**
 * TEMPORARY hard-coded data so the admin pages can be viewed.
 *
 * Nothing here touches a database. When you add Doctrine later, each method
 * below is replaced by a repository call (see MIGRATION.md, Part 5), and this
 * file gets deleted.
 */
final class SampleData
{
    public const MAX_TABLES = 10;
    public const SLOT_MINUTES = 30;
    public const GUESTS_PER_TABLE = 4;

    public const PRODUCT_CATEGORIES = ['Coffee', 'Pastries', 'Merch'];

    public static function dashboard(): array
    {
        return [
            'total_reservations' => 0,
            'upcoming_reservations' => 0,
            'total_subscribers' => 0,
            'unread_messages' => 0,
            'pending_artists' => 0,
            'pending_artworks' => 0,
            'pending_reviews' => 0,
            'current_year' => 2026,
            'monthly_counts' => [
                'Jan' => 0, 'Feb' => 0, 'Mar' => 0, 'Apr' => 0, 'May' => 0, 'Jun' => 0,
                'Jul' => 0, 'Aug' => 0, 'Sep' => 0, 'Oct' => 0, 'Nov' => 0, 'Dec' => 0,
            ],
            'recent_reservations' => [],
        ];
    }

    public static function reservations(): array
    {
        return [];
    }

    public static function availabilitySlots(): array
    {
        return [];
    }

    public static function conflictSlots(): array
    {
        return [];
    }

    public static function activeEvent(): array
    {
        return ['name' => 'Paint & Sip Night', 'max_artists' => 5, 'approved_count' => 0];
    }

    public static function artists(): array
    {
        return [];
    }

    public static function artworks(): array
    {
        return [];
    }

    public static function products(): array
    {
        return [];
    }

    public static function product(int $id): ?array
    {
        foreach (self::products() as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }

        return null;
    }

    public static function events(): array
    {
        return [];
    }

    public static function event(int $id): ?array
    {
        foreach (self::events() as $event) {
            if ($event['id'] === $id) {
                return $event;
            }
        }

        return null;
    }

    public static function reviews(): array
    {
        return [];
    }

    public static function threads(): array
    {
        return [];
    }

    public static function subscribers(): array
    {
        return [];
    }
}
