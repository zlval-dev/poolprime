<?php
    namespace App\Controller;

    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Session\Session;

    class PoolPrimeController extends Controller{
        /**
         * @Route("/", name="main")
         */
        public function main(){
            $session = new Session();
            if($session->get('language') == null){
                $session->set('language', 'pt');
            }
            return $this->redirectToRoute('index',[
                '_locale' => $session->get('language')
            ]);
        }

        /**
         * @Route("/{_locale}", name="index")
         */
        public function index(){
            $session = new Session();
            $route = $this->get('router')->getContext()->getPathInfo();
            if($route == '/pt'){
                $session->set('language', 'pt');
            }else if($route == '/en'){
                $session->set('language', 'en');
            }else{
                return $this->redirectToRoute('main');
            }
            $language = $session->get('language');
            return $this->render('index.html.twig', [
                'language' => $language
            ]);
        }

        /**
         * @Route("/portfolio/{_locale}", name="portfolio")
         */
        public function portfolio(){
            $session = new Session();
            $language = $session->get('language');
            return $this->render('portfolio.html.twig', [
                'language' => $language
            ]);
        }
    }