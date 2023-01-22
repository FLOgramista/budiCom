<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganizationPageController extends AbstractController {

    #[Route('/{slug}', name: 'organization_page')]
    public function organization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        $workers = [];
        array_push($workers, [ 'slug' => 'stefan-zamyslony', 'label' => 'Stefan Zamyślony' ]);
        array_push($workers, [ 'slug' => 'pawel-wymyslowny', 'label' => 'Paweł Wymyślony' ]);

        return $this->render('pages/organization/home.html.twig', [
            'copmanyName' => $companyName,
            'workers' => $workers,
        ]);
    }

    #[Route('/{slug}/kontakt', name: 'contact_organization_page')]
    public function contactOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        return $this->render('pages/organization/contact.html.twig', [
            'copmanyName' => $companyName,
        ]);
    }

    #[Route('/{slug}/pracownicy', name: 'workers_organization_page')]
    public function workersOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        return $this->render('pages/organization/workers.html.twig', [
            'copmanyName' => $companyName,
        ]);
    }

    #[Route('/{slug}/opinie', name: 'opinions_organization_page')]
    public function opinionsOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        return $this->render('pages/organization/opinions.html.twig', [
            'copmanyName' => $companyName,
        ]);
    }

    #[Route('/{slug}/blog', name: 'blog_organization_page')]
    public function blogOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        return $this->render('pages/organization/blog.html.twig', [
            'copmanyName' => $companyName,
        ]);
    }

    #[Route('/{slug}/tablica', name: 'table_organization_page')]
    public function tableOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        return $this->render('pages/organization/table.html.twig', [
            'copmanyName' => $companyName,
        ]);
    }

    #[Route('/{slug}/oferta', name: 'offer_organization_page')]
    public function offerOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        return $this->render('pages/organization/offer.html.twig', [
            'copmanyName' => $companyName,
        ]);
    }

    

    #[Route('/{slug}/o-firmie', name: 'about_organization_page')]
    public function aboutOrganization(string $slug): Response
    {
        $companyName = "Nazwa firmy";

        $about = "Tutaj będzie treść "; 

        return $this->render('pages/organization/about.html.twig', [
            'copmanyName' => $companyName,
            'about' => $about,
        ]);
    } 

}