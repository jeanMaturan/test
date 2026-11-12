<?php

namespace App\Controller\Site;

use App\Site\SiteSampleData as Data;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * VIEW-ONLY public pages. No database, no login, no form handling.
 *
 * `logged_in` only changes how the header looks: pages that required a login in the
 * PHP version are shown in the logged-in state, so you can see them.
 */
final class SiteController extends AbstractController
{
    #[Route('/', name: 'site_home')]
    public function home(): Response
    {
        return $this->render('site/home.html.twig', ['logged_in' => false, 'guest_reviews' => Data::guestReviews()]);
    }

    #[Route('/about', name: 'site_about')]
    public function about(): Response
    {
        return $this->render('site/about.html.twig', ['logged_in' => false]);
    }

    #[Route('/menu', name: 'site_menu')]
    public function menu(): Response
    {
        return $this->render('site/menu.html.twig', [
            'logged_in' => false,
            'coffee_products' => Data::coffeeProducts(),
            'pastry_products' => Data::pastryProducts(),
        ]);
    }

    #[Route('/merch', name: 'site_merch')]
    public function merch(): Response
    {
        return $this->render('site/merch.html.twig', ['logged_in' => false, 'merch_products' => Data::merchProducts()]);
    }

    #[Route('/events', name: 'site_events')]
    public function events(): Response
    {
        return $this->render('site/events.html.twig', ['logged_in' => false, 'active_event' => Data::activeEvent()]);
    }

    #[Route('/contact', name: 'site_contact')]
    public function contact(): Response
    {
        return $this->render('site/contact.html.twig', ['logged_in' => false]);
    }

    #[Route('/reviews', name: 'site_reviews')]
    public function reviews(): Response
    {
        return $this->render('site/reviews.html.twig', [
            'logged_in' => false,
            'guest_reviews' => Data::guestReviews(),
            'approved_reviews' => Data::approvedReviews(),
        ]);
    }

    #[Route('/reservation', name: 'site_reservation')]
    public function reservation(Request $request): Response
    {
        // No real login yet. Like the PHP version, guests go to the login page first.
        // Add ?preview=1 to the URL to look at the reservation form itself.
        if (!$request->query->getBoolean("preview")) {
            return $this->redirectToRoute("site_login");
        }

        return $this->render('site/reservation.html.twig', [
            'logged_in' => false,
            'user' => Data::user(),
            'fee_per_guest' => Data::FEE_PER_GUEST,
            'downpayment_percent' => Data::DOWNPAYMENT_PERCENT,
            'guests_per_table' => Data::GUESTS_PER_TABLE,
        ]);
    }

    #[Route('/artists/join', name: 'site_artist_register')]
    public function artistRegister(): Response
    {
        return $this->render('site/artist_register.html.twig', [
            'logged_in' => false,
            'user' => Data::user(),
            'approved_count' => Data::approvedArtistCount(),
            'max_artists' => Data::MAX_ARTISTS,
        ]);
    }

    #[Route('/artists', name: 'site_gallery')]
    public function gallery(): Response
    {
        return $this->render('site/gallery.html.twig', ['logged_in' => false, 'artists' => Data::galleryArtists()]);
    }

    #[Route('/artists/my-artworks', name: 'site_artist_artworks')]
    public function artistArtworks(): Response
    {
        return $this->render('site/artist_artworks.html.twig', ['logged_in' => false, 'artist_name' => 'Artist Name']);
    }

    #[Route('/login', name: 'site_login')]
    public function login(Request $request): Response
    {
        $from = (string) $request->query->get('from', '');

        return $this->render('site/login.html.twig', [
            'logged_in' => false,
            'from' => in_array($from, ['contact', 'artist', 'review'], true) ? $from : '',
        ]);
    }

    #[Route('/register', name: 'site_register')]
    public function register(): Response
    {
        return $this->render('site/register.html.twig', ['logged_in' => false]);
    }

    #[Route('/profile', name: 'site_profile')]
    public function profile(): Response
    {
        return $this->render('site/profile.html.twig', ['logged_in' => true, 'user' => Data::user()]);
    }

    #[Route('/my-messages', name: 'site_messages')]
    public function messages(): Response
    {
        return $this->render('site/messages.html.twig', ['logged_in' => true, 'threads' => Data::threads()]);
    }
}
