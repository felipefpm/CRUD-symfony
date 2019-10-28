<?php

namespace App\Controller;

use App\Entity\Usuarios;
use App\Form\UsuariosType;
use App\Repository\UsuariosRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** 
 * @Route("/")
*/
class UsuariosController extends AbstractController
{
    /**
     * @Route("/", name="usuario_index", methods={"GET"})
    */
    public function index(UsuariosRepository $usuariosRepository, LoggerInterface $logger): Response
    {
        $usuarios =  $usuariosRepository->findAll();
        return $this->render('index.html.twig', [
            'usuarios' => $usuarios,
        ]);
    }

    /**
     * @Route("/selecao", name="selecao")
    */
    public function selecao()
    {
        return $this->render('selecao.html.twig');
    }

    /**
     * @Route("/pfisica", name="new-pfisica")
    */
    public function pfisica(){
        return $this->render('pfisica.html.twig');
    }

    /**
     * @Route("/pjuridica", name="new-pjuridica")
    */
    public function pjuridica(){
        return $this->render('pjuridica.html.twig');
    }

    /**
     * @Route("/savepf", name="save_pf")
    */
    public function savepf(Request $request){
        $novo_cadastro = $request->request->all();

        $cadastro = new Usuarios();
        $cadastro->setNome($novo_cadastro['nome']);
        $cadastro->setCpf($novo_cadastro['cpf']);
        $cadastro->setEmail($novo_cadastro['email']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($cadastro);
        $doctrine->flush();

        return $this->redirectToRoute('usuario_index');
    }

    /**
     * @Route("/savepj", name="save_pj")
    */
    public function savepj(Request $request){
        $novo_cadastro = $request->request->all();

        $cadastro = new Usuarios();
        $cadastro->setRSocial($novo_cadastro['r_social']);
        $cadastro->setCnpj($novo_cadastro['cnpj']);
        $cadastro->setEmail($novo_cadastro['email']);

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($cadastro);
        $doctrine->flush();

        return $this->redirectToRoute('usuario_index');
    }

   
    /**
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show(Usuarios $usuario): Response
    {
        return $this->render('show.html.twig', [
            'usuario' => $usuario,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Usuarios $usuario): Response
    {
        $form = $this->createForm(UsuariosType::class, $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuario_index');
        }

        return $this->render('edit.html.twig', [
            'usuario' => $usuario,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"DELETE"})
     */
    public function delete(Request $request, Usuarios $usuario): Response
    {
        if ($this->isCsrfTokenValid('delete'.$usuario->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($usuario);
            $entityManager->flush();
        }

        return $this->redirectToRoute('usuario_index');
    }
}
