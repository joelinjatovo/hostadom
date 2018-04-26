<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use App\Entity\Contact;
use App\Entity\Prestataire;
use App\Form\ContactType;

/**
 * @Route("/{_locale}", defaults={"_locale": "mg"}, requirements={"_locale"="en|fr|mg"})
 */
class WebController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Leader en hébergement Web à Madagascar, Serveur dédié VPS et nom de domaine";
        $description = "";
        $keywords = "";
        $prixOffreSpeciale = "45.000 Ar";
        $prixHebergement = "99.000 Ar";
        $prixServeur = "299.000 Ar";
        
        return $this->render('web/index.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords,
                        "prixOffreSpeciale"=>$prixOffreSpeciale,
                        "prixHebergement"=>$prixHebergement,
                        "prixServeur"=>$prixServeur));
    }

    /**
     * @Route("/domaine", name="domaine")
     * @Template()
     */
    public function domaineAction(Request $request)
    {
        /*
        * Save _locale in the session
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Domaine - Leader en hébergement Web à Madagascar, Serveur dédié VPS et nom de domaine";
        $description = "";
        $keywords = "";
        return $this->render('web/domaine.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords));
    }

    /**
     * @Route("/hebergement", name="hebergement")
     * @Template()
     */
    public function hebergementAction(Request $request)
    {
        /*
        * Save _locale in the session
        * Avoid to load default locale from homepage
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Hébergement Web – Leader en hébergement Web à Madagascar, Serveur dédié VPS et nom de domaine";
        $description = "";
        $keywords = "";
        $prixHebergementPerso = "99.000 Ar";
        $prixHebergementStandard = "149.000 Ar";
        $prixHebergementPro = "299.000 Ar";
        $prixHebergementPerformance = "499.000 Ar";
        return $this->render('web/hebergement.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords,
                        "prixHebergementPerso"=>$prixHebergementPerso,
                        "prixHebergementStandard"=>$prixHebergementStandard,
                        "prixHebergementPro"=>$prixHebergementPro,
                        "prixHebergementPerformance"=>$prixHebergementPerformance));
    }

    /**
     * @Route("/serveur", name="serveur")
     * @Template()
     */
    public function serveurAction(Request $request)
    {
        /*
        * Save _locale in the session
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Serveur – Leader en hébergement Web à Madagascar, Serveur dédié VPS et nom de domaine";
        $description = "";
        $keywords = "";
        $prixVPSPerso = "299.000 Ar";
        $prixVPSStandard = "649.000 Ar";
        $prixVPSPro = "949.000 Ar ";
        $prixVPSPerformance = "1.599.000 Ar";
        return $this->render('web/serveur.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords,
                        "prixVPSPerso"=>$prixVPSPerso,
                        "prixVPSStandard"=>$prixVPSStandard,
                        "prixVPSPro"=>$prixVPSPro,
                        "prixVPSPerformance"=>$prixVPSPerformance));
    }
    
    /**
     * @Route("/pour-le-debutant-ce-quil-faut-savoir-sur-lhebergement-dun-site-web", name="blog1")
     * @Template()
     */
    public function debutantAction(Request $request)
    {
        /*
        * Save _locale in the session
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Le nom de domaine pour votre entreprise à Madagascar";
        $description = "";
        $keywords = "";
        return $this->render('web:blog1.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords));
    }

    /**
     * @Route("/le-nom-de-domaine-pour-votre-entreprise-a-madagascar", name="blog2")
     * @Template()
     */
    public function entrepriseAction(Request $request)
    {
        /*
        * Save _locale in the session
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Le nom de domaine pour votre entreprise à Madagascar";
        $description = "";
        $keywords = "";
        return $this->render('web/blog2.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords));
    }

    /**
     * @Route("/nos-prestataires-partenaires", name="prestataire")
     * @Template()
     */
    public function prestataireAction(Request $request)
    {
        /*
        * Save _locale in the session
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Le nom de domaine pour votre entreprise à Madagascar";
        $description = "";
        $keywords = "";
        
        $prestataires = array();
        $prestataire = new Prestataire();
        $prestataires[] = $prestataire;
        $prestataires[] = $prestataire;
        $prestataires[] = $prestataire;
        $prestataires[] = $prestataire;
        
        return $this->render('web/prestataire.html.twig',array(
                        "prestataires"=>$prestataires,
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords));
    }
    

    /**
     * @Route("/contact", name="contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        /*
        * Save _locale in the session
        */
        $locale = $request->getLocale();
        $session = $request->getSession();
        $session->set("_locale", $locale);

        $title = "Contact – Leader en hébergement Web à Madagascar, Serveur dédié VPS et nom de domaine";
        $description = "";
        $keywords = "";

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact, array(
            // To set the action use $this->generateUrl('route_identifier')
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);
            
            $submittedToken = $request->request->get('_token');
            
            // 'delete-item' is the same value used in the template to generate the token
            if ($this->isCsrfTokenValid('contact-form', $submittedToken)) {
                // Send mail
                if($this->sendEmail($form->getData())){
                    // Everything OK, redirect to wherever you want ! :
                    $request->getSession()->getFlashBag()
                        ->add('success', 'Your message is successfully sent!');
                    
                    return $this->redirectToRoute('contact');
                }else{
                    // An error ocurred, handle
                    // Everything OK, redirect to wherever you want ! :
                    $request->getSession()->getFlashBag()
                        ->add('error', 'Your message is not sent!');
                }
            }else{
                // An error ocurred, handle
                    $request->getSession()->getFlashBag()
                        ->add('error', 'This form is not valid!');
            }
            
        }

        return $this->render('web/contact.html.twig',array(
                        "title"=>$title,
                        "description"=>$description,
                        "keywords"=>$keywords,
                        "form"=>$form->createView()));
    }

    private function sendEmail($data){
        $myappContactMail = 'support@intc-webagency.com';
        $myappContactPassword = 'H#nLxB7eQb8';
        
        // In this case we'll use the ZOHO mail services.
        // If your service is another, then read the following article to know which smpt code to use and which port
        // http://ourcodeworld.com/articles/read/14/swiftmailer-send-mails-from-php-easily-and-effortlessly
        /*
        $transport = \Swift_SmtpTransport::newInstance('mail.hostadom.net', 465,'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);
    

        $mailer = \Swift_Mailer::newInstance($transport);
        */
        
        $message = (new \Swift_Message("Our Code World Contact Form"))
                ->setFrom($myappContactMail)
                ->setTo("joelinjatovo@gmail.com")
                ->setSubject("Our Code World Contact Form ". $data->getSubject())
                ->setBody($data->getMessage()."<br>ContactMail :".$data->getEmail());
        
        return $this->get('mailer')->send($message);
    
    }
}
