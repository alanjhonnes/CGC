<?php

namespace CGC\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        
        $brands = $this->getDoctrine()->getManager()->getRepository('CGCCoreBundle:Brand')->findAll();
        
        return array('content' => $this->getContentMap(), 'brands' => $brands);
    }
    
    /**
     * @Route("/categoria/{slug}", name="category_show")
     * @Template
     */
    public function categoryAction($slug)
    {
        $category = $this->getDoctrine()->getManager()->getRepository('CGCCoreBundle:Category')->findOneBySlug($slug);
        
        if(!$category){
            throw $this->createNotFoundException('Categoria não encontrada.');
        }
        else {
            return array('content' => $this->getContentMap(),'category' => $category);
        }
        
        
    }
    
    /**
     * @Route("/produto/{slug}", name="product_show")
     * @Template
     */
    public function productAction($slug)
    {
        
        $product = $this->getDoctrine()->getManager()->getRepository('CGCCoreBundle:Product')->findOneBySlug($slug);
        
        if(!$product){
            throw $this->createNotFoundException("Produto não encontrado.");
        }
        else {
            return array('content' => $this->getContentMap(), 'product' => $product);
        }
        
        
        
    }
    /**
     * @Method({"POST"})
     * @Route("/contact/", name="contact")
     * @Template
     */
    public function contactAction(Request $request){
        $message = \Swift_Message::newInstance()
        ->setSubject('Mensagem do site')
        ->setFrom('site@cgcmultipecas.com.br')
        ->setTo('alanjhonnes@hotmail.com')
        ->setCc('aj@alanjhonnes.com')
        ->setBody( "Mensagem do site: \n"
                . 'Nome: '. $request->request->get('name') . " \n"
                . 'Email: ' . $request->request->get('email') . " \n"
                . 'Telefone: ' . $request->request->get('phone') . " \n"
                . 'Empresa: ' . $request->request->get('company') . " \n"
                . "Mensagem: \n" .$request->request->get('message')
            );
        $response = '';
        if($this->get('mailer')->send($message)){
            $response = 'Mensagem enviada.';
        }
        else {
            $response = 'Erro, tente novamente.';
        }
        return array('message' => $response);
        
    }
    
    private function getContentMap(){
        $contents = $this->getDoctrine()->getManager()->getRepository('CGCCoreBundle:Content')->findAll();
        $contentsMap = array();

        foreach ($contents as $content) {
            $contentsMap[$content->getKeyName()] = $content->getContent();
        }
        return $contentsMap;
    }
}
