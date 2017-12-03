<?php
/**
 * Created by PhpStorm.
 * User: Vita
 * Date: 12/3/17
 * Time: 21:36
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FormController  extends Controller
{
    /**
     * @Route("/form", name="form")
     */

    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $purchase = new Purchase();
//        $purchase->setTask('Name and Surname');
//        $purchase->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($purchase)
            ->add('createdAt', TextType::class)
            ->add('createdAt', TextType::class)
            ->add('createdAt', TextType::class)
            ->add('createdAt', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Purchase'))
            ->getForm();

        return $this->render(':Form:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
