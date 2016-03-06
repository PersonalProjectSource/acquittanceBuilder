<?php

namespace CoreBundle\Controller;

use CoreBundle\Form\AcquittanceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CoreBundle\Entity\Acquittance;

/**
 * @Route("/acquittance", name="aquittance_contract")
 */
class DefaultController extends Controller
{
    private $contract;

    /**
     * @Route("/", name="aquittance_contract")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $acquittance = new Acquittance();
        $form = $this->createForm(new AcquittanceType(), $acquittance, array(
            'method' => 'post'
        ));

        $form->handleRequest($request);
        if ($request->isMethod('post')) {
            // --- serialization object for get by PDF generator ----
            $this->contract = $acquittance;
            $em->persist($acquittance);
            $em->flush();
            $session->set('acquittance', serialize($acquittance));
            return $this->render('CoreBundle:Default:resume.html.twig', array(
                'acquittance' => $acquittance,
                'createPdf' => false,
                'paragraphePaiement' => $this->getParameter('paragraphePaiement')
            ));
        }
        return $this->render('CoreBundle:Default:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * Genere un paquet de quittance juste pour le provisioning.
     *
     * @Route("/generate", name="gen")
     */
    public function generateAlotOfAcquittance() {

        $em    = $this->getDoctrine()->getManager();

        for($i = 0; $i <= 100; ++$i) {
            $ac = new Acquittance();
            $ac->setNomProprietaire("Laurent".$i);
            $em->persist($ac);
        }
        $em->flush();

        return new Response('finished');
    }

    /**
     * Test le bundle Knp paginator.
     *
     * @Route("/pagination", name="gen")
     */
    public function showPagination(Request $request) {

        $em    = $this->get('doctrine.orm.entity_manager');

        $res = $em->getRepository("CoreBundle:Acquittance")->getAcquittance();
        $dql   = "SELECT a FROM CoreBundle:Acquittance a";
        $query = $em->createQuery($dql);

        var_dump($res);die;
        var_dump($query);die;

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate($query, 6, 10);
        var_dump($pagination);die;

        return $this->render('AcmeMainBundle:Article:list.html.twig', array('pagination' => $pagination));
    }

    /**
     * @Route("/pdfCreateAjax", name="generatePdf_funct")
     */
    public function pdfTransformationAction(Request $req)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');
        $acquittance = new Acquittance();
        $form = $this->createForm(new AcquittanceType(), $acquittance, array(
            'method' => 'post'
        ));

        $session = $this->get('session');

        // ==== Acquittance object unserialization ====
        $data['acquittance'] = unserialize($session->get('acquittance'));
        $data['paragraphePaiement'] = $this->getParameter('paragraphePaiement');
        $data['createPdf'] = true;
        $data['form'] = $form->createView();

        $param = array(
            'enable-javascript' => true,
            'javascript-delay' => 1000,
            'no-stop-slow-scripts' => true,
            'no-background' => false,
            'lowquality' => false,
            'page-height' => 297,
            'page-width'  => 210,
            'encoding' => 'utf-8',
            'images' => true,
            'cookie' => array(),
            'dpi' => 300,
            'image-dpi' => 300,
            'enable-external-links' => true,
            'enable-internal-links' => true
        );

        $htmlView = $this->renderView('CoreBundle:Default:resume.html.twig', $data);

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($htmlView, $param),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="quittance.pdf"',

            )
        );
    }
}
