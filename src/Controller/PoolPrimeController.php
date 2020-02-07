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
                $session->set('language', 'pt');
                return $this->redirect('pt');
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
            $route = $this->get('router')->getContext()->getPathInfo();
            if($route == '/portfolio/pt'){
                $session->set('language', 'pt');
            }else if($route == '/portfolio/en'){
                $session->set('language', 'en');
            }else{
                $session->set('language', 'pt');
                return $this->redirect('pt');
            }
            $language = $session->get('language');
            return $this->render('portfolio.html.twig', [
                'language' => $language
            ]);
        }

        /**
         * @Route("/quem-somos/{_locale}", name="quem-somos")
         */
        public function quemSomos(){
            $session = new Session();
            $route = $this->get('router')->getContext()->getPathInfo();
            if($route == '/quem-somos/pt'){
                $session->set('language', 'pt');
            }else if($route == '/quem-somos/en'){
                $session->set('language', 'en');
            }else{
                $session->set('language', 'pt');
                return $this->redirect('pt');
            }
            $language = $session->get('language');
            return $this->render('quem-somos.html.twig', [
                'language' => $language
            ]);
        }

        /**
         * @Route("/construcao/{_locale}", name="construcao")
         */
        public function contrucao(){
            $session = new Session();
            $route = $this->get('router')->getContext()->getPathInfo();
            if($route == '/construcao/pt'){
                $session->set('language', 'pt');
            }else if($route == '/construcao/en'){
                $session->set('language', 'en');
            }else{
                $session->set('language', 'pt');
                return $this->redirect('pt');
            }
            $language = $session->get('language');
            return $this->render('construcao.html.twig', [
                'language' => $language
            ]);
        }

        /**
         * @Route("/manutencao/{_locale}", name="manutencao")
         */
        public function manutencao(){
            $session = new Session();
            $route = $this->get('router')->getContext()->getPathInfo();
            if($route == '/manutencao/pt'){
                $session->set('language', 'pt');
            }else if($route == '/manutencao/en'){
                $session->set('language', 'en');
            }else{
                $session->set('language', 'pt');
                return $this->redirect('pt');
            }
            $language = $session->get('language');
            return $this->render('manutencao.html.twig', [
                'language' => $language
            ]);
        }

        /**
         * @Route("/renovacao/{_locale}", name="renovacao")
         */
        public function renovacao(){
            $session = new Session();
            $route = $this->get('router')->getContext()->getPathInfo();
            if($route == '/renovacao/pt'){
                $session->set('language', 'pt');
            }else if($route == '/renovacao/en'){
                $session->set('language', 'en');
            }else{
                $session->set('language', 'pt');
                return $this->redirect('pt');
            }
            $language = $session->get('language');
            return $this->render('renovacao.html.twig', [
                'language' => $language
            ]);
        }
    }