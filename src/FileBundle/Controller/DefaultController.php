<?php

namespace FileBundle\Controller;

use FileBundle\Form\Type\UploadFileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\{
    Request, Response
};

class DefaultController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function uploadAction(Request $request): Response
    {
        $form = $this->createForm(UploadFileType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->get('file.manager');
            dump($manager->getFileContent($form->getData()['file'])); die;
        }

        return $this->render(
            'FileBundle:Default:index.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }
}
