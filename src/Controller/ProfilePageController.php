<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/profil/{slug}')]
class ProfilePageController extends AbstractController {

    #[Route('', name: 'profile_page')]
    public function profile(string $slug): Response
    {

        return $this->render('pages/profile/home.html.twig', [
            'slug' => $slug,
        ]);
    }

    #[Route('/kontakt', name: 'contact_profile_page')]
    public function contactProfile(string $slug): Response
    {
        return $this->render('pages/profile/contact.html.twig', [
            'slug' => $slug,
        ]);
    }

    #[Route('/blog', name: 'blog_profile_page')]
    public function blogProfile(string $slug): Response
    {
        return $this->render('pages/profile/blog.html.twig', [
            'slug' => $slug,
        ]);
    }

    #[Route('/tablica', name: 'table_profile_page')]
    public function tableProfile(string $slug): Response
    {
        return $this->render('pages/profile/table.html.twig', [
            'slug' => $slug,
        ]);
    }

    #[Route('/o-mnie', name: 'about_me_profile_page')]
    public function aboutMeProfile(string $slug): Response
    {

        $education = [];
        array_push($education, ['label' => "Zespół Szkół Wymyślonych ( Murarz )"]);
        array_push($education, ['label' => "Zespół Szkół Wymyślonych ( Elektryk )"]);

        $permissions = [];
        array_push($permissions, ['label' => 'SEP do 1 kV ( montaż, pomiary, odbiory )']);
        array_push($permissions, ['label' => 'Spawacz ( TIG, MIG )']);

        $companies = [];
        array_push($companies, ['slug' => 'nazwa-organizacji', 'label' => 'Nazwa organizacji']);

        return $this->render('pages/profile/about.html.twig', [
            'slug' => $slug,            
            'education' => $education,
            'permissions' => $permissions,
            'companies' => $companies
        ]);
    }

}