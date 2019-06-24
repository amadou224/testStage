<?php

namespace App\Controller;

use App\Entity\Lieux;
use App\Entity\Trajet;
use App\Entity\Reservation;
use App\Entity\DepartDestination;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\MemorialAller;
use App\Entity\MemorialAllerRetour;





class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function homeRoute()
    {

        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/aeroport", name="aeroport")
     */
    public function aeroportRoute()
    {
        $repositoryLieux = $this->getDoctrine()->getRepository(Lieux::class);

        $lieux = $repositoryLieux->findAll();
        return $this->render('aeroport/aeroport.html.twig', [
            'lieux' => $lieux,
        ]);
    }


///////////////////////////////  AMADOU TRANSPORT MEMORIAL CONTROLLER  ///////////////////////////////////////
/**
 * @Route("/transport",name="transport")
 */
public function  transportRoute()
{
    return $this -> render('transport/transport.html.twig',[
        'controller_name'=>'HomeController',
        ]);

}

/**
 * @Route("/contact", name= "contact")
 */
public function contactRoute()
{
    return $this -> render('transport/contact.html.twig',[
        'controller_name' => 'HomeController',]);
}

/**
 * @Route("/informations", name= "informations")
 */
public function informationsRoute()
{
    return $this -> render('transport/informations.html.twig',[
        'controller_name' => 'HomeController',]);
}

/**
 * @Route("/tarif", name= "tarif")
 */
public function tarifRoute()
{
    return $this -> render('transport/tarif.html.twig',[
        'controller_name' => 'HomeController',]);
}

/**
 * @Route("/acceuil", name= "acceuil")
 */
public function acceuilRoute()
{
    return $this -> render('transport/acceuil.html.twig',[
        'controller_name' => 'HomeController',]);
}



/**
 * @Route("/visiteDuSite", name= "visiteDuSite")
 */
public function visiteSiteRoute()
{
    return $this -> render('transport/visiteDuSite.html.twig',[
        'controller_name' => 'HomeController',]);
}



/**
 * @Route("/tarifDuSite", name= "tarifDuSite")
 */
public function tarifDuSiteRoute()
{
    return $this -> render('transport/tarifDuSite.html.twig',[
        'controller_name' => 'HomeController',]);
}



/**
 * @Route("/galerieDuSite", name= "galerieDuSite")
 */
public function galerieDuSiteRoute()
{
    return $this -> render('transport/galerieDuSite.html.twig',[
        'controller_name' => 'HomeController',]);
}


/**
 * @Route("/horaireDuSite",name="horaireDuSite")
 */
public function horaireDuSiteRoute()
{
    return $this -> render('transport/horaireDuSite.html.twig',[
        'controller_name' =>'HomeController',]);
    
}

//////////////////////////      TEST NEW ROUTE  /////////////////////////////////


    /**
     * @Route("/memorialPageAcceuil", name="memorialPageAcceuil")
     */
    public function memorialPageAcceuilRoute()
    {
        
        return $this->render('transport/memorialPageAcceuil.html.twig', [
        
        ]);
    }

// ///               twig confirmation reservation ALLER SIMPLE           /////////////

     /**
     * @Route("/confirmation", name="confirmation")
     */
    public function confirmationRoute(Request $request)
    {      
        $repo = $this->getDoctrine()->getRepository(MemorialAller::class);      
        $memorial = $repo->find($request->get('id'));           

     
        return   $this->render('transport/confirmation.html.twig', [
            
            'memorial'=>$memorial
            
        ]);
    }

    // Terminus reservation aller simple 
    /**
     * @Route("/terminusAllerSimple", name="terminusAllerSimple")
    */
    public function terminusReservationRoute()
    {
        return $this->render('transport/terminusAllerSimple.html.twig',[

        ]);

    }

 /////////       TEST MAIL    ///////////////////////
  

    /////////////          FIN  TEST MAIL               ////////////////
  

///////////////////////////////// TWIG CONFIRMATION ALLER RETOUR   ////////////////////////////////////

  /**
     * @Route("/confirmationAllerRetour", name="confirmationAllerRetour")
     */
    public function confirmationAllerRetourRoute(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(MemorialAllerRetour::class);  

        $memorial = $repo->find($request->get('id'));
        return $this->render('transport/confirmationAllerRetour.html.twig', [
            'memorial'=>$memorial
        ]);
    }

//////                           FIN CONFIRMATION RESERVATION  ALLER RETOUR    ////////////////////



////////////////////////////// FIN TEST NEW ROUTE ///////////////////////////////


////            recuper en BDD            ///////////////
    
     /**
     * @Route("/envoieBddMemorialAller", name="envoieBddMemorialAller")
     */
     public function envoieBddMemorialAller(Request $req){                    
      $em = $this->getDoctrine()->getManager();
            $memorial_aller =new MemorialAller();
                   
                $depart = $req->get('depart_aller');             
                $destination =$req->get('destination_aller');  
                $nbrePassager = $req->get('nb_passager_aller');
                $email=$req->get('email');             
                $tel=$req->get('phone');
                $dateDepart= new \DateTime($req->get('date_depart_aller'));               
                $heureDeDepart =$req->get('heure_depart');  // dump($heureDeDepart);die;
             
                    $memorial_aller->setDepart($depart);
                    $memorial_aller->setDestination($destination);
                    $memorial_aller->setNombrePassager($nbrePassager);
                    $memorial_aller->setEmail($email); 
                    $memorial_aller->setTelephone($tel);
                    $memorial_aller->setDateDeDepart($dateDepart);
                    $memorial_aller->setHeureDeDepart($heureDeDepart);

                        $em->persist($memorial_aller);        
                        $em->flush();   
       

        return $this->redirectToRoute('confirmation',['id'=>$memorial_aller->getId()]);
    } 
    
    //          RECUPERATION EN BDD ALLER RETOUR       //  

    
     /**
     * @Route("/envoieBddMemorialAllerRetour", name="envoieBddMemorialAllerRetour")
     */
    public function envoieBddMemorialAllerRetour(Request $req){                    //:Reponse {   
        $em = $this->getDoctrine()->getManager();
              $memorial_aller_retour =new MemorialAllerRetour();      
          $depart = $req->get('depart');
          $destination =$req->get('destination');
          $email=$req->get('mail');
          $tel=$req->get('telephone');
          $nbrePassagerAller = $req->get('nb_passager_1');
          $nbrePassagerRetour = $req->get('nb_passager_2');
          $dateDepart= new \DateTime($req->get('date_depart'));
          $dateRetour= new \DateTime($req->get('date_retour'));        
          $heureDeDepart =$req->get('horaire_depart');
          $heureDeRetour =$req->get('horaire_retour');
        
          $memorial_aller_retour-> setDepart($depart);
          $memorial_aller_retour->setDestination($destination);
          $memorial_aller_retour-> setEmail($email);
          $memorial_aller_retour->setTelephone( $tel);
          $memorial_aller_retour->setNombrePassagerAller( $nbrePassagerAller);
          $memorial_aller_retour->setNombrePassagerRetour( $nbrePassagerRetour);
          $memorial_aller_retour-> setDateDepart( $dateDepart);
          $memorial_aller_retour->setDateRetour( $dateRetour);
          $memorial_aller_retour->setHoraireDeDepart($heureDeDepart);
          $memorial_aller_retour->setHoraireRetour($heureDeRetour);

          $em->persist($memorial_aller_retour);
          $em->flush();  
                      
      // return $this->render('transport/confirmationAllerRetour.html.twig');
       return $this->redirectToRoute('confirmationAllerRetour',['id'=>$memorial_aller_retour->getId()]);
    }
                        

///////////////////////////////// AMADOU  MEMORIAL FIN  CONTROLER TRANSPORT /////////////////////////////////////////////////////


    /**
     * @Route("/horairesTarifs", name="horairesTarifs")
     */
    public function aeroportRouteHorairesTarifs()
    {
        return $this->render('aeroport/horairesTarifs.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function Profile()
    {
        return $this->render('profile/profile.html.twig', [
            'user' => $this->getUser(),
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/infoDestination", name="infoDestination")
     */
    public function infoDestination()
    {
        return $this->json(['username' => 'amine']);
    }

    /**
     * @Route("/reservationAller", name="reservationAller")
     */
    public function reservationAller(Request $req) : Response {
        $em = $this->getDoctrine()->getManager();

        $depart_destination = new DepartDestination();
        $reservation = new Reservation();
        $trajet = new Trajet();

        $depart = $req->get('depart_aller');
        $destination = $req->get('destination_aller');
        $nb = $req->get('nb_passager_aller');
        $date_depart = new \DateTime($req->get('date_depart_aller'));
        $horraire_depart = $req->get('horaire_depart_aller');
        $adresse = $req->get('adresse_aller');
        $pdp = $req->get('pdp_aller');
        $cp = $req->get('cp_aller');
        $ville = $req->get('ville_aller');
        $pays = $req->get('pays_aller');

        $depart_destination->setDepart($depart);
        $depart_destination->setDestination($destination);
        
        $reservation->setNbPassager($nb);
        $reservation->setDateDepart($date_depart);
        $reservation->setHorraire($horraire_depart);
        $reservation->setPointDePrise($pdp);
        $reservation->setUser($this->getUser());
        $reservation->setDepartDestination($depart_destination);
        $reservation->setCodepostal($cp);
        $reservation->setVille($ville);
        $reservation->setPays($pays);
        $reservation->setAdresse($adresse);
        
        $trajet->addReservation($reservation);

        $em->persist($trajet);
        $em->persist($depart_destination);
        $em->persist($reservation);

        $em->flush();
        
        return $this->render('home/index.html.twig');

    }
    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation(Request $req) : Response{
        $em = $this->getDoctrine()->getManager();
        


        $depart = $req->get('depart');
        $destination = $req->get('destination');
        
        $nb_aller = $req->get('nb_passager_1');
        $nb_retour = $req->get('nb_passager_2');
        
        if ($nb_retour == "undefined"){
            $nb_retour = $nb_aller;
        }
        
        $date_depart = new \DateTime($req->get('date_depart'));
        $date_retour = new \DateTime($req->get('date_retour'));
        
        $horaire_depart = $req->get('horaire_depart');
        $horaire_retour = $req->get('horaire_retour');
        
        $pdp = $req->get('pdp');

        $adresse = $req->get('adresse');
        $cp = $req->get('cp');
        $ville = $req->get('ville');
        $pays = $req->get('pays');

        for ($i = 0; $i < 2; $i++){
            $depart_destination = new DepartDestination();
            $reservation = new Reservation();
            $trajet = new Trajet();

            if (!isset($tmp))
            {
                $depart_destination->setDepart($depart);
                $depart_destination->setDestination($destination);
                                
                $reservation->setNbPassager($nb_aller);
                $reservation->setDateDepart($date_depart);
                $reservation->setHorraire($horaire_depart);
                $reservation->setPointDePrise($pdp);
                $reservation->setUser($this->getUser());
                $reservation->setDepartDestination($depart_destination);
                $reservation->setCodepostal($cp);
                $reservation->setVille($ville);
                $reservation->setPays($pays);
                $reservation->setAdresse($adresse);
                
                $trajet->addReservation($reservation);
        
                $em->persist($trajet);
                $em->persist($depart_destination);
                $em->persist($reservation);
        

                $tmp = "ok";
            }
            else {
                $depart_destination->setDepart($destination);
                $depart_destination->setDestination($depart);
                
                $reservation->setNbPassager($nb_retour);
                $reservation->setDateDepart($date_retour);
                $reservation->setHorraire($horaire_retour);
                $reservation->setUser($this->getUser());
                $reservation->setDepartDestination($depart_destination);
                
                $trajet->addReservation($reservation);
        
                $em->persist($trajet);
                $em->persist($depart_destination);
                $em->persist($reservation);
        
            }

        }
        $em->flush();
        return $this->render('home/index.html.twig');
    }
}
