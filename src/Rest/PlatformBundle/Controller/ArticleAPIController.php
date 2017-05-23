<?php

namespace Rest\PlatformBundle\Controller;

use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\View;

use Rest\PlatformBundle\Entity\Article;
use Rest\PlatformBundle\Entity\Author;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleAPIController extends Controller
{
    public function indexAction()
    {
        return $this->render('RestPlatformBundle:Default:index.html.twig');
    }




    /**
     * @Get(
     *     path = "/articles/{id}",
     *     name = "article_show",
     *     requirements = {"id"="\d+"}
     * )
     * @View
     */
    public function articleShowAction(Article $article)
    {
    	return $article;
    }







     /**
  * @Rest\Post(
     *    path = "/articles",
     *    name = "app_article_create"
     * )
    * @Rest\View(StatusCode = 201)
     * @ParamConverter("article", converter="fos_rest.request_body")
     */
    public function articleCreateAction(Article $article)
    {
         $em = $this->getDoctrine()->getManager();

        $em->persist($article);
        $em->flush();

        return $article;
    }
    


  /**
     * @Rest\Get("/articles", name="article_list")
     * @Rest\View()
     */
    public function articleListAction()
    {
        $articles = $this->getDoctrine()->getRepository('RestPlatformBundle:Article')->findAll();
        
        return $articles;
    }



}
