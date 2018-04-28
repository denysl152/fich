<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleController extends Controller {
    /**
     * @Route("/" , name="article_list")
     */
  

    public function index() {
  
        $articles= $this->getDoctrine()->getRepository(Article::class)->findAll();
        //return new Response('<html><body>hello</body></html>');
        return $this->render('Articles/index.html.twig' , array("articles" => $articles));

    }



    public function edit(Resquest $request){
        $article = new Article();

        $form= $this->createFormBuilder($article)
        ->add('title',
         TextType::class,
         array( 'attr' =>
         array('class' =>'form-control'
         )))
        ->add('body', 
        TextareaType::class, 
        array('required' => false, 
        'attr' =>array('class' =>'form-control')
        ))

        ->add('save', SubmitType::class, 
        array('label'=>'Create','attr' =>array('class' =>'btn btn-primary mt-3')))

    ->getForm();

       $form->handleResquest($Request);

       if($form ->isSubmitted() && $form ->isValid()){
         
           $entityManager = $this->getDoctrine()->getManager();

      

       $entityManager->flush();
       }

       return $this->redirectToRoute('article_list');

       return $this->render('articles/edit.html.twig', array(
           'form' => $form->createView(),
       ));


       }

    public function show($id){
        $article= $this->getDoctrine()->getRepository(Article::class)->find($id);
        return $this->render('articles/show.html.twig' , array('article'->$article));
    }
    /**
     * @Route("/article/new", name="new_article")
     * Method({"GET", "POST"})
     */

/**
 * @Route('/article/delete/${id}'}
 * @Method({"DELETE"})
 */

public function delete(Resquest $request , $id){
    $article = $this->getDoctrine()->getRespository(Article::class)->find($id);
    $entityManager = $this->getDoctrine()->getManager();
$entityManager->remove($article);
    $entityManager->flush();

    $response = new Response();
    $response->send();
}

    /*@Route("/article/{id}" , name=")
/*
    public function save(){
        $entityManager = $this->getDoctrine()->getManager();
       
        $article = new Article();
        $article->setTitle('Article One');
        $article->setBody('C est le corps de lArticle un');

        $entityManager->persist($article);

        $entityManager->flush();

        return new Response('Saves a articles with the id of' .$article->getId() );
    }*/
}